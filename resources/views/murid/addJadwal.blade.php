@extends('layouts.app', [
'namePage' => 'Tambah Jadwal',
'class' => 'sidebar-mini',
'activePage' => 'jadwalMurid',
])

@section('content')
<div class="container-fluid">
@include('alerts.errors')
@include('alerts.success')
    <h3 class="title-dashboard title">Tambah Jadwal Bimbel</h3>
    <hr>
    <div class="container">
        {{ Form::open(['action' => ['App\\Http\\Controllers\\SoalController@store'], 'method' => 'POST',
        'enctype' =>'multipart/form-data', 'files' => true,'class'=>'form-upload']) }}
        @csrf
        <div class="form-group">
            {{ Form::label('tanggal', 'Tanggal: ', ['class' => 'form-label']) }}
            {{Form::date('tanggal', $tanggal,['class'=>'form-control'])}}
        </div>
        {{ Form::submit('Tambah', ['class' => 'btn btn-primary']) }}
        <a href="{{route('murid.jadwal')}}" class="btn btn-danger">Kembali</a>
        {{ Form::close() }}
    </div></div>
@endsection