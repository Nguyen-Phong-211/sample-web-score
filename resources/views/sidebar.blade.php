<div class="sidebar" data-background-color="dark">
    <div class="sidebar-logo">
        <!-- Logo Header -->
        <div class="logo-header" data-background-color="dark">
            <a href="index.html" class="logo">
                {{-- <img src="assets/img/kaiadmin/logo_light.svg" alt="navbar brand" class="navbar-brand" height="20" /> --}}
            </a>
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
        <!-- End Logo Header -->
    </div>
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-secondary">

                <li class="nav-item active">
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

                <li class="nav-item">
                    <a href="{{ route('search.index') }}">
                        <i class="fas fa-search"></i>
                        <p>Search score</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('report.index') }}">
                        <i class="fas fa-chart-bar"></i>
                        <p>Report</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('setting.index') }}">
                        <i class="fab fa-creative-commons-nd"></i>
                        <p>Setting</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
