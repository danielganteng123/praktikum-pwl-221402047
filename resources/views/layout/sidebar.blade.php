<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ request()->is('admin/dashboard') ? 'active' : '' }}">
        <a class="nav-link" href="/admin/dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Main Menu
    </div>

    <!-- Nav Item - Tables -->
    <li class="nav-item {{ request()->is('admin/aboutme') ? 'active' : '' }}">
        <a class="nav-link" href="/admin/aboutme">
            <i class="fas fa-fw fa-table"></i>
            <span>About Me</span></a>
    </li>

     <!-- Nav Item - Tables -->
     <li class="nav-item {{ request()->is('admin/poems') ? 'active' : '' }}">
        <a class="nav-link" href="/admin/poems">
            <i class="fas fa-fw fa-table"></i>
            <span>Poems</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item {{ request()->is('admin/fotoprewed') ? 'active' : '' }}">
        <a class="nav-link" href="/admin/fotoprewed">
            <i class="fas fa-fw fa-folder"></i>
            <span>Foto Prewed</span></a>
    </li>


    

     <!-- Nav Item - Tables -->
     <li class="nav-item {{ request()->is('admin/katakata') ? 'active' : '' }}">
        <a class="nav-link" href="/admin/katakata">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Kata-Kata</span></a>
    </li>

   
    <!-- Nav Item - Tables -->
    <li class="nav-item {{ request()->is('admin/chart') ? 'active' : '' }}">
        <a class="nav-link" href="/admin/chart">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>chart</span></a>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
