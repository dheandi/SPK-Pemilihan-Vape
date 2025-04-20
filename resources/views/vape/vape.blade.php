@extends('template.main')
@section('title', 'Vape Cuy')
@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">@yield('title')</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active">@yield('title')</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="text-right">
                                    <a href="/vape/create" class="btn btn-primary"><i class="fa-solid fa-plus"></i> Add
                                        Data</a>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-striped table-bordered table-hover text-center"
                                    style="width: 100%">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nama</th>
                                            <th>Harga</th>
                                            <th>Baterai</th>
                                            <th>Kemudahan Penggunaan</th>
                                            <th>Foto</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($vape as $data)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $data->nama }}</td>
                                                <td>Rp. {{ number_format($data->harga, 0) }}</td>
                                                <td> {{ $data->baterai }}</td>
                                                <td>{{ $data->kemudahan_penggunaan }}</td>
                                                <td>
                                                    <img src="{{ asset('storage/' . $data->foto) }}" alt="foto vape" width="80" height="80">
                                                </td>


                                                <td>
                                                    <form class="d-inline" action="/vape/{{ $data->id_vape }}" method="GET">
                                                        <button type="submit" class="btn btn-warning btn-sm mr-1">
                                                            <i class="fa-solid fa-eye"></i>
                                                        </button>
                                                    </form>

                                                    <form class="d-inline" action="/vape/{{ $data->id_vape }}/edit"
                                                        method="GET">
                                                        <button type="submit" class="btn btn-success btn-sm mr-1">
                                                            <i class="fa-solid fa-pen"></i>
                                                        </button>
                                                    </form>
                                                    <form class="d-inline" action="/vape/{{ $data->id_vape }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" class="btn btn-danger btn-sm mr-1"
                                                            id="btn-delete"><i class="fa-solid fa-trash-can"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.row -->
                    </div><!-- /.container-fluid -->
                </div>
                <!-- /.content -->
            </div>
        </div>
    </div>

@endsection
