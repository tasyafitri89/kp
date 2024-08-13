@extends('adminlte::page')
 
@section('title', 'Halaman UPDATE')
 
@section('content_header')
    <h1 class="m-0 text-dark">Edit Data Kartu Tanda Penduduk</h1>
@stop
 
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-12">

                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Edit Kartu Tanda Penduduk</h3>
                    </div>

                    <form action="{{route('ktp.update', $ktp->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="form-group">
                                <label for="permohonanKTP">Permohonan KTP :</label>
                                <select class="form-control" name="permohonan_ktp">
                                    <option value="">Pilih Alasan Permohonan KTP</option>
                                    <option value="Baru" {{ $ktp->permohonan_ktp == 'Baru' ? 'selected' : '' }}>Baru</option>
                                    <option value="Perpanjangan" {{ $ktp->permohonan_ktp == 'Perpanjangan' ? 'selected' : '' }}>Perpanjangan</option>
                                    <option value="Penggantian" {{ $ktp->permohonan_ktp == 'Penggantian' ? 'selected' : '' }}>Penggantian</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="nama">Nama :</label>
                                <input type="text" class="form-control" name="nama" placeholder="Nama" value="{{$ktp->nama}}"></input>
                            </div>
                            <div class="form-group">
                                <label for="noKK">No.KK :</label>
                                <input type="text" class="form-control" name="no_kk" value="{{$ktp->no_kk}}" placeholder="Nomer Kartu Keluarga">
                            </div>
                            <div class="form-group">
                                <label for="tempatLahir">Tempat Lahir :</label>
                                <input type="text" class="form-control" name="tempat_lahir" value="{{$ktp->tempat_lahir}}" placeholder="Tempat Lahir">
                            </div>
                            <div class="form-group">
                                <label for="tanggalLahir">Tanggal Lahir :</label>
                                <input type="date" class="form-control" name="tanggal_lahir" value="{{ $ktp->tanggal_lahir->format('Y-m-d') }}" placeholder="Tanggal Lahir">
                            </div>
                            <div class="form-group">
                                <label for="jenisKelamin">Jenis Kelamin :</label>
                                <select class="form-control" name="jenis_kelamin">
                                    <option value="">Pilih Jenis Kelamin</option>
                                    <option value="Pria" {{ $ktp->jenis_kelamin == 'Pria' ? 'selected' : '' }}>Pria</option>
                                    <option value="Wanita" {{ $ktp->jenis_kelamin == 'Wanita' ? 'selected' : '' }}>Wanita</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="golonganDarah">Golongan Darah :</label>
                                <select class="form-control" name="golongan_darah">
                                    <option value="">Pilih Gol Darah</option>
                                    <option value="A" {{ $ktp->golongan_darah == 'A' ? 'selected' : '' }}>A</option>
                                    <option value="B" {{ $ktp->golongan_darah == 'B' ? 'selected' : '' }}>B</option>
                                    <option value="AB" {{ $ktp->golongan_darah == 'AB' ? 'selected' : '' }}>AB</option>
                                    <option value="O" {{ $ktp->golongan_darah == 'O' ? 'selected' : '' }}>O</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat :</label>
                                <textarea class="form-control" name="alamat" placeholder="Alamat Lengkap">{{$ktp->alamat}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="agama">Agama :</label>
                                <select class="form-control" name="agama">
                                    <option value="">Pilih Agama</option>
                                    <option value="Islam" {{ $ktp->agama == 'Islam' ? 'selected' : '' }}>Islam</option>
                                    <option value="Kristen" {{ $ktp->agama == 'Kristen' ? 'selected' : '' }}>Kristen</option>
                                    <option value="Katolik" {{ $ktp->agama == 'Katolik' ? 'selected' : '' }}>Katolik</option>
                                    <option value="Hindu" {{ $ktp->agama == 'Hindu' ? 'selected' : '' }}>Hindu</option>
                                    <option value="Budha" {{ $ktp->agama == 'Budha' ? 'selected' : '' }}>Budha</option>
                                    <option value="Konghucu" {{ $ktp->agama == 'Konghucu' ? 'selected' : '' }}>Konghucu</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="pekerjaan">Pekerjaan :</label>
                                <input type="text" class="form-control" name="pekerjaan" value="{{$ktp->pekerjaan}}" placeholder="Pekerjaan">
                            </div>
                            <div class="form-group">
                                <label for="kewarganegaraan">Kewarganegaraan :</label>
                                <input type="text" class="form-control" name="kewarganegaraan" value="{{$ktp->kewarganegaraan}}" placeholder="Kewarganegaraan">
                            </div>
                            <label for="status">Status :</label>
                            <select class="form-control" name="status">
                                    <option value="">Pilih Status</option>
                                    <option value="Belum Diproses" {{ $ktp->status == 'Belum Diproses' ? 'selected' : '' }}>Belum Diproses</option>
                                    <option value="Sedang Diproses" {{ $ktp->status == 'Sedang Diproses' ? 'selected' : '' }}>Sedang Diproses</option>
                                    <option value="Sudah Diproses" {{ $ktp->status == 'Sudah Diproses' ? 'selected' : '' }}>Sudah Diproses</option>
                                    <option value="Belum diambil" {{ $ktp->status == 'Belum diambil' ? 'selected' : '' }}>Belum diambil</option>
                                    <option value="Sudah diambil" {{ $ktp->status == 'Sudah diambil' ? 'selected' : '' }}>Sudah diambil</option>
                                </select>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Edit</button>
                            <a href="{{route('ktp.index')}}" class="btn btn-default">Batal</a>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@stop