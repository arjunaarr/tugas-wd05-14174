@extends('layout.main')
@section('content')

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Pasien</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">General Form</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h3 class="card-title">Periksa</h3>
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <label for="nama">Nama Anda</label>
                            <input type="text" class="form-control" id="nama" placeholder="Input your name">
                        </div>
                        <div class="form-group">
                            <label for="dokter">Pilih Dokter</label>
                            <select class="form-control" id="dokter">
                                <option>Value 1</option>
                                <option>Value 2</option>
                                <option>Value 3</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
