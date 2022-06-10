<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Konfigurasi;
use App\Models\Jenisgaji;
use Illuminate\Http\Request;

class KonfigurasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $konfigurasis = Konfigurasi::leftJoin('jenisgaji', 'jenisgaji.id', '=', 'konfigurasi.bulanacuan')
                        ->select('konfigurasi.*', 'jenisgaji.jenisgaji')
                        ->get();
        
        return view('konfigurasis.index', [
            'konfigurasis' => $konfigurasis
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
        $jenisgajis = Jenisgaji::all();
        $konfigurasi = Konfigurasi::find($id);
        if (!$konfigurasi) return redirect()->route('konfigurasis.index')
            ->with('error_message', 'data tidak ditemukan');
        return view('konfigurasis.edit', [
            'konfigurasi' => $konfigurasi
            ], compact('jenisgajis'));
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
        // return $request;

        $konfigurasi = Konfigurasi::find($id);
        $konfigurasi->tahunanggaran = $request->tahunanggaran;
        $konfigurasi->bulanacuan = $request->bulanacuan;
        $konfigurasi->nilaiaccress = $request->nilaiaccress;
        $konfigurasi->save();

        return redirect()->route('konfigurasis.index')
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
        //
    }
}
