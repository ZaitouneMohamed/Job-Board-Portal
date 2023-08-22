@extends('layouts.master')

@section('content')
    <!-- Page Title Start -->
    <section class="page-title title-bg13">
        <div class="d-table">
            <div class="d-table-cell">
                <h2>Sign Up</h2>
                <ul>
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>Sign Up</li>
                </ul>
            </div>
        </div>
        <div class="lines">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </section>
    <!-- Page Title End -->

    <!-- Sign up Section Start -->
    <div class="signup-section ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-8 offset-md-2 offset-lg-3">
                    <form class="signup-form" action="{{route('register')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Enter Username</label>
                            <input type="text" class="form-control" name="username" placeholder="Enter Username" required>
                        </div>

                        <div class="form-group">
                            <label>Enter First Name</label>
                            <input type="text" class="form-control" name="first_name" placeholder="Enter First Name" required>
                        </div>

                        <div class="form-group">
                            <label>Enter Last Name</label>
                            <input type="text" class="form-control" name="last_name" placeholder="Enter Last Name" required>
                        </div>

                        <div class="form-group">
                            <label>Enter Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Enter Your Email" required>
                        </div>

                        <div class="form-group">
                            <label>Enter Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Enter Your Password" required>
                        </div>

                        {{-- <div class="form-group">
                            <label>Repeat Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Enter Your Password" required>
                        </div> --}}

                        <div class="signup-btn text-center">
                            <button type="submit">Sign Up</button>
                        </div>

                        <div class="other-signup text-center">
                            <span>Or sign up with</span>
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class='bx bxl-google'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class='bx bxl-facebook'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class='bx bxl-twitter'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class='bx bxl-linkedin'></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="create-btn text-center">
                            <p>
                                Have an Account?
                                <a href="{{ route('login') }}">
                                    Sign In
                                    <i class='bx bx-chevrons-right bx-fade-right'></i>
                                </a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Sign Up Section End -->
@endsection
