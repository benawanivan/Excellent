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
        <div class="container">
            <div class="row">
                <div class="pull-left" style="padding-left: 15px;">
                    <form action="{{ route('murid.jadwal') }}" method="get">
                        <input class="form-control" type="hidden" name="tanggal"
                            value="{{ $tanggal->startOfWeek()->subDays(7) }}">
                        <button class="btn btn-primary"><i class="fas fa-chevron-left"></i></button>
                    </form>
                </div>
                <div class="pull-right" style="padding-right: 15px;">
                    <form action="{{ route('murid.jadwal') }}" method="get">
                        <input class="form-control" type="hidden" name="tanggal"
                            value="{{ $tanggal->startOfWeek()->addDays(14) }}">
                        <button class="btn btn-primary"><i class="fas fa-chevron-right"></i></button>
                    </form>
                </div>
                <div class="pull-right" style="padding-right: 15px;">
                    <form action="{{ route('murid.jadwal') }}" method="get">
                        <input class="form-control" type="hidden" name="tanggal" value="{{ \Carbon\Carbon::now() }}">
                        <button class="btn btn-primary">Today</i></button>
                    </form>
                </div>
            </div>
            {{-- entah mengapa tanggalnya jadi nambah satu --}}
            <?php $tanggal->subDays(1); ?>

            @for ($i = 0; $i < 7; $i++)
                <h2>{{ $tanggal->startOfWeek()->addDays($i)->isoFormat('dddd - DD MMM Y') }}</h2>
                <div class="row">
                    @foreach ($jadwal as $j)
                        @if ($j->tanggal ==
        $tanggal
            ->startOfWeek()
            ->addDays($i)
            ->format('Y-m-d'))
                            <div class="col-xl-3 col-sm-6">
                                <div type='submit'
                                    class="card {{ $j->status == 1 ? 'bg-primary' : ($j->status == 0 ? 'bg-danger' : 'bg-secondary')}}">
                                    <!-- <div class="card"> -->
                                    @if ($j->status != -1)
                                        <div class="card-body">
                                            <div class="d-flex d-lg-flex d-md-block align-items-center">

                                                <div>
                                                    <div class="d-inline-flex align-items-center">
                                                        <h2 class="text-white mb-1 font-weight-medium">
                                                            {{ $j->mapel->nama }}
                                                        </h2>
                                                    </div>
                                                    <h6 class="text-white font-weight-normal mb-0 w-100 text-truncate">
                                                        @if ($j->sesi == 1)
                                                            13.45-15.15
                                                        @elseif($j->sesi==2)
                                                            15.30-17.00
                                                        @elseif($j->sesi==3)
                                                            17.15-18.45
                                                        @elseif($j->sesi==4)
                                                            19.15-20.45

                                                        @endif
                                                    </h6>
                                                    @if ($j->status == 0)
                                                        <h6 class="text-white font-weight-normal mb-0 w-100 text-truncate">
                                                            Belum
                                                            dikonfirmasi</h6>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="d-inline-flex align-items-center">
                                                <a class="btn" href="#">
                                                    <span
                                                        class="text-white font-weight-normal mb-0 w-100 text-truncate">Detail</span>
                                                    <i data-feather="chevron-right" class="feather-icon text-white"></i>
                                                </a>
                                            </div>
                                        </div>
                                    @else
                                        <div class="card-body">
                                            <div class="d-flex d-lg-flex d-md-block align-items-center">

                                                <div>
                                                    <div class="d-inline-flex align-items-center">
                                                        <h2 class="text-white mb-1 font-weight-medium text-center">
                                                            Jadwal Belum Diisi
                                                        </h2>
                                                    </div>
                                                        <p class="text-white mb-0 w-100 text-truncate text-center">
                                                            (Klik untuk mengisi jadwal)</p>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        @endif
                    @endforeach
                    <div class="col-3">
                        <div class="container align-self-center">
                            <form action="{{ route('murid.addJadwal') }}" method="get">
                                <input class="" type="hidden" name="tanggal"
                                    value="{{ $tanggal->startOfWeek()->addDays($i)->format('Y-m-d') }}">
                                <button class="btn btn-success" type='submit' style="margin-top: 0">
                                    <i class="fas fa-plus-square fa-3x" aria-hidden="true"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

                <hr>

            @endfor
        </div>
    </div>
@endsection
