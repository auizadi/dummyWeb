@extends('layout.v_templateadmin')
@section('contentadmin')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Data Berita</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                <li class="breadcrumb-item active">Data Berita</li>
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
                                    <th scope="col">Judul</th>
                                    <th scope="col">Kategori</th>
                                    <th scope="col">Isi</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Nama Admin</th>
                                    <th scope="col">Tindakan</th>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider">
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
                                    <td>consectetuer</td>
                                    <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem officiis reprehenderit repellendus numquam iusto deleniti veritatis modi quibusdam dolorum tenetur expedita deserunt impedit possimus, recusandae perspiciatis ab ut facere adipisci!....</td>
                                    <td>8 May 2024</td>
                                    <td>Lorem ipsum dolor sit amet </td>
                                    <td><button class="btn btn-primary"><i class="fa fa-edit"></i></button>
                                        <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                        <button class="btn btn-success"><i class="fa fa-eye"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
                                    <td>consectetuer</td>
                                    <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem officiis reprehenderit repellendus numquam iusto deleniti veritatis modi quibusdam dolorum tenetur expedita deserunt impedit possimus, recusandae perspiciatis ab ut facere adipisci!...</td>
                                    <td>27 May 2024</td>
                                    <td>Lorem ipsum dolor sit amet </td>
                                    <td><button class="btn btn-primary"><i class="fa fa-edit"></i></button>
                                        <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                        <button class="btn btn-success"><i class="fa fa-eye"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
                                    <td>consectetuer</td>
                                    <td></td>
                                    <td>1 Juni 2024</td>
                                    <td>Lorem ipsum dolor sit amet </td>
                                    <td><button class="btn btn-primary"><i class="fa fa-edit"></i></button>
                                        <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
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
