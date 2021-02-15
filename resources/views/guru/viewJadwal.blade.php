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
            <div class="row">
                <div class="col-3">
                    <div class="card bg-primary">
                    <!-- <div class="card"> -->
                        <div class="card-body">
                            <div class="d-flex d-lg-flex d-md-block align-items-center">
                                <div>
                                    <div class="d-inline-flex align-items-center">
                                        <h2 class="text-white mb-1 font-weight-medium">5 Siswa</h2>
                                    </div>
                                    <h6 class="text-white font-weight-normal mb-0 w-100 text-truncate">13:00-15:00</h6>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="d-inline-flex align-items-center">
                                <a class="btn" href="#">
                                    <span class="text-white font-weight-normal mb-0 w-100 text-truncate">Detail</span>
                                    <i data-feather="chevron-right" class="feather-icon text-white"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card bg-primary">
                    <!-- <div class="card"> -->
                        <div class="card-body">
                            <div class="d-flex d-lg-flex d-md-block align-items-center">
                                <div>
                                    <div class="d-inline-flex align-items-center">
                                        <h2 class="text-white mb-1 font-weight-medium">8 Siswa</h2>
                                    </div>
                                    <h6 class="text-white font-weight-normal mb-0 w-100 text-truncate">15:00-17:00</h6>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="d-inline-flex align-items-center">
                                <a class="btn" href="#">
                                    <span class="text-white font-weight-normal mb-0 w-100 text-truncate">Detail</span>
                                    <i data-feather="chevron-right" class="feather-icon text-white"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card bg-primary">
                    <!-- <div class="card"> -->
                        <div class="card-body">
                            <div class="d-flex d-lg-flex d-md-block align-items-center">
                                <div>
                                    <div class="d-inline-flex align-items-center">
                                        <h2 class="text-white mb-1 font-weight-medium">3 Siswa</h2>
                                    </div>
                                    <h6 class="text-white font-weight-normal mb-0 w-100 text-truncate">19:00-21:00</h6>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="d-inline-flex align-items-center">
                                <a class="btn" href="#">
                                    <span class="text-white font-weight-normal mb-0 w-100 text-truncate">Detail</span>
                                    <i data-feather="chevron-right" class="feather-icon text-white"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <h2>Selasa - 16 Feb 2020</h2>
            <div class="row">
                <div class="col-3">
                    <div class="card bg-primary">
                    <!-- <div class="card"> -->
                        <div class="card-body">
                            <div class="d-flex d-lg-flex d-md-block align-items-center">
                                <div>
                                    <div class="d-inline-flex align-items-center">
                                        <h2 class="text-white mb-1 font-weight-medium">5 Siswa</h2>
                                    </div>
                                    <h6 class="text-white font-weight-normal mb-0 w-100 text-truncate">13:00-15:00</h6>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="d-inline-flex align-items-center">
                                <a class="btn" href="#">
                                    <span class="text-white font-weight-normal mb-0 w-100 text-truncate">Detail</span>
                                    <i data-feather="chevron-right" class="feather-icon text-white"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
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