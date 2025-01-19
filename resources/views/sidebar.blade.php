<div class="sidebar" data-background-color="dark">
    <div class="sidebar-logo">
        <div class="logo-header" data-background-color="dark">
            <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                    <i class="gg-menu-right"></i>
                </button>
                <button class="btn btn-toggle sidenav-toggler">
                    <i class="gg-menu-left"></i>
                </button>
            </div>
            <button class="topbar-toggler more">
                <i class="gg-more-vertical-alt"></i>
            </button>
        </div>
    </div>
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-secondary">

                <li class="nav-item {{ request()->routeIs('dashboard.index') ? 'active' : '' }}">
                    <a href="{{ route('dashboard.index') }}">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
            
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Page</h4>
                </li>
            
                <li class="nav-item {{ request()->routeIs('search.index') ? 'active' : '' }}">
                    <a href="{{ route('search.index') }}">
                        <i class="fas fa-search"></i>
                        <p>Search score</p>
                    </a>
                </li>
            
                <li class="nav-item {{ request()->routeIs('report.index') ? 'active' : '' }}">
                    <a href="{{ route('report.index') }}">
                        <i class="fas fa-chart-bar"></i>
                        <p>Report</p>
                    </a>
                </li>
            
                <li class="nav-item {{ request()->routeIs('setting.index') ? 'active' : '' }}">
                    <a href="{{ route('setting.index') }}">
                        <i class="fab fa-creative-commons-nd"></i>
                        <p>Setting</p>
                    </a>
                </li>
            </ul>
            
        </div>
    </div>
</div>
