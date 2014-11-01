@extends('layouts.index')

@section('js-script')
	{{ HTML::script('assets/controllers/LayananOnlineCtrl.js') }}
@stop

@section('page-title')
	Pendaftaran Online
@stop

@section('body-article')

	<div class="body-article text" ng-controller="LayananOnlinePendaftaranOnlineCtrl">
		<form class="form-vertical" method="post" action="http://localhost/sicantiklara/public/portal/layanan_online/test">

				<label class="item-title">
					Data Pemohon
				</label>


				<div class="form-item">
					<div class="item-label">
						Jenis Identitas
					</div>
					<div class="item-value">
						<!-- <select name="id" ng-model="myColor" ng-options="pjp.n_sts_pesan for pjp in portal_jenis_pengaduan_data track by pjp.sts_pesan_id "> -->
						<select name="id">
							<option value="">Pilih Jenis Identitas</option>
							<option value="KTP">KTP</option>
							<option value="SIM">SIM</option>
							<option value="Passport">Passport</option>
						</select>
					</div>
				</div>

				<div class="form-item">
					<div class="item-label">
						ID Identitas
					</div>
					<div class="item-value">
						<input type="text" name="nama" placeholder="Id Identitas">
					</div>
				</div>

				<div class="form-item">
					<div class="item-label">
						Nama Pemohon
					</div>
					<div class="item-value">
						<input type="text" name="nama" placeholder="Nama Pemohon">
					</div>
				</div>

				<div class="form-item">
					<div class="item-label">
						Telepon / HP
					</div>
					<div class="item-value">
						<input type="text" name="nama" placeholder="Telepon / HP">
					</div>
				</div>

				<div class="form-item">
					<div class="item-label">
						Alamat Pemohon
					</div>
					<div class="item-value">
						<textarea rows="7" placeholder="Alamat Pemohon"></textarea>
					</div>
				</div>

				<div class="form-item">
					<div class="item-label">
						Provinsi
					</div>
					<div class="item-value">
						<select name="id" ng-model="propinsi_pemohon" ng-options="pp.n_propinsi for pp in portal_propinsi_data track by pp.id ">
							<option value="">Pilih Provinsi Pemohon</option>
						</select>
					</div>
				</div>

				<div class="form-item">
					<div class="item-label">
						Kabupaten
					</div>
					<div class="item-value">
						<select name="id" ng-model="kabupaten_pemohon" ng-options="pkab.n_kabupaten for pkab in portal_kabupaten_data track by pkab.id ">
							<option value="">Pilih Kabupaten Pemohon</option>
						</select>
					</div>
				</div>

				<div class="form-item">
					<div class="item-label">
						Kecamatan
					</div>
					<div class="item-value">
						<select name="id" ng-model="kecamatan_pemohon" ng-options="pkec.n_kecamatan for pkec in portal_kecamatan_data track by pkec.id ">
							<option value="">Pilih Kecamatan Pemohon</option>
						</select>
					</div>
				</div>

				<div class="form-item">
					<div class="item-label">
						Kelurahan
					</div>
					<div class="item-value">
						<select name="id" ng-model="kelurahan_pemohon" ng-options="pkel.n_kelurahan for pkel in portal_kelurahan_data track by pkel.id ">
							<option value="">Pilih Kelurahan Pemohon</option>
						</select>
					</div>
				</div>


				<label class="item-title">
					Data Perusahaan
				</label>


				<div class="form-item">
					<div class="item-label">
						NPWP Perusahaan
					</div>
					<div class="item-value">
						<input type="text" name="nama" placeholder="NPWP Perusahaan">
					</div>
				</div>

				<div class="form-item">
					<div class="item-label">
						Nama Perusahaan
					</div>
					<div class="item-value">
						<input type="text" name="nama" placeholder="Nama Perusahaan">
					</div>
				</div>

				<div class="form-item">
					<div class="item-label">
						Alamat Perusahaan
					</div>
					<div class="item-value">
						<textarea rows="7" placeholder="Alamat Perusahaan"></textarea>
					</div>
				</div>

				<div class="form-item">
					<div class="item-label">
						Telepon Perusahaan
					</div>
					<div class="item-value">
						<input type="text" name="nama" placeholder="Telepon Perusahaan">
					</div>
				</div>

				<div class="form-item">
					<div class="item-label">
						Provinsi
					</div>
					<div class="item-value">
						<select name="id" ng-model="propinsi_perusahaan" ng-options="pp.n_propinsi for pp in portal_propinsi_data track by pp.id ">
							<option value="">Pilih Propinsi Perusahaan</option>
						</select>
					</div>
				</div>

				<div class="form-item">
					<div class="item-label">
						Kabupaten
					</div>
					<div class="item-value">
						<select name="id" ng-model="kabupaten_perusahaan" ng-options="pkabp.n_kabupaten for pkabp in portal_kabupaten_perusahaan_data track by pkabp.id ">
							<option value="">Pilih Kabupaten Perusahaan</option>
						</select>
					</div>
				</div>

				<div class="form-item">
					<div class="item-label">
						Kecamatan
					</div>
					<div class="item-value">
						<select name="id" ng-model="kecamatan_perusahaan" ng-options="pkecp.n_kecamatan for pkecp in portal_kecamatan_perusahaan_data track by pkecp.id ">
							<option value="">Pilih Kecamatan Perusahaan</option>
						</select>
					</div>
				</div>

				<div class="form-item">
					<div class="item-label">
						Kelurahan
					</div>
					<div class="item-value">
						<select name="id" ng-model="kelurahan_perusahaan" ng-options="pkelp.n_kelurahan for pkelp in portal_kelurahan_perusahaan_data track by pkelp.id ">
							<option value="">Pilih Kelurahan Perusahaan</option>
						</select>
					</div>
				</div>

				<div class="form-item">
					<div class="item-label">
						Lampiran
					</div>
					<div class="item-value">
						<input type="file">
					</div>
				</div>

				<label class="item-title">
					Data Perizinan
				</label>

				<div class="form-item">
					<div class="item-label">
						Izin Gangguan
					</div>
					<div class="item-value">
						<select name="id" ng-model="myColor" ng-options="pjper.n_perizinan for pjper in portal_jenis_perizinan_data track by pjper.id ">
							<option value="">Pilih Izin Gangguan</option>
						</select>
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
