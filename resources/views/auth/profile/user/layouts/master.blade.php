@user
    <div class="col-md-4">
        <div class="account-information">
            <div class="profile-thumb">
                <img src="{{ asset('job-assets/assets/img/account.jpg') }} " alt="account holder image">
                <h3>{{ Auth::user()->username }}</h3>
                <p>Web Developer</p>
            </div>

            <ul>
                <li>
                    <a href="{{ route('auth.profile') }}" @if (Route::currentRouteName() == 'auth.profile') class="active" @endif>
                        <i class='bx bx-user'></i>
                        My Profile
                    </a>
                </li>
                <li>
                    <a href="{{ route('auth.experience.index') }}" @if (Route::currentRouteName() == 'auth.experience.index') class="active" @endif>
                        <i class='bx bxs-file-doc'></i>
                        Experience
                    </a>
                </li>
                <li>
                    <a href="{{ route('auth.education.index') }}" @if (Route::currentRouteName() == 'auth.education.index') class="active" @endif>
                        <i class='bx bx-briefcase'></i>
                        Education
                    </a>
                </li>
                <li>
                    <a href="{{ route('auth.skills.index') }}" @if (Route::currentRouteName() == 'auth.skills.index') class="active" @endif>
                        <i class='bx bx-envelope'></i>
                        skills
                    </a>
                </li>
                <li>
                    <a href="{{ route('user.applied') }}" @if (Route::currentRouteName() == 'user.applied') class="active" @endif>
                        <i class='bx bx-heart'></i>
                        Aplied Jobs
                    </a>
                </li>
                <li>
                    <a href="{{ route('user.favorites') }}" @if (Route::currentRouteName() == 'user.favorites') class="active" @endif>
                        <i class='bx bx-heart'></i>
                        Saved Jobs
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class='bx bx-lock-alt'></i>
                        Change Password
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class='bx bx-coffee-togo'></i>
                        Delete Account
                    </a>
                </li>
                <li>
                    <a href="{{ route('auth.logout') }}">
                        <i class='bx bx-log-out'></i>
                        Log Out
                    </a>
                </li>
            </ul>
        </div>
    </div>
@enduser

@fournisseur
    <div class="col-md-4">
        <div class="account-information">
            <div class="profile-thumb">
                <img src="{{ asset('job-assets/assets/img/account.jpg') }} " alt="account holder image">
                <h3>{{ Auth::user()->username }}</h3>
                <p>Fournisseur</p>
            </div>

            <ul>
                <li>
                    <a href="{{ route('auth.profile') }}" @if (Route::currentRouteName() == 'auth.profile') class="active" @endif>
                        <i class='bx bx-user'></i>
                        My Profile
                    </a>
                </li>
                <li>
                    <a href="{{ route('auth.companie.index') }}" @if (Route::currentRouteName() == 'auth.companie.index') class="active" @endif>
                        <i class='bx bx-user'></i>
                        My Companies
                    </a>
                </li>
                <li>
                    <a href="{{ route('auth.annonces.index') }}" @if (Route::currentRouteName() == 'auth.annonces.index') class="active" @endif>
                        <i class='bx bx-user'></i>
                        My Annonce
                    </a>
                </li>
                <li>
                    <a href="{{ route('auth.logout') }}">
                        <i class='bx bx-log-out'></i>
                        Log Out
                    </a>
                </li>
            </ul>
        </div>
    </div>
@endfournisseur
