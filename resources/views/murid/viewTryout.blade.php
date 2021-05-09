@extends('layouts.app', [
    'namePage' => 'Database Try Out',
    'class' => 'sidebar-mini',
    'activePage' => 'tryoutMurid',
    ])

@section('content')
    <div class="container-fluid">
        @include('alerts.errors')
        @include('alerts.success')
        {{-- {{ Try Out }} --}}
        <h3 class="title title-dashboard">Database Try Out</h3>
        <hr>
        <div class="row" style="padding-bottom: 10px;">
            <div class="col-lg-6">
                <div class="container h-100">
                    <div class="d-flex justify-content-left h-100">
                        <div class="searchbar" style="width: -webkit-fill-available;margin-bottom:auto;"> 
                            <form action="{{ route('murid.searchTryout') }}" method="get">
                                {{ csrf_field() }}
                            <input class="search_input" type="text" name="keyword" placeholder="Search..." style="width:85%;">
                            <button type="submit" class="search_icon btn" style="width:10%;"><i class="fas fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @if (!is_null($keyword))
            <h2>Keyword: {{$keyword}}</h2>
        @endif
        
        <div class="container">
            <div class="row">
            @foreach ($tryout as $row)
                <div class="col-xl-3 col-md-6 col-xs-6 ">
                    <div class="card ">
                        <div class="card-body">
                            <h2 class="text-center"><i class="fas fa-file-alt text-primary fa-4x "></i></h2>
                            <h4 class="card-title text-capitalize text-center" style="margin-bottom: 0rem;">{{ $row->judul}}</h4>
                            <p class="card-text" style="text-align: center" ><small class="text-muted">Uploaded {{ $row->tgl_buat}}</small></p>
                        </div>
                        <table class="card-footer d-flex align-self-center">
                            <th>
                            

                                

                                <a class="btn btn-primary" href="{{ $row->link }}" target="_blank" role="button" style="height:36.67px">Link</a>

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
    {{ $tryout->links() }}
    </div>
@endsection