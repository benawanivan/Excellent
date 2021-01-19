@extends('layouts.app', [
    'namePage' => 'Profile Siswa',
    'class' => 'sidebar-mini',
    'activePage' => 'profileMurid',
    ])

@section('content')
<div class="container-fluid">
@include('alerts.errors')
@include('alerts.success')
    <h3 class="title title-dashboard">Profile Siswa</h3>
    <hr>
    <div class="col">
        <div class="card ">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0">Nama Lengkap</h6>
              </div>
              <div class="col-sm-9 text-secondary">
                {{Auth::user()->nama}}
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0">Asal Sekolah</h6>
              </div>
              <div class="col-sm-9 text-secondary">
                {{Auth::user()->asal_sekolah}}
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0">Kelas</h6>
              </div>
              <div class="col-sm-9 text-secondary">
                {{Auth::user()->kelas}}
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0">Cabang</h6>
              </div>
              <div class="col-sm-9 text-secondary">
                {{Auth::user()->cabang->nama}}
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0">Username</h6>
              </div>
              <div class="col-sm-9 text-secondary">
                {{Auth::user()->username}}
              </div>
            </div>
           
          </div>
        </div>
    <hr>
        {{ Form::open(['action' => ['App\\Http\\Controllers\\MuridController@updateProfile'], 'method' => 'PUT']) }}

        <div class="form-group">
            {{ Form::label('password', 'Password: ', ['class' => 'form-label']) }}
            {{ Form::password('password',['class' => 'form-control'])}}
        </div>
        <div class="form-group">
            {{ Form::label('repassword', 'Confirm Password: ', ['class' => 'form-label']) }}
            {{ Form::password('repassword',['class' => 'form-control'])}}
        </div>

        {{ Form::submit('Update Password', ['class' => 'btn btn-primary']) }}
        {{ Form::close() }}
    </div>
@endsection