<aside class="sidebar-dark-primary col-md-3 border-right" style="background-color: transparent !important;">
    <a href="#" class="brand-link" style="background-color: transparent !important">
        <img src="{{ asset('assets/dist/img/logo.jpg')}}" alt="CSEC Logo" class="brand-image img-circle elevation-3"
            style="opacity: 0.8" />
        <span class="brand-text font-weight-light">CSEC ASTU</span>
    </a>
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent nav-flat" data-widget="treeview"
                role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('home')}}" class="nav-link {{ (request()->is('home')) ? 'active' : '' }} {{ (request()->is('feed*')) ? 'active' : '' }}">
                        <i class="nav-icon fas fa-hashtag"></i>
                        <p>Feeds</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('events.home')}}" class="nav-link {{ (request()->is('event*')) ? 'active' : '' }}">
                        <i class="nav-icon fas fa-calendar-check"></i>
                        <p>
                            Events
                        </p>
                    </a>
                </li>
                @if(Auth::user()->is_superuser)
                    <li class="nav-item">
                        <a href="{{ route('users.home')}}" class="nav-link {{ (request()->is('users*')) ? 'active' : '' }}">
                            <i class="nav-icon fas fa-users"></i>
                            <p>
                                Users
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('divisions.home')}}" class="nav-link {{ (request()->is('divisions*')) ? 'active' : '' }}">
                            <i class="nav-icon fas fa-bezier-curve"></i>
                            <p>
                                Divisions
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('subdivisions.home')}}" class="nav-link {{ (request()->is('subdivisions*')) ? 'active' : '' }}">
                            <i class="nav-icon fab fa-blackberry"></i>
                            <p>
                                Sub Divisions
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('roles.home')}}" class="nav-link {{ (request()->is('roles*')) ? 'active' : '' }}">
                            <i class="nav-icon fas fa-user-tag"></i>
                            <p>
                                Roles
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('reports.home')}}" class="nav-link {{ (request()->is('reports*')) ? 'active' : '' }}">
                            <i class="nav-icon far fa-flag"></i>
                            <p>
                                Reports
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('requests.home')}}" class="nav-link {{ (request()->is('requests*')) ? 'active' : '' }}">
                            <i class="nav-icon fas fa-question"></i>
                            <p>
                                Requests
                            </p>
                        </a>
                    </li>
                @endif
                <li class="nav-item">
                    <a href="{{ route('users.profile')}}" class="nav-link {{ (request()->is('profile*')) ? 'active' : '' }}">
                        <i class="nav-icon fas fa-wrench"></i>
                        <p>Profile</p>
                    </a>
                </li>
                <li class="nav-header">Account</li>
                <li class="nav-item">
                    <a href="{{ route('account.logout')}}" class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>logout</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
