@extends('layouts.admin')

@section('page-style')

    <style type="text/css">
        .c_no {
            width: 5%;
            text-align: center;
        }
        .c_user_id {
            width: 15%;
        }
        .c_otoritas {
            width: 10%;
        }
        .c_bagian {
            width: 15%;
        }
        .c_alamat_email {
            width: 15%;
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
    ng-controller="AdminUserCtrl"
@stop

@section('page-title')
    Admin / Admin User
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
                <input type="text" placeholder="Cari" ng-model="search" value="">
            </div>
        </div>
    </form>

@stop

@section('table-nav')
    <table>
        <tr>
            <th class="c_no">No</th>
            <th class="c_user_id">User ID</th>
            <th class="c_otoritas">Otoritas</th>
            <th class="c_bagian">Bagian</th>
            <th class="c_alamat_email">Alamat Email</th>
            <th class="c_tindakan">Tidankan</th>
        </tr>
    </table>
@stop

@section('table-content')

    <table role="table-fluid">
        <tr ng-repeat="aaud in admin_admin_user_data | orderBy:predicate:reverse | filter:search | limitTo:displayed ">
            <td class="c_no">@{{ $index+1 }}</td>
            <td class="c_user_id">@{{ aaud.c_user }}</td>
            <td class="c_otoritas">@{{ aaud.n_otoritas }}</td>
            <td class="c_bagian">@{{ aaud.c_dep }}</td>
            <td class="c_alamat_email">@{{ aaud.email }}</td>
            <td class="c_tindakan">@{{ aaud.id }}</td>
        </tr>
        <tr>
            <td colspan="6" style="text-align:center">
                <button ng-click="loadMore()" class="btn-load-more">Load More</button>
            </td>
        <tr>
    </table>

@stop
