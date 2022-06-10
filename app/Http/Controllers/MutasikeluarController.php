<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Mutasikeluar;
use App\Models\Unit;
use App\Models\Tahun;
use Illuminate\Http\Request;
use Datatables;

class MutasikeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $mutasikeluars = Mutasikeluar::orderby('kodeunit', 'asc')
        //                 ->orderby('tahun', 'desc')
        //                 ->select('mutasikeluar.*')
        //                 ->get();
        // return view('mutasikeluars.index', [
        //     'mutasikeluars' => $mutasikeluars
        // ]);
        
        
        $mutasikeluars = Mutasikeluar::leftJoin('unit', 'unit.namaunit', '=', 'mutasikeluar.namaunit')
                        ->leftJoin('tahun', 'tahun.tahun', '=', 'mutasikeluar.tahun')
                        ->orderby('kodeunit', 'asc')
                        ->orderby('tahun', 'desc')
                        ->select('mutasikeluar.*')
                        ->get();
                        
        return view('mutasikeluars.index', [
            'mutasikeluars' => $mutasikeluars
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $units = Unit::all();
        $tahuns = Tahun::all();
        return view('mutasikeluars.create', compact('units', 'tahuns'));
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

        $mutasikeluar = new Mutasikeluar;
        $mutasikeluar->namaunit = $request->unit;
        $mutasikeluar->tahun = $request->tahun;
        $mutasikeluar->gapok = $request->gapok;
        $mutasikeluar->tkel = $request->tkel;
        $mutasikeluar->tjab = $request->tjab;
        $mutasikeluar->tfung = $request->tfung;
        $mutasikeluar->tumum = $request->tumum;
        $mutasikeluar->tberas = $request->tberas;
        $mutasikeluar->tpph = $request->tpph;
        $mutasikeluar->pembulatan = $request->pembulatan;
        $mutasikeluar->bpjs = $request->bpjs;
        $mutasikeluar->jkk = $request->jkk;
        $mutasikeluar->jkm = $request->jkm;
        $mutasikeluar->tapera = $request->tapera;
        $mutasikeluar->save();
        
        return redirect()->route('mutasikeluars.index')
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
        $mutasikeluar = Mutasikeluar::find($id);
        if (!$mutasikeluar) return redirect()->route('mutasikeluars.index')
            ->with('error_message', 'data tidak ditemukan');
        return view('mutasikeluars.edit', [
            'mutasikeluar' => $mutasikeluar
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

        $mutasikeluar = Mutasikeluar::find($id);
        $mutasikeluar->namaunit = $mutasikeluar->namaunit;
        $mutasikeluar->tahun = $mutasikeluar->tahun;
        $mutasikeluar->gapok = $request->gapok;
        $mutasikeluar->tkel = $request->tkel;
        $mutasikeluar->tjab = $request->tjab;
        $mutasikeluar->tfung = $request->tfung;
        $mutasikeluar->tumum = $request->tumum;
        $mutasikeluar->tberas = $request->tberas;
        $mutasikeluar->tpph = $request->tpph;
        $mutasikeluar->pembulatan = $request->pembulatan;
        $mutasikeluar->bpjs = $request->bpjs;
        $mutasikeluar->jkk = $request->jkk;
        $mutasikeluar->jkm = $request->jkm;
        $mutasikeluar->tapera = $request->tapera;
        $mutasikeluar->save();

        return redirect()->route('mutasikeluars.index')
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

        $mutasikeluar = Mutasikeluar::find($id);
        $mutasikeluar->delete();
        return redirect()->route('mutasikeluars.index')
        ->with('success_message', 'Data berhasil dihapus');
    }
}
