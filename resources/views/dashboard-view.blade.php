@extends('layouts.apps')
@section('content')

<div class="main-body">
    <div class="page-wrapper">
        
        <!-- Page-header start -->
        <div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <div class="d-inline">
                            <h4>Sample Page</h4>
                            <span>lorem ipsum
                                dolor sit amet,
                                consectetur
                                adipisicing
                                elit</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="page-header-breadcrumb">
                        <ul class="breadcrumb-title">
                            <li class="breadcrumb-item">
                                <a href="index-1.htm">
                                    <i class="feather icon-home"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#!">Widget</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page-header end -->

        <div class="page-body">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>Hello Card</h5>
                            <span>lorem ipsum
                                dolor sit amet,
                                consectetur
                                adipisicing
                                elit</span>
                            <div class="card-header-right">
                                <ul class="list-unstyled card-option">
                                    <li>
                                        <i class="feather icon-maximize full-card"></i>
                                    </li>
                                    <li>
                                        <i class="feather icon-minus minimize-card"></i>
                                    </li>
                                    <li>
                                        <i class="feather icon-trash-2 close-card"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-block">
                            <p>
                                "Lorem ipsum
                                dolor sit amet,
                                consectetur
                                adipiscing elit,
                                sed do eiusmod
                                tempor
                                incididunt ut
                                labore et dolore
                                magna aliqua. Ut
                                enim ad minim
                                veniam, quis
                                nostrud
                                exercitation
                                ullamco laboris
                                nisi ut aliquip
                                ex ea commodo
                                consequat. Duis
                                aute irure dolor
                                in reprehenderit
                                in voluptate
                                velit esse
                                cillum dolore eu
                                fugiat nulla
                                pariatur.
                                Excepteur sint
                                occaecat
                                cupidatat non
                                proident, sunt
                                in culpa qui
                                officia deserunt
                                mollit anim id
                                est laborum."
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection