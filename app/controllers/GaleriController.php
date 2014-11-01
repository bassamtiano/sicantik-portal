<?php

	class GaleriController extends BaseController {

		public function index() {
			return View::make('galeri_foto.index');
		}

		public function data() {
			return Tmgallery::fetch_data();
		}

	}
