@extends('layouts.app', [
'namePage' => 'Edit Jadwal',
'class' => 'sidebar-mini',
'activePage' => 'jadwalGuru',
])

@section('content')
<div class="container-fluid">
@include('alerts.errors')
@include('alerts.success')
    <h3 class="title-dashboard title">Edit Jadwal Siswa</h3>
    <hr>
    <div class="container">
        {{ Form::open(['action' => ['App\\Http\\Controllers\\JadwalController@edit_guru'], 'method' => 'POST',
        'enctype' =>'multipart/form-data', 'files' => true,'class'=>'form-upload']) }}
        @csrf
        <div class="form-group">
            {{ Form::label('tanggal', 'Tanggal: ', ['class' => 'form-label']) }}
            {{Form::date('tanggal', $jadwal->tanggal,['class'=>'form-control'])}}
        </div>
        <div class="form-group">
            {{ Form::label('sesi', 'Sesi: ', ['class' => 'form-label']) }}
            <select class="browser-default custom-select"  name = 'sesi'>
                <option value="0">--- Pilih Sesi ---</option>
                <option value="1" <?php if ($jadwal->sesi == 1) echo "selected"?>>13.45-15.15</option>
                <option value="2" <?php if ($jadwal->sesi == 2) echo "selected"?>>15.30-17.00</option>
                <option value="3" <?php if ($jadwal->sesi == 3) echo "selected"?>>17.15-18.45</option>
                <option value="4" <?php if ($jadwal->sesi == 4) echo "selected"?>>19.15-20.45</option>
            </select>
        </div>
        <div class="form-group">
            {{ Form::label('nama_mapel', 'Mata Pelajaran: ', ['class' => 'form-label']) }}
            <select class="browser-default custom-select"  name = 'id_mapel'>
                <option value="0">--- Pilih Mata Pelajaran ---</option>
                @foreach ($mapel as $m)
            <option value="{{$m->id}}" <?php if ($m->id == $jadwal->id_mapel) echo "selected"?>>{{$m->nama}}</option>
                @endforeach
              </select>
        </div>
        <div class="form-group">
            {{ Form::label('nama_murid', 'Pengajar: ', ['class' => 'form-label']) }}
            <select class="browser-default custom-select"  name = 'id_murid'>
                <option value="0">--- Pilih Murid ---</option>
                @foreach ($murid as $m)
                <option value="{{$m->id}}" <?php if ($m->id == $jadwal->id_murid) echo "selected"?>>{{$m->nama}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="materi" class="form-label">Materi yang ingin dipelajari: </label>
            <input class="form-control" name="materi" type="text" id="materi" value="{{$jadwal->materi}}">
        </div>
        <div class="form-group">
            {{ Form::label('soal', 'Upload Bahan (optional): ', ['class' => 'form-label']) }}
            <div class="custom-file">
                {{ Form::file('soal', ['class' => 'custom-file-input', 'aria-describedby' => 'inputGroupFileAddon01','id'=>'inputGroupFile01' ]) }}
                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
            </div>
        </div>
        <input class="form-control" type="hidden" name="id" value="{{ $jadwal->id}}">
        {{ Form::submit('Edit Jadwal', ['class' => 'btn btn-primary']) }}
        <a href="{{route('guru.jadwal')}}" class="btn btn-danger">Kembali</a>
        {{ Form::close() }}
    </div></div>
@endsection