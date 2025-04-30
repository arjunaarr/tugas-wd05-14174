<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title') - MediCare</title>

  <!-- Google Font: Source Sans Pro & Nunito -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700&display=swap" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href={{ asset("plugins/fontawesome-free/css/all.min.css") }}>
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href={{ asset("plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css") }}>
  <!-- iCheck -->
  <link rel="stylesheet" href={{ asset("plugins/icheck-bootstrap/icheck-bootstrap.min.css") }}>
  <!-- JQVMap -->
  <link rel="stylesheet" href={{ asset("plugins/jqvmap/jqvmap.min.css") }}>
  <!-- Theme style -->
  <link rel="stylesheet" href={{ asset("dist/css/adminlte.min.css") }}>
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href={{ asset("plugins/overlayScrollbars/css/OverlayScrollbars.min.css") }}>
  <!-- Daterange picker -->
  <link rel="stylesheet" href={{ asset("plugins/daterangepicker/daterangepicker.css") }}>
  <!-- summernote -->
  <link rel="stylesheet" href={{ asset("plugins/summernote/summernote-bs4.min.css") }}>
  
  <!-- Custom Healthcare Theme Styles -->
  <style>
    :root {
      --primary-blue: #1e88e5;
      --secondary-blue: #0d47a1;
      --light-blue: #bbdefb;
      --accent-blue: #64b5f6;
      --health-green: #43a047;
    }
    
    body {
      font-family: 'Nunito', 'Source Sans Pro', sans-serif;
    }
    
    .main-header {
      background-color: white !important;
      border-bottom: 1px solid #e9ecef;
    }
    
    .main-header .navbar-nav .nav-link {
      color: var(--secondary-blue);
    }
    
    .main-header .navbar-nav .nav-link:hover {
      color: var(--primary-blue);
    }
    
    .main-sidebar {
      background-color: var(--secondary-blue);
    }
    
    .brand-link {
      background-color: var(--primary-blue) !important;
      color: white !important;
      border-bottom: 1px solid var(--accent-blue) !important;
    }
    
    .sidebar-dark-primary .nav-sidebar>.nav-item>.nav-link.active {
      background-color: var(--primary-blue);
      box-shadow: 0 2px 5px rgba(0,0,0,0.2);
    }
    
    .nav-pills .nav-link:not(.active):hover {
      background-color: rgba(255, 255, 255, 0.1);
    }
    
    .nav-link p {
      font-weight: 600;
    }
    
    .card-primary:not(.card-outline)>.card-header {
      background-color: var(--primary-blue);
    }
    
    .card-info:not(.card-outline)>.card-header {
      background-color: var(--accent-blue);
    }
    
    .btn-primary {
      background-color: var(--primary-blue);
      border-color: var(--primary-blue);
    }
    
    .btn-primary:hover {
      background-color: var(--secondary-blue);
      border-color: var(--secondary-blue);
    }
    
    .page-item.active .page-link {
      background-color: var(--primary-blue);
      border-color: var(--primary-blue);
    }
    
    .bg-health-success {
      background-color: var(--health-green) !important;
      color: white !important;
    }
    
    .bg-health-primary {
      background-color: var(--primary-blue) !important;
      color: white !important;
    }
    
    .bg-health-secondary {
      background-color: var(--secondary-blue) !important;
      color: white !important;
    }
    
    .bg-health-light {
      background-color: var(--light-blue) !important;
    }
    
    .content-wrapper {
      background-color: #f8fafc;
    }
    
    .health-icon {
      color: var(--primary-blue);
      margin-right: 5px;
    }
    
    .main-footer {
      background-color: #ffffff;
      border-top: 1px solid #e9ecef;
      color: #6c757d;
    }
    
    /* Custom badge styles */
    .badge-waiting {
      background-color: #ffc107;
      color: #212529;
    }
    
    .badge-processing {
      background-color: var(--accent-blue);
      color: white;
    }
    
    .badge-completed {
      background-color: var(--health-green);
      color: white;
    }
    
    /* Health information cards */
    .health-info-box {
      border-left: 4px solid var(--primary-blue);
      background-color: white;
    }
    
    /* Healthcare specific layout adjustments */
    .patient-data-box {
      border-radius: 5px;
      box-shadow: 0 0 15px rgba(0,0,0,0.05);
    }
  </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src={{ asset("dist/img/healthcare-icon.png") }} alt="MediCare Logo" height="60"
        width="60" onerror="this.src='{{ asset("dist/img/AdminLTELogo.png") }}'">
      <h4 class="mt-2 text-primary">MediCare</h4>
    </div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link"><i class="fas fa-home health-icon"></i>Beranda</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link"><i class="fas fa-question-circle health-icon"></i>Bantuan</a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-bell"></i>
            <span class="badge badge-warning navbar-badge">3</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-item dropdown-header">3 Notifikasi</span>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-user-md mr-2 text-primary"></i> Jadwal dokter baru
              <span class="float-right text-muted text-sm">3 menit</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-pills mr-2 text-success"></i> Pengingat obat
              <span class="float-right text-muted text-sm">12 jam</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-calendar-check mr-2 text-warning"></i> Jadwal pemeriksaan
              <span class="float-right text-muted text-sm">2 hari</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">Lihat Semua Notifikasi</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="#" class="brand-link">
        <img src={{ asset("dist/img/healthcare-icon.png") }} alt="MediCare Logo" class="brand-image img-circle elevation-3"
          style="opacity: .8" onerror="this.src='{{ asset("dist/img/AdminLTELogo.png") }}'">
        <span class="brand-text font-weight-light">MediCare</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src={{ asset("dist/img/user2-160x160.jpg") }} class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->nama }}</a>
          </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Cari" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
              </button>
            </div>
          </div>
        </div>
        <!-- Sidebar Menu Dokter-->
        @if (Auth::user()->role == 'dokter')
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
              <a href="{{ route('dokter.dashboard') }}"
                class="nav-link {{ request()->routeIs('dokter.dashboard') ? 'active' : '' }}">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>Dashboard</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('dokter.memeriksa') }}"
                class="nav-link {{ request()->routeIs('dokter.memeriksa') ? 'active' : '' }}">
                <i class="nav-icon fas fa-stethoscope"></i>
                <p>Memeriksa Pasien</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('dokter.obat') }}"
                class="nav-link {{ request()->routeIs('dokter.obat') ? 'active' : '' }}">
                <i class="nav-icon fas fa-pills"></i>
                <p>Daftar Obat</p>
              </a>
            </li>
        @elseif (Auth::user()->role == 'pasien')
        <!-- Sidebar Menu Pasien-->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
              <a href="{{ route('pasien.dashboard') }}"
                class="nav-link {{ request()->routeIs('pasien.dashboard') ? 'active' : '' }}">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>Dashboard</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('pasien.periksa') }}"
                class="nav-link {{ request()->routeIs('pasien.periksa') ? 'active' : '' }}">
                <i class="nav-icon fas fa-calendar-plus"></i>
                <p>Pendaftaran Periksa</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('pasien.riwayat') }}"
                class="nav-link {{ request()->routeIs('pasien.riwayat') ? 'active' : '' }}">
                <i class="nav-icon fas fa-history"></i>
                <p>Riwayat Periksa</p>
              </a>
            </li>
        @else
        <!-- Sidebar Menu Admin -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>Dashboard Admin</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-user-md"></i>
                <p>Kelola Dokter</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>Kelola Pasien</p>
              </a>
            </li>
        @endif
            <li class="nav-item">
              <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="nav-link bg-danger">
                  <i class="nav-icon fas fa-sign-out-alt"></i>
                  <p>Logout</p>
                </button>
              </form>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>
    
    @yield('isi')

    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <strong>Copyright &copy; 2025 <a href="#" class="text-primary">MediCare</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 1.0.0
      </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src={{ asset("plugins/jquery/jquery.min.js") }}></script>
  <!-- jQuery UI 1.11.4 -->
  <script src={{ asset("plugins/jquery-ui/jquery-ui.min.js") }}></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src={{ asset("plugins/bootstrap/js/bootstrap.bundle.min.js") }}></script>
  <!-- ChartJS -->
  <script src={{ asset("plugins/chart.js/Chart.min.js") }}></script>
  <!-- Sparkline -->
  <script src={{ asset("plugins/sparklines/sparkline.js") }}></script>
  <!-- JQVMap -->
  <script src={{ asset("plugins/jqvmap/jquery.vmap.min.js") }}></script>
  <script src={{ asset("plugins/jqvmap/maps/jquery.vmap.usa.js") }}></script>
  <!-- jQuery Knob Chart -->
  <script src={{ asset("plugins/jquery-knob/jquery.knob.min.js") }}></script>
  <!-- daterangepicker -->
  <script src={{ asset("plugins/moment/moment.min.js") }}></script>
  <script src={{ asset("plugins/daterangepicker/daterangepicker.js") }}></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src={{ asset("plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js") }}></script>
  <!-- Summernote -->
  <script src={{ asset("plugins/summernote/summernote-bs4.min.js") }}></script>
  <!-- overlayScrollbars -->
  <script src={{ asset("plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js") }}></script>
  <!-- AdminLTE App -->
  <script src={{ asset("dist/js/adminlte.js") }}></script>
  <!-- AdminLTE for demo purposes -->
  <script src={{ asset("dist/js/demo.js") }}></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src={{ asset("dist/js/pages/dashboard.js") }}></script>
</body>

</html>