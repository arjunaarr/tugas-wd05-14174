@php
    $role = $user->role ?? 'guest'; // Default ke 'guest' jika tidak ada user
@endphp

<ul class="nav nav-pills flex-column">
    @if ($role === 'dokter')
        @php
            $menus = [
                ['title' => 'Dashboard', 'path' => 'dokter', 'icon' => 'fas fa-home'],
                ['title' => 'Obat', 'path' => 'obat', 'icon' => 'fas fa-pills'],
                ['title' => 'Periksa', 'path' => 'periksa', 'icon' => 'fas fa-notes-medical'],
            ];
        @endphp
    @elseif ($role === 'pasien')
        @php
            $menus = [
                ['title' => 'Dashboard', 'path' => 'pasien', 'icon' => 'fas fa-home'],
                ['title' => 'Periksa', 'path' => 'periksa', 'icon' => 'fas fa-file-medical'],
                ['title' => 'Riwayat Periksa', 'path' => 'riwayat', 'icon' => 'fas fa-file-medical'],
            ];
        @endphp
    @endif


<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="dashboard" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               @foreach ($menus as $menu)
        <li class="nav-item">
            <a href="{{ url($menu['path']) }}" 
               class="nav-link {{ request()->is($menu['path']) ? 'active' : '' }}">
                <i class="nav-icon {{ $menu['icon'] }}"></i>
                <p>{{ $menu['title'] }}</p>
            </a>
        </li>
    @endforeach
               </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>