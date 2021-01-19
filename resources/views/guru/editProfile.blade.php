@extends('layouts.app', [
    'namePage' => 'Edit Profil',
    'class' => 'sidebar-mini',
    'activePage' => 'editprofil',
    ])

@section('content')
<div class="container">
    <br>
    <div class="row">
        <div class="col-md-12">
        <div class="card">
            <div class="card-header">
            <h4 class="card-title"> Profile Pengajar </h4>
            </div>
            <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                <tbody>
                    <tr>
                    <td>
                        Nama
                    </td>
                    <td>
                    {{ \Auth::user()->nama }}
                    </td>
                    </tr>
                    <tr>
                    <td>
                        Username
                    </td>
                    <td>
                    {{ \Auth::user()->username }}
                    </td>
                    </tr>
                    <tr>
                    <td>
                        Cabang
                    </td>
                    <td>
                    {{ \Auth::user()->id_cabang}}
                    </td>
                    </tr>
                </tbody>
                </table>
            </div>
            </div>
        </div>
        </div>
    </div>

</div>
@endsection