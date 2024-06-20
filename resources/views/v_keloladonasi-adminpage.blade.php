@extends('layout.v_templateadmin')
@section('contentadmin')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Data Donasi</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                <li class="breadcrumb-item active">Data Donasi</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <button class="btn btn-primary"><i class="fa fa-plus"></i> Tambah</button>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nama Donatur</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Telepon</th>
                                    <th scope="col">Nominal</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Pesan</th>
                                    <th scope="col">Tindakan</th>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider">
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Anonim</td>
                                    <td>anonim@gmail.com</td>
                                    <td>081125647890</td>
                                    <td>Rp 1.000.000</td>
                                    <td>10 Juni 2024</td>
                                    <td>-</td>
                                    <td><button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                        <button class="btn btn-success"><i class="fa fa-eye"></i></button>
                                    </td>
                                </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
