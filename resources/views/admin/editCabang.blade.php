@extends('layouts.app', [
'namePage' => 'Edit Cabang',
'class' => 'sidebar-mini',
'activePage' => 'dataCabang',
])

@section('content')
@include('alerts.errors')
@include('alerts.success')
    <h3 class="title-dashboard title">Edit Data Cabang</h3>
    <hr>
    <div class="container">
        {{ Form::open(['action' => ['App\\Http\\Controllers\\CabangController@edit'], 'method' => 'POST',
        'class'=>'form-upload']) }}
        @csrf
        <div class="form-group">
            <input class="form-control" type="hidden" name="id"
                value="{{ $cabang->id }}">
        </div>
        <div class="form-group">
            {{ Form::label('nama', 'Nama Cabang: ', ['class' => 'form-label']) }}
            {{ Form::text('nama', $cabang->nama, ['class' => 'form-control',]) }}
        </div>
        
        
        {{ Form::submit('Edit', ['class' => 'btn btn-primary']) }}
        <a href="{{route('admin.dataCabang')}}" class="btn btn-danger">Kembali</a>
        {{ Form::close() }}
    </div>
@endsection