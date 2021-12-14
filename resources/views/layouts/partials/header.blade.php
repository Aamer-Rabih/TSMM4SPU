<!-- header-start -->
<header>
        <div class="header-area ">
            <div class="header-top_area">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-md-6 ">
                            <div class="social_media_links">
                                <a href="#">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-google-plus"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-6">
                            <div class="short_contact_list">
                                <ul>
                                    <li><a href="#"> <i class="fa fa-envelope"></i> info@docmed.com</a></li>
                                    <li><a href="#"> <i class="fa fa-phone"></i> 160160</a></li>
                                    <li>
                                        <form id="logout" action="{{ route('logout') }}" method="POST">
                                            @csrf
                                            @method('POST')
                                            <a href="#" onclick="document.getElementById('logout').submit()"><i class="fa fa-sign-out"></i> logout</a>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky-header" class="main-header-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-2">
                            <div class="logo">
                                <a href="index.html">
                                    <img src="{{ asset('2/img/logo.png') }}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-9">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a class="active" href="{{ route('home') }}">home</a></li>
                                        <li><a href="{{ route('problems') }}">Problems</a></li>
                                        <li><a href="#">Schedule <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="{{ route('attendanceSchedule') }}">Attendance Schedule</a></li>
                                                <li><a href="{{ route('examSchedule') }}">Exam Schedule</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Buses <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="{{ route('transportLines') }}">Transport Lines</a></li>
                                                <li><a href="{{ route('dailyLines') }}">Daily Lines</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ route('tsmmStudentsData') }}">TSMM Students Data</a></li>
                                        <li><a href="{{ route('remoteMonitoring') }}">Remote Monitoring</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-1 col-lg-1 d-none d-lg-block">
                            <div class="Appointment">
                                <div class="book_btn d-none d-lg-block">
                                    <a class="popup-with-form" href="#test-form">Join</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->