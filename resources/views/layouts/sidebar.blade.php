{{-- Init Main Container --}}
<div class="pcoded-main-container">
    <div class="pcoded-wrapper">

        {{-- Sidebar Menu --}}
        <nav class="pcoded-navbar">
            <div class="pcoded-inner-navbar main-menu">
                <div class="pcoded-navigatio-lavel">Dragino Panel</div>
                <ul class="pcoded-item pcoded-left-item">
                    <li class="">
                        <a href="{{ url('/dashboard') }}">
                            <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                            <span class="pcoded-mtext">Dashboard</span>
                        </a>
                    </li>
                    <li class="pcoded-hasmenu">
                        <a href="javascript:void(0)">
                            <span class="pcoded-micon"><i class="feather icon-cpu"></i></span>
                            <span class="pcoded-mtext">Dragino Device</span>
                        </a>
                        <ul class="pcoded-submenu">
                            <li class=" pcoded-hasmenu">
                                <a href="javascript:void(0)">
                                    <i class="feather icon-box"></i>
                                    <span>
                                        &NonBreakingSpace;
                                        &NonBreakingSpace;
                                        LSN50 v2 (BAU)
                                    </span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class="">
                                        <a href="{{ url('/dragino-device/air-temperature/BAU') }}">
                                            <span class="pcoded-mtext">Air Temperature</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="{{ url('/dragino-device/air-humidity/BAU') }}">
                                            <span class="pcoded-mtext">Air Humidity</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="{{ url('/dragino-device/soil-temperature/BAU') }}">
                                            <span class="pcoded-mtext">Soil Temperature</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="{{ url('/dragino-device/soil-moisture/BAU') }}">
                                            <span class="pcoded-mtext">Soil Moisture</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="{{ url('/dragino-device/light-intensity/BAU') }}">
                                            <span class="pcoded-mtext">Light Intensity</span>
                                        </a>
                                    </li>

                                </ul>
                            </li>
                        </ul>
                        <ul class="pcoded-submenu">
                            <li class=" pcoded-hasmenu">
                                <a href="javascript:void(0)">
                                    <i class="feather icon-box"></i>
                                    <span>
                                        &NonBreakingSpace;
                                        &NonBreakingSpace;
                                        LSN50 v2 (LC)
                                    </span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class="">
                                        <a href="{{ url('/dragino-device/air-temperature/LC') }}">
                                            <span class="pcoded-mtext">Air Temperature</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="{{ url('/dragino-device/air-humidity/LC') }}">
                                            <span class="pcoded-mtext">Air Humidity</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="{{ url('/dragino-device/soil-temperature/LC') }}">
                                            <span class="pcoded-mtext">Soil Temperature</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="{{ url('/dragino-device/soil-moisture/LC') }}">
                                            <span class="pcoded-mtext">Soil Moisture</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="{{ url('/dragino-device/light-intensity/LC') }}">
                                            <span class="pcoded-mtext">Light Intensity</span>
                                        </a>
                                    </li>

                                </ul>
                            </li>
                        </ul>
                    </li>
                    {{-- <li class="pcoded-hasmenu">
                        <a href="javascript:void(0)">
                            <span class="pcoded-micon"><i class="feather icon-settings"></i></span>
                            <span class="pcoded-mtext">Settings</span>
                        </a>
                        <ul class="pcoded-submenu">
                            <li class="">

                                <a href="">
                                    <i class="feather icon-log-out"></i>
                                    <span>
                                        &NonBreakingSpace;
                                        &NonBreakingSpace;
                                        {{  }}
                                    </span>
                                </a>

                            </li>
                        </ul>
                    </li> --}}
                </ul>
            </div>
        </nav>
