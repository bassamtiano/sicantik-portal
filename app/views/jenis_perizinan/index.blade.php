@extends('layouts.index')

@section('page-title')
	Jenis Perizinan
@stop

@section('js-script')
	{{ HTML::script('assets/controllers/JenisPerizinanCtrl.js') }}
@stop

@section('body-article')

	<div class="body-article text" ng-controller="JenisPerizinanCtrl">

		<div class="article-search-wrapper">
			<form>
				<input type="text" placeholder="Cari" ng-model="search">
			</form>
		</div>

		<table class="article-item-table">
			<tr>
				<th style="text-align:center; width:10%;">No</th>
				<th style="width:57%;">Jenis Perizinan</th>
				<th style="text-align:center; width:15%;">Lama Pengerjaan</th>
				<th style="text-align:center; width:18%;">Persyaratan</th>
			</tr>
			<tr ng-repeat="jp in portal_jenis_perizinan_data | orderBy:predicate:reverse | filter:search">
				<td style="text-align:center;">@{{ $index+1 }}</td>
				<td>@{{ jp.n_perizinan }}</td>
				<td style="text-align:center;">@{{ jp.v_hari }}</td>
				<td style="text-align:center;"><a href="#">@{{ jp.id }}</a></td>
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
