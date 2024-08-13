@extends('adminlte::page')
 
@section('title', 'Daftar Supplier')
 
@section('content_header')
    <h1 class="m-0 text-dark">Daftar Supplier</h1>
@stop
 
@section('content')
    <form action="{{route('suppliers.store')}}" method="post">
        @csrf
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body" style="overflow:auto">

                    <table style="width:100%">
                    <!-- <tr></tr>
                    <tr></tr>
                    <tr></tr>
                    <tr>
                        <td><label for="Labelid">id</label></td>
                        <td><input type="text" id="Inputid" placeholder="id" name="id" value="{{old('id')}}"></td>
                    </tr> -->
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
                    <tr>
                        <td><label for="LabelKodesupplier">Kode Supplier</label></td>
                        <td><input type="text" id="InputKodesupplier" placeholder="Kode Supplier" name="kode_supplier" value="{{old('kode_supplier')}}"></td>
                    </tr>
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
                    <tr>
                        <td><label for="LabelNamasupplier">Nama Supplier</label></td>
                        <td><input type="text" id="InputNamasupplier" placeholder="Nama Supplier" name="nama_supplier" value="{{old('nama_supplier')}}"></td>
                    </tr>
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
                    <tr>
                        <td><label for="LabelNotelepon">No Telepon</label></td>
                        <td><input type="text" id="InputNotelepon" placeholder="No Telepon" name="no_telp" value="{{old('no_telp')}}"></td>
                    </tr>
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
                    <tr>
                        <td><label for="LabelAlamatsupplier">Alamat Supplier</label></td>
                        <td><input type="text" id="InputAlamatsupplier" placeholder="Alamat Supplier" name="alamat_supplier" value="{{old('alamat_supplier')}}"></td>
                    </tr>
                    </table>
 
                </div>
 
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{route('suppliers.index')}}" class="btn btn-default">Batal</a>
                </div>
            </div>
        </div>
    </div>
@stop
