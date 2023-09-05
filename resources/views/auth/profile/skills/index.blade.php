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
                            Skills
                        </h3>
                        <div x-data="{ open: false }">
                            <button @click="open = !open">Add New Skill</button>

                            <span x-show="open">
                                <form class="-candidate-address" method="POST" action="{{ route('auth.skills.store') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>skill name *</label>
                                                <input type="text" class="form-control" name="name"
                                                    placeholder="skill name">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        </div>
                                    </div>
                                </form>
                            </span>
                        </div>
                        @foreach ($skills as $item)
                            <div class="education-info">
                                <h5>{{ $item->name }}</h5>
                            </div><br>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Account Area End -->
@endsection
