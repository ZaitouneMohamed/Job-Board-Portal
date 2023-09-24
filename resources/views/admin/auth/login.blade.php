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
    <link rel="icon" href="images/fevicon.png" type="image/png" />
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{ asset('admin-assets/css/bootstrap.min.css') }}" />
    <!-- site css -->
    <link rel="stylesheet" href="{{ asset('admin-assets/css/style.css') }}" />
    <!-- responsive css -->
    <link rel="stylesheet" href="{{ asset('admin-assets/css/responsive.css') }}" />
    <!-- color css -->
    {{-- <link rel="stylesheet" href="{{ asset('admin-assets/css/colors.css') }}" /> --}}
    <!-- select bootstrap -->
    <link rel="stylesheet" href="{{ asset('admin-assets/css/bootstrap-select.css') }}" />
    <!-- scrollbar css -->
    <link rel="stylesheet" href="{{ asset('admin-assets/css/perfect-scrollbar.css') }}" />
    <!-- custom css -->
    <link rel="stylesheet" href="{{ asset('admin-assets/css/custom.css') }}" />
    <!-- calendar file css -->
    <link rel="stylesheet" href="{{ asset('admin-assets/js/semantic.min.css') }}" />
</head>

<body class="inner_page login">
    <div class="full_container">
        <div class="container">
            <div class="center verticle_center full_height">
                <div class="login_section">
                    <div class="logo_login">
                        <div class="center">
                            <img width="210" src="{{ asset('admin-assets/images/logo/logo.png') }}" alt="#" />
                        </div>
                    </div>
                    <div class="login_form">
                        <form method="POST" action="{{route('auth.login')}}">
                            @csrf   
                            <fieldset>
                                <div class="field">
                                    <label class="label_field">Email Address</label>
                                    <input type="email" name="email" placeholder="E-mail" />
                                </div>
                                <div class="field">
                                    <label class="label_field">Password</label>
                                    <input type="password" name="password" placeholder="Password" />
                                </div>
                                <div class="field margin_0">
                                    <label class="label_field hidden">hidden label</label>
                                    <button class="main_bt">Sing In</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery -->
    <script src="{{ asset('admin-assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('admin-assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('admin-assets/js/bootstrap.min.js') }}"></script>
    <!-- wow animation -->
    <script src="{{ asset('admin-assets/js/animate.js') }}"></script>
    <!-- select country -->
    <script src="{{ asset('admin-assets/js/bootstrap-select.js') }}"></script>
    <!-- nice scrollbar -->
    <script src="{{ asset('admin-assets/js/perfect-scrollbar.min.js') }}"></script>
    <script>
        var ps = new PerfectScrollbar('#sidebar');
    </script>
    <!-- custom js -->
    <script src="{{ asset('admin-assets/js/custom.js') }}"></script>
</body>

</html>