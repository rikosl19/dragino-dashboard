<!-- Page-Temperature Graphics start -->
<div class="card">
    <div class="card-header">
        <h5>Graphics Temperature</h5>
    </div>

    <div class="card-block">
        <div id="chartdiv"></div>
    </div>
</div>
<!-- Page-Temperature Graphics start -->

<!-- Styles -->
<style>
    #chartdiv {
        width: 100%;
        height: 400px;
    }
</style>

<!-- Chart code -->
<script>
    am5.ready(function() {

        // Create root element
        // https://www.amcharts.com/docs/v5/getting-started/#Root_element
        var root = am5.Root.new("chartdiv");


        // Set themes
        // https://www.amcharts.com/docs/v5/concepts/themes/
        root.setThemes([
            am5themes_Animated.new(root)
        ]);


        // Create chart
        // https://www.amcharts.com/docs/v5/charts/xy-chart/
        var chart = root.container.children.push(am5xy.XYChart.new(root, {
            focusable: true,
            panX: true,
            panY: true,
            wheelX: "panX",
            wheelY: "zoomX"
        }));

        var easing = am5.ease.linear;


        // Create axes
        // https://www.amcharts.com/docs/v5/charts/xy-chart/axes/
        var xAxis = chart.xAxes.push(am5xy.DateAxis.new(root, {
            maxDeviation: 0.5,
            extraMin: -0.1,
            extraMax: 0.1,
            groupData: false,
            baseInterval: {
                timeUnit: "minute",
                count: 1
            },
            renderer: am5xy.AxisRendererX.new(root, {
                minGridDistance: 70
            }),
            tooltip: am5.Tooltip.new(root, {})
        }));

        var yAxis = chart.yAxes.push(am5xy.ValueAxis.new(root, {
            renderer: am5xy.AxisRendererY.new(root, {})
        }));


        // Add series
        // https://www.amcharts.com/docs/v5/charts/xy-chart/series/
        var series = chart.series.push(am5xy.LineSeries.new(root, {
            minBulletDistance: 10,
            name: "Series 1",
            xAxis: xAxis,
            yAxis: yAxis,
            valueYField: "value",
            valueXField: "date",
            tooltip: am5.Tooltip.new(root, {
                pointerOrientation: "horizontal",
                labelText: "{valueY}"
            })
        }));

        // Load data using ajax
        function LiveData() {
            $.ajax({
                url: "/dragino-sensor/air-temperature/get",
                method: "GET",
                success: function(data) {

                    console.log(data.data.length);
                    console.log(data.data[0]['datetime']);


                    var timestamp = "2023-10-12T17:14:06.000000";
                    // var gmtDate = utcToGmt(timestamp);
                    var cuk = new Date(1697788741000);
                    // console.log(gmtDate);
                    let dateWithoutZ = new Date(timestamp.substring(0, timestamp.length - 1));

                    console.log(dateWithoutZ);
                    console.log(cuk);



                    // Generate random data
                    // var value = 0;

                    function generateChartData() {

                        var chartData = [];
                        var firstDate = new Date();
                        // firstDate.setDate(firstDate.getDate() - 1000);
                        //firstDate.setHours(0, 0, 0, 0);

                        for (var i = 0; i < data.data.length; i++) {
                            var newDate = new Date(
                                data.data[i]['datetime'].substring(0, data.data[i]['datetime']
                                    .length - 1)
                            );
                            newDate.setDate(newDate.getDate());
                            var newTime = newDate.getTime();

                            chartData.push({
                                date: newTime,
                                // value: value
                                value: data.data[i]['value']
                            });
                        }
                        return chartData;
                    }

                    var datax = generateChartData();
                    console.log(data.data.length);
                    console.log(datax[0].date);
                    console.log(datax);
                    // console.log(data.data.value[1]);
                    datax[datax.length - 1].bullet = true;
                    series.data.setAll(datax);


                    // function addData() {
                    //     var lastDataItem = series.dataItems[series.dataItems.length - 1];
                    //     var lastValue = lastDataItem.get("valueY");

                    //     var newValue = 0;
                    //     for (var i = 0; i < data.data.length; i++) {
                    //         newValue = data.data[i]['value'];
                    //     }

                    //     var lastDate = new Date(lastDataItem.get("valueX"));
                    //     var time = am5.time.add(new Date(lastDate), "minute", 1).getTime();

                    //     series.data.removeIndex(0);
                    //     series.data.push({
                    //         date: time,
                    //         value: newValue
                    //     })

                    //     var newDataItem = series.dataItems[series.dataItems.length - 1];
                    //     newDataItem.animate({
                    //         key: "valueYWorking",
                    //         to: newValue,
                    //         from: lastValue,
                    //         duration: 600,
                    //         easing: easing
                    //     });

                    //     var animation = newDataItem.animate({
                    //         key: "locationX",
                    //         to: 0.5,
                    //         from: -0.5,
                    //         duration: 600
                    //     });

                    //     if (animation) {
                    //         var tooltip = xAxis.get("tooltip");
                    //         if (tooltip && !tooltip.isHidden()) {
                    //             animation.events.on("stopped", function() {
                    //                 xAxis.updateTooltip();
                    //             })
                    //         }
                    //     }
                    // }



                    // // Load data using ajax
                    // $.ajax({
                    //     url: "http://127.0.0.1:8000/dragino-sensor/air-temperature/get",
                    //     method: "GET",
                    //     success: function(data) {
                    //         var series = chart.series.push(am5xy.LineSeries.new(root, {
                    //             name: "Series",
                    //             xAxis: xAxis,
                    //             yAxis: yAxis,
                    //             valueYField: "value",
                    //             valueXField: "date",
                    //             tooltip: am5.Tooltip.new(root, {
                    //                 pointerOrientation: "vertical",
                    //                 labelText: "{valueY}"
                    //             })
                    //         }));

                    //         // Add data to the series
                    //         series.data.setAll(data);
                    //     }
                    // });


                    series.bullets.push(function(root, series, dataItem) {

                        if (dataItem.dataContext.bullet) {
                            var container = am5.Container.new(root, {});
                            var circle0 = container.children.push(am5.Circle.new(root, {
                                radius: 5,
                                fill: am5.color(0xff0000)
                            }));
                            var circle1 = container.children.push(am5.Circle.new(root, {
                                radius: 5,
                                fill: am5.color(0xff0000)
                            }));

                            circle1.animate({
                                key: "radius",
                                to: 20,
                                duration: 1000,
                                easing: am5.ease.out(am5.ease.cubic),
                                loops: Infinity
                            });
                            circle1.animate({
                                key: "opacity",
                                to: 0,
                                from: 1,
                                duration: 1000,
                                easing: am5.ease.out(am5.ease.cubic),
                                loops: Infinity
                            });

                            return am5.Bullet.new(root, {
                                locationX: undefined,
                                sprite: am5.Circle.new(root, {
                                    radius: 4,
                                    fill: series.get("fill")
                                })
                            })
                        }
                    });

                    // Add cursor
                    // https://www.amcharts.com/docs/v5/charts/xy-chart/cursor/
                    var cursor = chart.set("cursor", am5xy.XYCursor.new(root, {
                        xAxis: xAxis
                    }));
                    cursor.lineY.set("visible", false);

                    // Make stuff animate on load
                    // https://www.amcharts.com/docs/v5/concepts/animations/
                    chart.appear(1000, 100);

                }
            });
        }

        setInterval(() => {
            LiveData();
        }, 1000*60*3);

    }); // end am5.ready()
</script>
