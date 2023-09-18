@extends('layouts.master')

@section('content')
    @php
        $messagee = $announce->title;
    @endphp
    <x-Path :pagename="$messagee" />

    <!-- Job Details Section Start -->
    <section class="job-details ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="job-details-text">
                                <div class="job-card">
                                    <div class="row align-items-center">
                                        <div class="col-md-2">
                                            <div class="company-logo">
                                                <img src="{{ asset('job-assets/assets/img/company-logo/1.png') }} "
                                                    alt="logo">
                                            </div>
                                        </div>
                                        <div class="col-md-10">
                                            <div class="job-info">
                                                <h3>{{ $announce->title }}</h3>
                                                <ul>
                                                    <li>
                                                        <i class='bx bx-location-plus'></i>
                                                        {{ $announce->location }}
                                                    </li>
                                                    <li>
                                                        <i class='bx bx-briefcase'></i>
                                                        {{ $announce->type }}
                                                    </li>
                                                </ul>

                                                <span>
                                                    <i class='bx bx-paper-plane'></i>
                                                    {{ $announce->created_at }}
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="details-text">
                                    <h3>Description</h3>
                                    <p>
                                        {!! $announce->description !!}
                                    </p>
                                </div>

                                <div class="details-text">
                                    <h3>Requirements</h3>
                                    {!! $announce->requirement !!}
                                </div>

                                <div class="details-text">
                                    <h3>Job Details</h3>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td><span>Company</span></td>
                                                        <td>{{ $announce->Companie }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td><span>Location</span></td>
                                                        <td>{{ $announce->location }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td><span>Job Type</span></td>
                                                        <td>{{ $announce->type }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td><span>Email</span></td>
                                                        <td><a href="mailto:hello@company.com">hello@company.com</a></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-md-6">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td><span>Salary</span></td>
                                                        <td>{{ $announce->salary }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td><span>Website</span></td>
                                                        <td><a href="#">www.company.com</a></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <div class="theme-btn">
                                    @auth
                                        @if (auth()->user()->AppliedAnnonces->contains($announce->id))
                                            <h1>you already postuled on this job</h1>
                                        @else
                                            <a href="{{ route('user.apply_job', ['user_id' => auth()->user()->id, 'announce_id' => $announce->id]) }}"
                                                class="default-btn">
                                                Apply Now
                                            </a>
                                        @endif
                                    @else
                                        <a class="default-btn" href="{{ route('auth.login') }}">
                                            Login Or Register
                                        </a>
                                    @endauth
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="job-sidebar">
                        <h3>Posted By</h3>
                        <div class="posted-by">
                            <img src="{{ asset('job-assets/assets/img/client-1.png') }}" alt="client image">
                            <h4>{{ $announce->user->username }}</h4>
                            <span>CEO of Tourt Design LTD</span>
                        </div>
                    </div>

                    <div class="job-sidebar">
                        <h3><i class="fa fa-tags"></i></h3>
                        <ul>
                            <li>
                                <a href="#">Web Design</a>
                            </li>
                            <li>
                                <a href="#">Data Sceince</a>
                            </li>
                            <li>
                                <a href="#">SEO</a>
                            </li>
                            <li>
                                <a href="#">Content Writter</a>
                            </li>
                            <li>
                                <a href="#">Finance</a>
                            </li>
                            <li>
                                <a href="#">Business</a>
                            </li>
                            <li>
                                <a href="#">Education</a>
                            </li>
                            <li>
                                <a href="#">Graphics</a>
                            </li>
                            <li>
                                <a href="#">Video</a>
                            </li>
                        </ul>
                    </div>

                    <div class="job-sidebar social-share">
                        <h3>Share In</h3>
                        <ul>
                            <li>
                                <a href="#" target="_blank">
                                    <i class="bx bxl-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class="bx bxl-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class="bx bxl-pinterest"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class="bx bxl-linkedin"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Job Details Section End -->
@endsection
