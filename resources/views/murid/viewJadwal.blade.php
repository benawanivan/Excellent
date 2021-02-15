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
        <div class="row">
            <div class="col-sm-6" style="justify-content: flex-start;">
                <div class="pull-left" style="padding-left: 15px;">
                    <button class="btn btn-primary"><i class="fas fa-chevron-left"></i></button>
                </div>
            </div>    
            <div class="col-sm-6" style="justify-content: flex-end;">
                <div class="pull-right" style="padding-right: 15px;">
                    <button class="btn btn-primary"><i class="fas fa-chevron-right"></i></button>
                </div>
            </div>    
        </div>
        <div class="container">
           
            <h2>Senin - 15 Feb 2020</h2>
            <p>13:00 - 15:00 Matematika - Ko Ari</p>
            <hr>
            <h2>Selasa - 16 Feb 2020</h2>
            <p>Tidak ada jadwal</p>
            <hr>
            <h2>Rabu - 17 Feb 2020</h2>
            <p>13:00 - 15:00 Matematika - Ko Ari</p>
            <hr>
            <h2>Kamis - 18 Feb 2020</h2>
            <p>Tidak ada jadwal</p>
            <hr>
            <h2>Jumat - 19 Feb 2020</h2>
            <p>15:00 - 17:00 Matematika - Ko Ari</p>
            <hr>
            <h2>Sabtu - 20 Feb 2020</h2>
            <p>Tidak ada jadwal</p>
            <hr>
            <h2>Minggu - 21 Feb 2020</h2>
            <p>Tidak ada jadwal</p>
          
        </div>
    </div>
</div>  
@endsection