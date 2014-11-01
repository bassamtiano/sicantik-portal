<?php

	class LayananonlineController extends BaseController {
		
		public function pendaftaran_online() {
			return View::make('layanan_online.pages.pendaftaran_online');
		}

		public function pengaduan_online() {
			return View::make('layanan_online.pages.pengaduan_online');
		}

	}