<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
        <a href="#">Pengaduan Masyarakat</a>
    </div>
    <ul class="sidebar-menu">
        <li class="menu-header">Data</li>
        <li class="nav-item dropdown active">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Data</span></a>
            <ul class="dropdown-menu">
                <li class=""><a class="nav-link" href="{{ route('masyarakat.index') }}">Data
                        Masyarakat</a></li>
                <li class=""><a class="nav-link" href="{{ route('masyarakat.pengaduan') }}">Data
                        Pengaduan</a></li>
            </ul>
        </li>
        <li class="menu-header">Input Data</li>

        <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown"><i class="far fa-file-alt"></i>
                <span>Forms</span></a>
            <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{ route('masyarakat.create') }}">Input Pengaduan</a></li>
            </ul>
        </li>
    </ul>
</aside>
