@extends('layouts.app', [
'namePage' => 'Edit Guru',
'class' => 'sidebar-mini',
'activePage' => 'dataGuru',
])

@section('content')
@include('alerts.errors')
@include('alerts.success')
    <h3 class="title-dashboard title">Edit Data Guru</h3>
    <hr>
    <div class="container">
        {{ Form::open(['action' => ['App\\Http\\Controllers\\GuruController@edit'], 'method' => 'POST',
        'class'=>'form-upload']) }}
        @csrf
        <div class="form-group">
            <input class="form-control" type="hidden" name="id"
                value="{{ $guru->id }}">
        </div>
        <div class="form-group">
            {{ Form::label('nama', 'Nama Guru: ', ['class' => 'form-label']) }}
            {{ Form::text('nama', $guru->nama, ['class' => 'form-control',Auth::user()->master?"":'disabled']) }}
        </div>
        <div class="form-group">
            {{ Form::label('username', 'Username: ', ['class' => 'form-label']) }}
            {{ Form::text('username', $guru->username, ['class' => 'form-control']) }}
        </div>
        <div class="form-group">
            {{ Form::label('link_meeting', 'Link Meeting: ', ['class' => 'form-label']) }}
            {{ Form::text('link_meeting', $guru->link_meeting, ['class' => 'form-control']) }}
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
        
        
        
        {{ Form::submit('Edit', ['class' => 'btn btn-primary']) }}
        <a href="{{route('admin.dataGuru')}}" class="btn btn-danger">Kembali</a>
        {{ Form::close() }}
    </div>
@endsection