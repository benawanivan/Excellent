@extends('layouts.app', [
'namePage' => 'Laporan',
'class' => 'sidebar-mini',
'activePage' => 'laporan',
])

@section('content')
    @include('alerts.errors')
    @include('alerts.success')
    <h3 class="title-dashboard title">Laporan Siswa</h3>
    <h2 class="text-center">{{ $tanggal->startOfWeek()->isoFormat('DD MMM Y') }} - {{ $tanggal->endOfWeek()->isoFormat('DD MMM Y') }}</h2>
    <hr>
    <div class="container ">
        <div class="row">
            <div class="pull-left" style="padding-left: 15px;">
                <form action="{{ route('admin.laporan') }}" method="get">
                    <input class="form-control" type="hidden" name="tanggal"
                        value="{{ $tanggal->startOfWeek()->subDays(7) }}">
                    <button class="btn btn-primary"><i class="fas fa-chevron-left"></i></button>
                </form>
            </div>
            <div class="pull-right" style="padding-right: 15px;">
                <form action="{{ route('admin.laporan') }}" method="get">
                    <input class="form-control" type="hidden" name="tanggal"
                        value="{{ $tanggal->startOfWeek()->addDays(14) }}">
                    <button class="btn btn-primary"><i class="fas fa-chevron-right"></i></button>
                </form>
            </div>
            <div class="pull-right" style="padding-right: 15px;">
                <form action="{{ route('admin.laporan') }}" method="get">
                    <input class="form-control" type="hidden" name="tanggal" value="{{ \Carbon\Carbon::now() }}">
                    <button class="btn btn-primary">Today</i></button>
                </form>
            </div>
        </div>
        {{-- entah mengapa tanggalnya jadi nambah 7 --}}
        <?php $tanggal->subDays(7); ?>
        @if (!is_null($keyword))
            <h2>Keyword: {{ $keyword }}</h2>
        @endif
        <div class="scrollmenu">
            <table class="table table-hover" width="100%">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col" class="text-center">No</th>
                        <th scope="col" class="text-center">Nama</th>
                        <th scope="col" class="text-center">Username</th>
                        <th scope="col" class="text-center">Asal Sekolah</th>
                        <th scope="col" class="text-center">Kelas</th>
                        <th scope="col" class="text-center">Cabang</th>
                        <th scope="col" class="text-center">Status</th>
                        <th scope="col" class="text-center" rowspan="2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 0; ?>
                    @foreach ($murid as $m)
                        <tr class="{{ is_null($m->id) ? 'table-danger' : '' }}">
                            <?php $i = $i + 1; ?>
                            <th class="text-center"><?php echo $i; ?></th>
                            <td class="text-center">{{ $m->nama }}</td>
                            <td class="text-center">{{ $m->username }}</td>
                            <td class="text-center">{{ $m->asal_sekolah }}</td>
                            <td class="text-center">{{ $m->kelas }}</td>
                            <td class="text-center">{{ $m->nama_cabang }}</td>
                            @if ($m->status)
                                <td class="text-center">Aktif</td>
                            @else
                                <td class="text-center">Non Aktif</td>
                            @endif
                            <td class="text-center">
                                <div class="btn-toolbar justify-content-center" role="toolbar">
                                    @if (!is_null($m->id))
                                        <form action="{{ url(route('admin.downloadLaporan')) }}" method="post">
                                            @csrf
                                            <div class="">
                                                <input class="" type="hidden" name="filename" value="{{$m->nama}}_{{$tanggal->format('Y-m-d')}}">
                                            </div>
                                            <button type="submit" class="btn  btn-elegant waves-effect px-3"><i
                                                    class="fas fa-download" aria-hidden="true" name='filename'></i></button>
                                        </form>
                                    @endif
                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#laporanModal{{ $m->id_murid }}">Upload</button>
                                    {{-- <form action="{{ url(route('admin.uploadLaporan')) }}" method="post">
                                        <div class="">
                                            <input class="" type="hidden" name="id" value="{{ $m->id }}">
                                        </div>
                                        <button type="submit" class="btn  btn-primary waves-effect ">Upload</i></button>
                                    </form> --}}

                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @foreach ($murid as $m)
        <div class="modal fade" id="laporanModal{{ $m->id_murid }}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Upload Laporan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        {{ Form::open(['url' => route('admin.uploadLaporan'), 'method' => 'POST', 'enctype' => 'multipart/form-data', 'files' => true, 'class' => 'form-upload']) }}
                        @csrf
                        <input class="" type="hidden" name="id_murid" value="{{$m->id_murid}}">
                        <input class="" type="hidden" name="id" value="{{$m->id}}">
                        <input class="" type="hidden" name="tanggal" value="{{$tanggal->format('Y-m-d')}}">
                        <input class="" type="hidden" name="filename" value="{{$m->nama}}_{{$tanggal->format('Y-m-d')}}">
                        <div class="form-group">
                            {{ Form::label('file', 'Upload Laporan: ', ['class' => 'form-label']) }}
                            <div class="custom-file">
                                {{ Form::file('file', ['class' => 'custom-file-input', 'aria-describedby' => 'inputGroupFileAddon01','id'=>'inputGroupFile01' ]) }}
                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                            </div>
                        </div>
                        {{-- <form>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Recipient:</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Message:</label>
                            <textarea class="form-control" id="message-text"></textarea>
                        </div>
                    </form> --}}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        {{ Form::submit('Upload', ['class' => 'btn btn-primary']) }}
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
