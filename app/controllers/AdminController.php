<?php

	class AdminController extends BaseController {

		public function index() {
			return View::make('layouts.admin');
		}

		public function info_publik() {
			return View::make('admin.info_publik.index');
		}

		public function info_publik_data() {
			return Tmberita::fetch_data(['C_BERITA', 'D_BERITA', 'N_JUDUL_BERITA', 'N_INTRO_BERITA', 'N_ISI_BERITA', 'C_STATUS_BERITA', 'C_KATEGORI']);
		}

		public function profil_daerah() {
			return View::make('admin.profil_daerah.index');
		}

		public function profil_daerah_data() {
			$result = [];
			$profil = Informasi::fetch_data(1);

			foreach($profil as $pkey => $pval) {
				$result = $pval;
			}

			return $result;
		}

		public function download() {
			return View::make('admin.download.index');
		}

		public function download_data() {
			
		}

		public function galeri() {
			return View::make('admin.galeri.index');
		}

		public function galeri_data() {

		}

		public function kontak_kami() {
			return View::make('admin.kontak_kami.index');
		}

		public function jajak() {
			return View::make('admin.jajak.index');
		}

		public function jajak_data() {
			return Tmjajak::fetch_data();
		}

		public function admin_user() {
			return View::make('admin.admin_user.index');
		}

		public function admin_user_data() {
			return Truser::fetch_data();
		}

	}
