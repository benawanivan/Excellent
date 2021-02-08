@extends('layouts.app', [
'namePage' => 'Edit Mapel',
'class' => 'sidebar-mini',
'activePage' => 'dataMapel',
])

@section('content')
@include('alerts.errors')
@include('alerts.success')
    <h3 class="title-dashboard title">Edit Data Mapel</h3>
    <hr>
    <div class="container">
        {{ Form::open(['action' => ['App\\Http\\Controllers\\MapelController@edit'], 'method' => 'POST',
        'class'=>'form-upload']) }}
        @csrf
        <div class="form-group">
            <input class="form-control" type="hidden" name="id"
                value="{{ $mapel->id }}">
        </div>
        <div class="form-group">
            {{ Form::label('tingkat', 'Kelas: ', ['class' => 'form-label']) }}
            <select class="browser-default custom-select"  name = 'tingkat'>
                <option value="1" {{$mapel->tingkat==1?'selected':''}}>1 SD</option>
                <option value="2" {{$mapel->tingkat==2?'selected':''}}>2 SD</option>
                <option value="3" {{$mapel->tingkat==3?'selected':''}}>3 SD</option>
                <option value="4" {{$mapel->tingkat==4?'selected':''}}>4 SD</option>
                <option value="5" {{$mapel->tingkat==5?'selected':''}}>5 SD</option>
                <option value="6" {{$mapel->tingkat==6?'selected':''}}>6 SD</option>
                <option value="7" {{$mapel->tingkat==7?'selected':''}}>7 SMP</option>
                <option value="8" {{$mapel->tingkat==8?'selected':''}}>8 SMP</option>
                <option value="9" {{$mapel->tingkat==9?'selected':''}}>9 SMP</option>
                <option value="10" {{$mapel->tingkat==10?'selected':''}}>10 SMA</option>
                <option value="11" {{$mapel->tingkat==11?'selected':''}}>11 SMA</option>
                <option value="12" {{$mapel->tingkat==12?'selected':''}}>12 SMA</option>
            </select>
        </div>
        <div class="form-group">
            {{ Form::label('nama', 'Nama Mapel: ', ['class' => 'form-label']) }}
            {{ Form::text('nama', $mapel->nama, ['class' => 'form-control']) }}
        </div>
        
        
        {{ Form::submit('Edit', ['class' => 'btn btn-primary']) }}
        <a href="{{route('admin.dataMapel')}}" class="btn btn-danger">Kembali</a>
        {{ Form::close() }}
    </div>
@endsection