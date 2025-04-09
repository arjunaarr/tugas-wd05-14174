@extends('layout.main')
@section('content')
<div class="wrapper">
        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <h1>Pasien</h1>
                </div>
            </section>
            <section class="content">
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Riwayat Periksa</h3>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>NO</th>
                                        <th>ID Periksa</th>
                                        <th>Dokter</th>
                                        <th>Tanggal Periksa</th>
                                        <th>Catatan</th>
                                        <th>Obat</th>
                                        <th>Biaya Periksa</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>P001</td>
                                        <td>Andi</td>
                                        <td>24-03-2025</td>
                                        <td>Perlu banyak tidur</td>
                                        <td>Obat tidur</td>
                                        <td>170000</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>P002</td>
                                        <td>Andi</td>
                                        <td>26-03-2025</td>
                                        <td>Perlu banyak olahraga</td>
                                        <td>Ashwagandha</td>
                                        <td>200000</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    @endsection
