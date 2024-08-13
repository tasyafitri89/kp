@extends('adminlte::page')
 
@section('title', 'Daftar Kartu Keluarga')
 
@section('content_header')
    <h1 class="m-0 text-dark">Daftar KK</h1>
@stop
 
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-12">

                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Pendaftaran Kartu Keluarga</h3>
                    </div>

                    <form action="{{route('kartukeluarga.store')}}" method="POST">
                        @csrf
                            <div class="form-group">
                                <label for="namaLengkap">Nama Lengkap :</label>
                                <textarea class="form-control" name="nama_lengkap" placeholder="Nama Lengkap"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="alamatLengkap">Alamat Lengkap :</label>
                                <input type="text" class="form-control" name="alamat_lengkap" placeholder="Alamat Lengkap">
                            </div>
                            <div class="form-group">
                                <label for="kodePos">Kode Pos :</label>
                                <input type="text" class="form-control" name="kode_pos" placeholder="Kode Pos">
                            </div>
                            <div class="form-group">
                                <label for="noTelepom">No Telepon :</label>
                                <input type="text" class="form-control" name="no_telp" placeholder="No Telepon">
                            </div>
                            <div class="form-group">
                                <label for="jumlahAnggotakeluarga">Jumlah Anggota Keluarga :</label>
                                <input type="text" class="form-control" name="jumlah_anggota_keluarga" placeholder="Jumlah Anggota Keluarga">
                            </div>
                            <div class="form-group">
                                <label for="daftarAnggota">Daftar Anggota :</label>
                                <input type="text" class="form-control" name="daftar_anggota" placeholder="Daftar Anggota">
                            </div>
                            <div class="form-group">
                                <label for="status">Status :</label>
                                <select class="form-control" name="status">
                                    <option value="" disabled>Pilih Status</option>
                                    <option value="Belum Diproses">Belum Diproses</option>
                                    <option value="Sedang Diproses">Sedang Diproses</option>
                                    <option value="Sudah Diproses">Sudah Diproses</option>
                                    <option value="Belum diambil">Belum diambil</option>
                                    <option value="Sudah diambil">Sudah diambil</option>
                                </select>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Daftar</button>
                            <a href="{{route('kartukeluarga.index')}}" class="btn btn-default">Batal</a>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@stop
