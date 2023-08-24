@extends('layouts.master')

@section('content')
    <!-- Page Title Start -->
    <section class="page-title title-bg12">
        <div class="d-table">
            <div class="d-table-cell">
                <h2>Sign In</h2>
                <ul>
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>Sign In</li>
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

    <!-- Sign In Section Start -->
    <div class="signin-section ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-8 offset-md-2 offset-lg-3">
                    <form class="signin-form" action="{{ route('auth.login') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Enter Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Enter Your Email" required>
                        </div>
                        <div class="form-group">
                            <label>Enter Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Enter Your Password" required>
                        </div>
                        <div class="signin-btn text-center">
                            <button type="submit">Sign In</button>
                        </div>
                        <div class="other-signin text-center">
                            <span>Or sign in with</span>
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
                            <p>Not have an account?
                                <a href="{{route('auth.register')}}">
                                    Create an account
                                    <i class='bx bx-chevrons-right bx-fade-right'></i>
                                </a>
                            </p>
                        </div>
                        <div class="create-btn text-center">
                            <p>Forget Password
                                <a href="{{route('auth.register')}}">
                                    reset password
                                    <i class='bx bx-chevrons-right bx-fade-right'></i>
                                </a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Sign In Section End -->
@endsection
