@extends('layouts.app', [
'namePage' => 'Tambah Jadwal',
'class' => 'sidebar-mini',
'activePage' => 'jadwalGuru',
])

@section('content')
<div class="container-fluid">
@include('alerts.errors')
@include('alerts.success')
    <h3 class="title-dashboard title">Tambah Jadwal Bimbel</h3>
    <hr>
    <div class="container">
        {{ Form::open(['action' => ['App\\Http\\Controllers\\JadwalController@storeGuru'], 'method' => 'POST',
        'enctype' =>'multipart/form-data', 'files' => true,'class'=>'form-upload']) }}
        @csrf
        <div class="form-group">
            {{ Form::label('tanggal', 'Tanggal: ', ['class' => 'form-label']) }}
            {{Form::date('tanggal', $tanggal,['class'=>'form-control'])}}
        </div>
        <div class="form-group">
            {{ Form::label('sesi', 'Sesi: ', ['class' => 'form-label']) }}
            <select class="browser-default custom-select"  name = 'sesi'>
                <option value="0">--- Pilih Sesi ---</option>
                <option value="1">13.45-15.15</option>
                <option value="2">15.30-17.00</option>
                <option value="3">17.15-18.45</option>
                <option value="4">19.15-20.45</option>
            </select>
        </div>
        <div class="form-group">
            {{ Form::label('nama_mapel', 'Mata Pelajaran: ', ['class' => 'form-label']) }}
            <select class="browser-default custom-select"  name = 'id_mapel'>
                <option value="0">--- Pilih Mata Pelajaran ---</option>
                @foreach ($mapel as $m)
            <option value="{{$m->id}}">{{$m->nama}}</option>
                @endforeach
              </select>
        </div>
        <div class="form-group">
            {{ Form::label('nama_murid', 'Siswa: ', ['class' => 'form-label']) }}
            <select class="browser-default custom-select"  name = 'id_murid'>
                <option value="0">--- Pilih Siswa ---</option>
                @foreach ($murid as $m)
            <option value="{{$m->id}}">{{$m->nama}}</option>
                @endforeach
              </select>
        </div>
        <div class="form-group">
            {{ Form::label('materi', 'Materi yang ingin dipelajari: ', ['class' => 'form-label']) }}
            {{ Form::text('materi', null, ['class' => 'form-control']) }}
        </div>
        <div class="form-group">
            {{ Form::label('soal', 'Upload Bahan (optional): ', ['class' => 'form-label']) }}
            <div class="custom-file">
                {{ Form::file('soal', ['class' => 'custom-file-input', 'aria-describedby' => 'inputGroupFileAddon01','id'=>'inputGroupFile01' ]) }}
                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
            </div>
        </div>
        {{ Form::submit('Tambah', ['class' => 'btn btn-primary']) }}
        <a href="{{route('guru.jadwal')}}" class="btn btn-danger">Kembali</a>
        {{ Form::close() }}
    </div>
</div>
@endsection