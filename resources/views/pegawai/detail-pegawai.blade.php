@extends('layouts.master')

@section('title', 'Add Data Pegawai')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Project Add</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Detail Pegawai</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Detail Pegawai</h3>

                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th>Nama Pegawai</th>
                                        <td>{{ $pegawaiId->nama }}</td>
                                    </tr>
                                    <tr>
                                        <th>Email Pegawai</th>
                                        <td>{{ $pegawaiId->email }}</td>
                                    </tr>
                                    <tr>
                                        <th>NIP</th>
                                        <td>{{ $pegawaiId->nip }}</td>
                                    </tr>
                                    <tr>
                                        <th>NIK</th>
                                        <td>{{ $pegawaiId->nik }}</td>
                                    </tr>
                                    <tr>
                                        <th>Tempat Lahir</th>
                                        <td>{{ $pegawaiId->tempat_lahir }}</td>
                                    </tr>
                                    <tr>
                                        <th>Tanggal Lahir</th>
                                        <td>{{ $pegawaiId->tanggal_lahir }}</td>
                                    </tr>
                                    <tr>
                                        <th>Alamat</th>
                                        <td>{{ $pegawaiId->alamat }}</td>
                                    </tr>
                                    <tr>
                                        <th>Jenis Kelamin</th>
                                        <td>{{ $pegawaiId->jenis_kelamin }}</td>
                                    </tr>
                                    <tr>
                                        <th>Nomor Telpon Pegawai</th>
                                        <td>{{ $pegawaiId->telpon }}</td>
                                    </tr>
                                    <tr>
                                        <th>Status Nikah</th>
                                        <td>{{ $pegawaiId->status_nikah }}</td>
                                    </tr>
                                    <tr>
                                        <th>Divisi</th>
                                        <td>{{ $pegawaiId->divisi->nama }}</td>
                                    </tr>
                                    <tr>
                                        <th>Foto Pegawai</th>
                                        <td>
                                            @if ($pegawaiId->fotopegawai != null)
                                                <img src="{{ asset('storage/' . $pegawaiId->fotopegawai) }}" width="400px"
                                                    height="600px" class="img-thumbnail" alt="foto pegawai">
                                            @else
                                                <img src="{{ asset('img-placeholder.png') }}"
                                                    class="img-thumbnail">
                                            @endif
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
    </section>
    <!-- /.content -->
</div>
