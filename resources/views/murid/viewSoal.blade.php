@extends('layouts.app', [
'namePage' => 'Database Soal',
'class' => 'sidebar-mini',
'activePage' => 'soalMurid',
])

@section('content')
    <div class="container-fluid">
        @include('alerts.errors')
        @include('alerts.success')
        <h3 class="title title-dashboard">Database Soal</h3>
        <hr>
        <div class="pull-right">
            {{ Form::open(['action' => ['App\\Http\\Controllers\\MuridController@updateProfile'], 'method' => 'GET']) }}
            {{ Form::submit('Tambah Soal', ['class' => 'btn btn-primary']) }}
            {{ Form::close() }}
        </div>
        <div class="container h-100">
            <div class="d-flex justify-content-left h-100">
                <div class="searchbar">
                    <input class="search_input" type="text" name="" placeholder="Search...">
                    <a href="#" class="search_icon"><i class="fas fa-search"></i></a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-xs-6">
                    <div class="card ">

                        <div class="card-body">
                            <h2 class="text-center"><i class="fas fa-file-word text-primary fa-4x "></i></h2>
                            <h4 class="card-title text-center">Soal SBMPTN</h4>
                            <div class="text-center">
                                <button type="button" class="btn  btn-elegant waves-effect px-3"><i class="fas fa-download"
                                        aria-hidden="true"></i></button>
                                <button type="button" class="btn  btn-elegant waves-effect px-3"><i class="fas fa-eye"
                                        aria-hidden="true"></i></button>
                                <button type="button" class="btn  btn-outline-danger waves-effect px-3"><i
                                        class="fas fa-trash-alt" aria-hidden="true"></i></button>
                            </div>

                            <p class="card-text"><small class="text-muted text-left">Last updated 3 mins ago</small></p>
                        </div>

                    </div>
                </div>

                <div class="col-md-3 col-xs-6">
                    <div class="card ">

                        <div class="card-body">
                            <h2 class="text-center"><i class="fas fa-file-pdf text-danger fa-4x "></i></h2>
                            <h4 class="card-title text-center">Soal SBMPTN</h4>
                            <div class="text-center">
                                <button type="button" class="btn  btn-elegant waves-effect px-3"><i class="fas fa-download"
                                        aria-hidden="true"></i></button>
                                <button type="button" class="btn  btn-elegant waves-effect px-3"><i class="fas fa-eye"
                                        aria-hidden="true"></i></button>
                                <button type="button" class="btn  btn-outline-danger waves-effect px-3"><i
                                        class="fas fa-trash-alt" aria-hidden="true"></i></button>
                            </div>

                            <p class="card-text"><small class="text-muted text-left">Last updated 3 mins ago</small></p>
                        </div>

                    </div>
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="card ">

                        <div class="card-body">
                            <h2 class="text-center"><i class="fas fa-file-powerpoint text-danger fa-4x "></i></h2>
                            <h4 class="card-title text-center">Soal SBMPTN</h4>
                            <div class="text-center">
                                <button type="button" class="btn  btn-elegant waves-effect px-3"><i class="fas fa-download"
                                        aria-hidden="true"></i></button>
                                <button type="button" class="btn  btn-elegant waves-effect px-3"><i class="fas fa-eye"
                                        aria-hidden="true"></i></button>
                                <button type="button" class="btn  btn-outline-danger waves-effect px-3"><i
                                        class="fas fa-trash-alt" aria-hidden="true"></i></button>
                            </div>

                            <p class="card-text"><small class="text-muted text-left">Last updated 3 mins ago</small></p>
                        </div>

                    </div>
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="card ">

                        <div class="card-body">
                            <h2 class="text-center"><i class="fas fa-file-alt text-info fa-4x "></i></h2>
                            <h4 class="card-title text-center">Soal SBMPTN</h4>
                            <div class="text-center">
                                <button type="button" class="btn  btn-elegant waves-effect px-3"><i class="fas fa-download"
                                        aria-hidden="true"></i></button>
                                <button type="button" class="btn  btn-elegant waves-effect px-3"><i class="fas fa-eye"
                                        aria-hidden="true"></i></button>
                                <button type="button" class="btn  btn-outline-danger waves-effect px-3"><i
                                        class="fas fa-trash-alt" aria-hidden="true"></i></button>
                            </div>

                            <p class="card-text"><small class="text-muted text-left">Last updated 3 mins ago</small></p>
                        </div>

                    </div>
                </div>

            </div>

        </div>

    </div>
@endsection
