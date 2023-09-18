<!doctype html>
<html lang="zxx">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('job-assets/assets/css/bootstrap.min.css') }} ">
        <!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="{{ asset('job-assets/assets/css/owl.carousel.min.css') }}">
        <!-- Owl Carousel Theme Default CSS -->
        <link rel="stylesheet" href="{{ asset('job-assets/assets/css/owl.theme.default.min.css') }}">
        <!-- Box Icon CSS-->
        <link rel="stylesheet" href="{{ asset('job-assets/assets/css/boxicon.min.css') }}">
        <!-- Flaticon CSS-->
        <link rel="stylesheet" href="{{ asset('job-assets/assets/fonts/flaticon/flaticon.css') }}">
        <!-- Magnific CSS -->
        <link rel="stylesheet" href="{{ asset('job-assets/assets/css/magnific-popup.css') }}">
        <!-- Meanmenu CSS -->
        <link rel="stylesheet" href="{{ asset('job-assets/assets/css/meanmenu.css') }}">
        <!-- Nice Select CSS -->
        <link rel="stylesheet" href="{{ asset('job-assets/assets/css/nice-select.css') }}">
        <!-- Style CSS -->
		<link rel="stylesheet" href="{{ asset('job-assets/assets/css/style.css') }}">
		<!-- Responsive CSS -->
		<link rel="stylesheet" href="{{ asset('job-assets/assets/css/responsive.css') }}">
        <!-- Title CSS -->
        <title>Jovie - Job Board & Portal HTML Template</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        @yield("style")
        <script src="//unpkg.com/alpinejs" defer></script>
        <!-- Favicon -->
        <link rel="icon" type="image/png" href="{{ asset('job-assets/assets/img/favicon.png') }}">
    </head>

    <body>

        <!-- Pre-loader Start -->
		<div class="loader-content">
            <div class="d-table">
                <div class="d-table-cell">
					<div class="sk-circle">
						<div class="sk-circle1 sk-child"></div>
						<div class="sk-circle2 sk-child"></div>
						<div class="sk-circle3 sk-child"></div>
						<div class="sk-circle4 sk-child"></div>
						<div class="sk-circle5 sk-child"></div>
						<div class="sk-circle6 sk-child"></div>
						<div class="sk-circle7 sk-child"></div>
						<div class="sk-circle8 sk-child"></div>
						<div class="sk-circle9 sk-child"></div>
						<div class="sk-circle10 sk-child"></div>
						<div class="sk-circle11 sk-child"></div>
						<div class="sk-circle12 sk-child"></div>
					</div>
				</div>
			</div>
		</div>
		<!-- Pre-loader End -->

        @include("layouts.navbar")

        @include("messages.messages")

        @yield("content")

        @include("layouts.footer")

        <!-- Back To Top Start -->
		<div class="top-btn">
			<i class='bx bx-chevrons-up bx-fade-up'></i>
		</div>
		<!-- Back To Top End -->
        @yield("script")
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
		<!-- jQuery first, then Bootstrap JS -->
		<script src="{{ asset('job-assets/assets/js/jquery.min.js') }}"></script>
		<script src="{{ asset('job-assets/assets/js/bootstrap.bundle.min.js') }}"></script>
		<!-- Owl Carousel JS -->
		<script src="{{ asset('job-assets/assets/js/owl.carousel.min.js') }}"></script>
		<!-- Nice Select JS -->
		<script src="{{ asset('job-assets/assets/js/jquery.nice-select.min.js') }}"></script>
		<!-- Magnific Popup JS -->
		<script src="{{ asset('job-assets/assets/js/jquery.magnific-popup.min.js') }}"></script>
		<!-- Subscriber Form JS -->
		<script src="{{ asset('job-assets/assets/js/jquery.ajaxchimp.min.js') }}"></script>
		<!-- Form Velidation JS -->
		<script src="{{ asset('job-assets/assets/js/form-validator.min.js') }}"></script>
		<!-- Contact Form -->
		<script src="{{ asset('job-assets/assets/js/contact-form-script.js') }}"></script>
		<!-- Meanmenu JS -->
		<script src="{{ asset('job-assets/assets/js/meanmenu.js') }}"></script>
		<!-- Custom JS -->
		<script src="{{ asset('job-assets/assets/js/custom.js') }}"></script>
  	</body>
</html>
