<nav class="nav has-shadow">
    <div class="nav-left">
        <a href="{{ route('home') }}" class="nav-item">
            <img src="{{ asset('imgs/devmarketer-logo.png') }}" alt="DevMarketer logo">
        </a>
        <a href="#" class="nav-item is-tab is-hidden-mobile m-l-10">Learn</a>
        <a href="#" class="nav-item is-tab is-hidden-mobile">Discus</a>
        <a href="#" class="nav-item is-tab is-hidden-mobile">Share</a>
    </div>
    <div class="nav-right" style="overflow: visible;">
        @if(!Auth::guest())
            <a href="#" class="nav-item is-tab is-hidden-mobile">Login</a>
            <a href="#" class="nav-item is-tab is-hidden-mobile">Join</a>
        @else
            <button class="dropdown is-aligned-right nav-item">
                Hey Alex <span class="icon"><i class="fa fa-caret-down"></i></span>
                <ul class="dropdown-menu">
                    <li>
                        <a href="#">
                            <span class="icon">
                            <i class="fa fa-fw fa-user-circle-o m-r-10"></i></span>
                             Profile
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="icon">
                            <i class="fa fa-fw fa-bell m-r-10"></i>
                            </span> Notifications
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="icon">
                            <i class="fa fa-fw fa-cog m-r-10"></i>
                            </span> Settings
                        </a>
                    </li>
                    <li class="separator"></li>
                    <li>
                        <a href="#">
                            <span class="icon">
                            <i class="fa fa-fw fa-sign-out m-r-10"></i>
                            </span> Logout
                        </a>
                    </li>
                </ul>
            </button>
        @endif
    </div>
</nav>