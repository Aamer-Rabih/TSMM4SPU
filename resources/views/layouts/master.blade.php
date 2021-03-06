<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Docmed</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('2/img/favicon.png') }}">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/style.css"> -->
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('2/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('2/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('2/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('2/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('2/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('2/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('2/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('2/css/gijgo.css') }}">
    <link rel="stylesheet" href="{{ asset('2/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('2/css/slicknav.css') }}">
    <link rel="stylesheet" href="{{ asset('2/css/style.css') }}">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->

</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    @include('layouts.partials.header')
    <!-- header-end -->

    @yield('content')
    
    <!-- footer start -->
        @include('layouts.partials.footer')
    <!-- footer end  -->
    <!-- link that opens popup -->

    <!-- form itself end-->
    <form id="test-form" class="white-popup-block mfp-hide">
        <div class="popup_box ">
            <div class="popup_inner">
                <h3>Make an Appointment</h3>
                <form action="#">
                    <div class="row">
                        <div class="col-xl-6">
                            <input id="datepicker" placeholder="Pick date">
                        </div>
                        <div class="col-xl-6">
                            <input id="datepicker2" placeholder="Suitable time">
                        </div>
                        <div class="col-xl-6">
                            <select class="form-select wide" id="default-select" class="">
                                <option data-display="Select Department">Department</option>
                                <option value="1">Eye Care</option>
                                <option value="2">Physical Therapy</option>
                                <option value="3">Dental Care</option>
                            </select>
                        </div>
                        <div class="col-xl-6">
                            <select class="form-select wide" id="default-select" class="">
                                <option data-display="Doctors">Doctors</option>
                                <option value="1">Mirazul Alom</option>
                                <option value="2">Monzul Alom</option>
                                <option value="3">Azizul Isalm</option>
                            </select>
                        </div>
                        <div class="col-xl-6">
                            <input type="text"  placeholder="Name">
                        </div>
                        <div class="col-xl-6">
                            <input type="text"  placeholder="Phone no.">
                        </div>
                        <div class="col-xl-12">
                            <input type="email"  placeholder="Email">
                        </div>
                        <div class="col-xl-12">
                            <button type="submit" class="boxed-btn3">Confirm</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </form>
    <!-- form itself end -->

    <!-- JS here 
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/gijgo.min.js"></script> -->
    <!--contact js
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>

    <script src="js/main.js"></script> -->


    <!-- JS here -->
    <script src="{{ asset('2/js/vendor/modernizr-3.5.0.min.js') }}"></script>
    <script src="{{ asset('2/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('2/js/popper.min.js') }}"></script>
    <script src="{{ asset('2/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('2/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('2/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('2/js/ajax-form.js') }}"></script>
    <script src="{{ asset('2/jjs/waypoints.min.js') }}"></script>
    <script src="{{ asset('2/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('2/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('2/js/scrollIt.js') }}"></script>
    <script src="{{ asset('2/js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ asset('2/js/wow.min.js') }}"></script>
    <script src="{{ asset('2/js/nice-select.min.js') }}"></script>
    <script src="{{ asset('2/js/jquery.slicknav.min.js') }}"></script>
    <script src="{{ asset('2/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('2/js/plugins.js') }}"></script>
    <script src="{{ asset('2/js/gijgo.min.js') }}"></script>
    <!--contact js-->
    <script src="{{ asset('2/js/contact.js') }}"></script>
    <script src="{{ asset('2/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('2/js/jquery.form.js') }}"></script>
    <script src="{{ asset('2/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('2/js/mail-script.js') }}"></script>

    <script src="{{ asset('2/js/main.js') }}"></script>


    <script>
        $('#datepicker').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
                rightIcon: '<span class="fa fa-caret-down"></span>'
            }
        });
        $('#datepicker2').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
                rightIcon: '<span class="fa fa-caret-down"></span>'
            }

        });
    $(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});
    </script>
</body>

</html>