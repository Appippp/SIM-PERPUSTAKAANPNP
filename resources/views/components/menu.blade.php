<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="index.html">E-PERPUS PNP</a>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
        <a href="index.html">PNP</a>
      </div>
      <ul class="sidebar-menu">

        <li class="menu-header">Dashboard</li>

        <!-- Dashboard -->
        <li class="dropdown">
          <a href="{{ route('dashboard.index') }}" ><i class="fas fa-fire"></i><span>Dashboard</span></a>
        </li>

        <li class="menu-header">Master Data</li>

        <!-- Kategori -->
        <li class="dropdown">
          <a href="{{ route('kategori.index') }}" ><i class="fas fa-fire"></i> <span>Kategori</span></a>
        </li>

        <!-- Prodi -->
        <li class="dropdown">
            <a href="{{ route('prodi.index') }}" ><i class="fas fa-fire"></i> <span>Prodi</span></a>
        </li>

        <!-- Buku -->
        <li class="dropdown">
            <a href="{{ route('buku.index') }}"  ><i class="fas fa-fire"></i> <span>Buku</span></a>
        </li>

        <!-- Tugas Akhir -->
        <li class="dropdown">
            <a href="{{ route('tugasakhir.index') }}"  ><i class="fas fa-fire"></i> <span>Tugas Akhir</span></a>
        </li>

        <!-- Praktek Lapangan -->
        <li class="dropdown">
            <a href="{{ route('prakteklapangan.index') }}" ><i class="fas fa-fire"></i> <span>Praktek Lapangan</span></a>
        </li>
      </ul>
    </aside>
</div>