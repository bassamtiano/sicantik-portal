@extends('layouts.index')

@section('js-script')
	{{ HTML::script('assets/controllers/LayananOnlineCtrl.js') }}
@stop

@section('page-title')
	Pengaduan Online
@stop

@section('body-article')

	<div class="body-article text" ng-controller="LayananOnlinePengaduanOnlineCtrl">
		<form class="form-vertical" method="post" action="http://localhost/sicantiklara/public/portal/layanan_online/test">

				<div class="form-item">
					<div class="item-label">
						Jenis Pengaduan
					</div>
					<div class="item-value">
						<select name="id" ng-model="myColor" ng-options="pjp.n_sts_pesan for pjp in portal_jenis_pengaduan_data track by pjp.sts_pesan_id ">
							<option value="">Pilih</option>
						</select>
					</div>
				</div>

				<div class="form-item">
					<div class="item-label">
						Nama Lengkap
					</div>
					<div class="item-value">
						<input type="text" name="nama" placeholder="Nama Lengkap">
					</div>
				</div>

				<div class="form-item">
					<div class="item-label">
						Kontak Telepon
					</div>
					<div class="item-value">
						<input type="text" name="nama" placeholder="Kontak Telepon">
					</div>
				</div>

				<div class="form-item">
					<div class="item-label">
						Alamat
					</div>
					<div class="item-value">
						<textarea rows="7" placeholder="Alamat"></textarea>
					</div>
				</div>

				<div class="form-item">
					<div class="item-label">
						Provinsi
					</div>
					<div class="item-value">
						<select name="id" ng-model="propinsi_pemohon" ng-options="pp.n_propinsi for pp in portal_propinsi_data track by pp.id ">
							<option value="">Pilih Propinsi</option>
						</select>
					</div>
				</div>

				<div class="form-item">
					<div class="item-label">
						Kabupaten
					</div>
					<div class="item-value">
						<select name="id" ng-model="kabupaten_pemohon" ng-options="pkab.n_kabupaten for pkab in portal_kabupaten_data track by pkab.id ">
							<option value="">Pilih Kabupaten</option>
						</select>
					</div>
				</div>

				<div class="form-item">
					<div class="item-label">
						Kecamatan
					</div>
					<div class="item-value">
						<select name="id" ng-model="kecamatan_pemohon" ng-options="pkec.n_kecamatan for pkec in portal_kecamatan_data track by pkec.id ">
							<option value="">Pilih Kecamatan</option>
						</select>
					</div>
				</div>

				<div class="form-item">
					<div class="item-label">
						Kelurahan
					</div>
					<div class="item-value">
						<select name="id" ng-model="kelurahan_pemohon" ng-options="pkel.n_kelurahan for pkel in portal_kelurahan_data track by pkel.id ">
							<option value="">Pilih Kelurahan</option>
						</select>
					</div>
				</div>

				<div class="form-item">
					<div class="item-label">
						Deskripsi Pengaduan
					</div>
					<div class="item-value">
						<textarea rows="7" placeholder="Deskripsi Pengaduan"></textarea>
					</div>
				</div>

				<div class="form-item">
					<div class="item-label">
						&nbsp;
					</div>
					<div class="item-value">
						<input type="submit" value="Submit">
					</div>
				</div>

		</form>
	</div>

@stop

@section('body-sidebar')

	<div class="sidebar-item-wrapper">
		<div class="sidebar-title">
			Periksa Status Permohonan
		</div>
		<div class="sidebar-content">
			<form class="search">
				<input type="text" class="search-text" placeholder="Nomor Pendaftaran">
				<button type="submit" class="search-button">S</button>
			</form>
		</div>
	</div>

	<div class="sidebar-item-wrapper">
		<div class="sidebar-title">
			Jajak Pendapat
		</div>
		<div class="sidebar-content">
			<form>
				<p class="content-pertanyaan">
					Bagaimana tampilan website ini ?
				</p>
				<table class="content-jawaban">
					<tr>
						<td class="jawaban-radio"><input type="radio" name="jajak-pendapat"></td>
						<td class="jawaban-label">Kurang baik</td>
					</tr>
					<tr>
						<td class="jawaban-radio"><input type="radio" name="jajak-pendapat"></td>
						<td class="jawaban-label">Biasa saja</td>
					</tr>
					<tr>
						<td class="jawaban-radio"><input type="radio" name="jajak-pendapat"></td>
						<td class="jawaban-label">Baik</td>
					</tr>
					<tr>
						<td class="jawaban-radio"><input type="radio" name="jajak-pendapat"></td>
						<td class="jawaban-label">Baik sekali</td>
					</tr>
				</table>
				<div class="content-button-wrapper">
					<div class="button-left">
						<button type="submit" class="sidebar-button">Vote</button>
					</div>
					<div class="button-right">
						<a href="#" class="sidebar-button">Lihat Hasil</a>
					</div>
				</div>
			</form>
		</div>
	</div>

	<div class="sidebar-item-wrapper">
		<div class="sidebar-title">
			Daftar Download
		</div>
		<div class="sidebar-content">
			<ul>
				<a href="#"><li>PP No 82 Tahun 2012 Tentang Penyelenggaraan Sistem dan Transaksi Elektronik</li></a>
				<a href="#"><li>UU No 25 Tahun 2009 Tentang Pelayanan Publik</li></a>
			<ul>
		</div>
	</div>

@stop
