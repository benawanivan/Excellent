@extends('layouts.app', [
    'namePage' => 'Lihat Jadwal Siswa',
    'class' => 'sidebar-mini',
    'activePage' => 'jadwalOrtu',
    ])

@section('content')
<div class="container-fluid">
    @include('alerts.errors')
    @include('alerts.success')
        <h3 class="title title-dashboard">Jadwal Bimbingan Belajar</h3>
        <hr>
<div id='wrap-calendar' style="max-width: fit-content;">

    <div id='calendar'></div>
    
</div>  
@endsection