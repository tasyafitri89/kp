@extends('adminlte::page')

@section('title, KARTU TANDA PENDUDUK')

@section('content_header')
    <h1 class="m-0 text-dark">KTP</h1>
@stop

@section('content')
<div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body" style="overflow:auto">

                <a href="{{route('ktp.create')}}" class="btn btn-primary mb-2">
                        Tambah
                    </a>
 
                    <table class="table table-hover table-bordered table-stripped" id="example2" style="font-size: 10px">
                        <thead>
                        <tr>
                            <!-- <th>Id Unit</th> -->
                            <th>Tanggal Permohonan</td>
                            <th>Permohonan KTP</th>
                            <th>Nama</th>
                            <th>No KK</th>
                            <!-- <th>NIK</th> -->
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Jenis Kelamin</th>
                            <th>Golongan Darah</th>
                            <th>Alamat</th>
                            <th>Agama</th>
                            <th>Pekerjaan</th>
                            <th>Kewarganegaraan</th>
                            <th>Status</th>
                            <th>Opsi</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($ktp as $key => $ktp)
                            <tr>
                                <td>{{$ktp->created_at}}</td>
                                <td>{{$ktp->permohonan_ktp}}</td>
                                <td>{{$ktp->nama}}</td>
                                <td>{{$ktp->no_kk}}</td>
                                <!-- <td>{{$ktp->nik}}</td> -->
                                <td>{{$ktp->tempat_lahir}}</td>
                                <td>{{$ktp->tanggal_lahir}}</td>
                                <td>{{$ktp->jenis_kelamin}}</td>
                                <td>{{$ktp->golongan_darah}}</td>
                                <td>{{$ktp->alamat}}</td>
                                <td>{{$ktp->agama}}</td>
                                <td>{{$ktp->pekerjaan}}</td>
                                <td>{{$ktp->kewarganegaraan}}</td>
                                <td>{{$ktp->status}}</td>
                                <td>
                                    <a href="{{route('ktp.edit', $ktp)}}" class="fas fa-edit fa-lg"></a>
                                    &nbsp;
                                    <a href="{{route('ktp.destroy', $ktp)}}" onclick="notificationBeforeDelete(event, this)" class="fas fa-trash fa-lg text-danger"></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
 
                </div>
            </div>
        </div>
    </div>
@stop

@push('js')
    <form action="" id="delete-form" method="post">
        @method('delete')
        @csrf
    </form>
    <script>
        $('#example2').DataTable({
            "responsive": true,
        });
 
        function notificationBeforeDelete(event, el) {
            event.preventDefault();
            if (confirm('Apakah anda yakin akan menghapus data ? ')) {
                $("#delete-form").attr('action', $(el).attr('href'));
                $("#delete-form").submit();
            }
        }
    </script>
@endpush
