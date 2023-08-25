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
                    <a href="#" class="active">
                        <i class='bx bx-user'></i>
                        My Profile
                    </a>
                </li>
                <li>
                    <a href="{{ route('auth.experience.index') }}">
                        <i class='bx bxs-file-doc'></i>
                        Experience
                    </a>
                </li>
                <li>
                    <a href="{{ route('auth.education.index') }}">
                        <i class='bx bx-briefcase'></i>
                        Education
                    </a>
                </li>
                <li>
                    <a href="{{ route('auth.skills.index') }}">
                        <i class='bx bx-envelope'></i>
                        skills
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class='bx bx-heart'></i>
                        Aplied Jobs
                    </a>
                </li>
                <li>
                    <a href="#">
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
                    <a href="{{ route('auth.profile') }}" class="active">
                        <i class='bx bx-user'></i>
                        My Profile
                    </a>
                </li>
                <li>
                    <a href="{{ route('auth.companie.index') }}">
                        <i class='bx bx-user'></i>
                        My Companies
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
