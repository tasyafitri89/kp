@extends('adminlte::page')

@section('title, Kartu Keluarga')

@section('content_header')
    <h1 class="m-0 text-dark">Pendaftaran Kartu Keluarga</h1>
@stop

@section('content')
<div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body" style="overflow:auto">

                <a href="{{route('kartukeluarga.create')}}" class="btn btn-primary mb-2">
                        Tambah
                    </a>
 
                    <table class="table table-hover table-bordered table-stripped" id="example2" style="font-size: 10px">
                        <thead>
                        <tr>
                            <!-- <th>Id Unit</th> -->
                            <th>Tanggal Permohonan</td>
                            <th>Nama Lengkap</th>
                            <th>Alamat Lengkap</th>
                            <th>Kode Pos</th>
                            <th>No Telepon</th>
                            <th>Jumlah Anggota Keluarga</th>
                            <th>Daftar Anggota</th>
                            <th>Status</th>
                            <th>Opsi</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($kartukeluarga as $key => $kartukeluarga)
                            <tr>
                                <!-- <td>{{$key+1}}</td> -->
                                <td>{{$kartukeluarga->created_at}}</td>
                                <td>{{$kartukeluarga->nama_lengkap}}</td>
                                <td>{{$kartukeluarga->alamat_lengkap}}</td>
                                <td>{{$kartukeluarga->kode_pos}}</td>
                                <td>{{$kartukeluarga->no_telp}}</td>
                                <td>{{$kartukeluarga->jumlah_anggota_keluarga}}</td>
                                <td>{{$kartukeluarga->daftar_anggota}}</td>
                                <td>{{$kartukeluarga->status}}</td>
                            <td>
                            <a href="{{route('kartukeluarga.edit', $kartukeluarga)}}" class="fas fa-edit fa-lg"></a>
                            &nbsp;
                            <a href="{{route('kartukeluarga.destroy', $kartukeluarga)}}" onclick="notificationBeforeDelete(event, this)" class="fas fa-trash fa-lg text-danger"></a>
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