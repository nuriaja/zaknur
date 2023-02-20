<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon ">
                    <img width="50" height="50" src="{{asset('image/logo_smkn1_surabaya-removebg-preview.png')}}" alt="">
                </div>
                <div class="sidebar-brand-text mx-3">Jadwal Pembelajaran<sup></sup></div>
            </a>
            
            @can('admin')
            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="dashboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#main"
                    aria-expanded="true" aria-controls="main">
                    <i class="fas fa-fw fa-cog"></i>
                    
                    <span>Master Data</span>
                </a>
                <div id="main" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="/kelas">Kelas</a>
                        <a class="collapse-item" href="/guru">Guru</a>
                        <a class="collapse-item" href="/ruang">Ruang</a>
                        <a class="collapse-item" href="/siswa">Siswa</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/jadwal">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Jadwal</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
            @endcan

            @can(siswa)
            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="dashboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <hr class="sidebar-driver my-0">

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#main"
                    aria-expanded="true" aria-controls="main">
                    <i class="fas fa-fw fa-cog"></i>
                    
                    <span>Master Data</span>
                </a>
            <div id="main" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="/kelas">Kelas</a>
                    </div>
                </div>
            </li>

                <li class="nav-item">
                <a class="nav-link" href="/jadwal">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Jadwal</span></a>
            </li>

             <!-- Divider -->
             <hr class="sidebar-divider d-none d-md-block">
            @endcan

            @can(guru)
            <!-- Divider -->
            <hr class="sidebar-divider my-0">

             <!-- Nav Item - Dashboard -->
             <li class="nav-item active">
                <a class="nav-link" href="dashboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <hr class="sidebar-driver my-0">

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#main"
                    aria-expanded="true" aria-controls="main">
                    <i class="fas fa-fw fa-cog"></i>
                    
                    <span>Master Data</span>
                </a>
                <div id="main" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="/kelas">Kelas</a>
                        <a class="collapse-item" href="/guru">Guru</a>
                        <a class="collapse-item" href="/ruang">Ruang</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/jadwal">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Jadwal</span></a>
            </li>

             <!-- Divider -->
             <hr class="sidebar-divider d-none d-md-block">
            @endcan

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>