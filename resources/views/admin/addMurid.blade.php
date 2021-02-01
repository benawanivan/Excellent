@extends('layouts.app', [
'namePage' => 'Tambah Siswa',
'class' => 'sidebar-mini',
'activePage' => 'dataMurid',
])

@section('content')
@include('alerts.errors')
@include('alerts.success')
    <h3 class="title-dashboard title">Tambah Data Siswa</h3>
    <hr>
    <div class="container">
        {{ Form::open(['action' => ['App\\Http\\Controllers\\MuridController@store'], 'method' => 'POST',
        'class'=>'form-upload']) }}
        @csrf
        <div class="form-group">
            {{ Form::label('nama', 'Nama Siswa: ', ['class' => 'form-label']) }}
            {{ Form::text('nama', null, ['class' => 'form-control']) }}
        </div>
        <div class="form-group">
            {{ Form::label('username', 'Username: ', ['class' => 'form-label']) }}
            {{ Form::text('username', null, ['class' => 'form-control']) }}
        </div>
        <div class="form-group">
            {{ Form::label('asal_sekolah', 'Asal Sekolah: ', ['class' => 'form-label']) }}
            {{ Form::text('asal_sekolah', null, ['class' => 'form-control']) }}
        </div>
        <div class="form-group">
            {{ Form::label('kelas', 'Kelas: ', ['class' => 'form-label']) }}
            {{ Form::number('kelas', null, ['class' => 'form-control']) }}
        </div>
        <div class="form-group">
            {{ Form::label('nama_mapel', 'Cabang: ', ['class' => 'form-label']) }}
            <select class="browser-default custom-select"  name = 'id_cabang'>
                @foreach ($cabang as $c)
            <option value="{{$c->id}}">{{$c->nama}}</option>
                @endforeach
              </select>
        </div>
        <div class="form-group">
            {{ Form::label('password', 'Password: ', ['class' => 'form-label']) }}
            {{ Form::password('password', ['class' => 'form-control']) }}
        </div>
        
        
        
        {{ Form::submit('Tambah', ['class' => 'btn btn-primary']) }}
        <a href="{{route('admin.dataMurid')}}" class="btn btn-danger">Kembali</a>
        {{ Form::close() }}
    </div>
@endsection