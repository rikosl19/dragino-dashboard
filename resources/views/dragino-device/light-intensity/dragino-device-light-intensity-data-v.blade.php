<!-- Page-Temperature Data start -->
<div class="card">
    <div class="card-header">
        <h5>Data Table Light Intensity {{ collect(request()->segments())->last() }}</h5>
    </div>

    <div class="card-block">
        <div class="dt-responsive table-responsive ">

            <table id="compact" class="table compact table-striped table-bordered nowrap">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Device</th>
                        <th>Lumens</th>
                        <th>Datetime</th>
                        {{-- <th>Option</th> --}}
                    </tr>
                </thead>
                <tbody style="text-align:center">

                    {{-- Data Plot Table --}}
                    @php
                        $no = 1;
                    @endphp

                    @foreach ($data as $lumens)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>
                                @php
                                    if ($lumens->device == 'BAU') {
                                        echo 'LSNv50-BAU';
                                    }else {
                                        echo 'LSNv50-LC';
                                    }
                                @endphp
                            </td>
                            <td>{{ $lumens->lumen }} <span>Lux</span></td>
                            <td>{{ $lumens->datetime }}</td>
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
                        <th>Lumens</th>
                        <th>Datetime</th>
                        {{-- <th>Option</th> --}}
                    </tr>
                </tfoot>
            </table>

        </div>
    </div>
</div>
<!-- Page-Temperature Data start -->
