@extends('layouts.app', [
    'namePage' => 'Jadwal Bimbel',
    'class' => 'sidebar-mini',
    'activePage' => 'jadwalguru',
    ])

@section('content')
    <div class="container-fluid">
    <br>
        @include('alerts.errors')
        @include('alerts.success')
        <h3 class="title title-dashboard">Jadwal Bimbingan Belajar</h3>
        <hr>
        <div class="row">
            <div class="pull-left" style="padding-left: 15px;">
                <form action="{{ route('guru.jadwal') }}" method="get">
                    <input class="form-control" type="hidden" name="tanggal"
                        value="{{ $tanggal->startOfWeek()->subDays(7) }}">
                    <button class="btn btn-primary"><i class="fas fa-chevron-left"></i></button>
                </form>
            </div>
            <div class="pull-right" style="padding-right: 15px;">
                <form action="{{ route('guru.jadwal') }}" method="get">
                    <input class="form-control" type="hidden" name="tanggal"
                        value="{{ $tanggal->startOfWeek()->addDays(14) }}">
                    <button class="btn btn-primary"><i class="fas fa-chevron-right"></i></button>
                </form>
            </div>
            <div class="pull-right" style="padding-right: 15px;">
                <form action="{{ route('guru.jadwal') }}" method="get">
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
                    @foreach ($jadwal as $j)
                        @if ($j->tanggal == $tanggal->startOfWeek()->addDays($i)->format('Y-m-d'))

                            <?php $confirm = 0;
                            $belum = 0;
                            $cekstat = 1; ?>
                            
                            @foreach ($jadwal2 as $k)
                            @if($k->tanggal == $j->tanggal and $k->sesi == $j->sesi)
                            
                                @if($k->status != 1)
                                    <?php  $cekstat = 0; 
                                    $belum++;?>
                                @else 
                                <?php $confirm++; ?>
                                @endif
                                
                            @endif
                            @endforeach
                            <div class="col-xl-3 col-sm-6">
                                <div class="card {{ ($cekstat == 1)? 'bg-primary' : 'bg-danger' }}">
                                    <!-- <div class="card"> -->
                                    <div class="card-body">
                                        <div class="d-flex d-lg-flex d-md-block align-items-center">
                                            <div>
                                                <div class="d-inline-flex align-items-center">
                                                    <h2 class="text-white mb-1 font-weight-medium">
                                                    <?php echo $confirm+$belum?> Siswa
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
                                                <h6 class="text-white font-weight-normal mb-0 w-100 text-truncate"><?php echo $confirm?> Sudah dikonfirmasi</h6>
                                                <h6 class="text-white font-weight-normal mb-0 w-100 text-truncate"><?php echo $belum?> Belum dikonfirmasi</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="d-inline-flex align-items-center">
                                            {{ Form::open(['action' => ['App\\Http\\Controllers\\GuruController@viewJadwalDetail'], 'method' => 'GET']) }}
                                                <input class="form-control" type="hidden" name="tanggal" value="{{ $j->tanggal}}">
                                                <input class="form-control" type="hidden" name="sesi" value="{{ $j->sesi}}">
                                                <button
                                                    class="btn {{ $cekstat == 1 ? 'btn-primary' : 'bg-danger' }} stretched-link"
                                                    type="submit">
                                                    <span
                                                        class="text-white font-weight-normal mb-0 w-100 text-truncate">Detail</span>
                                                    <i data-feather="chevron-right" class="feather-icon text-white"></i>
                                                </button>
                                                {{ Form::close() }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                    <div class="col-3">
                        <div class="container align-self-center">
                            <form action="{{ route('guru.addJadwal') }}" method="get">
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
    </div>
@endsection