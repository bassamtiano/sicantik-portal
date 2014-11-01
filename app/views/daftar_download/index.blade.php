@extends('layouts.index')

@section('page-title')
	Daftar Download
@stop

@section('js-script')

	{{ HTML::script('assets/controllers/DownloadCtrl.js') }}

@stop

@section('body-article')

	<div class="body-article text" ng-controller="DownloadCtrl">

		<div class="article-search-wrapper">
			<form>
				<input type="text" placeholder="Cari" ng-model="search">
			</form>
		</div>

		<table class="article-item-table">
			<tr>
				<th>No</th>
				<th>Nama File</th>
				<th style="text-align:center;">Download</th>
			</tr>
			<tr ng-repeat="dd in daftar_download_data | orderBy:predicate:reverse | filter:search">
				<td style="text-align:center;">@{{ $index+1 }}</td>
				<td>@{{ dd.N_KETERANGAN_DOWNLOAD }}</td>
				<td style="text-align:center;"><a href="assets/uploads/download/@{{ dd.N_ALAMAT_DOWNLOAD }}">Download</a></td>
			</tr>
		</table>

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
