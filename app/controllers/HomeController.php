<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}

	public function index() {
		return View::make('home.index');
	}

	public function data() {
		$result = [];
		$result_wrapper = [];

		$berita = Tmberita::fetch_data(['C_BERITA', 'D_BERITA', 'N_JUDUL_BERITA', 'N_INTRO_BERITA', 'N_ISI_BERITA', 'C_STATUS_BERITA', 'C_KATEGORI']);
		foreach($berita as $bkey => $bval) {

			$raw_isi = $bval->N_ISI_BERITA;

			$result_gambar = strstr($raw_isi, 'src="');
			$result_gambar = strstr($result_gambar, '" alt="', true);
			$result_gambar = substr($result_gambar, 5);
			$result_gambar = str_replace('../../assets/js/tiny_mce/plugins/jbimages/ci/uploads/images/', '', $result_gambar);


			$isi = strstr($raw_isi, '<p style="');
			$result_isi = substr($isi, 0, 200) . '...';
			$result_isi = str_replace('<p style="text-align: justify;">', '',$result_isi);

			$result_wrapper['C_BERITA'] = $bval->C_BERITA;
			$result_wrapper['tanggal_berita'] = $bval->D_BERITA;
			$result_wrapper['judul_berita'] = $bval->N_JUDUL_BERITA;
			$result_wrapper['intro_berita'] = $bval->N_INTRO_BERITA;

			$result_wrapper['gambar_berita'] = $result_gambar;
			$result_wrapper['isi_berita'] = $result_isi;
			$result_wrapper['C_STATUS_BERITA'] = $bval->C_STATUS_BERITA;
			$result_wrapper['C_KATEGORI'] = $bval->C_KATEGORI;

			array_push($result, $result_wrapper);
		}

		return $result;
	}

}
