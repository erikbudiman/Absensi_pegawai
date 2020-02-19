<div class="page-wrap">
    <div class="app-sidebar colored">
        <div class="sidebar-header">
            <a class="header-brand" href="index.html">
                <div class="logo-img">
                    <img src="src/img/brand-white.svg" class="header-brand-img" alt=""> 
                </div>
                <span class="text">Absensi</span>
            </a>
            <button type="button" class="nav-toggle"><i data-toggle="expanded" class="ik ik-toggle-right toggle-icon"></i></button>
            <button id="sidebarClose" class="nav-close"><i class="ik ik-x"></i></button>
        </div>
        
        <div class="sidebar-content">
            <div class="nav-container">
                <nav id="main-menu-navigation" class="navigation-main">
                    <div class="nav-lavel">Navigation</div>
                    <div class="nav-item active">
                        <a href="<?= site_url('dashboard') ?>"><i class="ik ik-home"></i><span>Dashboard</span></a>
                    </div>
                    <div class="nav-item">
                        <a href="<?= site_url('pegawai') ?>"><i class="ik ik-user"></i><span>Data Pegawai</span></a>
                    </div>
                    <div class="nav-item">
                        <a href="<?= site_url('jabatan') ?>"><i class="ik ik-layers"></i><span>Data Jabatan</span></a>
                    </div>
                    <div class="nav-item">
                        <a href="<?= site_url('pangkat') ?>"><i class="ik ik-layers"></i><span>Data Pangkat</span></a>
                    </div>
                    <div class="nav-item">
                        <a href="<?= site_url('unit_kerja') ?>"><i class="ik ik-layers"></i><span>Data Unit Kerja</span></a>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <div class="main-content">
        <div class="container-fluid">