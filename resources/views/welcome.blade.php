@extends('layouts.master')

@section('content')
    <!-- Banner Section Start -->
    <div class="banner-style-two">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="banner-text">
                        <span>Find Jobs, Employment & Career Opportunities</span>
                        <h1>Job Board for Hiring Creative Designers</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Quis ipsum suspendisse.</p>

                        <div class="theme-btn">
                            <a href="#" class="default-btn">Upload your CV</a>
                            <a href="contact.html" class="default-btn">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="banner-img">
            <img src="{{ asset('job-assets/assets/img/banner/3.jpg') }}" alt="banner image">
        </div>
    </div>
    <!-- Banner Section End -->
    <!-- Find Section Start -->
    <div class="find-section pb-100">
        <div class="container">
            <form class="find-form">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="form-group">
                            <input type="text" class="form-control" id="exampleInputEmail1"
                                placeholder="Job Title or Keyword">
                            <i class="bx bx-search-alt"></i>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <input type="text" class="form-control" id="exampleInputEmail2" placeholder="Location">
                            <i class="bx bx-location-plus"></i>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <select class="category">
                            <option data-display="Category">Category</option>
                            <option value="1">Web Development</option>
                            <option value="2">Graphics Design</option>
                            <option value="4">Data Entry</option>
                            <option value="5">Visual Editor</option>
                            <option value="6">Office Assistant</option>
                        </select>
                    </div>
                    <div class="col-lg-3">
                        <button type="submit" class="find-btn">
                            Find A Job
                            <i class='bx bx-search'></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Find Section End -->
    <!-- Why Choose Section Start -->
    <section class="why-choose-two pb-70">
        <div class="container">
            <div class="section-title text-center">
                <h2>Why You Choose Us Among Other Job Site?</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus</p>
            </div>

            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="choose-card">
                        <i class="flaticon-resume"></i>
                        <h3>Advertise Job</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="choose-card">
                        <i class="flaticon-recruitment"></i>
                        <h3>Recruiter Profiles</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 offset-sm-3 offset-lg-0">
                    <div class="choose-card">
                        <i class="flaticon-employee"></i>
                        <h3>Find Your Dream Job</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Why Choose Section End -->

    <!-- Category Section Start -->
    <section class="categories-section pb-70">
        <div class="container">
            <div class="section-title text-center">
                <h2>Choose Your Category</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
            </div>

            <div class="row">
                @foreach ($topCategories as $item)
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <a href="job-list.html">
                            <div class="category-card">
                                <i class='{{ $item->icon_class }}'></i>
                                <h3>{{ $item->name }}</h3>
                                <p>{{ $item->annonces_count }} open position</p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Category Section End -->

    <!-- Job Section End -->
    <section class="job-style-two pt-100 pb-70">
        <div class="container">
            <div class="section-title text-center">
                <h2>Jobs You May Be Interested In</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Quis ipsum suspendisse ultrices gravida</p>
            </div>

            <div class="row">
                @foreach ($annonces as $item)
                    <div class="col-md-6">
                        <div class="job-card">
                            <div class="row align-items-center">
                                <div class="col-lg-3">
                                    <div class="thumb-img">
                                        <a href="job-details.html">
                                            <img src="{{ asset('job-assets/assets/img/company-logo/1.png') }}"
                                                alt="company logo">
                                        </a>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="job-info">
                                        <h3>
                                            <a href="{{ route('user.announce.show', ['id' => $item->id, 'title' => $item->title]) }}">{{ $item->title }}</a>
                                        </h3>
                                        <ul>
                                            <li>Via <a href="#">{{ $item->user->username }}</a></li>
                                            <li>
                                                <i class='bx bx-location-plus'></i>
                                                {{ $item->location }}
                                            </li>
                                            <li>
                                                <i class='bx bx-filter-alt'></i>
                                                {{ $item->categorie->name }}
                                            </li>
                                            <li>
                                                <i class='bx bx-briefcase'></i>
                                                {{ $item->salary }}
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-lg-3">
                                    <div class="job-save">
                                        <span>{{ $item->type }}</span>
                                        <a href="#">
                                            <i class='bx bx-heart'></i>
                                        </a>
                                        <p>
                                            <i class='bx bx-stopwatch'></i>
                                            {{ $item->created_at }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="theme-btn text-center">
                <a href="#" class="default-btn">
                    Browse More Job
                </a>
            </div>
        </div>
    </section>
    <!-- Job Section End -->

    <!-- Companies Section Start -->
    <section class="company-section pt-100 pb-70">
        <div class="container">
            <div class="section-title text-center">
                <h2>Top Companies</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
            </div>

            <div class="row">
                @foreach ($companies as $item)
                    <div class="col-lg-3 col-sm-6">
                        <div class="company-card">
                            <div class="company-logo">
                                <a href="job-grid.html">
                                    <img src="{{ asset('job-assets/assets/img/top-company/1.png') }}" alt="company logo">
                                </a>
                            </div>
                            <div class="company-text">
                                <h3>{{ $item->name }}</h3>
                                <p>
                                    <i class='bx bx-location-plus'></i>
                                    {{ $item->location }}
                                </p>
                                <a href="#" class="company-btn">
                                    {{ $item->Annonces->count() }} Open Position
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Companies Section End -->

    <!-- Job Info Section Start -->
    <div class="job-info-two pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="looking-job">
                        <div class="media">
                            <i class='flaticon-group align-self-start mr-3'></i>
                            <div class="media-body">
                                <h5 class="mt-0">Looking For a Job</h5>
                                <p>Your next role could be with one of these top leading organizations</p>
                                <a href="#">
                                    Apply Now
                                    <i class='bx bx-chevrons-right'></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="recruiting-card">
                        <div class="media">
                            <i class='flaticon-resume align-self-start mr-3'></i>
                            <div class="media-body">
                                <h5 class="mt-0">Are You Recruiting?</h5>
                                <p>Your next role could be with one of these top leading organizations</p>
                                <a href="#">
                                    Apply Now
                                    <i class='bx bx-chevrons-right'></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Job Info Section End -->

    {{-- <!-- Candidate Section Start -->
    <section class="candidate-section ptb-100">
        <div class="container">
            <div class="section-title text-center">
                <h2>Featured Candidates</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus</p>
            </div>

            <div class="condidate-slider owl-carousel owl-theme">
                <div class="condidate-item">
                    <div class="candidate-img">
                        <img src="{{ asset('job-assets/assets/img/candidate/1.jpg') }}" alt="candidate image">
                    </div>
                    <div class="candidate-social">
                        <a href="#" target="_blank"><i class='bx bxl-facebook'></i></a>
                        <a href="#" target="_blank"><i class='bx bxl-twitter'></i></a>
                        <a href="#" target="_blank"><i class='bx bxl-instagram'></i></a>
                    </div>
                    <div class="candidate-text">
                        <h3><a href="candidate-details.html">Mibraj Alex</a></h3>
                        <ul>
                            <li>
                                <i class='bx bx-filter-alt'></i>
                                Construction & Property
                            </li>
                            <li>
                                <i class='bx bx-location-plus'></i>
                                Botchergate, Carlisle
                            </li>
                        </ul>

                        <div class="bottom-text">
                            <p>
                                <i class='bx bx-stopwatch'></i>
                                9D ago
                            </p>
                            <a href="#">
                                <i class='bx bx-heart'></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="condidate-item">
                    <div class="candidate-img">
                        <img src="{{ asset('job-assets/assets/img/candidate/2.jpg') }}" alt="candidate image">
                    </div>
                    <div class="candidate-social">
                        <a href="#" target="_blank"><i class='bx bxl-facebook'></i></a>
                        <a href="#" target="_blank"><i class='bx bxl-twitter'></i></a>
                        <a href="#" target="_blank"><i class='bx bxl-instagram'></i></a>
                    </div>
                    <div class="candidate-text">
                        <h3> <a href="candidate-details.html">Felica Kareon</a></h3>
                        <ul>
                            <li>
                                <i class='bx bx-filter-alt'></i>
                                SEO Expart
                            </li>
                            <li>
                                <i class='bx bx-location-plus'></i>
                                Georgetown, USA
                            </li>
                        </ul>

                        <div class="bottom-text">
                            <p>
                                <i class='bx bx-stopwatch'></i>
                                8D ago
                            </p>
                            <a href="#">
                                <i class='bx bx-heart'></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="condidate-item">
                    <div class="candidate-img">
                        <img src="{{ asset('job-assets/assets/img/candidate/3.jpg') }} " alt="candidate image">
                    </div>
                    <div class="candidate-social">
                        <a href="#" target="_blank"><i class='bx bxl-facebook'></i></a>
                        <a href="#" target="_blank"><i class='bx bxl-twitter'></i></a>
                        <a href="#" target="_blank"><i class='bx bxl-instagram'></i></a>
                    </div>
                    <div class="candidate-text">
                        <h3> <a href="candidate-details.html">Malisa Petel</a></h3>
                        <ul>
                            <li>
                                <i class='bx bx-filter-alt'></i>
                                Project Management
                            </li>
                            <li>
                                <i class='bx bx-location-plus'></i>
                                Madison, USA
                            </li>
                        </ul>

                        <div class="bottom-text">
                            <p>
                                <i class='bx bx-stopwatch'></i>
                                1D ago
                            </p>
                            <a href="#">
                                <i class='bx bx-heart'></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="condidate-item">
                    <div class="candidate-img">
                        <img src="{{ asset('job-assets/assets/img/candidate/4.jpg') }}" alt="candidate image">
                    </div>
                    <div class="candidate-social">
                        <a href="#" target="_blank"><i class='bx bxl-facebook'></i></a>
                        <a href="#" target="_blank"><i class='bx bxl-twitter'></i></a>
                        <a href="#" target="_blank"><i class='bx bxl-instagram'></i></a>
                    </div>
                    <div class="candidate-text">
                        <h3> <a href="candidate-details.html">Quence Joes</a></h3>
                        <ul>
                            <li>
                                <i class='bx bx-filter-alt'></i>
                                Web Developer
                            </li>
                            <li>
                                <i class='bx bx-location-plus'></i>
                                Augusta, Maine
                            </li>
                        </ul>

                        <div class="bottom-text">
                            <p>
                                <i class='bx bx-stopwatch'></i>
                                8D ago
                            </p>
                            <a href="#">
                                <i class='bx bx-heart'></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="condidate-item">
                    <div class="candidate-img">
                        <img src="{{ asset('job-assets/assets/img/candidate/1.jpg') }}" alt="candidate image">
                    </div>
                    <div class="candidate-social">
                        <a href="#" target="_blank"><i class='bx bxl-facebook'></i></a>
                        <a href="#" target="_blank"><i class='bx bxl-twitter'></i></a>
                        <a href="#" target="_blank"><i class='bx bxl-instagram'></i></a>
                    </div>
                    <div class="candidate-text">
                        <h3><a href="candidate-details.html">Mibraj Alex</a></h3>
                        <ul>
                            <li>
                                <i class='bx bx-filter-alt'></i>
                                Construction & Property
                            </li>
                            <li>
                                <i class='bx bx-location-plus'></i>
                                Botchergate, Carlisle
                            </li>
                        </ul>

                        <div class="bottom-text">
                            <p>
                                <i class='bx bx-stopwatch'></i>
                                9D ago
                            </p>
                            <a href="#">
                                <i class='bx bx-heart'></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="condidate-item">
                    <div class="candidate-img">
                        <img src="assets/img/candidate/2.jpg" alt="candidate image">
                    </div>
                    <div class="candidate-social">
                        <a href="#" target="_blank"><i class='bx bxl-facebook'></i></a>
                        <a href="#" target="_blank"><i class='bx bxl-twitter'></i></a>
                        <a href="#" target="_blank"><i class='bx bxl-instagram'></i></a>
                    </div>
                    <div class="candidate-text">
                        <h3> <a href="candidate-details.html">Felica Kareon</a></h3>
                        <ul>
                            <li>
                                <i class='bx bx-filter-alt'></i>
                                SEO Expart
                            </li>
                            <li>
                                <i class='bx bx-location-plus'></i>
                                Georgetown, USA
                            </li>
                        </ul>

                        <div class="bottom-text">
                            <p>
                                <i class='bx bx-stopwatch'></i>
                                8D ago
                            </p>
                            <a href="#">
                                <i class='bx bx-heart'></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="condidate-item">
                    <div class="candidate-img">
                        <img src="assets/img/candidate/3.jpg" alt="candidate image">
                    </div>
                    <div class="candidate-social">
                        <a href="#" target="_blank"><i class='bx bxl-facebook'></i></a>
                        <a href="#" target="_blank"><i class='bx bxl-twitter'></i></a>
                        <a href="#" target="_blank"><i class='bx bxl-instagram'></i></a>
                    </div>
                    <div class="candidate-text">
                        <h3><a href="candidate-details.html">Malisa Petel</a></h3>
                        <ul>
                            <li>
                                <i class='bx bx-filter-alt'></i>
                                Project Management
                            </li>
                            <li>
                                <i class='bx bx-location-plus'></i>
                                Madison, USA
                            </li>
                        </ul>

                        <div class="bottom-text">
                            <p>
                                <i class='bx bx-stopwatch'></i>
                                1D ago
                            </p>
                            <a href="#">
                                <i class='bx bx-heart'></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="condidate-item">
                    <div class="candidate-img">
                        <img src="assets/img/candidate/4.jpg" alt="candidate image">
                    </div>
                    <div class="candidate-social">
                        <a href="#" target="_blank"><i class='bx bxl-facebook'></i></a>
                        <a href="#" target="_blank"><i class='bx bxl-twitter'></i></a>
                        <a href="#" target="_blank"><i class='bx bxl-instagram'></i></a>
                    </div>
                    <div class="candidate-text">
                        <h3><a href="candidate-details.html">Quence Joes</a></h3>
                        <ul>
                            <li>
                                <i class='bx bx-filter-alt'></i>
                                Web Developer
                            </li>
                            <li>
                                <i class='bx bx-location-plus'></i>
                                Augusta, Maine
                            </li>
                        </ul>

                        <div class="bottom-text">
                            <p>
                                <i class='bx bx-stopwatch'></i>
                                8D ago
                            </p>
                            <a href="#">
                                <i class='bx bx-heart'></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Candidate Section End --> --}}

    <!-- Counter Section Start -->
    <div class="counter-section pt-100 pb-70">
        <div class="container">
            <div class="row counter-area">
                <div class="col-lg-4 col-6">
                    <div class="counter-text">
                        <i class="flaticon-resume"></i>
                        <h2><span>{{ \App\Models\Annonce::count() }}</span></h2>
                        <p>Job Posted</p>
                    </div>
                </div>

                <div class="col-lg-4 col-6">
                    <div class="counter-text">
                        <i class="flaticon-portfolio"></i>
                        <h2><span>{{ \App\Models\Company::count() }}</span></h2>
                        <p>Company</p>
                    </div>
                </div>

                <div class="col-lg-4 col-6">
                    <div class="counter-text">
                        <i class="flaticon-employee"></i>
                        <h2><span>{{ \App\Models\User::count() }}</span></h2>
                        <p>Members</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Counter Section End -->

    <!-- Testimonial Section Start -->
    <div class="testimonial-style-two ptb-100">
        <div class="container">
            <div class="section-title text-center">
                <h2>What Client’s Say About Us</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
            </div>

            <div class="row">
                <div class="testimonial-slider-two owl-carousel owl-theme">
                    <div class="testimonial-items">
                        <div class="testimonial-text">
                            <i class='flaticon-left-quotes-sign'></i>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do mod tempor incididunt ut
                                labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo
                                viverra maecenas accumsan lacus vel facilisis. Lorem Ipsum is simply dummy text of the
                                printing and typesetting industry. Lorem Ipsum has been the industry's.</p>
                        </div>

                        <div class="testimonial-info-text">
                            <h3>Alisa Meair</h3>
                            <p>CEO of Company</p>
                        </div>
                    </div>

                    <div class="testimonial-items">
                        <div class="testimonial-text">
                            <i class='flaticon-left-quotes-sign'></i>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do mod tempor incididunt ut
                                labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo
                                viverra maecenas accumsan lacus vel facilisis. Lorem Ipsum is simply dummy text of the
                                printing and typesetting industry. Lorem Ipsum has been the industry's.</p>
                        </div>

                        <div class="testimonial-info-text">
                            <h3>Adam Smith</h3>
                            <p>Web Developer</p>
                        </div>
                    </div>

                    <div class="testimonial-items">
                        <div class="testimonial-text">
                            <i class='flaticon-left-quotes-sign'></i>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do mod tempor incididunt ut
                                labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo
                                viverra maecenas accumsan lacus vel facilisis. Lorem Ipsum is simply dummy text of the
                                printing and typesetting industry. Lorem Ipsum has been the industry's.</p>
                        </div>

                        <div class="testimonial-info-text">
                            <h3>John Doe</h3>
                            <p>Graphics Designer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial Section End -->

    <!-- Blog Section Start -->
    <section class="blog-section pb-70">
        <div class="container">
            <div class="section-title text-center">
                <h2>News, Tips & Articles</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus</p>
            </div>

            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="blog-card">
                        <div class="blog-img">
                            <a href="blog-details.html">
                                <img src="{{ asset('job-assets/assets/img/blog/1.jpg') }}" alt="blog image">
                            </a>
                        </div>
                        <div class="blog-text">
                            <ul>
                                <li>
                                    <i class='bx bxs-user'></i>
                                    Admin
                                </li>
                                <li>
                                    <i class='bx bx-calendar'></i>
                                    7 Feb, 2021
                                </li>
                            </ul>

                            <h3>
                                <a href="blog-details.html">
                                    How to Indroduce in Yourself in Job Interview?
                                </a>
                            </h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
                            </p>

                            <a href="blog-details.html" class="blog-btn">
                                Read More
                                <i class='bx bx-plus bx-spin'></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="blog-card">
                        <div class="blog-img">
                            <a href="blog-details.html">
                                <img src="{{ asset('job-assets/assets/img/blog/2.jpg') }}" alt="blog image">
                            </a>
                        </div>
                        <div class="blog-text">
                            <ul>
                                <li>
                                    <i class='bx bxs-user'></i>
                                    Admin
                                </li>
                                <li>
                                    <i class='bx bx-calendar'></i>
                                    7 Feb, 2021
                                </li>
                            </ul>

                            <h3>
                                <a href="blog-details.html">
                                    Looking for Highly Motivated Product to Build
                                </a>
                            </h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
                            </p>

                            <a href="blog-details.html" class="blog-btn">
                                Read More
                                <i class='bx bx-plus bx-spin'></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 offset-sm-3 offset-lg-0">
                    <div class="blog-card">
                        <div class="blog-img">
                            <a href="blog-details.html">
                                <img src="{{ asset('job-assets/assets/img/blog/3.jpg') }}" alt="blog image">
                            </a>
                        </div>
                        <div class="blog-text">
                            <ul>
                                <li>
                                    <i class='bx bxs-user'></i>
                                    Admin
                                </li>
                                <li>
                                    <i class='bx bx-calendar'></i>
                                    7 Feb, 2021
                                </li>
                            </ul>

                            <h3>
                                <a href="blog-details.html">
                                    The Reason Why Software Develope is the Best Job
                                </a>
                            </h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
                            </p>

                            <a href="blog-details.html" class="blog-btn">
                                Read More
                                <i class='bx bx-plus bx-spin'></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->
@endsection
