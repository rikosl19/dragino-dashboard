{{-- Init Main Container --}}
<div class="pcoded-main-container">
    <div class="pcoded-wrapper">

        {{-- Sidebar Menu --}}
        <nav class="pcoded-navbar">
            <div class="pcoded-inner-navbar main-menu">
                <div class="pcoded-navigatio-lavel">Dragino Panel</div>
                <ul class="pcoded-item pcoded-left-item">
                    <li class="">
                        <a href="javascript:void(0)">
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
                                        <a href="{{ url('/dragino-device/air-temperature') }}">
                                            <span class="pcoded-mtext">Air Temperature</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="{{ url('/dragino-device/air-humidity') }}">
                                            <span class="pcoded-mtext">Air Humidity</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="{{ url('/dragino-device/soil-temperature') }}">
                                            <span class="pcoded-mtext">Soil Temperature</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="{{ url('/dragino-device/soil-moisture') }}">
                                            <span class="pcoded-mtext">Soil Moisture</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="{{ url('/dragino-device/light-intensity') }}">
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
                                        <a href="{{ url('/dragino-device/air-temperature') }}">
                                            <span class="pcoded-mtext">Air Temperature</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="#">
                                            <span class="pcoded-mtext">Air Humidity</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="#">
                                            <span class="pcoded-mtext">Soil Temperature</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="#">
                                            <span class="pcoded-mtext">Soil Moisture</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="#">
                                            <span class="pcoded-mtext">Light Intensity</span>
                                        </a>
                                    </li>

                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="pcoded-hasmenu">
                        <a href="javascript:void(0)">
                            <span class="pcoded-micon"><i class="feather icon-settings"></i></span>
                            <span class="pcoded-mtext">Settings</span>
                        </a>
                        <ul class="pcoded-submenu">
                            <li class="">
                                <a href="javascript:void(0)">
                                    <i class="feather icon-log-out"></i>
                                    <span>
                                        &NonBreakingSpace;
                                        &NonBreakingSpace;
                                        Log Out
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
