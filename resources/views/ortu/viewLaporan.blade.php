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
            @foreach ($laporan as $row)
                <div class="col-xl-3 col-md-6 col-xs-6 ">
                    <div class="card ">
                        <div class="card-body">
                            <p class="card-text" style="margin-bottom:0rem;text-align:center;margin-bottom:6px"><small class="text-muted text-left" >Januari 2020</small></p>
                            <h2 class="text-center"><i class="fas fa-file-pdf text-danger fa-4x "></i></h2>
                            <h4 class="card-title text-capitalize text-center" style="margin-bottom: 0rem;">{{ $row->judul}}</h4>
                            <p class="card-text" style="text-align: center" ><small class="text-muted">Uploaded {{ $row->tgl_upload}}</small></hp>
                        </div>
                        <table class="card-footer d-flex align-self-center">
                            <th>
                            <td>
                                <div class="row">
                                    <a class="btn btn-primary" href="{{ $row->link }}" role="button" style="height:36.67px"><i class="fas fa-download"></i></a>
                                </div>
                            </td>

                            {{-- <button type="button"
                                class="btn  btn-elegant waves-effect px-3"><i class="fas fa-eye"
                                    aria-hidden="true"></i></button> --}}
                            {{-- <button type="button"
                                class="btn  btn-outline-danger waves-effect px-3"><i class="fas fa-trash-alt"
                                    aria-hidden="true"></i></button> --}}
                            </th>
                        </table>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
</div>
@endsection