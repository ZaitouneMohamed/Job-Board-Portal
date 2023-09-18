@extends('layouts.master')

@section('content')
    @php
        $message = "Users Applied On : " . $annonce->title;
    @endphp
    <x-Path :pagename="$message" />

    <section class="candidate-style-two pt-100 pb-70">
        <div class="container">
            <div class="row">
                @forelse ($annonce->users as $item)
                    <div class="col-lg-3 col-sm-6">
                        <div class="candidate-card">
                            <div class="candidate-img">
                                <img src="{{ asset('job-assets/assets/img/candidate/7.jpg') }}" alt="candidate image">
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

                            <div class="candidate-social">
                                <a href="#" target="_blank"><i class="bx bxl-facebook"></i></a>
                                <a href="#" target="_blank"><i class="bx bxl-twitter"></i></a>
                                <a href="#" target="_blank"><i class="bx bxl-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                @empty
                    <h1 class="text text-center">No User Applied On This Annonce</h1>
                @endforelse
            </div>
        </div>
    </section>
    <!-- Candidates Section End -->
@endsection
