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
                            My Annonces
                        </h3>
                        <div x-data="{ open: false }">
                            <button @click="open = !open">Expand</button>

                            <span x-show="open">
                                Content...
                            </span>
                        </div>
                        <div class="row">
                            @foreach ($annonces as $item)
                                <div class="col-lg-6 col-sm-6">
                                    <div class="company-card">
                                        <div class="company-logo">
                                            <a href="job-list.html">
                                                <img src="{{ asset('job-assets/assets/img/top-company/7.png') }}"
                                                    alt="company logo">
                                            </a>
                                        </div>
                                        <div class="company-text">
                                            <h3>{{ $item->title }}</h3>
                                            <p>{{ $item->categorie->name }}</p>
                                            {{-- <p>{{ $item->companie->name }}</p> --}}
                                            <p>Applied : {{ $item->users->count() }}</p>
                                            <p>saved : {{ $item->FavoritesUsers->count() }}</p>
                                            <p>
                                                {!! Str::limit($item->description, 20, '...') !!}
                                            </p>
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
