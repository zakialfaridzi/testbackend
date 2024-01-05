@extends('layouts.master')

@section('title', 'Create Data Pegawai')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Divisi Add</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Divisi Add</li>
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
                        <h3 class="card-title">Create Divisi</h3>

                    </div>
                    <div class="card-body">
                        <form action="{{ route('divisi.save-divisi') }}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="inputName">Nama Divisi</label>
                                <input type="text" id="inputName" name="nama"
                                    class="form-control @error('nama') is-invalid @enderror" placeholder="Nama Divisi">
                                @error('nama')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
        </form>
    </section>
    <!-- /.content -->
</div>
