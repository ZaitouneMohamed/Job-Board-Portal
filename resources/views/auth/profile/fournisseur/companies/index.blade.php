@extends('layouts.master')

@section('content')
    <section class="page-title title-bg10">
        <div class="d-table">
            <div class="d-table-cell">
                <h2>Account</h2>
                <ul>
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>Experience</li>
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
    <!-- Account Area Start -->
    <section class="account-section ptb-100">
        <div class="container">
            <div class="row">
                @include('auth.profile.user.layouts.master')
                <div class="col-md-8">
                    <div class="resume-content education-text">
                        <h3>
                            <i class='bx bx-book-reader'></i>
                            Companies
                        </h3>
                        <div x-data="{ open: false }">
                            <button @click="open = !open" class="btn btn-success">Create New Companie</button>

                            <span x-show="open">
                                <form class="-candidate-address" method="POST" action="{{ route('auth.companie.store') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>company name</label>
                                                <input type="text" class="form-control" name="name"
                                                    placeholder="company name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>description *</label>
                                                <textarea class="form-control" placeholder="description" name="description" id="" cols="10"
                                                    rows="10"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>start date *</label>
                                                <input type="date" class="form-control" name="start_date">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>location *</label>
                                                <input type="text" class="form-control" name="location"
                                                    placeholder="location">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>URL *</label>
                                                <input type="text" class="form-control" name="site_url"
                                                    placeholder="website url">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>phone number *</label>
                                                <input type="text" class="form-control" name="phone_number"
                                                    placeholder="phone number">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        </div>
                                    </div>
                                </form>
                            </span>
                        </div><br><br>
                        <div class="row">
                            @foreach ($companies as $item)
                                <div class="col-lg-6 col-sm-6">
                                    <div class="company-card">
                                        <div class="company-logo">
                                            <a href="job-list.html">
                                                <img src="{{ asset('job-assets/assets/img/top-company/7.png') }}"
                                                    alt="company logo">
                                            </a>
                                        </div>
                                        <div class="company-text">
                                            <h3>{{ $item->name }}</h3>
                                            <p>
                                                {{ Str::limit($item->description, 20, '...') }}
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
                </div>
            </div>
        </div>
    </section>
    <!-- Account Area End -->
@endsection
