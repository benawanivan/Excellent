@extends('layouts.app', [
'namePage' => 'Lihat Laporan Mingguan',
'class' => 'sidebar-mini',
'activePage' => 'laporanmingguan',
])

@section('content')
    @include('alerts.errors')
    @include('alerts.success')
    <h3 class="title-dashboard title">Laporan Mingguan Siswa - {{$nama->nama}} </h3>
    <h2 class="text-center">{{ $tanggal2->startOfWeek()->isoFormat('DD MMM Y') }} - {{ $tanggal2->endOfWeek()->isoFormat('DD MMM Y') }}</h2>
    <hr>
    <div class="container ">
        <div class="row">
            <div class="pull-left" style="padding-left: 15px;">
                <form action="{{ route('ortu.laporan') }}" method="get">
                    <input class="form-control" type="hidden" name="tanggal"
                        value="{{ $tanggal->startOfWeek()->subDays(7) }}">
                    <button class="btn btn-primary"><i class="fas fa-chevron-left"></i></button>
                </form>
            </div>
            <div class="pull-right" style="padding-right: 15px;">
                <form action="{{ route('ortu.laporan') }}" method="get">
                    <input class="form-control" type="hidden" name="tanggal"
                        value="{{ $tanggal->startOfWeek()->addDays(14) }}">
                    <button class="btn btn-primary"><i class="fas fa-chevron-right"></i></button>
                </form>
            </div>
            <div class="pull-right" style="padding-right: 15px;">
                <form action="{{ route('ortu.laporan') }}" method="get">
                    <input class="form-control" type="hidden" name="tanggal" value="{{ \Carbon\Carbon::now() }}">
                    <button class="btn btn-primary">Minggu Terakhir</i></button>
                </form>
            </div>
        </div>
        {{-- entah mengapa tanggalnya jadi nambah 7 --}}
        <?php $tanggal->subDays(7); ?>
      
        <div class="container">
            <div class="row">
            @if (is_null($murid))
                <div class="col-m-12" style="justify-content:center">
                    <h2 style="padding-top:2rem">Belum ada laporan</h2>
                </div>
                
            @else
                <form action="{{ route('ortu.downloadLaporan') }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <input class="form-control" type="hidden" name="filename"
                            value="{{$murid->nama}}_{{$tanggal->format('Y-m-d')}}">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success waves-effect px-3"><i
                                class="fas fa-download" aria-hidden="true"
                                name='filename'></i>Download Laporan</button>
                    </div>
                </form>
                <embed type="application/pdf" src="{{ route('ortu.embedlaporan',[ 'id' => $murid->id ]) }}" style ="width:100%;height:620px"></embed>
            @endif
            </div>
        </div>
        
        
@endsection
