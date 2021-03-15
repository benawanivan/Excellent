@extends('layouts.app', [
'namePage' => 'Data Admin',
'class' => 'sidebar-mini',
'activePage' => 'dataadmin',
])

@section('content')
    @include('alerts.errors')
    @include('alerts.success')
    <h3 class="title-dashboard title">Data Admin</h3>
    <hr>
    <div class="container">

        <div class="row" style="padding-bottom: 10px;">
            <div class="col-lg-6">
                <div class="container h-100">
                    <div class="d-flex justify-content-left h-100">
                        <div class="searchbar" style="width: -webkit-fill-available;margin-bottom:auto;">
                            <form action="{{ route('admin.searchAdmin') }}" method="get">
                                {{ csrf_field() }}
                                <input class="search_input" type="text" name="keyword" placeholder="Search..."
                                    style="width:85%;">
                                <button type="submit" class="search_icon btn" style="width:10%;"><i
                                        class="fas fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" style="justify-content: flex-end;">
                <div class="pull-right" style="padding-right: 15px;">
                    {{ Form::open(['action' => ['App\\Http\\Controllers\\AdminController@addAdmin'], 'method' => 'GET']) }}
                    {{ Form::submit('Tambah Admin', ['class' => 'btn btn-primary']) }}
                    {{ Form::close() }}
                </div>
            </div>
        </div>
        <div class="container-fluid">
            @if (!is_null($keyword))
                <h2>Keyword: {{ $keyword }}</h2>
            @endif
            <table class="table table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col" class="text-center">No</th>
                        <th scope="col" class="text-center">Nama</th>
                        <th scope="col" class="text-center">Username</th>
                        <th scope="col" class="text-center">Cabang</th>
                        <th scope="col" class="text-center" rowspan="2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 0; ?>
                    @foreach ($admin as $a)
                        @if ($a->master == 0)


                            <tr class="">
                                <?php $i = $i + 1; ?>
                                <th class="text-center"><?php echo $i; ?></th>
                                <td>{{ $a->nama }}</td>
                                <td class="text-center">{{ $a->username }}</td>
                                <td class="text-center">{{ $a->cabang->nama }}</td>
                                <td class="text-center">

                                    <form action="{{ url(route('admin.editAdmin')) }}" method="GET" class="d-inline">
                                        <div class="">
                                            <input class="" type="hidden" name="id" value="{{ $a->id }}">
                                        </div>
                                        <button type="submit" class="btn  btn-warning waves-effect px-3"><i
                                                class="fas fa-edit" aria-hidden="true"></i></button>
                                    </form>
                                    @if (Auth::user()->master)
                                        {{-- <form url="admin/datamurid/{{$m->id}}" method="DELETE">
                                    {{ csrf_field() }}
                                    
                                </form> --}}
                                        {{ Form::open(['action' => ['App\\Http\\Controllers\\AdminController@delete', $a->id], 'method' => 'DELETE', 'class' => 'd-inline']) }}
                                        {{-- {{ Form::submit('Delete', ['class' => 'btn btn-danger','onclick'=>"return confirm('Apakah anda yakin akan menghapus siswa?')"]) }} --}}

                                        <button type="submit" class="btn  btn-danger waves-effect px-3"
                                            onclick="return confirm('Apakah anda yakin akan menghapus admin?')"><i
                                                class="fas fa-trash-alt" aria-hidden="true"></i></button>

                                        {{ Form::close() }}
                                    @endif


                                </td>

                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
        {{ $admin->links() }}
    </div>
@endsection
