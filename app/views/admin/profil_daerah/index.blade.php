@extends('layouts.admin_text')

@section('page-style')

	<style type="text/css">
		.c_no {
			width: 5%;
			text-align: center;
		}

		.c_tanggal {
			width: 10%;
		}

		.c_judul {
			width: 60%;
		}
		.c_status {
			width: 10%;
			text-align: center;
		}
		.c_tindakan {
			width: 10%;
			text-align: center;
		}
	</style>

@stop

@section('page-script')
	{{ HTML::script('assets/controllers/AdminCtrl.js') }}
@stop

@section('angular-controller')
	ng-controller="AdminInfoPublikCtrl"
@stop

@section('page-title')
	Admin / Profil Daerah
@stop

@section('page-content')

	<div class="page-content">
		<form>
			<div class="page-form">
				<div class="form-label">
					Nama Profil
				</div>
				<div class="form-input">
					<input type="text">
				</div>
			</div>
			<div class="page-form">
				<div class="form-title">
					Isi Profil
				</div>
			</div>
			<div class="page-form">
				<div class="form-input wide">
					<form>
						<textarea name="content" style="width:100%"></textarea>
					</form>
				</div>
			</div>
		</form>
	</div>

@stop
