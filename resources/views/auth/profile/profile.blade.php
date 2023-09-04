@extends('layouts.master')

@section('content')
    <!-- Page Title Start -->
    <section class="page-title title-bg10">
        <div class="d-table">
            <div class="d-table-cell">
                <h2>Account</h2>
                <ul>
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>Account</li>
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
                    <div class="account-details">
                        <h3>Basic Information</h3>
                        <form class="basic-info">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Your Name</label>
                                        <input type="text" value="{{ $user->username }}" class="form-control"
                                            placeholder="Your Name">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Your Email</label>
                                        <input type="email" value="{{ Auth()->user()->email }}" class="form-control"
                                            placeholder="Your Email">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="account-btn">Edit</button>
                                    <button type="submit" class="account-btn">Save</button>
                                </div>
                            </div>
                        </form>

                        <h3>Profile</h3>
                        <form class="-candidate-address" method="POST" action="{{route('set.profile')}}">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>First name *</label>
                                        <input type="text" class="form-control" name="first_name"
                                            value="{{ $user->Profile ? $user->Profile->first_name : '' }}"
                                            placeholder="Your first name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>last name *</label>
                                        <input type="text" class="form-control" name="last_name"
                                            value="{{ $user->Profile ? $user->Profile->last_name : '' }}"
                                            placeholder="Your last name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Phone *</label>
                                        <input type="text" value="{{ $user->Profile ? $user->Profile->phone : '' }}"
                                            class="form-control" placeholder="Your phone" name="phone">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>gender *</label><br>
                                        <select name="gender">
                                            @if ($user->Profile)
                                                <option value="1" @if ($user->Profile->gender === 1) selected @endif>
                                                    Homme
                                                </option>
                                                <option value="2" @if ($user->Profile->gender === 2) selected @endif>
                                                    femme
                                                </option>
                                            @else
                                                <option value="1">
                                                    Homme
                                                </option>
                                                <option value="2">
                                                    femme
                                                </option>
                                            @endif
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>description *</label>
                                        <textarea class="form-control" placeholder="description" name="description" id="" cols="30"
                                            rows="10">{{ $user->Profile ? $user->Profile->description : '' }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="account-btn">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Account Area End -->
@endsection
