<header class="header">
    <div class="toggle-btns">
        <a id="toggle-sidebar" href="#">
            <i class="icon-list"></i>
        </a>
        <a id="pin-sidebar" href="#">
            <i class="icon-list"></i>
        </a>
    </div>
    <div class="header-items">
        <ul class="header-actions">
            <li class="dropdown">
                <a href="#" id="userSettings" class="user-settings" data-toggle="dropdown" aria-haspopup="true">
                    <span class="user-name">{{ auth()->guard('admin')->user()->firstname }} {{ auth()->guard('admin')->user()->lastname }}</span>
                    <span class="avatar">
                        <img src="{{ _site_logo() }}" alt="avatar"
                            style="border-radius:2%; height: 38px;">
                        <span class="status busy"></span>
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userSettings">
                    <div class="header-profile-actions">
                        <div class="header-user-profile">
                            <div class="header-user">
                                <img src="{{ _site_logo() }}" alt="avatar">
                            </div>
                            <h5>{{ auth()->guard('admin')->user()->firstname }} {{ auth()->guard('admin')->user()->lastname }}</h5>
                            <p>Admin</p>
                        </div>
                        <a href="#"><i class="icon-lock1"></i> Change Password</a>
                        <a href="{{ route('admin.logout') }}"><i class="icon-log-out1"></i> Sign Out</a>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</header>