@extends('adminlte::page')
 
@section('title', 'Edit Akta Kelahiran')
 
@section('content_header')
    <h1 class="m-0 text-dark">Edit Akta Kelahiran</h1>
@stop
 
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-12">

                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Edit Akta Kelahiran</h3>
                    </div>

                    <form action="{{route('aktakelahiran.update', $aktakelahiran->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="form-group">
                                <label for="namaLengkapanak">Nama Lengkap Anak :</label>
                                <input type="text" class="form-control" name="nama_lengkap_anak" value="{{ $aktakelahiran->nama_lengkap_anak }}" placeholder="Nama Lengkap Anak">
                            </div>
                            <div class="form-group">
                                <label for="namaAyah">Nama Ayah :</label>
                                <input type="text" class="form-control" name="nama_ayah" value="{{ $aktakelahiran->nama_ayah }}" placeholder="Nama Ayah">
                            </div>
                            <div class="form-group">
                                <label for="namaIbu">Nama Ibu :</label>
                                <input type="text" class="form-control" name="nama_ibu" value="{{ $aktakelahiran->nama_ibu }}" placeholder="Nama Ibu">
                            </div>
                            <div class="form-group">
                                <label for="noKK">No.KK :</label>
                                <input type="text" class="form-control" name="no_kk" value="{{ $aktakelahiran->no_kk }}" placeholder="Nomor Kartu Keluarga">
                            </div>
                            <div class="form-group">
                                <label for="jenisKelamin">Jenis Kelamin :</label>
                                <select class="form-control" name="jenis_kelamin">
                                    <option value="">Pilih Jenis Kelamin</option>
                                    <option value="Pria" {{ $aktakelahiran->jenis_kelamin == 'Pria' ? 'selected' : '' }}>Pria</option>
                                    <option value="Wanita" {{ $aktakelahiran->jenis_kelamin == 'Wanita' ? 'selected' : '' }}>Wanita</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="kelahiranKe">Kelahiran Anak Ke :</label>
                                <input type="text" class="form-control" name="kelahiran_ke" value="{{ $aktakelahiran->kelahiran_ke }}" placeholder="Kelahiran Ke">
                            </div>
                            <div class="form-group">
                                <label for="tempatLahir">Tempat Lahir :</label>
                                <input type="text" class="form-control" name="tempat_lahir" value="{{ $aktakelahiran->tempat_lahir }}" placeholder="Tempat Lahir">
                            </div>
                            <div class="form-group">
                                <label for="tanggaLlahir">Tanggal Lahir :</label>
                                <input type="date" class="form-control" name="tanggal_lahir" value="{{ $aktakelahiran->tanggal_lahir }}" placeholder="Tanggal Lahir">
                            </div>
                            <div class="form-group">
                                <label for="alamatOrangtua">Alamat Orang Tua :</label>
                                <textarea class="form-control" name="alamat_orangtua" value="{{ $aktakelahiran->alamat_orangtua }}" placeholder="Alamat Orangtua">{{ $aktakelahiran->alamat }}</textarea>
                            </div>
                            <label for="status">Status :</label>
                            <select class="form-control" name="status">
                                    <option value="">Pilih Status</option>
                                    <option value="Belum Diproses" {{ $aktakelahiran->status == 'Belum Diproses' ? 'selected' : '' }}>Belum Diproses</option>
                                    <option value="Sedang Diproses" {{ $aktakelahiran->status == 'Sedang Diproses' ? 'selected' : '' }}>Sedang Diproses</option>
                                    <option value="Sudah Diproses" {{ $aktakelahiran->status == 'Sudah Diproses' ? 'selected' : '' }}>Sudah Diproses</option>
                                    <option value="Belum diambil" {{ $aktakelahiran->status == 'Belum diambil' ? 'selected' : '' }}>Belum diambil</option>
                                    <option value="Sudah diambil" {{ $aktakelahiran->status == 'Sudah diambil' ? 'selected' : '' }}>Sudah diambil</option>
                                </select>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Edit</button>
                            <a href="{{route('aktakelahiran.index')}}" class="btn btn-default">Batal</a>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@stop