@extends('layouts.app', [
'namePage' => 'Detail Jadwal',
'class' => 'sidebar-mini',
'activePage' => 'jadwalGuru',
])

@section('content')
    <div class="container-fluid">
        @include('alerts.errors')
        @include('alerts.success')
        <?php $tanggal ="";
        $sesi = "0"?>
        @foreach ($jadwal as $j)
        <?php $tanggal ="{$j->tanggal}";
        $sesi = "{$j->sesi}"?>
        @endforeach
        <h3 class="title-dashboard title">Detail Jadwal Bimbel - <?php echo $tanggal?></h3>
        <h5 style="text-align:center">Jam @if ($sesi == 1)
                13.45-15.15
            @elseif($sesi==2)
                15.30-17.00
            @elseif($sesi==3)
                17.15-18.45
            @elseif($sesi==4)
                19.15-20.45

            @endif
        </h5>
        <hr>
        <div class="container">
        <div class="scrollmenu">
        <table class="table table-hover" width = "100%">
            <thead class="thead-dark">
                <tr>
                    <th scope="col" class="text-center">No</th>
                    <th scope="col" class="text-center">Nama</th>
                    <th scope="col" class="text-center">Mata Pelajaran</th>
                    <th scope="col" class="text-center">Materi</th>
                    <th scope="col" class="text-center">Soal</th>
                    <th scope="col" class="text-center">Status</th>
                    <th scope="col" class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 0; ?>
                @foreach ($jadwal as $j)
                <tr class="{{$j->status?'table-success':'table-danger'}}">
                        <?php $i = $i + 1; ?>
                        <th class="text-center"><?php echo $i; ?></th>
                        <td class="text-center">{{$j->murid->nama}}</td>
                        <td class="text-center">{{$j->mapel->nama}}</td>
                        <td class="text-center">{{$j->materi}}</td>
                        <td class="text-center">
                        @if (!is_null($j->id_soal))
                                <div class="col-sm-12 text-secondary">
                                    <form action="{{ route('guru.downloadSoal') }}" method="post" >
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <input class="form-control" type="hidden" name="judul"
                                                value="{{ $j->soal->judul.".".$j->soal->getType($j->soal->file) }}">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" type="hidden" name="filename"
                                                value="{{ $j->soal->file }}">
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary"><i
                                            class="fas fa-file-download" aria-hidden="true"
                                            ></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        @else
                            Tidak ada soal
                        @endif
                        </td>
                        <td class="text-center">
                            @if ($j->status==0)
                            <div class="row" style="justify-content:center">
                                <form action="{{ url(route('guru.konfirmasi')) }}" method="GET" style="padding-right:2px;padding-left:2px">
                                        <div class="">
                                            <input class="" type="hidden" name="id"
                                                value="{{ $j->id }}">
                                        </div>
                                        <button type="submit" class="btn  btn-success waves-effect px-3"><i
                                            class="fas fa-check" aria-hidden="true"
                                            ></i></button>
                                </form>
                                <form action="{{ url(route('guru.unconfirm')) }}" method="GET" style="padding-right:2px;padding-left:2px">
                                        <div class="">
                                            <input class="" type="hidden" name="id"
                                                value="{{ $j->id }}">
                                        </div>
                                        <button type="submit" class="btn  btn-danger waves-effect px-3" onclick="return confirm('Apakah anda yakin akan menghapus data jadwal ini?')">
                                        <i class="fas fa-times" aria-hidden="true"></i></button>
                                </form>
                            </div>      
                            @else
                                Sudah Konfirmasi
                            @endif
                        </td>
                        <td class="text-center">
                            <form action="{{ url(route('guru.editjadwal')) }}" method="GET" style="padding-right:2px;padding-left:2px">
                                    <div class="">
                                        <input class="" type="hidden" name="id"
                                            value="{{ $j->id }}">
                                    </div>
                                    <button type="submit" class="btn  btn-warning waves-effect px-3">
                                    <i class="fas fa-edit" aria-hidden="true"></i></button>
                            </form>
                            <form action="{{ url(route('guru.unconfirm')) }}" method="GET" style="padding-right:2px;padding-left:2px">
                                    <div class="">
                                        <input class="" type="hidden" name="id"
                                            value="{{ $j->id }}">
                                    </div>
                                    <button type="submit" class="btn  btn-danger waves-effect px-3" onclick="return confirm('Apakah anda yakin akan menghapus data jadwal ini?')">
                                    <i class="fas fa-trash" aria-hidden="true"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table></div>
            <div class="col">
                <a href="{{route('guru.jadwal')}}" class="btn btn-danger">Kembali</a>
            </div>  
        </div>
    </div>
@endsection