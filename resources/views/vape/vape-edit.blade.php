@extends('template.main')
@section('title', 'Edit Data Vape')
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

                        <form class="needs-validation" novalidate action="/vape/{{ $vape->id_vape }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="nama">Name</label>
                                            <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Nama Vape" value="{{ old('nama', $vape->nama) }}" required>
                                            @error('nama')
                                                <span class="invalid-feedback text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="harga">Harga</label>
                                            <input type="text" name="harga" class="form-control @error('harga') is-invalid @enderror" id="harga" placeholder="Harga" value="{{ old('harga', $vape->harga) }}" required>
                                            @error('harga')
                                                <span class="invalid-feedback text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="baterai">Baterai</label>
                                            <input type="text" name="baterai" class="form-control @error('baterai') is-invalid @enderror" id="baterai" placeholder="Baterai" value="{{ old('baterai', $vape->baterai) }}" required>
                                            @error('baterai')
                                                <span class="invalid-feedback text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="bobot_harga">Bobot Harga</label>
                                            <input type="text" name="bobot_harga" class="form-control @error('bobot_harga') is-invalid @enderror" id="bobot_harga" placeholder="bobot_harga" value="{{ old('bobot_harga', $vape->bobot_harga) }}" required>
                                            @error('bobot_harga')
                                                <span class="invalid-feedback text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="bobot_baterai">Bobot Baterai</label>
                                            <input type="text" name="bobot_baterai" class="form-control @error('bobot_baterai') is-invalid @enderror" id="bobot_baterai" placeholder="bobot_baterai" value="{{ old('bobot_baterai', $vape->bobot_baterai) }}" required>
                                            @error('bobot_baterai')
                                                <span class="invalid-feedback text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="pengisian_daya">Pengisian Daya</label>
                                            <select name="pengisian_daya" class="form-control @error('pengisian_daya') is-invalid @enderror" id="pengisian_daya" required>
                                                <option value="">Pilih Pengisian Daya</option>
                                                <option value="Cepat" {{ (old('pengisian_daya', $vape->pengisian_daya) == 'Cepat') ? 'selected' : '' }} >Cepat</option>
                                                <option value="Normal" {{ (old('pengisian_daya', $vape->pengisian_daya) == 'Normal') ? 'selected' : '' }} >Normal</option>
                                            </select>
                                            <!-- Menampilkan pesan error jika ada -->
                                            @error('pengisian_daya')
                                                <span class="invalid-feedback text-danger">{{ $message }}</span>
                                            @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="kemudahan_penggunaan">Kemudahan Penggunaan</label>
                                                <select name="kemudahan_penggunaan" class="form-control @error('kemudahan_penggunaan') is-invalid @enderror" id="kemudahan_penggunaan" required>
                                                    <option value="">Pilih Kemudahan Penggunaan</option>
                                                    <option value="Mudah" {{ (old('kemudahan_penggunaan', $vape->kemudahan_penggunaan) == 'Mudah') ? 'selected' : '' }}>Mudah</option>
                                                    <option value="Sedang" {{ (old('kemudahan_penggunaan', $vape->kemudahan_penggunaan) == 'Sedang') ? 'selected' : '' }}>Sedang</option>
                                                    <option value="Expert" {{ (old('kemudahan_penggunaan', $vape->kemudahan_penggunaan) == 'Expert') ? 'selected' : '' }}>Expert</option>
                                                </select>
                                                <!-- Menampilkan pesan error jika ada -->
                                                @error('kemudahan_penggunaan')
                                                    <span class="invalid-feedback text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="bobot_pengisian_daya">Bobot Pengisian Daya</label>
                                                <input type="text" name="bobot_pengisian_daya" class="form-control @error('bobot_pengisian_daya') is-invalid @enderror" id="bobot_pengisian_daya" placeholder="bobot_pengisian_daya" value="{{ old('bobot_pengisian_daya', $vape->bobot_pengisian_daya) }}" required>
                                                @error('bobot_pengisian_daya')
                                                    <span class="invalid-feedback text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="bobot_kemudahan_penggunaan">Bobot Kemudahan Pengguna</label>
                                                <input type="text" name="bobot_kemudahan_penggunaan" class="form-control @error('bobot_kemudahan_penggunaan') is-invalid @enderror" id="bobot_kemudahan_penggunaan" placeholder="bobot_kemudahan_penggunaan" value="{{ old('bobot_kemudahan_penggunaan', $vape->bobot_kemudahan_penggunaan) }}" required>
                                                @error('bobot_kemudahan_penggunaan')
                                                    <span class="invalid-feedback text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="foto">Foto</label>
                                                <input type="file" name="foto" class="form-control @error('foto') is-invalid @enderror" id="foto">
                                                @error('foto')
                                                    <span class="invalid-feedback text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            @if ($vape->foto)
                                                <div class="form-group">
                                                    <label>Foto Sebelumnya:</label>
                                                    <img src="{{ asset('storage/' . $vape->foto) }}" alt="Foto Vape" class="img-fluid" width="150">
                                                </div>
                                            @endif
                                        </div>

                                    </div>
                                </div>

                                </div>
                                <div class="card-footer text-right">
                                    <button class="btn btn-dark mr-1" type="reset"><i class="fa-solid fa-arrows-rotate"></i> Reset</button>
                                    <button class="btn btn-success" type="submit"><i class="fa-solid fa-floppy-disk"></i> Save</button>
                                </div>
                            </div>


                        </form>
                    </div>
                </div>
                <!-- /.content -->
            </div>
        </div>
    </div>
</div>

@endsection
