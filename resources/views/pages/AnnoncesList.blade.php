@extends('layouts.master')

@section('content')
    <!-- Page Title Start -->
    <section class="page-title title-bg6">
        <div class="d-table">
            <div class="d-table-cell">
                <h2>Jobs List</h2>
                <ul>
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>Jobs List</li>
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

    <section class="job-style-two pt-100 pb-70">

        <div class="container">
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
                                            <a
                                                href="{{ route('announce.show', ['id' => $item->id, 'slug' => $item->slug]) }}">{{ $item->title }}</a>
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
                                        @auth
                                            <a>
                                                <i class='bx bx-heart' id="{{ $item->id }}" {{-- onclick="clickButton({{ $item->id }})" --}}
                                                    @if (auth()->user()->FavoriteAnnonces->contains($item->id)) style="background-color: red ;color: white" @endif>
                                                </i>
                                            </a>
                                        @endauth
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
                {{ $annonces->links() }}
            </div>
        </div>
    </section>
@endsection
