<?php

	class KontakController extends BaseController {

		public function index() {
			return View::make('kontak.index');
		}

		public function data() {
			$result = [];
			$kontak = Informasi::fetch_data(2);

			foreach($kontak as $kkey => $kval) {
				$result = $kval;
			}

			return $result;
		}

	}
