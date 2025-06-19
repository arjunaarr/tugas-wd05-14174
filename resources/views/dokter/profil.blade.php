@extends('layout.main')

@section('title', 'Profil Dokter')

@section('isi')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Profil Dokter</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dokter.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Profil</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Edit Profil</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('dokter.profil.update') }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                @if(session('success'))
                                <div class="alert alert-success alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    <h5><i class="icon fas fa-check"></i> Sukses!</h5>
                                    {{ session('success') }}
                                </div>
                                @endif

                                <div class="form-group">
                                    <label for="nama">Nama Lengkap</label>
                                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" 
                                           name="nama" value="{{ old('nama', $dokter->nama) }}" placeholder="Masukkan nama lengkap">
                                    @error('nama')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <textarea class="form-control @error('alamat') is-invalid @enderror" id="alamat" 
                                              name="alamat" rows="3" placeholder="Masukkan alamat lengkap">{{ old('alamat', $dokter->alamat) }}</textarea>
                                    @error('alamat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="no_hp">Nomor Telepon</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                        </div>
                                        <input type="text" class="form-control @error('no_hp') is-invalid @enderror" 
                                               id="no_hp" name="no_hp" value="{{ old('no_hp', $dokter->no_hp) }}" 
                                               placeholder="Masukkan nomor telepon">
                                        @error('no_hp')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" value="{{ $dokter->email }}" disabled>
                                    <small class="form-text text-muted">Email tidak dapat diubah</small>
                                </div>

                                <div class="form-group">
                                    <label>Poli</label>
                                    <input type="text" class="form-control" value="{{ $dokter->nama_poli }}" disabled>
                                    <small class="form-text text-muted">Poli tidak dapat diubah</small>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-save mr-1"></i> Simpan Perubahan
                                </button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
</div>
@endsection 