<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Pelengkap;
use App\Models\Unit;
use App\Models\Tahun;
use Illuminate\Http\Request;

class PelengkapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pelengkaps = Pelengkap::leftJoin('unit', 'unit.namaunit', '=', 'pelengkap.namaunit')
                        ->leftJoin('tahun', 'tahun.tahun', '=', 'pelengkap.tahun')
                        ->orderby('kodeunit', 'asc')
                        ->orderby('tahun', 'desc')
                        ->select('pelengkap.*')
                        ->get();
        
        return view('pelengkaps.index', [
            'pelengkaps' => $pelengkaps
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
        $units = Unit::all();
        $tahuns = Tahun::all();
        return view('pelengkaps.create', compact('units', 'tahuns'));
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

        $pelengkap = new Pelengkap;
        $pelengkap->namaunit = $request->unit;
        $pelengkap->tahun = $request->tahun;
        $pelengkap->tambahantpp = $request->tambahantpp;
        $pelengkap->tpg = $request->tpg;
        $pelengkap->tamsilguru = $request->tamsilguru;
        $pelengkap->insentif = $request->insentif;
        $pelengkap->save();
        
        return redirect()->route('pelengkaps.index')
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
        // return $id;
        $units = Unit::all();
        $tahuns = Tahun::all();
        $pelengkap = Pelengkap::find($id);
        if (!$pelengkap) return redirect()->route('pelengkaps.index')
            ->with('error_message', 'data tidak ditemukan');
        return view('pelengkaps.edit', [
            'pelengkap' => $pelengkap
            ], compact('units', 'tahuns'));
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

        $pelengkap = Pelengkap::find($id);
        $pelengkap->namaunit = $pelengkap->namaunit;
        $pelengkap->tahun = $pelengkap->tahun;
        $pelengkap->tambahantpp = $request->tambahantpp;
        $pelengkap->tpg = $request->tpg;
        $pelengkap->tamsilguru = $request->tamsilguru;
        $pelengkap->insentif = $request->insentif;
        $pelengkap->save();

        return redirect()->route('pelengkaps.index')
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
        // return $id;

        $pelengkap = Pelengkap::find($id);
        $pelengkap->delete();
        return redirect()->route('pelengkaps.index')
        ->with('success_message', 'Data berhasil dihapus');
    }
}
