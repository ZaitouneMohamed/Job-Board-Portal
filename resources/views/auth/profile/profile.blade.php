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

                @include("auth.profile.user.layouts.master")

                <div class="col-md-8">
                    <div class="account-details">
                        <h3>Basic Information</h3>
                        <form class="basic-info">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Your Name</label>
                                        <input type="text" class="form-control" placeholder="Your Name">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Your Email</label>
                                        <input type="email" class="form-control" placeholder="Your Email">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Your Phone</label>
                                        <input type="number" class="form-control" placeholder="Your Phone">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Job Title</label>
                                        <input type="text" class="form-control" placeholder="Job Title">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="account-btn">Edit</button>
                                    <button type="submit" class="account-btn">Save</button>
                                </div>
                            </div>
                        </form>

                        <h3>Address</h3>
                        <form class="-candidate-address">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Your Country</label>
                                        <input type="text" class="form-control" placeholder="Your Country">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Your City</label>
                                        <input type="text" class="form-control" placeholder="Your City">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Zip Code</label>
                                        <input type="number" class="form-control" placeholder="City Zip">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Region</label>
                                        <input type="text" class="form-control" placeholder="Your Region">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="account-btn">Edit</button>
                                    <button type="submit" class="account-btn">Save</button>
                                </div>
                            </div>
                        </form>

                        <h3>Other information</h3>
                        <form class="cadidate-others">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Age</label>
                                        <input type="number" class="form-control" placeholder="Your Age">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Work Experience</label>
                                        <input type="number" class="form-control" placeholder="Work Experience">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Language</label>
                                        <input type="text" class="form-control" placeholder="Language">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Skill</label>
                                        <input type="text" class="form-control" placeholder="Skills">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="account-btn">Edit</button>
                                    <button type="submit" class="account-btn">Save</button>
                                </div>
                            </div>
                        </form>

                        <h3>Social links</h3>
                        <form class="candidates-sociak">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Facebook</label>
                                        <input type="text" class="form-control" placeholder="www.facebook.com/user">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Twitter</label>
                                        <input type="number" class="form-control" placeholder="www.twitter.com/user">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Linkedin</label>
                                        <input type="text" class="form-control" placeholder="www.Linkedin.com/user">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Github</label>
                                        <input type="text" class="form-control" placeholder="www.Github.com/user">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="account-btn">Edit</button>
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
