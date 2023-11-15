<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/admin">
    <div class="sidebar-brand-text mx-3">Smart Kolok</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{$nav == 'dashboard' ? 'active':''}}">
    <a class="nav-link" href="/admin">
        <i class="fas fa-home"></i>
        <span>Beranda</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
    Fitur
    </div>


    <!-- Nav Galeri -->
    <li class="nav-item {{$nav == 'user' ? 'active':''}}">
    <a class="nav-link" href="/admin/user">
        <i class="fas fa-users"></i>
        <span>Pengguna</span></a>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item {{$nav == 'modul' ? 'active':''}}">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-file-alt"></i>
        <span>Materi Pembelajaran</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Materi Tingkat</h6>
        <a class="collapse-item" href="/admin/modul/sd">SD</a>
        <a class="collapse-item" href="/admin/modul/smp">SMP</a>
        <a class="collapse-item" href="/admin/modul/sma">SMA</a>
        </div>
    </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item {{$nav == 'quiz' ? 'active':''}}">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-question-circle"></i>
        <span>Quiz</span>
    </a>
    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Jenis Quiz</h6>
        <a class="collapse-item" href="/admin/quiz/matematika">Matematika</a>
        <a class="collapse-item" href="/admin/quiz/alam">Alam</a>
        <a class="collapse-item" href="/admin/quiz/pacasila">Pancasila</a>
        <a class="collapse-item" href="/admin/quiz/bahasa-inggris">Bahasa Inggris</a>
        <a class="collapse-item" href="/admin/quiz/budi-pekerti">Budi Pekerti</a>
        </div>
    </div>
    </li>

    <!-- Nav Galeri -->
    <li class="nav-item {{$nav == 'product' ? 'active':''}}">
    <a class="nav-link" href="/admin/product">
        <i class="fas fa-shopping-cart"></i>
        <span>Produk</span></a>
    </li>
    
    <!-- Nav Galeri -->
    <li class="nav-item {{$nav == 'social' ? 'active':''}}">
    <a class="nav-link" href="/admin/social">
        <i class="fas fa-address-book"></i>
        <span>Sosial</span></a>
    </li>
    
    <!-- Nav Galeri -->
    <li class="nav-item {{$nav == 'art' ? 'active':''}}">
    <a class="nav-link" href="/admin/art">
        <i class="fas fa-palette"></i>
        <span>Kesenian</span></a>
    </li>

    <!-- Nav Galeri -->
    <li class="nav-item {{$nav == 'dictionary' ? 'active':''}}">
    <a class="nav-link" href="/admin/dictionary">
        <i class="fas fa-book"></i>
        <span>Kamus Kolok</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
    Lainnya
    </div>

    <!-- Nav Pengaturan -->
    <li class="nav-item {{$nav == 'setting' ? 'active':''}}">
    <a class="nav-link" href="/admin/setting">
        <i class="fas fa-fw fa-cog"></i>
        <span>Pengaturan</span></a>
    </li>

    <!-- Nav Item -->
    <li class="nav-item {{$nav == 'about' ? 'active':''}}">
    <a class="nav-link" href="/admin/about">
        <i class="fas fa-info-circle"></i>
        <span>Tentang</span></a>
    </li>

    <!-- Nav Item -->
    <li class="nav-item">
    <a class="nav-link " href="charts" href="#" data-toggle="modal" data-target="#logoutModal">
        <i class="fas fa-sign-out-alt"></i>
        <span>Keluar</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->