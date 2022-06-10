<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Rapel;
use App\Models\Unit;
use App\Models\Tahun;
use Illuminate\Http\Request;
use Datatables;

class RapelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $rapels = Rapel::orderby('kodeunit', 'asc')
        //                 ->orderby('tahun', 'desc')
        //                 ->select('rapel.*')
        //                 ->get();
        // return view('rapels.index', [
        //     'rapels' => $rapels
        // ]);
        
        
        $rapels = Rapel::leftJoin('unit', 'unit.namaunit', '=', 'rapel.namaunit')
                        ->leftJoin('tahun', 'tahun.tahun', '=', 'rapel.tahun')
                        ->orderby('kodeunit', 'asc')
                        ->orderby('tahun', 'desc')
                        ->select('rapel.*')
                        ->get();
        
        return view('rapels.index', [
            'rapels' => $rapels
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
        return view('rapels.create', compact('units', 'tahuns'));
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

        $rapel = new Rapel;
        $rapel->namaunit = $request->unit;
        $rapel->tahun = $request->tahun;
        $rapel->gapok = $request->gapok;
        $rapel->tkel = $request->tkel;
        $rapel->tjab = $request->tjab;
        $rapel->tfung = $request->tfung;
        $rapel->tumum = $request->tumum;
        $rapel->tberas = $request->tberas;
        $rapel->tpph = $request->tpph;
        $rapel->pembulatan = $request->pembulatan;
        $rapel->bpjs = $request->bpjs;
        $rapel->jkk = $request->jkk;
        $rapel->jkm = $request->jkm;
        $rapel->tapera = $request->tapera;
        $rapel->save();
        
        return redirect()->route('rapels.index')
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
        $rapel = Rapel::find($id);
        if (!$rapel) return redirect()->route('rapels.index')
            ->with('error_message', 'data tidak ditemukan');
        return view('rapels.edit', [
            'rapel' => $rapel
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

        $rapel = Rapel::find($id);
        $rapel->namaunit = $rapel->namaunit;
        $rapel->tahun = $rapel->tahun;
        $rapel->gapok = $request->gapok;
        $rapel->tkel = $request->tkel;
        $rapel->tjab = $request->tjab;
        $rapel->tfung = $request->tfung;
        $rapel->tumum = $request->tumum;
        $rapel->tberas = $request->tberas;
        $rapel->tpph = $request->tpph;
        $rapel->pembulatan = $request->pembulatan;
        $rapel->bpjs = $request->bpjs;
        $rapel->jkk = $request->jkk;
        $rapel->jkm = $request->jkm;
        $rapel->tapera = $request->tapera;
        $rapel->save();

        return redirect()->route('rapels.index')
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
        $rapel = Rapel::find($id);
        $rapel->delete();
        return redirect()->route('rapels.index')
        ->with('success_message', 'Data berhasil dihapus');
    }
}
