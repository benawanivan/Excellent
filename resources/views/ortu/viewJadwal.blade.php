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
        <div class="row">
            <div class="pull-left" style="padding-left: 15px;">
                <form action="{{ route('ortu.jadwal') }}" method="get">
                    <input class="form-control" type="hidden" name="tanggal"
                        value="{{ $tanggal->startOfWeek()->subDays(7) }}">
                    <button class="btn btn-primary"><i class="fas fa-chevron-left"></i></button>
                </form>
            </div>
            <div class="pull-right" style="padding-right: 15px;">
                <form action="{{ route('ortu.jadwal') }}" method="get">
                    <input class="form-control" type="hidden" name="tanggal"
                        value="{{ $tanggal->startOfWeek()->addDays(14) }}">
                    <button class="btn btn-primary"><i class="fas fa-chevron-right"></i></button>
                </form>
            </div>
            <div class="pull-right" style="padding-right: 15px;">
                <form action="{{ route('ortu.jadwal') }}" method="get">
                    <input class="form-control" type="hidden" name="tanggal"
                        value="{{ \Carbon\Carbon::now() }}">
                    <button class="btn btn-primary">Today</i></button>
                </form>
            </div>
        </div>
        {{-- entah mengapa tanggalnya jadi nambah satu --}}
        <?php $tanggal->subDays(1); ?>
        <div class="container">
            @for ($i = 0; $i < 7; $i++)
                <h2>{{ $tanggal->startOfWeek()->addDays($i)->isoFormat('dddd - DD MMM Y') }}</h2>
                <div class="row">
                <?php $cek = 0;?> 
                    @foreach ($jadwal as $j)
                        @if ($j->tanggal ==
        $tanggal
            ->startOfWeek()
            ->addDays($i)
            ->format('Y-m-d') and ($j->status==1))
            <?php $cek++ ?>
                            <div class="col-xl-3 col-sm-6">
                                <div class="card {{ $j->status==1 ? 'bg-primary' : 'bg-danger' }}">
                                    <!-- <div class="card"> -->
                                    <div class="card-body">
                                        <div class="d-flex d-lg-flex d-md-block align-items-center">
                                            <div>
                                                <div class="d-inline-flex align-items-center">
                                                    <h2 class="text-white mb-1 font-weight-medium">{{ $j->mapel->nama }}
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
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="d-inline-flex align-items-center">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                        @if( $cek == 0 )
                            <div class="container">
                                <p>Tidak ada Jadwal</p>
                            </div>
                        @endif
                    <!-- <div class="col-3">
                        <div class="container align-self-center">
                            <button class="btn btn-success" style="margin-top: 0">
                                <i class="fas fa-plus-square fa-3x" aria-hidden="true"></i>
                            </button>
                        </div>
                    </div> -->
                </div>

                <hr>

            @endfor
        </div>
    </div>
    </div>
@endsection
