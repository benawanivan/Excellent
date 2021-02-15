@extends('layouts.app', [
'namePage' => 'Tambah Soal',
'class' => 'sidebar-mini',
'activePage' => 'tryoutGuru',
])

@section('content')
@include('alerts.errors')
@include('alerts.success')
    <h3 class="title-dashboard title">Tambah Data Soal Tryout</h3>
    <hr>
    <div class="container">
        {{ Form::open(['action' => ['App\\Http\\Controllers\\TryoutController@store'], 'method' => 'POST',
        'enctype' =>'multipart/form-data', 'files' => true,'class'=>'form-upload']) }}
        @csrf
        <div class="form-group">
            {{ Form::label('judul', 'Nama Tryout: ', ['class' => 'form-label']) }}
            {{ Form::text('judul', null, ['class' => 'form-control']) }}
        </div>
        <div class="form-group">
            {{ Form::label('link', 'Link Tryout: ', ['class' => 'form-label']) }}
            {{ Form::text('link', null, ['class' => 'form-control']) }}
        </div>
        <div class="form-group">
            <label for="text-input" class=" form-label">Tingkat</label>
            <select name="kelas" class="form-control">
                <option value="" disabled selected>Pilih Tingkatan</option>
                <option value="SMA">SMA</option>
                <option value="SMP">SMP</option>
                <option value="SD">SD</option>
            </select>
        </div>

        {{ Form::submit('Tambah', ['class' => 'btn btn-primary']) }}
        <a href="{{route('guru.tryout')}}" class="btn btn-danger">Kembali</a>
        {{ Form::close() }}
    </div>
@endsection