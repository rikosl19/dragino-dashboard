<!-- Page-Temperature Data start -->
<div class="card">
    <div class="card-header">
        <h5>Data Table Temperature</h5>
        <button class="btn btn-round btn-primary align-items-end" onclick=""><i class="icofont icofont-refresh"></i>Refresh</button>

    </div>

    <div class="card-block">

        <div class="dt-responsive table-responsive ">
            <table id="compact" class="table compact table-striped table-bordered nowrap">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Temperature</th>
                        <th>Date Time</th>
                        <th>Option</th>
                    </tr>
                </thead>
                <tbody style="text-align:center">

                    {{-- Data Plot Table --}}
                    @php
                        $no = 1;
                    @endphp

                    @foreach ($data as $air_temp)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $air_temp->temperature }} <span>&#8451;</span></td>
                            <td>{{ $air_temp->datetime }}</td>
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
                    <tr>
                        <th>No</th>
                        <th>Temperature</th>
                        <th>Date Time</th>
                        <th>Option</th>
                    </tr>
                </tfoot>
            </table>

        </div>
    </div>
</div>
<!-- Page-Temperature Data start -->
