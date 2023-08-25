@extends('layouts.master')

@section("content")
        <!-- Page Title Start -->
        <section class="page-title title-bg15">
            <div class="d-table">
                <div class="d-table-cell">
                    <h2>419</h2>
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>419</li>
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

        <!-- Error Section Start -->
        <div class="error-section ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <div class="error-img">
                            <img src="{{ asset('job-assets/assets/img/404.png') }} " alt="error image">
                            <div class="theme-btn text-center">
                                <a href="index.html" class="default-btn">Go To Home</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Error Section End -->
@endsection
