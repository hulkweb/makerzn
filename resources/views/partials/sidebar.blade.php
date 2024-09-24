<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar"
    style="background: #2d2d2d">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard') }}"
        style="background: white">

        <div class="sidebar-brand-text mx-3"><img src="{{ asset('img/logo.png') }}" style="height: 40px" alt="">
        </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item @if (Route::is('dashboard')) active @endif ">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">
    <!-- Nav Item - Dashboard -->
    <li class="nav-item  @if (Route::is('quotes.index')) active @endif">
        <a class="nav-link" href="{{ route('quotes.index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Quotes</span></a>
    </li>
    <!-- Nav Item - Dashboard -->
    <li class="nav-item @if (Route::is('blogs.index')) active @endif">
        <a class="nav-link" href="{{ route('blogs.index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Blogs</span></a>
    </li>

    <!-- Nav Item - Dashboard -->
    <li class="nav-item @if (Route::is('services.index')) active @endif">
        <a class="nav-link" href="{{ route('services.index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Services</span></a>
    </li>
    <!-- Nav Item - Dashboard -->
    <li class="nav-item @if (Route::is('locations.index')) active @endif">
        <a class="nav-link" href="{{ route('locations.index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Locations</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">


    <!-- Nav Item - Dashboard -->
    <li class="nav-item  @if (Route::is('makes.index')) active @endif">
        <a class="nav-link" href="{{ route('makes.index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Makes</span></a>
    </li>
    <!-- Nav Item - Dashboard -->
    <li class="nav-item  @if (Route::is('models.index')) active @endif">
        <a class="nav-link" href="{{ route('models.index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Models</span></a>
    </li>
    <!-- Nav Item - Pages Collapse Menu -->
    <!-- Nav Item - Dashboard -->
    <li class="nav-item  @if (Route::is('modification-types.index')) active @endif">
        <a class="nav-link" href="{{ route('modification-types.index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Modification Types</span></a>
    </li>




    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>



</ul>
