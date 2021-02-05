@extends('layouts.app', [
    'namePage' => 'Database Soal',
    'class' => 'sidebar-mini',
    'activePage' => 'soalGuru',
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
                            <form action="{{ route('guru.searchSoal') }}" method="get">
                                {{ csrf_field() }}
                            <input class="search_input" type="text" name="keyword" placeholder="Search..." style="width:85%;">
                            <button type="submit" class="search_icon btn" style="width:10%;"><i class="fas fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" style="justify-content: flex-end;">
                <div class="pull-right" style="padding-right: 15px;">
                {{ Form::open(['action' => ['App\\Http\\Controllers\\GuruController@addSoal'], 'method' => 'GET']) }}
                {{ Form::submit('Tambah Soal', ['class' => 'btn btn-primary']) }}
                {{ Form::close() }}
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
                                @elseif($s->getType($s->file) == "docx" || $s->getType($s->file) == "doc")
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
                                        <form action="{{ route('murid.downloadSoal') }}" method="post">
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
    {{ $soal->links() }}
    </div>
@endsection