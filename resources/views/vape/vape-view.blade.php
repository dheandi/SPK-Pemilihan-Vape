@extends('template.main')
@section('title', 'View Data Vape')
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
                        <li class="breadcrumb-item"><a href="/vape">Vape</a></li>
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
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="text-right">
                                <a href="/vape" class="btn btn-warning btn-sm"><i class="fa-solid fa-arrow-rotate-left"></i>
                                    Back
                                </a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4" style="margin-left: 20px;">
                                <img src="{{ asset('storage/' . $data->foto) }}" alt="Foto Vape" class="img-fluid">
                            </div>
                            <div class="col-md-6 " style="margin-left: 50px;">
                                <h3 class="fw-bold fs-3 mb-4">Detail Vape</h3>
                                <p>Nama: {{ $data->nama }}</p>
                                <p>Harga: {{ $data->harga }}</p>
                                <p>Baterai: {{ $data->baterai }}</p>
                                <p>Bobot Baterai: {{ $data->bobot_baterai }}</p>
                                <p>Kemudahan Penggunaan: {{ $data->kemudahan_penggunaan }}</p>
                                <p>Bobot Kemudahan Penggunaan: {{ $data->bobot_kemudahan_penggunaan }}</p>
                                <p>Pengisian Daya: {{ $data->pengisian_daya }}</p>
                                <p>Bobot Pengisian Daya: {{ $data->bobot_pengisian_daya }}</p>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- /.content -->
            </div>
        </div>
    </div>
</div>

@endsection
