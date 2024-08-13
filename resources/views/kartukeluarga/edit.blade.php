@extends('adminlte::page')
 
@section('title', 'Halaman Update')
 
@section('content_header')
    <h1 class="m-0 text-dark">Edit Data Kartu Keluarga</h1>
@stop
 
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-12">

                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Edit Kartu Keluarga</h3>
                    </div>

                    <form action="{{route('kartukeluarga.update', $kartukeluarga->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="form-group">
                                <label for="namaLengkap">Nama Lengkap :</label>
                                <input type="text" class="form-control" name="nama_lengkap" placeholder="Nama Lengkap" value="{{ $kartukeluarga->nama_lengkap }}"></input>
                            </div>
                            <div class="form-group">
                                <label for="alamatLengkap">Alamat Lengkap :</label>
                                <textarea class="form-control" name="alamat_lengkap" placeholder="Alamat Lengkap">{{ $kartukeluarga->alamat_lengkap }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="kodePos">Kode Pos :</label>
                                <input type="text" class="form-control" name="kode_pos" value="{{ $kartukeluarga->kode_pos }}" placeholder="Kode Pos">
                            </div>
                            <div class="form-group">
                                <label for="noTelepon">No Telepon :</label>
                                <input type="text" class="form-control" name="no_telp" value="{{ $kartukeluarga->no_telp }}" placeholder="No Telepon">
                            </div>
                            <div class="form-group">
                                <label for="jumlahAnggotakeluarga">Jumlah Anggota Keluarga  :</label>
                                <input type="text" class="form-control" name="jumlah_anggota_keluarga" value="{{ $kartukeluarga->jumlah_anggota_keluarga }}" placeholder="Jumlah Anggota Keluarga">
                            </div>
                            <div class="form-group">
                                <label for="daftarAnggota">Daftar Anggota :</label>
                                <input type="text" class="form-control" name="daftar_anggota" value="{{ $kartukeluarga->daftar_anggota }}" placeholder="Daftar Anggota">
                            </div>
                            <label for="status">Status :</label>
                            <select class="form-control" id="status" name="status">

                                    <option value="">Pilih Status</option>
                                    <option value="Belum Diproses" {{ $kartukeluarga->status == 'Belum Diproses' ? 'selected' : '' }}>Belum Diproses</option>
                                    <option value="Sedang Diproses" {{ $kartukeluarga->status == 'Sedang Diproses' ? 'selected' : '' }}>Sedang Diproses</option>
                                    <option value="Sudah Diproses" {{ $kartukeluarga->status == 'Sudah Diproses' ? 'selected' : '' }}>Sudah Diproses</option>
                                    <option value="Belum diambil" {{ $kartukeluarga->status == 'Belum diambil' ? 'selected' : '' }}>Belum diambil</option>
                                    <option value="Sudah diambil" {{ $kartukeluarga->status == 'Sudah diambil' ? 'selected' : '' }}>Sudah diambil</option>
                                </select>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Edit</button>
                            <a href="{{route('kartukeluarga.index')}}" class="btn btn-default">Batal</a>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@stop