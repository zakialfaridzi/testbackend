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
                        <li class="breadcrumb-item active">Project Add</li>
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
                        <h3 class="card-title">Create Pegawai</h3>

                    </div>
                    <div class="card-body">
                        <form action="{{ route('pegawai.save-pegawai') }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="inputName">Nama Pegawai</label>
                                <input type="text" id="inputName" name="nama"
                                    class="form-control @error('nama') is-invalid @enderror" placeholder="Nama Pegawai"
                                    value="{{ old('nama') }}">
                                @error('nama')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="inputName">Email Pegawai</label>
                                <input type="text" id="inputName" name="email"
                                    class="form-control @error('email') is-invalid @enderror"
                                    placeholder="Email Pegawai" value="{{ old('email') }}">
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="inputNIP">NIP</label>
                                <input type="text" id="inputNIP" name="nip"
                                    class="form-control @error('nip') is-invalid @enderror" placeholder="NIP Pegawai"
                                    value="{{ old('nip') }}">
                                @error('nip')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="inputNIK">NIK</label>
                                <input type="text" id="inputNIK" name="nik"
                                    class="form-control @error('nik') is-invalid @enderror" placeholder="NIK Pegawai"
                                    value="{{ old('nik') }}">
                                @error('nik')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="inputTempatLahir">Tempat Lahir</label>
                                <input type="text" id="inputTempatLahir" name="tempat_lahir"
                                    class="form-control @error('tempat_lahir') is-invalid @enderror"
                                    placeholder="Tempat Lahir" value="{{ old('tempat_lahir') }}">
                                @error('tempat_lahir')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="inputTanggalLahir">Tanggal Lahir</label>
                                <input type="date" id="inputTanggalLahir" name="tanggal_lahir"
                                    class="form-control @error('tanggal_lahir') is-invalid @enderror"
                                    value="{{ old('tanggal_lahir') }}">
                                @error('tanggal_lahir')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="inputAlamat">Alamat</label>
                                <textarea id="inputAlamat" name='alamat' class="form-control @error('alamat') is-invalid @enderror" rows="4"
                                    placeholder="Alamat">{{ old('alamat') }}</textarea>
                                @error('alamat')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="inputJenisKelamin">Jenis Kelamin</label>
                                <select id="inputJenisKelamin" name="jenis_kelamin"
                                    class="form-control @error('jenis_kelamin') is-invalid @enderror custom-select">
                                    <option selected disabled>Pilih</option>
                                    <option>Laki-Laki</option>
                                    <option>Perempuan</option>
                                </select>
                                @error('jenis_kelamin')
                                    {{ $message }}
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="inputTelpon">Nomor Telpon Pegawai</label>
                                <input type="text" id="inputTelpon" name="telpon"
                                    class="form-control @error('telpon') is-invalid @enderror"
                                    placeholder="Nomor Telpon Pegawai" value="{{ old('telpon') }}">
                                @error('telpon')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="inputStatusNikah">Status Nikah</label>
                                <select id="inputStatusNikah" name="status_nikah"
                                    class="form-control @error('status_nikah') is-invalid @enderror custom-select">
                                    <option selected disabled>Pilih</option>
                                    <option>Lajang</option>
                                    <option>Menikah</option>
                                    <option>Duda</option>
                                    <option>Janda</option>
                                </select>
                                @error('status_nikah')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="inputDivisi">Divisi</label>
                                <select id="inputDivisi" name="id_divisi"
                                    class="form-control @error('id_divisi') is-invalid @enderror custom-select">
                                    <option selected disabled>Pilih</option>
                                    @foreach ($divisi as $item)
                                        <option value={{ $item->id }}>
                                            {{ $item->nama }}</option>
                                    @endforeach
                                </select>
                                @error('id_divisi')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="fotopegawai">Foto Pegawai</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input @error('fotopegawai') is-invalid @enderror" id="fotopegawai" name="fotopegawai">
                                        <label class="custom-file-label" for="fotopegawai">Choose file</label>
                                    </div>
                                </div>
								@error('fotopegawai')
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
