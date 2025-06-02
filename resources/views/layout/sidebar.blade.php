@if(auth()->user()->role === 'dokter')
    <li class="nav-item">
        <a href="{{ route('dokter.dashboard') }}" class="nav-link {{ Request::is('dokter') ? 'active' : '' }}">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>Dashboard</p>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ route('dokter.memeriksa') }}" class="nav-link {{ Request::is('dokter/memeriksa*') ? 'active' : '' }}">
            <i class="nav-icon fas fa-stethoscope"></i>
            <p>Periksa Pasien</p>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ route('dokter.riwayat-pasien') }}" class="nav-link {{ Request::is('dokter/riwayat-pasien*') ? 'active' : '' }}">
            <i class="nav-icon fas fa-history"></i>
            <p>Riwayat Pasien</p>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ route('dokter.jadwal-periksa.index') }}" class="nav-link {{ Request::is('dokter/jadwal-periksa*') ? 'active' : '' }}">
            <i class="nav-icon fas fa-calendar-alt"></i>
            <p>Jadwal Periksa</p>
        </a>
    </li>
@endif 