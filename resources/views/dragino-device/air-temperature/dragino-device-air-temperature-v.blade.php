{{-- Import Frame --}}
@extends('layouts.apps')

{{-- Content --}}
@section('content')
    <div class="main-body">
        <div class="page-wrapper">

            <div class="page-header">
                <div class="row align-items-end">
                    <div class="col-lg-6">
                        <div class="page-header-title">
                            <div class="d-inline">
                                <h4>Air Temperature</h4>
                                <span>Data Visualization & Monitoring</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="page-header-breadcrumb">
                            <ul class="breadcrumb-title">
                                <li class="breadcrumb-item">
                                    <a href="index-1.htm">
                                        <i class="feather icon-home"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="#!">Dragino Device</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="#!">LSNv50 v2</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="#!">Temperature</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="page-body">
                <div class="row">
                    <div class="col-sm-12">
                        @include('dragino-device.air-temperature.dragino-device-air-temperature-visual-v')
                        @include('dragino-device.air-temperature.dragino-device-air-temperature-data-v')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

{{-- Import Script Graph amChart --}}
@include('layouts.script')
