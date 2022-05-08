<div class="col-md-3">

    <aside class="sidebar-dark-primary" style="background-color: transparent !important">
        <div class="sidebar">

            <div class="form-inline mt-4">
                <div class="input-group">
                    <input class="form-control form-control-sidebar right-search" type="search" placeholder="Search"
                        aria-label="Search">
                </div>
            </div>

            <nav class="mt-3">
                <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent nav-flat" data-widget="treeview"
                    role="menu" data-accordion="false">
                    <li class="nav-item">
                        <a href="{{ route('halloffames.home')}}" class="nav-link {{ (request()->is('halloffames*')) ? 'active' : '' }}">
                            <i class="nav-icon fas fa-border-all"></i>
                            <p>
                                Hall of Fame
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('messages.home')}}" class="nav-link {{ (request()->is('messages*')) ? 'active' : '' }}">
                            <i class="nav-icon fas fa-envelope"></i>
                            <p>Messages</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('notifications')}}" class="nav-link {{ (request()->is('notifications*')) ? 'active' : '' }}">
                            <i class="nav-icon far fa-bell"></i>
                            <p>
                                Notifications
                            </p>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>
</div>
