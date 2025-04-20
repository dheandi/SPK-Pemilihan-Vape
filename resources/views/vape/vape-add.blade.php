@extends('template.main')
@section('title', 'Add Vape')
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
            <form class="needs-validation" novalidate action="/vape" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="card-body">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label for="name">Nama</label>
                      <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="nama Barang" value="{{old('nama')}}" required>
                      @error('nama')
                      <span class="invalid-feedback text-danger">{{ $message }}</span>
                      @enderror
                    </div>
                  </div>

                  <div class="col-lg-6">
                    <div class="form-group">
                      <label for="harga">harga</label>
                      <input type="text" name="harga" class="form-control @error('harga') is-invalid @enderror" id="harga" placeholder="harga" value="{{old('harga')}}" required>
                      @error('harga')
                      <span class="invalid-feedback text-danger">{{ $message }}</span>
                      @enderror
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label for="baterai">baterai</label>
                      <input type="text" name="baterai" class="form-control @error('baterai') is-invalid @enderror" id="baterai" placeholder="baterai" value="{{old('baterai')}}" required>
                      @error('baterai')
                      <span class="invalid-feedback text-danger">{{ $message }}</span>
                      @enderror
                    </div>
                  </div>

                  <div class="col-lg-6">
                    <div class="form-group">
                      <label for="bobot_harga">bobot_harga</label>
                      <input type="number" step="0.1" name="bobot_harga" class="form-control @error('bobot_harga') is-invalid @enderror" id="bobot_harga" placeholder="bobot_harga" value="{{old('bobot_harga')}}" required>
                      @error('bobot_harga')
                      <span class="invalid-feedback text-danger">{{ $message }}</span>
                      @enderror
                    </div>
                  </div>

                  <div class="col-lg-6">
                    <div class="form-group">
                      <label for="bobot_baterai">bobot_baterai</label>
                      <input type="number" step="0.1" name="bobot_baterai" class="form-control @error('bobot_baterai') is-invalid @enderror" id="bobot_baterai" placeholder="bobot_baterai" value="{{old('bobot_baterai')}}" required>
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
                          <option value="Cepat" >Cepat</option>
                          <option value="Normal" >Normal</option>
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
                              <option value="Mudah" >Mudah</option>
                              <option value="Sedang" >Sedang</option>
                              <option value="Expert" >Expert</option>
                            </select>
                            <!-- Menampilkan pesan error jika ada -->
                            @error('kemudahan_penggunaan')
                              <span class="invalid-feedback text-danger">{{ $message }}</span>
                            @enderror
                          </div>
                      </div>

                      <div class="col-lg-6">
                        <div class="form-group">
                          <label for="bobot_pengisian_daya">bobot_pengisian_daya</label>
                          <input type="number" step="0.1" name="bobot_pengisian_daya" class="form-control @error('bobot_pengisian_daya') is-invalid @enderror" id="bobot_pengisian_daya" placeholder="bobot_pengisian_daya" value="{{old('bobot_pengisian_daya')}}" required>
                          @error('bobot_pengisian_daya')
                          <span class="invalid-feedback text-danger">{{ $message }}</span>
                          @enderror
                        </div>
                      </div>

                      <div class="col-lg-6">
                        <div class="form-group">
                          <label for="bobot_kemudahan_penggunaan">bobot_kemudahan_penggunaan</label>
                          <input type="number" step="0.1" name="bobot_kemudahan_penggunaan" class="form-control @error('bobot_kemudahan_penggunaan') is-invalid @enderror" id="bobot_kemudahan_penggunaan" placeholder="bobot_kemudahan_penggunaan" value="{{old('bobot_kemudahan_penggunaan')}}" required>
                          @error('bobot_kemudahan_penggunaan')
                          <span class="invalid-feedback text-danger">{{ $message }}</span>
                          @enderror
                        </div>
                      </div>

                      <div class="col-lg-6">
                        <div class="form-group">
                          <label for="foto">Foto</label>
                          <input type="file" name="foto" class="form-control @error('foto') is-invalid @enderror" id="foto" accept="image/*">
                          @error('foto')
                          <span class="invalid-feedback text-danger">{{ $message }}</span>
                          @enderror
                        </div>
                      </div>
                 </div>

              </div>
              <div class="card-footer text-right">
                <button class="btn btn-dark mr-1" type="reset"><i class="fa-solid fa-arrows-rotate"></i>
                  Reset</button>
                <button class="btn btn-success" type="submit"><i class="fa-solid fa-floppy-disk"></i>
                  Save</button>
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
