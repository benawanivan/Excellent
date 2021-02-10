@extends('layouts.app', [
    'namePage' => 'Data Guru',
    'class' => 'sidebar-mini',
    'activePage' => 'dataGuru',
    ])

@section('content')
@include('alerts.errors')
        @include('alerts.success')
        <h3 class="title-dashboard title">Data Guru</h3>
        <hr>
        <div class="container ">
            <div class="row" style="padding-bottom: 10px;">
                <div class="col-lg-6">
                    <div class="container h-100">
                        <div class="d-flex justify-content-left h-100">
                            <div class="searchbar" style="width: -webkit-fill-available;margin-bottom:auto;"> 
                                <form action="{{ route('admin.searchGuru') }}" method="get">
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
                    {{ Form::open(['action' => ['App\\Http\\Controllers\\AdminController@addGuru'], 'method' => 'GET']) }}
                    {{ Form::submit('Tambah Guru', ['class' => 'btn btn-primary']) }}
                    {{ Form::close() }}
                    </div>
                </div>      
            </div>
        {{-- {{ Form::open(['action' => ['App\\Http\\Controllers\\AdminController@addMurid'], 'method' => 'GET']) }}
        {{ Form::submit('Tambah Siswa', ['class' => 'btn btn-primary']) }}
        {{ Form::close() }} --}}
        @if (!is_null($keyword))
            <h2>Keyword: {{$keyword}}</h2>
        @endif
        <table class="table table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col" class="text-center">No</th>
                    <th scope="col" class="text-center">Nama</th>
                    <th scope="col" class="text-center">Username</th>
                    <th scope="col" class="text-center">Link Meeting</th>
                    <th scope="col" class="text-center">Cabang</th>
                    <th scope="col" class="text-center" rowspan="2">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 0; ?>
                @foreach ($guru as $g)
                    <tr class="">
                        <?php $i = $i + 1; ?>
                        <th class="text-center"><?php echo $i; ?></th>
                        <td>{{ $g->nama }}</td>
                        <td class="text-center">{{$g->username}}</td>
                        <td class="text-center">{{$g->link_meeting}}</td>
                        <td class="text-center">{{$g->cabang->nama}}</td>
                        <td class="text-center">
                            <div class="btn-toolbar justify-content-center" role="toolbar">
                                <form action="{{ url(route("admin.editGuru")) }}" method="GET">
                                    <div class="">
                                        <input class="" type="hidden" name="id"
                                            value="{{ $g->id }}">
                                    </div>
                                    <button type="submit" class="btn  btn-warning waves-effect px-3"><i
                                        class="fas fa-edit" aria-hidden="true"
                                        ></i></button>
                                </form>
                                @if (Auth::user()->master)
                                {{-- <form url="admin/datamurid/{{$m->id}}" method="DELETE">
                                    {{ csrf_field() }}
                                    
                                </form> --}}
                                {{ Form::open(['action' => ['App\\Http\\Controllers\\GuruController@delete', $g->id], 'method' => 'DELETE']) }}
                                {{-- {{ Form::submit('Delete', ['class' => 'btn btn-danger','onclick'=>"return confirm('Apakah anda yakin akan menghapus siswa?')"]) }} --}}
                                <div class="form-group">
                                    <button type="submit" class="btn  btn-outline-danger waves-effect px-3" onclick="return confirm('Apakah anda yakin akan menghapus guru?')"><i
                                            class="fas fa-trash-alt" aria-hidden="true"
                                            ></i></button>
                                </div>
                                {{ Form::close() }}
                                @endif
                                
                            </div>
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection