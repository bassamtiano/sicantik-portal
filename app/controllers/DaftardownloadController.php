<?php

	class DaftardownloadController extends BaseController {

		public function index() {
			return View::make('daftar_download.index');
		}

		public function data() {
			return Tmdownload::fetch_data();
		}

	}
