@extends('layouts.app', [
'namePage' => 'Tambah Mapel',
'class' => 'sidebar-mini',
'activePage' => 'dataMapel',
])

@section('content')
@include('alerts.errors')
@include('alerts.success')
    <h3 class="title-dashboard title">Tambah Data Mata Pelajaran</h3>
    <hr>
    <div class="container">
        {{ Form::open(['action' => ['App\\Http\\Controllers\\MapelController@store'], 'method' => 'POST',
        'class'=>'form-upload']) }}
        @csrf
        <div class="form-group">
            {{ Form::label('nama', 'Nama Cabang: ', ['class' => 'form-label']) }}
            {{ Form::text('nama', null, ['class' => 'form-control']) }}
        </div>
        <div class="form-group">
            {{ Form::label('tingkat', 'Kelas: ', ['class' => 'form-label']) }}
            <select class="browser-default custom-select"  name = 'tingkat'>
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
        
        {{ Form::submit('Tambah', ['class' => 'btn btn-primary']) }}
        <a href="{{route('admin.dataMapel')}}" class="btn btn-danger">Kembali</a>
        {{ Form::close() }}
    </div>
@endsection