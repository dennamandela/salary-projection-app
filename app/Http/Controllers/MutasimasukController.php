<?php

namespace App\Http\Controllers;


use DB;
use App\Models\Mutasimasuk;
use App\Models\Unit;
use App\Models\Tahun;
use Illuminate\Http\Request;
use Datatables;

class MutasimasukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $mutasimasuks = Mutasimasuk::orderby('kodeunit', 'asc')
        //                 ->orderby('tahun', 'desc')
        //                 ->select('mutasimasuk.*')
        //                 ->get();
        // return view('mutasimasuks.index', [
        //     'mutasimasuks' => $mutasimasuks
        // ]);
        
        
        $mutasimasuks = Mutasimasuk::leftJoin('unit', 'unit.namaunit', '=', 'mutasimasuk.namaunit')
                        ->leftJoin('tahun', 'tahun.tahun', '=', 'mutasimasuk.tahun')
                        ->orderby('kodeunit', 'asc')
                        ->orderby('tahun', 'desc')
                        ->select('mutasimasuk.*')
                        ->get();
                        
        return view('mutasimasuks.index', [
            'mutasimasuks' => $mutasimasuks
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
        return view('mutasimasuks.create', compact('units', 'tahuns'));
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

        $mutasimasuk = new Mutasimasuk;
        $mutasimasuk->namaunit = $request->unit;
        $mutasimasuk->tahun = $request->tahun;
        $mutasimasuk->gapok = $request->gapok;
        $mutasimasuk->tkel = $request->tkel;
        $mutasimasuk->tjab = $request->tjab;
        $mutasimasuk->tfung = $request->tfung;
        $mutasimasuk->tumum = $request->tumum;
        $mutasimasuk->tberas = $request->tberas;
        $mutasimasuk->tpph = $request->tpph;
        $mutasimasuk->pembulatan = $request->pembulatan;
        $mutasimasuk->bpjs = $request->bpjs;
        $mutasimasuk->jkk = $request->jkk;
        $mutasimasuk->jkm = $request->jkm;
        $mutasimasuk->tapera = $request->tapera;
        $mutasimasuk->save();
        
        return redirect()->route('mutasimasuks.index')
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
        $mutasimasuk = Mutasimasuk::find($id);
        if (!$mutasimasuk) return redirect()->route('mutasimasuks.index')
            ->with('error_message', 'data tidak ditemukan');
        return view('mutasimasuks.edit', [
            'mutasimasuk' => $mutasimasuk
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

        $mutasimasuk = Mutasimasuk::find($id);
        $mutasimasuk->namaunit = $mutasimasuk->namaunit;
        $mutasimasuk->tahun = $mutasimasuk->tahun;
        $mutasimasuk->gapok = $request->gapok;
        $mutasimasuk->tkel = $request->tkel;
        $mutasimasuk->tjab = $request->tjab;
        $mutasimasuk->tfung = $request->tfung;
        $mutasimasuk->tumum = $request->tumum;
        $mutasimasuk->tberas = $request->tberas;
        $mutasimasuk->tpph = $request->tpph;
        $mutasimasuk->pembulatan = $request->pembulatan;
        $mutasimasuk->bpjs = $request->bpjs;
        $mutasimasuk->jkk = $request->jkk;
        $mutasimasuk->jkm = $request->jkm;
        $mutasimasuk->tapera = $request->tapera;
        $mutasimasuk->save();

        return redirect()->route('mutasimasuks.index')
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
        $mutasimasuk = Mutasimasuk::find($id);
        $mutasimasuk->delete();
        return redirect()->route('mutasimasuks.index')
        ->with('success_message', 'Data berhasil dihapus');
    }
}
