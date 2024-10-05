<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar"
    style="background: #761FE3">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard') }}"
        style="background: #761FE3">

        <div class="sidebar-brand-text mx-3"><img src="{{ asset('img/logo.png') }}" style="height: 40px" alt="">
        </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item @if (Route::is('admin.dashboard')) active @endif ">
        <a class="nav-link" href="{{ route('admin.dashboard') }}">
            <i class="fas fa-fw fa-bar-chart"></i>
            <span>Dashboard</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">
    <!-- Nav Item - Dashboard -->
    <li class="nav-item  @if (Route::is('admin.users')) active @endif">
        <a class="nav-link" href="{{ route('admin.users') }}">
            <i class="fas fa-fw fa-users"></i>
            <span>Users</span></a>
    </li>
    <!-- Nav Item - Dashboard -->
    <li class="nav-item @if (Route::is('admin.blogs.index')) active @endif">
        <a class="nav-link" href="{{ route('admin.blogs.index') }}">
            <i class="fas fa-fw fa-file"></i>
            <span>Blogs</span></a>
    </li>
    <!-- Nav Item - Dashboard -->
    <li class="nav-item @if (Route::is('admin.plans.index')) active @endif">
        <a class="nav-link" href="{{ route('admin.plans.index') }}">
            <i class="fas fa-fw fa-money"></i>
            <span>Plans</span></a>
    </li>

    <!-- Nav Item - Dashboard -->
    <li class="nav-item @if (Route::is('admin.transactions.index')) active @endif">
        <a class="nav-link" href="{{ route('admin.transactions.index') }}">
            <i class="fas fa-fw fa-bolt"></i>
            <span>Transactions</span></a>
    </li>





    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>



</ul>
