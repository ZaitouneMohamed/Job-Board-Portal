<!-- Navbar Area Start -->
<div class="navbar-area">
    <!-- Menu For Mobile Device -->
    <div class="mobile-nav">
        <a href="/" class="logo">
            <img src="{{ asset('job-assets/assets/img/logo.png') }}" alt="logo">
        </a>
    </div>

    <!-- Menu For Desktop Device -->
    <div class="main-nav">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="/">
                    <img src="{{ asset('job-assets/assets/img/logo.png') }}" alt="logo">
                </a>
                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item">
                            <a href="/" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="about.html" class="nav-link">About</a>
                        </li>
                        {{-- <li class="nav-item">
                            <a href="#" class="nav-link dropdown-toggle">Jobs</a>

                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="find-job.html" class="nav-link">Find A Job</a>
                                </li>
                                <li class="nav-item">
                                    <a href="post-job.html" class="nav-link">Post A Job</a>
                                </li>
                                <li class="nav-item">
                                    <a href="job-list.html" class="nav-link">Job List</a>
                                </li>
                                <li class="nav-item">
                                    <a href="job-grid.html" class="nav-link">Job Grid</a>
                                </li>
                                <li class="nav-item">
                                    <a href="job-details.html" class="nav-link">Job Details</a>
                                </li>
                            </ul>
                        </li> --}}
                        <li class="nav-item">
                            <a href="contact.html" class="nav-link">Contact Us</a>
                        </li>
                    </ul>

                    <div class="other-option">
                        @guest
                            <a href="{{ route('register') }}" class="signup-btn">Sign Up</a>
                            <a href="{{ route('login') }}" class="signin-btn">Sign In</a>
                        @endguest
                        @auth
                            <a href="{{ route('register') }}" class="signin-btn">Profile</a>
                        @endauth
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
<!-- Navbar Area End -->
