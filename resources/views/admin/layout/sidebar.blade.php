<nav id="sidebar" class="sidebar-wrapper">
    <div class="sidebar-brand">
        <a href="{{ route('admin.dashboard') }}" class="logo">
            <img src="{{ _site_logo_2() }}" alt="{{ _site_name() }}" />
        </a>
    </div>

    <div class="sidebar-content">
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="{{ route('admin.dashboard') }}">
                        <i class="icon-devices_other"></i>
                        <span class="menu-text">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.users') }}">
                        <i class="icon-user1"></i>
                        <span class="menu-text">Users</span>
                    </a>
                </li>
                <li class="sidebar-dropdown">
                    <a href="javascript:void(0)">
                        <i class="icon-archive1"></i>
                        <span class="menu-text">Categories</span>
                    </a>
                    <div class="sidebar-submenu">
                        <ul>
                            <li>
                                <a href="new_category.php">Create Category</a>
                            </li>
                            <li>
                                <a href="manage_categories.php">Manage Category</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="sidebar-dropdown">
                    <a href="javascript:void(0)">
                        <i class="icon-archive1"></i>
                        <span class="menu-text">Famous Offers</span>
                    </a>
                    <div class="sidebar-submenu">
                        <ul>
                            <li>
                                <a href="companies.php">Companies</a>
                            </li>
                            <li>
                                <a href="new_famous_offer.php">Create Offer</a>
                            </li>
                            <li>
                                <a href="#">Manage Offer</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="sidebar-dropdown">
                    <a href="javascript:void(0)">
                        <i class="icon-archive1"></i>
                        <span class="menu-text">Business Registration</span>
                    </a>
                    <div class="sidebar-submenu">
                        <ul>
                            <li>
                                <a href="new_category.php">Pending Business</a>
                            </li>
                            <li>
                                <a href="manage_categories.php">Manage Business</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="{{ route('admin.states') }}">
                        <i class="icon-devices_other"></i>
                        <span class="menu-text">State Management</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.cities') }}">
                        <i class="icon-devices_other"></i>
                        <span class="menu-text">City Management</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.logout') }}">
                        <i class="icon-log-out1"></i>
                        <span class="menu-text">Logout</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>