@extends('layouts.master')

@section('content')
    @php
        $message = "Users Saved This : " . $annonce->title;
    @endphp
    <x-Path :pagename="$message" />

    <section class="candidate-style-two pt-100 pb-70">
        <div class="container">
            <div class="row">
                @forelse ($annonce->FavoritesUsers as $item)
                    <div class="col-lg-3 col-sm-6">
                        <div class="candidate-card">
                            <div class="candidate-img">
                                <img src="{{ asset('job-assets/assets/img/top-company/7.png') }}" alt="candidate image">
                            </div>
                            <div class="candidate-text">
                                <h3>
                                    <a href="candidate-details.html">{{ $item->username }}</a>
                                </h3>
                                <ul>
                                    <li>
                                        UX Designer
                                    </li>
                                </ul>
                            </div>
                            <div class="candidate-social" style="border-radius: 50%">
                                <a href="#" target="_blank" ><i class="fa fa-user-circle" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                @empty
                    <h1 class="text text-center">No User Save This Annonce</h1>
                @endforelse
            </div>
        </div>
    </section>
    <!-- Candidates Section End -->
@endsection
