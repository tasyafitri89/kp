@extends('adminlte::page')

@section('title, AKTA KELAHIRAN')

@section('content_header')
    <h1 class="m-0 text-dark">PENDAFTARAN AKTA KELAHIRAN</h1>
@stop

@section('content')
<div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body" style="overflow:auto">

                <a href="{{route('aktakelahiran.create')}}" class="btn btn-primary mb-2">
                        Tambah
                    </a>
 
                    <table class="table table-hover table-bordered table-stripped" id="example2" style="font-size: 10px">
                        <thead>
                        <tr>
                            <!-- <th>Id Unit</th> -->
                            <th>Tanggal Permohonan</td>
                            <th>Nama Lengkap Anak</th>
                            <th>Nama Ayah</th>
                            <th>Nama Ibu</th>
                            <!-- <th>NIK</th> -->
                            <th>No KK</th>
                            <th>Jenis Kelamin</th>
                            <th>Kelahiran Anak Ke</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Alamat Orang Tua</th>
                            <th>Status</th>
                            <th>Opsi</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($aktakelahiran as $key => $aktakelahiran)
                            <tr>
                                <!-- <td>{{$key+1}}</td> -->
                                <td>{{$aktakelahiran->created_at}}</td>
                                <td>{{$aktakelahiran->nama_lengkap_anak}}</td>
                                <td>{{$aktakelahiran->nama_ayah}}</td>
                                <td>{{$aktakelahiran->nama_ibu}}</td>
                                <!-- <td>{{$aktakelahiran->nik}}</td> -->
                                <td>{{$aktakelahiran->no_kk}}</td>
                                <td>{{$aktakelahiran->jenis_kelamin}}</td>
                                <td>{{$aktakelahiran->kelahiran_ke}}</td>
                                <td>{{$aktakelahiran->tempat_lahir}}</td>
                                <td>{{$aktakelahiran->tanggal_lahir}}</td>
                                <td>{{$aktakelahiran->alamat_orangtua}}</td>
                                <td>{{$aktakelahiran->status}}</td>
                                <td>
                                    <a href="{{route('aktakelahiran.edit', $aktakelahiran)}}" class="fas fa-edit fa-lg"></a>
                                    &nbsp;
                                    <a href="{{route('aktakelahiran.destroy', $aktakelahiran)}}" onclick="notificationBeforeDelete(event, this)" class="fas fa-trash fa-lg text-danger"></a>
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
