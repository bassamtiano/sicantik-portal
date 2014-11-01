@extends('layouts.admin')

@section('page-style')

    <style type="text/css">
        .c_no {
            width: 5%;
            text-align: center;
        }

        .c_periode {
            width: 10%;
            text-align:center;
        }

        .c_judul {
            width: 40%;
        }
        .c_status {
            width: 10%;
            text-align: center;
        }

        .c_hasil {
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
    ng-controller="AdminJajakCtrl"
@stop

@section('page-title')
    Admin / Jajak
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
            <th class="c_judul">Judul Jajak</th>
            <th class="c_periode">Periode Awal</th>
            <th class="c_periode">Periode Akhir</th>
            <th class="c_status">Status</th>
            <th class="c_hasil">Hasil</th>
            <th class="c_tindakan">Tindakan</th>
        </tr>
    </table>
@stop

@section('table-content')

    <table role="table-fluid">
        <tr ng-repeat="ajd in admin_jajak_data | orderBy:predicate:reverse | filter:search | limitTo:displayed ">
            <td class="c_no">@{{ $index+1 }}</td>
            <td class="c_judul">@{{ ajd.N_TANYA }}</td>
            <td class="c_periode">@{{ ajd.D_PRD_AWAL }}</td>
            <td class="c_periode">@{{ ajd.D_PRD_AKHIR }}</td>
            <td class="c_status">@{{ ajd.STATUS }}</td>
            <td class="c_hasil">@{{ ajd.C_JAJAK }}</td>
            <td class="c_tindakan">@{{ ajd.C_JAJAK }}</td>
        </tr>
        <tr>
            <td colspan="7" style="text-align:center">
                <button ng-click="loadMore()" class="btn-load-more">Load More</button>
            </td>
        <tr>
    </table>

@stop
