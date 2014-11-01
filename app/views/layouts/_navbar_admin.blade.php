<ul class="nav-item-wrapper">
	<a class="nav-item" href="{{ URL::to('/') }}" ><li>Halaman Utama</li></a>
	<a class="nav-item" href="{{ URL::to('admin/info_publik') }}" ><li>Info Publik</li></a>
	<a class="nav-item" href="{{ URL::to('admin/profil_daerah') }}" ><li>Profil Daerah</li></a>
	<a class="nav-item" href="{{ URL::to('admin/download') }}" ><li>Download</li></a>
	<a class="nav-item" href="{{ URL::to('admin/galeri') }}" ><li>Galeri</li></a>
	<a class="nav-item" href="{{ URL::to('admin/kontak_kami') }}" ><li>Kontak Kami</li></a>
	<a class="nav-item">
		<li class="nav-item-sub">
			<a>Pengaturan Website</a>
			<ul class="sub-nav-item-wrapper">
				<a class="sub-nav-item" href="{{ URL::to('admin/pengaturan_website/mengelola_header') }}"><li>Mengelola Header</li></a>
				<a class="sub-nav-item" href="{{ URL::to('admin/pengaturan_website/alamat_web_service') }}"><li>Alamat Web Service</li></a>
			</ul>
		</li>
	</a>
	<a class="nav-item" href="{{ URL::to('admin/jajak') }}" ><li>Jajak</li></a>
	<a class="nav-item" href="{{ URL::to('admin/admin_user') }}" ><li>Admin User</li></a>
	<a class="nav-item" href="{{ URL::to('admin/kontak/logout') }}" ><li>Logout</li></a>
</ul>
