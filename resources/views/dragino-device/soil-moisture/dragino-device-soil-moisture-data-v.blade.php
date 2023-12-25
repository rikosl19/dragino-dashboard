<!-- Page-Temperature Data start -->
<div class="card">
    <div class="card-header">
        <h5>Data Table Temperature {{ collect(request()->segments())->last() }}</h5>
    </div>

    <div class="card-block">
        <div class="dt-responsive table-responsive ">

            <table id="compact" class="table compact table-striped table-bordered nowrap">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Device</th>
                        <th>Moisture</th>
                        <th>Date Time</th>
                        {{-- <th>Option</th> --}}
                    </tr>
                </thead>
                <tbody style="text-align:center">

                    {{-- Data Plot Table --}}
                    @php
                        $no = 1;
                    @endphp

                    @foreach ($data as $soil_moist)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>
                                @php
                                    if ($soil_moist->device == 'BAU') {
                                        echo 'LSNv50-BAU';
                                    }else {
                                        echo 'LSNv50-LC';
                                    }
                                @endphp
                            </td>
                            <td>{{ $soil_moist->soil_moisture }} <span>&#x25;</span></td>
                            <td>{{ $soil_moist->datetime }}</td>
                            {{-- <td>
                                <button class="btn btn-round btn-outline-warning"><i
                                        class="icofont icofont-ui-edit"></i>Edit</button>
                                <button class="btn btn-round btn-outline-danger"><i
                                        class="icofont icofont-ui-delete"></i>Delete</button>
                            </td> --}}
                        </tr>
                    @endforeach

                </tbody>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Device</th>
                        <th>Moisture</th>
                        <th>Date Time</th>
                        {{-- <th>Option</th> --}}
                    </tr>
                </tfoot>
            </table>

        </div>
    </div>
</div>
<!-- Page-Temperature Data start -->
