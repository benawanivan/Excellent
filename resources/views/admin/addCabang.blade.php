@extends('layouts.app', [
'namePage' => 'Tambah Cabang',
'class' => 'sidebar-mini',
'activePage' => 'dataCabang',
])

@section('content')
@include('alerts.errors')
@include('alerts.success')
    <h3 class="title-dashboard title">Tambah Data Cabang</h3>
    <hr>
    <div class="container">
        {{ Form::open(['action' => ['App\\Http\\Controllers\\CabangController@store'], 'method' => 'POST',
        'class'=>'form-upload']) }}
        @csrf
        <div class="form-group">
            {{ Form::label('nama', 'Nama Cabang: ', ['class' => 'form-label']) }}
            {{ Form::text('nama', null, ['class' => 'form-control']) }}
        </div>
        
        
        {{ Form::submit('Tambah', ['class' => 'btn btn-primary']) }}
        <a href="{{route('admin.dataCabang')}}" class="btn btn-danger">Kembali</a>
        {{ Form::close() }}
    </div>
@endsection