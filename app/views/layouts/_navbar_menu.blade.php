<div class="header-navbar">

    <div class="navbar-item">

        <ul class="nav-item-wrapper">
            <a class="nav-item" href="{{ URL::to('/') }}" ><li>Halaman Utama</li></a>
            <a class="nav-item" href="{{ URL::to('info_publik') }}" ><li>Info Publik</li></a>
            <a class="nav-item" href="{{ URL::to('profil_daerah') }}" ><li>Profil Daerah</li></a>
            <a class="nav-item" href="{{ URL::to('daftar_download') }}" ><li>Daftar Download</li></a>
            <a class="nav-item" href="{{ URL::to('galeri') }}" ><li>Galeri Foto</li></a>
            <a class="nav-item" href="{{ URL::to('jenis_perizinan') }}" ><li>Jenis Perizinan</li></a>
            <a class="nav-item">
                <li class="nav-item-sub">
                    <a>Layanan Online</a>
                    <ul class="sub-nav-item-wrapper">
                        <a class="sub-nav-item" href="{{ URL::to('layanan_online/pendaftaran_online') }}"><li>Pendaftaran Online</li></a>
                        <a class="sub-nav-item" href="{{ URL::to('layanan_online/pengaduan_online') }}"><li>Pengaduan Online</li></a>
                    </ul>
                </li>
            </a>
            <a class="nav-item" href="{{ URL::to('kontak') }}" ><li>Kontak</li></a>
        </ul>

    </div>

</div>
