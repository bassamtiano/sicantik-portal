<?php

	class ProfilDaerahController extends BaseController {

		public function index() {
			return View::make('profil_daerah.index');
		}

		public function data() {
			$result = [];
			$profil = Informasi::fetch_data(1);

			foreach($profil as $pkey => $pval) {
				$result = $pval;
			}

			return $result;
		}

	}
