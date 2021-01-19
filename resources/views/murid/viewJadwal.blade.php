@extends('layouts.app', [
    'namePage' => 'Lihat Jadwal',
    'class' => 'sidebar-mini',
    'activePage' => 'jadwalMurid',
    ])

@section('content')
<div class="container-fluid">
    @include('alerts.errors')
    @include('alerts.success')
        <h3 class="title title-dashboard">Jadwal Bimbingan Belajar</h3>
        <hr>
<div id='wrap-calendar'>

    <div id='calendar'></div>
    
</div>   
@endsection