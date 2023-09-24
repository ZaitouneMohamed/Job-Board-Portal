<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Pluto - Responsive Bootstrap Admin Panel Templates</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- site icon -->
    <link rel="icon" href="{{ asset('admin-assets/images/fevicon.png') }} " type="image/png" />
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{ asset('admin-assets/css/bootstrap.min.css') }}" />
    <!-- site css -->
    <link rel="stylesheet" href="{{ asset('admin-assets/css/style.css') }}" />
    <!-- responsive css -->
    <link rel="stylesheet" href="{{ asset('admin-assets/css/responsive.css') }}" />
    <!-- color css -->
    <link rel="stylesheet" href="{{ asset('admin-assets/css/colors.css') }}" />
    <!-- select bootstrap -->
    <link rel="stylesheet" href="{{ asset('admin-assets/css/bootstrap-select.css') }}" />
    <!-- scrollbar css -->
    <link rel="stylesheet" href="{{ asset('admin-assets/css/perfect-scrollbar.css') }}" />
    <!-- custom css -->
    <link rel="stylesheet" href="{{ asset('admin-assets/css/custom.css') }}" />
    <!-- calendar file css -->
    <link rel="stylesheet" href="{{ asset('admin-assets/js/semantic.min.css') }}" />
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
</head>

<body class="inner_page price_table">
    <div class="full_container">
        <div class="inner_container">
            <!-- Sidebar  -->
            <nav id="sidebar">
                <div class="sidebar_blog_1">
                    <div class="sidebar-header">
                        <div class="logo_section">
                            <a href="index.html"><img class="logo_icon img-responsive"
                                    src="{{ asset('admin-assets/images/logo/logo_icon.png') }}" alt="#" /></a>
                        </div>
                    </div>
                    <div class="sidebar_user_info">
                        <div class="icon_setting"></div>
                        <div class="user_profle_side">
                            <div class="user_img"><img class="img-responsive"
                                    src="{{ asset('admin-assets/images/layout_img/user_img.jpg') }} " alt="#" />
                            </div>
                            <div class="user_info">
                                <h6>{{ Auth::user()->username }}</h6>
                                <p><span class="online_animation"></span> Online</p>
                            </div>
                        </div>
                    </div>
                </div>
                @include('admin.layouts.navbar')
            </nav>
            <!-- end sidebar -->
            <!-- right content -->
            <div id="content">
                @include('admin.layouts.top-bar')

                @yield('content')
            </div>
        </div>
    </div>
    <!-- jQuery -->
    @yield('scripts')
    <script src="{{ asset('admin-assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('admin-assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('admin-assets/js/bootstrap.min.js') }}"></script>
    <!-- wow animation -->
    <script src="{{ asset('admin-assets/js/animate.js') }}"></script>
    <!-- select country -->
    <script src="{{ asset('admin-assets/js/bootstrap-select.js') }}"></script>
    <!-- owl carousel -->
    <script src="{{ asset('admin-assets/js/owl.carousel.js') }}"></script>
    <!-- chart js -->
    <script src="{{ asset('admin-assets/js/Chart.min.js') }}"></script>
    <script src="{{ asset('admin-assets/js/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('admin-assets/js/utils.js') }}"></script>
    <script src="{{ asset('admin-assets/js/analyser.js') }}"></script>
    <!-- nice scrollbar -->
    <script src="{{ asset('admin-assets/js/perfect-scrollbar.min.js') }}"></script>
    <script>
        var ps = new PerfectScrollbar('#sidebar');
    </script>
    <!-- custom js -->
    <script src="{{ asset('admin-assets/js/custom.js') }}"></script>
    <!-- calendar file css -->
    <script src="{{ asset('admin-assets/js/semantic.min.js') }}"></script>
    <script></script>
</body>

</html>
