@extends('layouts.app', [
'namePage' => 'Detail Jadwal',
'class' => 'sidebar-mini',
'activePage' => 'jadwalMurid',
])

@section('content')
    <div class="container-fluid">
        @include('alerts.errors')
        @include('alerts.success')
        <h3 class="title-dashboard title">Detail Jadwal Bimbel</h3>
        <hr>
        <div class="container">
            <div class="col">
                <div class="card ">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Tanggal</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ $jadwal->tanggal }}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Sesi</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                @if ($jadwal->sesi == 1)
                                    13.45-15.15
                                @elseif($jadwal->sesi==2)
                                    15.30-17.00
                                @elseif($jadwal->sesi==3)
                                    17.15-18.45
                                @elseif($jadwal->sesi==4)
                                    19.15-20.45

                                @endif
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Pengajar</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ $jadwal->guru->nama }}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Link Meeting</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ $jadwal->guru->link_meeting }}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Mata Pelajaran</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ $jadwal->mapel->nama }}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Materi</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ $jadwal->materi }}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Status</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                @if ($jadwal->status==0)
                                    Belum Dikonfirmasi
                                @else
                                    Sudah Dikonfirmasi
                                @endif
                            </div>
                        </div>

                        @if (!is_null($jadwal->id_soal))
                            <hr>
                            <div class="row">
                                {{-- <div class="col-sm-3">
                                    <h6 class="mb-0">Bahan</h6>
                                </div> --}}
                                <div class="col-sm-9 text-secondary">
                                    <form action="{{ route('murid.downloadSoal') }}" method="post">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <input class="form-control" type="hidden" name="judul"
                                                value="{{ $jadwal->soal->judul.".".$jadwal->soal->getType($jadwal->soal->file) }}">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" type="hidden" name="filename"
                                                value="{{ $jadwal->soal->file }}">
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary">Download Bahan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
                <a href="{{route('murid.jadwal')}}" class="btn btn-danger">Kembali</a>
            </div>
            
        </div>
    @endsection
