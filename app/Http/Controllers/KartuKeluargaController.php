<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\KartuKeluarga;

class KartuKeluargaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kartukeluarga = KartuKeluarga::all();

        return view('kartukeluarga.index', compact('kartukeluarga'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kartukeluarga.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        $kartukeluarga = new KartuKeluarga;
        $kartukeluarga->nama_lengkap = $request->nama_lengkap;
        $kartukeluarga->alamat_lengkap = $request->alamat_lengkap;
        $kartukeluarga->kode_pos= $request->kode_pos;
        $kartukeluarga->no_telp = $request->no_telp;
        $kartukeluarga->jumlah_anggota_keluarga = $request->jumlah_anggota_keluarga;
        $kartukeluarga->daftar_anggota = $request->daftar_anggota;
        $kartukeluarga->status = $request->status;
        $kartukeluarga->save();
       
        return redirect()->route('kartukeluarga.index')
            ->with('success_message', 'Berhasil menambah data baru');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kartukeluarga = KartuKeluarga::find($id);
 
        if (!$kartukeluarga) return redirect()->route('kartukeluarga.index')
            ->with('error_message', 'data tidak ditemukan');
 
        return view('kartukeluarga.edit', [
            'kartukeluarga' => $kartukeluarga
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $kartukeluarga = KartuKeluarga::find($id);
        $kartukeluarga->nama_lengkap = $request->nama_lengkap;
        $kartukeluarga->alamat_lengkap = $request->alamat_lengkap;
        $kartukeluarga->kode_pos= $request->kode_pos;
        $kartukeluarga->no_telp = $request->no_telp;
        $kartukeluarga->jumlah_anggota_keluarga = $request->jumlah_anggota_keluarga;
        $kartukeluarga->daftar_anggota = $request->daftar_anggota;
        $kartukeluarga->status = $request->status;
        $kartukeluarga->save();
 
        return redirect()->route('kartukeluarga.index')
            ->with('success_message', 'Berhasil mengubah data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kartukeluarga = KartuKeluarga::find($id);
        $kartukeluarga->delete();
       
        return redirect()->route('kartukeluarga.index')
        ->with('success_message', 'Data berhasil dihapus');
    }
}
