@extends('layouts.admin')

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
    Admin / Download
@stop

@section('menu-left')

@stop

@section('menu-right')

    <form>
        <div class="table-form-content">
            <div class="form-item">
                &nbsp;
            </div>
            <div class="form-item">
                &nbsp;
            </div>
            <div class="form-item wide">
                <input type="text" placeholder="Cari" ng-model="search">
            </div>
        </div>
    </form>

@stop

@section('table-nav')
    <table>
        <tr>
            <th class="c_no">No</th>
            <th class="c_tanggal">Tanggal</th>
            <th class="c_judul">Judul</th>
            <th class="c_status">Status</th>
            <th class="c_tindakan">Tindakan</th>
        </tr>
    </table>
@stop

@section('table-content')

    <table role="table-fluid">
        <tr ng-repeat="aipd in admin_info_publik_data | orderBy:predicate:reverse | filter:search | limitTo:displayed ">
            <td class="c_no">@{{ $index+1 }}</td>
            <td class="c_tanggal">@{{ aipd.D_BERITA }}</td>
            <td class="c_judul">@{{ aipd.N_JUDUL_BERITA }}</td>
            <td class="c_status">
                <a href ng-if="aipd.C_STATUS_BERITA = 1">
                    DITERBITKAN
                </a>
                <a href ng-if="aipd.C_STATUS_BERITA = 0">
                    TIDAK DITERBITKAN
                </a>
            </td>
            <td class="c_tindakan"><a ng-click="modal_delete(kdla.id)">@{{ aipd.C_BERITA }}</a></td>
        </tr>
        <tr>
            <td colspan="6" style="text-align:center">
                <button ng-click="loadMore()" class="btn-load-more">Load More</button>
            </td>
        <tr>
    </table>

@stop
