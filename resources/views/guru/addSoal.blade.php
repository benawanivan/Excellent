@extends('layouts.app', [
'namePage' => 'Tambah Soal',
'class' => 'sidebar-mini',
'activePage' => 'soalGuru',
])

@section('content')
@include('alerts.errors')
@include('alerts.success')
    <h3 class="title-dashboard title">Tambah Data Soal</h3>
    <hr>
    <div class="container">
        {{ Form::open(['action' => ['App\\Http\\Controllers\\SoalController@store'], 'method' => 'POST',
        'enctype' =>'multipart/form-data', 'files' => true,'class'=>'form-upload']) }}
        @csrf
        <div class="form-group">
            {{ Form::label('judul', 'Nama Soal: ', ['class' => 'form-label']) }}
            {{ Form::text('judul', null, ['class' => 'form-control']) }}
        </div>
        <div class="form-group">
            {{ Form::label('nama_mapel', 'Mata Pelajaran: ', ['class' => 'form-label']) }}
            <select class="browser-default custom-select"  name = 'id_mapel'>
                @foreach ($mapel as $m)
            <option value="{{$m->id}}">{{$m->nama}}</option>
                @endforeach
              </select>
        </div>
        
        <div class="form-group">
            <div class="custom-file">
                {{ Form::file('soal', ['class' => 'custom-file-input', 'aria-describedby' => 'inputGroupFileAddon01','id'=>'inputGroupFile01' ]) }}
                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
            </div>
        </div>
        {{ Form::submit('Tambah', ['class' => 'btn btn-primary']) }}
        <a href="{{route('murid.soal')}}" class="btn btn-danger">Kembali</a>
        {{ Form::close() }}
    </div>
@endsection