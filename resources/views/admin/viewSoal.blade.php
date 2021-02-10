@extends('layouts.app', [
'namePage' => 'Database Soal',
'class' => 'sidebar-mini',
'activePage' => 'soalAdmin',
])

@section('content')
    <div class="container-fluid">
        @include('alerts.errors')
        @include('alerts.success')
        {{-- {{ $soal }} --}}
        <h3 class="title title-dashboard">Database Soal</h3>
        <hr>
        <div class="row" style="padding-bottom: 10px;">
            <div class="col-lg-6">
                <div class="container h-100">
                    <div class="d-flex justify-content-left h-100">
                        <div class="searchbar" style="width: -webkit-fill-available;margin-bottom:auto;"> 
                            <form action="{{ route('admin.searchSoal') }}" method="get">
                                {{ csrf_field() }}
                            <input class="search_input" type="text" name="keyword" placeholder="Search..." style="width:85%;">
                            <button type="submit" class="search_icon btn button" style="width:10%;"><i class="fas fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" style="justify-content: flex-end;">
                <div class="pull-right" style="padding-right: 15px;">
                    <div class="btn-toolbar justify-content-center">
                        <div class="col">
                            {{ Form::open(['action' => ['App\\Http\\Controllers\\AdminController@addSoal'], 'method' => 'GET']) }}
                            {{ Form::submit('Tambah', ['class' => 'btn btn-primary']) }}
                            {{ Form::close() }}
                        </div>
                        <div class="col">
                            {{ Form::open(['action' => ['App\\Http\\Controllers\\SoalController@backupSoal'], 'method' => 'GET']) }}
                            {{ Form::submit('Backup', ['class' => 'btn btn-primary']) }}
                            {{ Form::close() }}
                        </div>
                        @if (Auth::user()->master)
                        <div class="col">
                            {{ Form::open(['action' => ['App\\Http\\Controllers\\SoalController@deleteAllSoal'], 'method' => 'POST']) }}
                            {{ Form::submit('Hapus Data', ['class' => 'btn btn-danger','onclick'=>"return confirm('Apakah anda yakin akan menghapus Semua Soal?')"]) }}
                            {{ Form::close() }}
                        </div>
                        @endif
                </div>
            </div>      
        </div>
        @if (!is_null($keyword))
            <h2>Keyword: {{$keyword}}</h2>
        @endif
        
        <div class="container">
            <div class="row">
                @foreach ($soal as $s)
                    <div class="col-xl-3 col-md-6 col-xs-6 ">
                        <div class="card ">

                            <div class="card-body">
                                @if ($s->getType($s->file) == 'pdf')
                                    <h2 class="text-center"><i class="fas fa-file-pdf text-danger fa-4x "></i></h2>
                                @elseif($s->getType($s->file) == "docx")
                                    <h2 class="text-center"><i class="fas fa-file-word text-primary fa-4x "></i></h2>
                                @elseif($s->getType($s->file) == "pptx")
                                    <h2 class="text-center"><i class="fas fa-file-powerpoint text-danger fa-4x "></i></h2>
                                @endif

                                <h4 class="card-title text-capitalize text-center ">{{ $s->judul }}</h4>

                            </div>



                            <table class="card-footer d-flex align-items-end">

                                <th>

                                <td>
                                    <p class="card-text"><small class="text-muted text-left">Uploaded
                                            {{ $s->tgl_buat }}</small></p>
                                </td>
                                <td>


                                    <div class="text-right">
                                        <form action="{{ route('admin.downloadSoal') }}" method="post">
                                            {{ csrf_field() }}
                                            <div class="form-group">
                                                <input class="form-control" type="hidden" name="judul"
                                                    value="{{ $s->judul.".".$s->getType($s->file) }}">
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" type="hidden" name="filename"
                                                    value="{{ $s->file }}">
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn  btn-elegant waves-effect px-3"><i
                                                        class="fas fa-download" aria-hidden="true"
                                                        name='filename'></i></button>
                                            </div>
                                        </form>
                                    </div>
                                </td>
                                
                                <td>
                                    <div class="text-right">
                                        <form action="{{ route('admin.deleteSoal') }}" method="post">
                                            {{ csrf_field() }}
                                            <div class="form-group">
                                                <input class="form-control" type="hidden" name="id"
                                                    value="{{ $s->id }}">
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn  btn-outline-danger waves-effect px-3" onclick="return confirm('Apakah anda yakin akan menghapus soal?')"><i
                                                        class="fas fa-trash-alt" aria-hidden="true"
                                                        name='filename'></i></button>
                                            </div>
                                        </form>
                                    </div>
                                </td>
                                
                                {{-- <button type="button"
                                    class="btn  btn-elegant waves-effect px-3"><i class="fas fa-eye"
                                        aria-hidden="true"></i></button> --}}
                                
                                </th>
                            </table>
                        </div>

                    </div>
                @endforeach
            </div>
        </div>
    </div>
    {{ $soal->links() }}

    </div>
@endsection
