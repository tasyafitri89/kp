@extends('adminlte::page')
 
@section('title', 'Daftar Kartu Tanda Penduduk')
 
@section('content_header')
    <h1 class="m-0 text-dark">Daftar KTP</h1>
@stop
 
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-12">

                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Pendaftaran Kartu Tanda Penduduk</h3>
                    </div>

                    <form action="{{route('ktp.store')}}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="permohonanKTP">Permohonan KTP :</label>
                                <select class="form-control" name="permohonan_ktp">
                                    <option value="">Pilih Alasan Permohonan KTP</option>
                                    <option value="Baru">Baru</option>
                                    <option value="Perpanjangan">Perpanjangan</option>
                                    <option value="Penggantian">Penggantian</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="nama">Nama :</label>
                                <textarea class="form-control" name="nama" placeholder="Nama"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="noKK">No.KK :</label>
                                <input type="text" class="form-control" name="no_kk" placeholder="Nomer Kartu Keluarga">
                            </div>
                            <div class="form-group">
                                <label for="tempatLahir">Tempat Lahir :</label>
                                <input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat Lahir">
                            </div>
                            <div class="form-group">
                                <label for="tanggalLahir">Tanggal Lahir :</label>
                                <input type="date" class="form-control" name="tanggal_lahir" placeholder="Tanggal Lahir">
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
                                <label for="golonganDarah">Golongan Darah :</label>
                                <select class="form-control" name="golongan_darah">
                                    <option value="">Pilih Gol Darah</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="AB">AB</option>
                                    <option value="O">O</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat :</label>
                                <textarea class="form-control" name="alamat" placeholder="Alamat Lengkap"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="agama">Agama :</label>
                                <select class="form-control" name="agama">
                                    <option value="">Pilih Agama</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Katolik">Katolik</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Budha">Budha</option>
                                    <option value="Konghucu">Konghucu</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="pekerjaan">Pekerjaan :</label>
                                <input type="text" class="form-control" name="pekerjaan" placeholder="Pekerjaan">
                            </div>
                            <div class="form-group">
                                <label for="kewarganegaraan">Kewarganegaraan :</label>
                                <input type="text" class="form-control" name="kewarganegaraan" placeholder="Kewarganegaraan">
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
                            <a href="{{route('ktp.index')}}" class="btn btn-default">Batal</a>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@stop
