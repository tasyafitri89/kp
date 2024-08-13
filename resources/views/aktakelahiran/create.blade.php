@extends('adminlte::page')
 
@section('title', 'Pendaftaran Akta Kelahiran')
 
@section('content_header')
    <h1 class="m-0 text-dark">Daftar Akta Kelahiran</h1>
@stop
 
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-12">

                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Pendaftaran Akta Kelahiran</h3>
                    </div>

                    <form action="{{route('aktakelahiran.store')}}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="namaLengkapanak">Nama Lengkap Anak :</label>
                                <textarea class="form-control" name="nama_lengkap_anak" placeholder="Nama Lengkap Anak"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="namaAyah">Nama Ayah :</label>
                                <textarea class="form-control" name="nama_ayah" placeholder="Nama Ayah"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="namaIbu">Nama Ibu :</label>
                                <textarea class="form-control" name="nama_ibu" placeholder="Nama Ibu"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="noKK">No.KK :</label>
                                <input type="text" class="form-control" name="no_kk" placeholder="Nomor Kartu Keluarga">
                            </div>
                            <div class="form-group">
                                <label for="jenisKelamin">Jenis Kelamin :</label>
                                <select class="form-control" name="jenis_kelamin">
                                    <option value="">Pilih Jenis Kelamin</option>
                                    <option value="Pria">Pria</option>
                                    <option value="Wanita">Wanita</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="kelahiranKe">Kelahiran Anak Ke :</label>
                                <input type="text" class="form-control" name="kelahiran_ke" placeholder="Kelahiran Ke">
                            </div>
                            <div class="form-group">
                                <label for="tempatLahir">Tempat Lahir :</label>
                                <input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat Lahir">
                            </div>
                            <div class="form-group">
                                <label for="tanggaLlahir">Tanggal Lahir :</label>
                                <input type="date" class="form-control" name="tanggal_lahir" placeholder="Tanggal Lahir">
                            </div>
                            <div class="form-group">
                                <label for="alamatOrangtua">Alamat Orang Tua :</label>
                                <textarea class="form-control" name="alamat_orangtua" placeholder="Alamat Orangtua"></textarea>
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
                            <a href="{{route('aktakelahiran.index')}}" class="btn btn-default">Batal</a>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@stop