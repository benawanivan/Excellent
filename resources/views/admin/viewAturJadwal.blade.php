@extends('layouts.app', [
'namePage' => 'Pengaturan Jadwal Siswa',
'class' => 'sidebar-mini',
'activePage' => 'dataMurid',
])

@section('content')
    <div class="container-fluid">
        @include('alerts.errors')
        @include('alerts.success')
        <h3 class="title-dashboard title">Pengaturan Jadwal Siswa</h3>
        <hr>
        
        <div class="container">

            <div class="col">
                <div class="card ">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Nama Lengkap</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ $murid->nama }}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Asal Sekolah</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ $murid->asal_sekolah }}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Kelas</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ $murid->kelas }}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Cabang</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ $murid->cabang->nama }}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Username</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ $murid->username }}
                            </div>
                        </div>

                    </div>
                </div>
                @if(is_null($jadwal->first()))
                    <h3 class="text-center">Tidak Ada Jadwal</h3>
                @else
                <table class="table table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col" class="text-center">No</th>
                            <th scope="col" class="text-center">Hari</th>
                            <th scope="col" class="text-center">Sesi</th>
                            <th scope="col" class="text-center">Tanggal Mulai</th>
                            <th scope="col" class="text-center">Tanggal Akhir</th>
                            <th scope="col" class="text-center">Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 0; ?>
                        @foreach ($jadwal as $j)
                            <tr class="">
                                <?php $i = $i + 1; ?>
                                <th class="text-center"><?php echo $i; ?></th>
                                <td class="text-center">
                                    @if ($j->hari == 1)
                                        Senin
                                    @elseif($j->hari == 2)
                                        Selasa
                                    @elseif($j->hari == 3)
                                        Rabu
                                    @elseif($j->hari == 4)
                                        Kamis
                                    @elseif($j->hari == 5)
                                        Jumat
                                    @elseif($j->hari == 6)
                                        Sabtu
                                    @elseif($j->hari == 7)
                                        Minggu
                                    @endif
                                </td>
                                <td class="text-center">
                                    @if ($j->sesi == 1)
                                        13.45-15.15
                                    @elseif($j->sesi==2)
                                        15.30-17.00
                                    @elseif($j->sesi==3)
                                        17.15-18.45
                                    @elseif($j->sesi==4)
                                        19.15-20.45
                                    @endif
                                </td>
                                <td class="text-center">
                                    {{$j->tgl_mulai}}
                                </td>
                                <td class="text-center">
                                    {{$j->tgl_akhir}}
                                </td>
                                <td class="text-center">
                                    {{ Form::open(['action' => ['App\\Http\\Controllers\\JadwalDefaultController@delete', $j->id], 'method' => 'DELETE','class'=>'d-inline']) }}
                                {{-- {{ Form::submit('Delete', ['class' => 'btn btn-danger','onclick'=>"return confirm('Apakah anda yakin akan menghapus siswa?')"]) }} --}}
                                    <button type="submit" class="btn  btn-danger waves-effect px-3" onclick="return confirm('Apakah anda yakin akan menghapus jadwal?')"><i
                                            class="fas fa-trash-alt" aria-hidden="true"
                                            ></i></button>
                                {{ Form::close() }}


                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
                @endif
            </div>

            <a href="{{ route('admin.dataMurid') }}" class="btn btn-danger">Kembali</a>
            <button type="button" class="btn btn-primary d-inline" data-toggle="modal" data-target="#aturJadwalModal">Tambah
                Jadwal</button>
        </div>
        <div class="modal fade" id="aturJadwalModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Jadwal</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        {{ Form::open(['url' => route('admin.tambahJadwalDefault'), 'method' => 'POST']) }}
                        @csrf
                        <input class="" type="hidden" name="id_murid" value="{{ $murid->id }}">
                        <div class="form-group">
                            {{ Form::label('hari', 'Hari: ', ['class' => 'form-label']) }}
                            <select class="browser-default custom-select" name='hari'>
                                <option value="0">--- Pilih Hari ---</option>
                                <option value="1">Senin</option>
                                <option value="2">Selasa</option>
                                <option value="3">Rabu</option>
                                <option value="4">Kamis</option>
                                <option value="5">Jumat</option>
                                <option value="6">Sabtu</option>
                                <option value="7">Minggu</option>
                            </select>
                        </div>
                        <div class="form-group">
                            {{ Form::label('sesi', 'Sesi: ', ['class' => 'form-label']) }}
                            <select class="browser-default custom-select" name='sesi'>
                                <option value="0">--- Pilih Sesi ---</option>
                                <option value="1">13.45-15.15</option>
                                <option value="2">15.30-17.00</option>
                                <option value="3">17.15-18.45</option>
                                <option value="4">19.15-20.45</option>
                            </select>
                        </div>
                        <div class="form-group">
                            {{ Form::label('tgl_mulai', 'Tanggal Mulai: ', ['class' => 'form-label']) }}
                            {{Form::date('tgl_mulai',null,['class'=>'form-control'])}}
                        </div>
                        <div class="form-group">
                            {{ Form::label('tgl_akhir', 'Tanggal Akhir: ', ['class' => 'form-label']) }}
                            {{Form::date('tgl_akhir',null ,['class'=>'form-control'])}}
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        {{ Form::submit('Tambah', ['class' => 'btn btn-primary']) }}
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    @endsection
