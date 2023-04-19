<nav class="header-navbar navbar-expand-md navbar navbar-with-menu fixed-top navbar-dark navbar-shadow">
    <div class="navbar-wrapper">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="feather icon-menu font-large-1"></i></a></li>
                <li class="nav-item"><a class="navbar-brand" href="/admin/home"><img class="brand-logo" alt="stack admin logo" src="/new_assets_admin/app-assets/images/logo/stack-logo-light.png">
                        <h3 class="brand-text">Admin Home</h3>
                    </a></li>
                <li class="nav-item d-md-none"><a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="fa fa-ellipsis-v"></i></a></li>
            </ul>
        </div>
        <div class="navbar-container content">
            <div class="collapse navbar-collapse" id="navbar-mobile">
                <ul class="nav navbar-nav mr-auto float-left">
                    <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs" ><i class="feather icon-menu"></i></a></li>
                </ul>
                <ul class="nav navbar-nav float-right">
                    <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" data-toggle="dropdown">
                        @if (Auth::guard('admin')->check())
                            <div class="avatar avatar-online"><img src="/new_assets_admin/app-assets/images/portrait/small/adminn.png" alt="avatar">
                                <i></i></div><span class="user-name">{{ Auth::guard('admin')->user()->ho_va_ten }}</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item"><i class="feather icon-user"></i> Edit Profile</a><a class="dropdown-item" href="#"><i class="feather icon-mail"></i> My Inbox</a><a class="dropdown-item" href="#"><i class="feather icon-check-square"></i> Task</a><a class="dropdown-item" href="#"><i class="feather icon-message-square"></i> Chats</a>
                         <div class="dropdown-divider"></div><a class="dropdown-item" href="/admin/logout"><i class="feather icon-power"></i> Logout</a>
                        </div>
                        @else
                        <span>Please Login Admin!</span>
                        <div class="dropdown-menu dropdown-menu-right mt-1">
                           <a class="dropdown-item" href="/admin/login"><i class="fa-solid fa-user"></i> Login</a>
                        </div>
                        <div class="dropdown-menu dropdown-menu-right ">
                            <a class="dropdown-item" href="/admin/create"><i class="fa-solid fa-user-plus"></i> Signup </a>
                        </div>
                        @endif
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
