<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\AktaKelahiran;

class AktaKelahiranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aktakelahiran = AktaKelahiran::all();

        return view('aktakelahiran.index', [
            'aktakelahiran' => $aktakelahiran
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('aktakelahiran.create');
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
        $aktakelahiran = new AktaKelahiran;
        $aktakelahiran->nama_lengkap_anak = $request->nama_lengkap_anak;
        $aktakelahiran->nama_ayah = $request->nama_ayah;
        $aktakelahiran->nama_ibu = $request->nama_ibu;
        $aktakelahiran->no_kk = $request->no_kk;
        $aktakelahiran->jenis_kelamin = $request->jenis_kelamin;
        $aktakelahiran->kelahiran_ke = $request->kelahiran_ke;
        $aktakelahiran->tempat_lahir = $request->tempat_lahir;
        $aktakelahiran->tanggal_lahir = $request->tanggal_lahir;
        $aktakelahiran->alamat_orangtua = $request->alamat_orangtua;
        $aktakelahiran->status = $request->status;
        $aktakelahiran->save();
       
        return redirect()->route('aktakelahiran.index')
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
        $aktakelahiran = AktaKelahiran::find($id);
 
        if (!$aktakelahiran) return redirect()->route('aktakelahiran.index')
            ->with('error_message', 'data tidak ditemukan');
 
        return view('aktakelahiran.edit', [
            'aktakelahiran' => $aktakelahiran
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
        $aktakelahiran = AktaKelahiran::find($id);
        $aktakelahiran->nama_lengkap_anak = $request->nama_lengkap_anak;
        $aktakelahiran->nama_ayah = $request->nama_ayah;
        $aktakelahiran->nama_ibu = $request->nama_ibu;
        $aktakelahiran->no_kk = $request->no_kk;
        $aktakelahiran->jenis_kelamin = $request->jenis_kelamin;
        $aktakelahiran->kelahiran_ke = $request->kelahiran_ke;
        $aktakelahiran->tempat_lahir = $request->tempat_lahir;
        $aktakelahiran->tanggal_lahir = $request->tanggal_lahir;
        $aktakelahiran->alamat_orangtua = $request->alamat_orangtua;
        $aktakelahiran->status = $request->status;
        $aktakelahiran->save();
 
        return redirect()->route('aktakelahiran.index')
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
        $aktakelahiran = AktaKelahiran::find($id);
        $aktakelahiran->delete();
       
        return redirect()->route('aktakelahiran.index')
        ->with('success_message', 'Data berhasil dihapus');
    }
}