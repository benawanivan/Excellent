@extends('layouts.app', [
    'namePage' => 'Data Siswa',
    'class' => 'sidebar-mini',
    'activePage' => 'dataMurid',
    ])

@section('content')
@include('alerts.errors')
        @include('alerts.success')
        <h3 class="title-dashboard title">Data Siswa</h3>
        <hr>
        <div class="container">
        {{ Form::open(['action' => ['App\\Http\\Controllers\\AdminController@addMurid'], 'method' => 'GET']) }}
        {{ Form::submit('Tambah Siswa', ['class' => 'btn btn-primary']) }}
        {{ Form::close() }}
        
        <table class="table table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col" class="text-center">No</th>
                    <th scope="col" class="text-center">Nama</th>
                    <th scope="col" class="text-center">Username</th>
                    <th scope="col" class="text-center">Asal Sekolah</th>
                    <th scope="col" class="text-center">Cabang</th>
                    <th scope="col" class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 0; ?>
                @foreach ($murid as $m)
                    <tr>
                        <?php $i = $i + 1; ?>
                        <th class="text-center"><?php echo $i; ?></th>
                        <td>{{ $m->nama }}</td>
                        <td>{{$m->username}}</td>
                        <td>{{$m->asal_sekolah}}</td>
                        <td>{{$m->cabang->nama}}</td>
                        <td class="text-center">
                            <div class="row">
                                <form action="{{ url(route("admin.editMurid")) }}" method="GET">
                                    <div class="">
                                        <input class="form-control" type="hidden" name="id"
                                            value="{{ $m->id }}">
                                    </div>
                                    <input type="submit" value="Edit" class="btn btn-secondary">
                                </form>

                                {{ Form::open(['action' => ['App\\Http\\Controllers\\MuridController@delete', $m->id], 'method' => 'DELETE']) }}
                                {{ Form::submit('Delete', ['class' => 'btn btn-danger','onclick'=>"return confirm('Apakah anda yakin akan menghapus siswa?')"]) }}
                                {{ Form::close() }}
                            </div>
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection