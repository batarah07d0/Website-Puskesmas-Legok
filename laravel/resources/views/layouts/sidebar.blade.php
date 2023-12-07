<ul class="navbar-nav bg-success sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-text mx-3">Puskemas Legok Admin</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('staff') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Staff</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('prestasi') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Prestasi</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('dokter') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dokter</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('pasien') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Pasien</span></a>
    </li>


    <li class="nav-item">
        <a class="nav-link" href="{{ route('jenislayanan') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Jenis Layanan</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('programkegiatan') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Program Kegiatan</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('fasilitas') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Fasilitas</span></a>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>


</ul>