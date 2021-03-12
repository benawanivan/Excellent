@extends('layouts.app', [
'namePage' => 'Edit Admin',
'class' => 'sidebar-mini',
'activePage' => 'dataadmin',
])

@section('content')
@include('alerts.errors')
@include('alerts.success')
    <h3 class="title-dashboard title">Edit Data Admin</h3>
    <hr>
    <div class="container">
        {{ Form::open(['action' => ['App\\Http\\Controllers\\AdminController@edit'], 'method' => 'POST',
        'class'=>'form-upload']) }}
        @csrf
        <div class="form-group">
            <input class="form-control" type="hidden" name="id"
                value="{{ $admin->id }}">
        </div>
        <div class="form-group">
            {{ Form::label('nama', 'Nama Admin: ', ['class' => 'form-label']) }}
            {{ Form::text('nama', $admin->nama, ['class' => 'form-control']) }}
        </div>
        <div class="form-group">
            {{ Form::label('username', 'Username: ', ['class' => 'form-label']) }}
            {{ Form::text('username', $admin->username, ['class' => 'form-control']) }}
        </div>
        
        <div class="form-group">
            {{ Form::label('cabang', 'Cabang: ', ['class' => 'form-label']) }}
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
        <a href="{{route('admin.dataAdmin')}}" class="btn btn-danger">Kembali</a>
        {{ Form::close() }}
    </div>
@endsection