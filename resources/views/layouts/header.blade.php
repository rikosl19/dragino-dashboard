<!DOCTYPE html>
<html lang="en">
{{-- Header --}}
<head>
    <title>Dragino - IoT Panel Dashboard</title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="#" />
    <meta name="keywords" content="flat ui, admin Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app" />
    <meta name="author" content="#" />
    <!-- Favicon icon -->
    <link rel="icon" href="{{ asset('files/assets/images/dragino-logo-image.png') }}" type="image/x-icon" />
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet" />
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{ asset('files/bower_components/bootstrap/css/bootstrap.min.css') }}" />
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('files/assets/icon/themify-icons/themify-icons.css') }}" />
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="{{ asset('files/assets/icon/icofont/css/icofont.css') }}" />
    <!-- feather Awesome -->
    <link rel="stylesheet" type="text/css" href="{{ asset('files/assets/icon/feather/css/feather.css') }}" />
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('files/assets/css/style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('files/assets/css/jquery.mCustomScrollbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('files/assets/scss/partials/menu/_pcmenu.htm') }}" />
    <!-- Data Table Css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('files\bower_components\datatables.net-bs4\css\dataTables.bootstrap4.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('files\assets\pages\data-table\css\buttons.dataTables.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('files\bower_components\datatables.net-responsive-bs4\css\responsive.bootstrap4.min.css') }}" />
</head>
{{-- Header --}}

{{-- Body --}}
<body>

<!-- Pre-loader start -->
<div class="theme-loader"> 
    <div class="ball-scale">
        <div class="contain">
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
        </div>
    </div>
</div>
<!-- Pre-loader end -->

{{-- Init Main Body  --}}
<div id="pcoded" class="pcoded">
    <div class="pcoded-overlay-box"></div>
    <div class="pcoded-container navbar-wrapper">
        
        {{-- Top Nav Bar --}}
        <nav class="navbar header-navbar pcoded-header">
            <div class="navbar-wrapper">
                <div class="navbar-logo">
                    <a class="mobile-menu" id="mobile-collapse" href="#!">
                        <i class="feather icon-menu"></i></a>
                    <a href="#">
                        <img class="img-fluid"
                            src="{{ asset('files/assets/images/dragino-logo-text-scale-fix-light.png') }}"alt="Theme-Logo" /></a>
                    <a class="mobile-options">
                        <i class="feather icon-more-horizontal"></i></a>
                </div>

                <div class="navbar-container container-fluid">
                    <ul class="nav-left">
                        <li class="header-search">
                            <div class="main-search morphsearch-search">
                                <div class="input-group">
                                    <span class="input-group-addon search-close">
                                        <i class="feather icon-x"></i></span>
                                    <input type="text" class="form-control" />
                                    <span class="input-group-addon search-btn">
                                        <i class="feather icon-search"></i></span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#!" onclick="javascript:toggleFullScreen()">
                                <i class="feather icon-maximize full-screen"></i>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav-right">
                        <li class="header-notification">
                            <div class="dropdown-primary dropdown">
                                <div class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="feather icon-bell"></i>
                                    <span class="badge bg-c-pink">5</span>
                                </div>
                                <ul class="show-notification notification-view dropdown-menu"
                                    data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                    <li>
                                        <h6>Notifications</h6>
                                        <label class="label label-danger">New</label>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <img class="d-flex align-self-center img-radius"
                                                src="..\files\assets\images\avatar-4.jpg"
                                                alt="Generic placeholder image" />
                                            <div class="media-body">
                                                <h5 class="notification-user">
                                                    John Doe
                                                </h5>
                                                <p class="notification-msg">
                                                    Lorem ipsum dolor
                                                    sit amet,
                                                    consectetuer elit.
                                                </p>
                                                <span class="notification-time">30 minutes
                                                    ago</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <img class="d-flex align-self-center img-radius"
                                                src="..\files\assets\images\avatar-3.jpg"
                                                alt="Generic placeholder image" />
                                            <div class="media-body">
                                                <h5 class="notification-user">
                                                    Joseph William
                                                </h5>
                                                <p class="notification-msg">
                                                    Lorem ipsum dolor
                                                    sit amet,
                                                    consectetuer elit.
                                                </p>
                                                <span class="notification-time">30 minutes
                                                    ago</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <img class="d-flex align-self-center img-radius"
                                                src="..\files\assets\images\avatar-4.jpg"
                                                alt="Generic placeholder image" />
                                            <div class="media-body">
                                                <h5 class="notification-user">
                                                    Sara Soudein
                                                </h5>
                                                <p class="notification-msg">
                                                    Lorem ipsum dolor
                                                    sit amet,
                                                    consectetuer elit.
                                                </p>
                                                <span class="notification-time">30 minutes
                                                    ago</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="user-profile header-notification">
                            <div class="dropdown-primary dropdown">
                                <div class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="{{ asset('files/assets/images/avatar-4.jpg') }}" class="img-radius"
                                        alt="User-Profile-Image" />
                                    <span>Kizu</span>
                                    <i class="feather icon-chevron-down"></i>
                                </div>
                                <ul class="show-notification profile-notification dropdown-menu"
                                    data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                    <li class="">
                                        <a href="#">
                                            <i class="feather icon-log-out"></i>
                                            Logout
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        {{-- Top Nav Bar --}}