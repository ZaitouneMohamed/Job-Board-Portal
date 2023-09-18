@extends('layouts.master')

@section('content')
    <x-Path pagename="pending annonces" />
    <!-- Account Area Start -->
    <section class="account-section ptb-100">
        <div class="container">
            <div class="row">
                @include('auth.profile.user.layouts.master')
                <div class="col-md-8">
                    <div class="resume-content education-text">
                        <h3>
                            <i class='bx bx-book-reader'></i>
                            My apliied annonce
                        </h3>
                        <table class="table table-hover table-striped-columns">
                            <thead>
                                <tr>
                                    <th scope="col">N°</th>
                                    <th scope="col">Titre</th>
                                    <th scope="col">added at</th>
                                    <th scope="col">Categorie</th>
                                </tr>
                            </thead>
                            <x-User.jobs-list :annonces="$annonces" />
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Account Area End -->
@endsection
