<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\ktp;

class KtpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Ktp = Ktp::all();

        return view('ktp.index', [
            'ktp' => $Ktp
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ktp.create');
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
        $Ktp = new Ktp;
        $Ktp->permohonan_ktp = $request->permohonan_ktp;
        $Ktp->nama= $request->nama;
        $Ktp->no_kk= $request->no_kk;
        $Ktp->tempat_lahir = $request->tempat_lahir;
        $Ktp->tanggal_lahir= $request->tanggal_lahir;
        $Ktp->jenis_kelamin = $request->jenis_kelamin;
        $Ktp->golongan_darah = $request->golongan_darah;
        $Ktp->alamat = $request->alamat;
        $Ktp->agama = $request->agama;
        $Ktp->status = $request->status;
        $Ktp->pekerjaan = $request->pekerjaan;
        $Ktp->kewarganegaraan= $request->kewarganegaraan;
        $Ktp->save();
       
        return redirect()->route('ktp.index')
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
        $Ktp = Ktp::find($id);
 
        if (!$Ktp) return redirect()->route('ktp.index')
            ->with('error_message', 'data tidak ditemukan');
 
        return view('ktp.edit', [
            'ktp' => $Ktp
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
        $Ktp = Ktp::find($id);
        $Ktp->permohonan_ktp = $request->permohonan_ktp;
        $Ktp->nama= $request->nama;
        $Ktp->no_kk= $request->no_kk;
        $Ktp->tempat_lahir = $request->tempat_lahir;
        $Ktp->tanggal_lahir= $request->tanggal_lahir;
        $Ktp->jenis_kelamin = $request->jenis_kelamin;
        $Ktp->golongan_darah = $request->golongan_darah;
        $Ktp->alamat = $request->alamat;
        $Ktp->agama = $request->agama;
        $Ktp->status = $request->status;
        $Ktp->pekerjaan = $request->pekerjaan;
        $Ktp->kewarganegaraan= $request->kewarganegaraan;
        $Ktp->agama = $request->agama;
        $Ktp->save();
 
        return redirect()->route('ktp.index')
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
        $Ktp = Ktp::find($id);
        $Ktp->delete();
       
        return redirect()->route('ktp.index')
        ->with('success_message', 'Data berhasil dihapus');
    }
}
