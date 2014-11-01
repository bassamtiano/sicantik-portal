<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// Route::get('/', function()
// {
// 	return View::make('hello');
// });

Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);

Route::get('data', ['uses' => 'HomeController@data']);

# Info Publik

Route::get('info_publik', ['as' => 'info_publik', 'uses' => 'InfopublikController@index']);

Route::get('info_publik/data', ['as' => 'info_publik', 'uses' => 'InfopublikController@data']);

Route::get('info_publik/detail', ['as' => 'info_publik_detail', 'uses' => 'InfopublikController@detail']);

Route::get('info_publik/detail/data/{id}', ['as' => 'info_publik_detail', 'uses' => 'InfopublikController@detail_data']);

# Profil Daerah

Route::get('profil_daerah', ['as' => 'profil_daerah', 'uses' => 'ProfildaerahController@index']);

Route::get('profil_daerah/data', ['as' => 'profil_daerah_data', 'uses' => 'ProfildaerahController@data']);

# Daftar Download

Route::get('daftar_download', ['as' => 'daftar_download', 'uses' => 'DaftardownloadController@index']);

Route::get('daftar_download/data', ['as' => 'daftar_download', 'uses' => 'DaftardownloadController@data']);

# Galeri

Route::get('galeri', ['as' => 'galeri', 'uses' => 'GaleriController@index']);

Route::get('galeri/data', ['as' => 'galeri', 'uses' => 'GaleriController@data']);

# Jenis Perizinan

Route::get('jenis_perizinan', ['as' => 'jenis_perizinan', 'uses' => 'JenisperizinanController@index']);

# Jenis Perizinan

Route::get('layanan_online/pendaftaran_online', ['as' => 'layanan_online_pendaftaran_online', 'uses' => 'LayananonlineController@pendaftaran_online']);

# Layanan Online

Route::get('layanan_online/pengaduan_online', ['as' => 'layanan_online_pengaduan_online', 'uses' => 'LayananonlineController@pengaduan_online']);

# Kontak

Route::get('kontak', ['as' => 'kontak', 'uses' => 'KontakController@index']);

Route::get('kontak/data', ['as' => 'kontak_data', 'uses' => 'KontakController@data']);


# Admin ========================================================================================================================================================================================================


# Login

Route::get('login', ['as' => 'login', 'LoginController@index']);

# Admin

Route::get('admin', ['as' => 'admin', 'uses' => 'AdminController@index']);

# Admin / Info Publik

Route::get('admin/info_publik', ['as' => 'admin_info_publik', 'uses' => 'AdminController@info_publik']);

Route::get('admin/info_publik/data', ['as' => 'admin_info_publik_data', 'uses' => 'AdminController@info_publik_data']);

# Admin / Profil Daerah

Route::get('admin/profil_daerah', ['as' => 'admin_profil_daerah', 'uses' => 'AdminController@profil_daerah']);

Route::get('admin/profil_daerah/data', ['as' => 'admin_profil_daerah_data', 'uses' => 'AdminController@profil_daerah_data']);

# Admin / Download

Route::get('admin/download', ['as' => 'admin_download', 'uses' => 'AdminController@download']);

Route::get('admin/download/data', ['as' => 'admin_download_data', 'uses' => 'AdminController@download_data']);

# Admin / Galeri

Route::get('admin/galeri', ['as' => 'admin_galeri', 'uses' => 'AdminController@galeri']);

Route::get('admin/galeri/data', ['as' => 'admin_galeri_data', 'uses' => 'AdminController@galeri_data']);

# Admin / Pengaturan Website / Mengelola Header

Route::get('admin/pengaturan_website/mengelola_header', ['as' => 'admin_pengaturan_website_mengelola_header', 'uses' => 'AdminController@pengaturan_website_mengelola_header']);

Route::get('admin/pengaturan_website/mengelola_header/data', ['as' => 'admin_pengaturan_website_mengelola_header_data', 'uses' => 'AdminController@pengaturan_website_mengelola_header_data']);

# Admin / Pengaturan Website / Alamat Web Service

Route::get('admin/pengaturan_website/alamat_web_service', ['as' => 'admin_pengaturan_website_alamat_web_service', 'uses' => 'AdminController@pengaturan_website_alamat_web_service']);

Route::get('admin/pengaturan_website/alamat_web_service/data', ['as' => 'admin_pengaturan_website_alamat_web_service_data', 'uses' => 'AdminController@pengaturan_website_alamat_web_service_data']);

# Admin / Kontak Kami

Route::get('admin/kontak_kami', ['as' => 'admin_kontak_kami', 'uses' => 'AdminController@kontak_kami']);

Route::get('admin/kontak_kami/data', ['as' => 'admin_kontak_kami_data', 'uses' => 'AdminController@kontak_kami_data']);

# Admin / Jajak

Route::get('admin/jajak', ['as' => 'admin_jajak', 'uses' => 'AdminController@jajak']);

Route::get('admin/jajak/data', ['as' => 'admin_jajak_data', 'uses' => 'AdminController@jajak_data']);

# Admin / Admin User

Route::get('admin/admin_user', ['as' => 'admin_admin_user', 'uses' => 'AdminController@admin_user']);

Route::get('admin/admin_user/data', ['as' => 'admin_admin_user', 'uses' => 'AdminController@admin_user_data']);
