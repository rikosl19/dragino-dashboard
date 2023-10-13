<!-- Page-Temperature Data start -->
<div class="card">
    <div class="card-header">
        <h5>Data Table Temperature</h5>
    </div>

    <div class="card-block">
        <div class="dt-responsive table-responsive ">

            <table id="compact" class="table compact table-striped table-bordered nowrap">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Temperature</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Option</th>
                    </tr>
                </thead>
                <tbody style="text-align:center">
                    @php
                        $no = 1;
                    @endphp

                    @foreach ($data as $air_temp)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $air_temp->temperature }} <span>&#8451;</span></td>
                            <td>{{ $air_temp->date }}</td>
                            <td>{{ $air_temp->time }}</td>
                            <td>
                                <button class="btn btn-round btn-outline-warning"><i
                                        class="icofont icofont-ui-edit"></i>Edit</button>
                                <button class="btn btn-round btn-outline-danger"><i
                                        class="icofont icofont-ui-delete"></i>Delete</button>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
                <tfoot>
                    <th>No</th>
                    <th>Temperature</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Option</th>
                    </tr>
                </tfoot>
            </table>

        </div>
    </div>
</div>
<!-- Page-Temperature Data start -->
