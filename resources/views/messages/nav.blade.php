<nav class="main-header navbar navbar-expand navbar-dark navbar-light m-0" id="messageNav"
    style="position: fixed; bottom: 10px; border-radius: 25rem">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ route('messages.home')}}" class="nav-link {{ (request()->is('messages')) ? 'active' : '' }}">
                <i class="far fa-comment mr-2"></i>
                Chat Room
            </a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link fas fa-plus-circle fa-2x"></a>
        </li>
    </ul>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">
                <i class="far fa-lightbulb mr-2"></i>
                Recomendations
            </a>
        </li>
    </ul>
</nav>
