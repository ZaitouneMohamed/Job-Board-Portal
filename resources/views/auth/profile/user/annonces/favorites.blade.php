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
                            My saved annonce
                        </h3>
                        <table class="table table-hover table-striped-columns">
                            <thead>
                                <tr>
                                    <th scope="col">N°</th>
                                    <th scope="col">Titre</th>
                                    <th scope="col">added at</th>
                                    <th scope="col">Categorie</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($annonces as $item)
                                    <tr>
                                        <th scope="row">{{ $item->id }}</th>
                                        <td><a href="#" style="color: black">{{ $item->title }}</a></td>
                                        <td>{{ $item->created_at }}</td>
                                        <td>{{ $item->categorie->name }}</td>
                                        <td>
                                            <i class='bx bx-heart'></i>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Account Area End -->
@endsection
