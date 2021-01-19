@extends('layouts.app', [
    'namePage' => 'Jadwal Bimbel',
    'class' => 'sidebar-mini',
    'activePage' => 'jadwalguru',
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
</div>
@endsection