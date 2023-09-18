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
                            <button @click="open = !open" class="btn btn-success">Add New Announce</button>
                            <span x-show="open">
                                <form class="-candidate-address" method="POST" action="{{ route('auth.annonces.store') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Title *</label>
                                                <input type="text" class="form-control" name="title"
                                                    placeholder="title">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Type *</label>
                                                <input type="text" class="form-control" name="type"
                                                    placeholder="type">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>salary *</label>
                                                <input type="text" class="form-control" name="salary"
                                                    placeholder="salary">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>companie *</label><br>
                                                <select name="companie_id">
                                                    <option value=""></option>
                                                    @foreach (Auth::user()->Companies as $item)
                                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>categorie *</label><br>
                                                <select name="categorie_id">
                                                    <option value=""></option>
                                                    @foreach (App\Models\Categorie::all() as $item)
                                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>description *</label>
                                                <textarea name="description" name="description" placeholder="description here" id="" cols="30"
                                                    rows="10"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>requirement *</label>
                                                <textarea name="requirement" name="description" placeholder="description here" id="" cols="30"
                                                    rows="10"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>location *</label>
                                                <textarea name="location" name="description" placeholder="description here" id="" cols="30"
                                                    rows="10"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button type="submit" class="signin-btn">Save</button>
                                        </div>
                                    </div>
                                </form>
                            </span>
                        </div><br><br>
                        <div class="row">
                            @foreach ($annonces as $item)
                                <div class="col-lg-6 col-sm-6">
                                    <div class="candidate-card">
                                        <div class="candidate-img">
                                            <img src="{{ asset('job-assets/assets/img/top-company/7.png') }}" alt="candidate image">
                                        </div>
                                        <div class="candidate-text">
                                            <h3>
                                                <a href="#">{{ $item->title }}</a>
                                            </h3>
                                            <h5>
                                                <a style="color: black" href="#">{{ $item->categorie->name }}</a>
                                            </h5>
                                            <h5>
                                                <a href="#" style="color: black">Applied : {{ $item->users->count() }}</a>
                                            </h5>
                                            <h5>
                                                <a href="#" style="color: black">Saved : {{ $item->FavoritesUsers->count() }}</</a>
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
                            @endforeach

                        </div>
                        {{-- <div class="row">
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
                                            <p>Applied : {{ $item->users->count() }}</p>
                                            <p>saved : {{ $item->FavoritesUsers->count() }}</p>
                                            <p>
                                                {!! Str::limit($item->description, 20, '...') !!}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Account Area End -->
@endsection
