@extends('layouts.app', [
'namePage' => 'Edit Siswa',
'class' => 'sidebar-mini',
'activePage' => 'dataMurid',
])

@section('content')
@include('alerts.errors')
@include('alerts.success')
    <h3 class="title-dashboard title">Edit Data Siswa</h3>
    <hr>
    <div class="container">
        {{ Form::open(['action' => ['App\\Http\\Controllers\\MuridController@edit'], 'method' => 'POST',
        'class'=>'form-upload']) }}
        @csrf
        <div class="form-group">
            <input class="form-control" type="hidden" name="id"
                value="{{ $murid->id }}">
        </div>
        <div class="form-group">
            {{ Form::label('nama', 'Nama Siswa: ', ['class' => 'form-label']) }}
            {{ Form::text('nama', $murid->nama, ['class' => 'form-control',Auth::user()->master?"":'disabled']) }}
        </div>
        <div class="form-group">
            {{ Form::label('username', 'Username: ', ['class' => 'form-label']) }}
            {{ Form::text('username', $murid->username, ['class' => 'form-control']) }}
        </div>
        <div class="form-group">
            {{ Form::label('asal_sekolah', 'Asal Sekolah: ', ['class' => 'form-label']) }}
            {{ Form::text('asal_sekolah', $murid->asal_sekolah, ['class' => 'form-control']) }}
        </div>
        <div class="form-group">
            {{ Form::label('kelas', 'Kelas: ', ['class' => 'form-label']) }}
            <select class="browser-default custom-select"  name = 'kelas'>
                <option value="1">1 SD</option>
                <option value="2">2 SD</option>
                <option value="3">3 SD</option>
                <option value="4">4 SD</option>
                <option value="5">5 SD</option>
                <option value="6">6 SD</option>
                <option value="7">7 SMP</option>
                <option value="8">8 SMP</option>
                <option value="9">9 SMP</option>
                <option value="10">10 SMA</option>
                <option value="11">11 SMA</option>
                <option value="12">12 SMA</option>
            </select>
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
            {{ Form::label('status', 'Status: ', ['class' => 'form-label']) }}
            <div class="form-check">
                {{Form::radio('status', 1, false,['class' => 'form-check-input'])}}
                <label class="form-check-label" for="flexRadioDefault1" style="padding:0">
                  Aktif
                </label>
              </div>
              <div class="form-check">
                {{Form::radio('status', 0, false,['class' => 'form-check-input'])}}
                <label class="form-check-label" for="flexRadioDefault2" style="padding:0">
                  Non Aktif
                </label>
              </div>
        </div>
        <div class="form-group">
            {{ Form::label('password', 'Password: ', ['class' => 'form-label']) }}
            {{ Form::password('password', ['class' => 'form-control']) }}
        </div>
        
        
        
        {{ Form::submit('Edit', ['class' => 'btn btn-primary']) }}
        <a href="{{route('admin.dataMurid')}}" class="btn btn-danger">Kembali</a>
        {{ Form::close() }}
    </div>
@endsection