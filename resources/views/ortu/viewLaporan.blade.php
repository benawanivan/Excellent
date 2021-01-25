@extends('layouts.app', [
    'namePage' => 'Lihat Laporan Mingguan',
    'class' => 'sidebar-mini',
    'activePage' => 'laporanmingguan',
    ])

@section('content')
<div class="container-fluid">
    @include('alerts.errors')
    @include('alerts.success')
        <h3 class="title title-dashboard">Laporan Mingguan Siswa</h3>
        <hr>
        <div class="dropdown">
            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Pilih Bulan
            <span class="caret"></span></button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Januari</a></li>
                <li><a class="dropdown-item" href="#">Februari</a></li>
                <li><a class="dropdown-item" href="#">Maret</a></li>
                <li><a class="dropdown-item" href="#">April</a></li>
                <li><a class="dropdown-item" href="#">Mei</a></li>
                <li><a class="dropdown-item" href="#">Juni</a></li>
                <li><a class="dropdown-item" href="#">Juli</a></li>
                <li><a class="dropdown-item" href="#">Agustus</a></li>
                <li><a class="dropdown-item" href="#">September</a></li>
                <li><a class="dropdown-item" href="#">Oktober</a></li>
                <li><a class="dropdown-item" href="#">November</a></li>
                <li><a class="dropdown-item" href="#">Desember</a></li>
            </ul>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-xs-6">
                    <div class="card ">
                        <div class="card-body">
                        <p class="card-text" style="margin-bottom:0rem;text-align:center;margin-bottom:6px"><small class="text-muted text-left" >Januari 2020</small></p>
                            <h2 class="text-center"><i class="fas fa-file-pdf text-danger fa-4x "></i></h2>
                            <h5 class="card-title text-center">Ivan Benawan - Minggu 1</h5>
                            
                            <div class="text-center">
                                <button type="button" class="btn  btn-elegant waves-effect px-3"><i class="fas fa-download"
                                        aria-hidden="true"></i></button>
                                <button type="button" class="btn  btn-elegant waves-effect px-3"><i class="fas fa-eye"
                                        aria-hidden="true"></i></button>
                                <button type="button" class="btn  btn-outline-danger waves-effect px-3"><i
                                        class="fas fa-trash-alt" aria-hidden="true"></i></button>
                            </div>

                            <p class="card-text"><small class="text-muted text-left">Last updated 14 days ago</small></p>
                        </div>

                    </div>
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="card ">
                        <div class="card-body">
                        <p class="card-text" style="margin-bottom:0rem;text-align:center;margin-bottom:6px"><small class="text-muted text-left" >Januari 2020</small></p>
                            <h2 class="text-center"><i class="fas fa-file-pdf text-danger fa-4x "></i></h2>
                            <h5 class="card-title text-center">Ivan Benawan - Minggu 2</h5>
                            
                            <div class="text-center">
                                <button type="button" class="btn  btn-elegant waves-effect px-3"><i class="fas fa-download"
                                        aria-hidden="true"></i></button>
                                <button type="button" class="btn  btn-elegant waves-effect px-3"><i class="fas fa-eye"
                                        aria-hidden="true"></i></button>
                                <button type="button" class="btn  btn-outline-danger waves-effect px-3"><i
                                        class="fas fa-trash-alt" aria-hidden="true"></i></button>
                            </div>

                            <p class="card-text"><small class="text-muted text-left">Last updated 14 days ago</small></p>
                        </div>

                    </div>
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="card ">
                        <div class="card-body">
                        <p class="card-text" style="margin-bottom:0rem;text-align:center;margin-bottom:6px"><small class="text-muted text-left" >Januari 2020</small></p>
                            <h2 class="text-center"><i class="fas fa-file-pdf text-danger fa-4x "></i></h2>
                            <h5 class="card-title text-center">Ivan Benawan - Minggu 3</h5>
                            
                            <div class="text-center">
                                <button type="button" class="btn  btn-elegant waves-effect px-3"><i class="fas fa-download"
                                        aria-hidden="true"></i></button>
                                <button type="button" class="btn  btn-elegant waves-effect px-3"><i class="fas fa-eye"
                                        aria-hidden="true"></i></button>
                                <button type="button" class="btn  btn-outline-danger waves-effect px-3"><i
                                        class="fas fa-trash-alt" aria-hidden="true"></i></button>
                            </div>

                            <p class="card-text"><small class="text-muted text-left">Last updated 14 days ago</small></p>
                        </div>

                    </div>
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="card ">
                        <div class="card-body">
                        <p class="card-text" style="margin-bottom:0rem;text-align:center;margin-bottom:6px"><small class="text-muted text-left" >Januari 2020</small></p>
                            <h2 class="text-center"><i class="fas fa-file-pdf text-danger fa-4x "></i></h2>
                            <h5 class="card-title text-center">Ivan Benawan - Minggu 4</h5>
                            
                            <div class="text-center">
                                <button type="button" class="btn  btn-elegant waves-effect px-3"><i class="fas fa-download"
                                        aria-hidden="true"></i></button>
                                <button type="button" class="btn  btn-elegant waves-effect px-3"><i class="fas fa-eye"
                                        aria-hidden="true"></i></button>
                                <button type="button" class="btn  btn-outline-danger waves-effect px-3"><i
                                        class="fas fa-trash-alt" aria-hidden="true"></i></button>
                            </div>

                            <p class="card-text"><small class="text-muted text-left">Last updated 14 days ago</small></p>
                        </div>

                    </div>
                </div>
            </div>

        </div>
</div>
@endsection