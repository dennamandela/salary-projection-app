<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Penyesuaian;
use App\Models\Unit;
use App\Models\Tahun;
use Illuminate\Http\Request;
use Datatables;

class PenyesuaianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $penyesuaians = Penyesuaian::orderby('kodeunit', 'asc')
        //                 ->orderby('tahun', 'desc')
        //                 ->select('penyesuaian.*')
        //                 ->get();
        // return view('penyesuaians.index', [
        //     'penyesuaians' => $penyesuaians
        // ]);
        
        
        $penyesuaians = Penyesuaian::leftJoin('unit', 'unit.namaunit', '=', 'penyesuaian.namaunit')
                        ->leftJoin('tahun', 'tahun.tahun', '=', 'penyesuaian.tahun')
                        ->orderby('kodeunit', 'asc')
                        ->orderby('tahun', 'desc')
                        ->select('penyesuaian.*')
                        ->get();
                        
        return view('penyesuaians.index', [
            'penyesuaians' => $penyesuaians
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
        return view('penyesuaians.create', compact('units', 'tahuns'));
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

        $penyesuaian = new Penyesuaian;
        $penyesuaian->namaunit = $request->unit;
        $penyesuaian->tahun = $request->tahun;
        $penyesuaian->gapok = $request->gapok;
        $penyesuaian->tkel = $request->tkel;
        $penyesuaian->tjab = $request->tjab;
        $penyesuaian->tfung = $request->tfung;
        $penyesuaian->tumum = $request->tumum;
        $penyesuaian->tberas = $request->tberas;
        $penyesuaian->tpph = $request->tpph;
        $penyesuaian->pembulatan = $request->pembulatan;
        $penyesuaian->bpjs = $request->bpjs;
        $penyesuaian->jkk = $request->jkk;
        $penyesuaian->jkm = $request->jkm;
        $penyesuaian->tapera = $request->tapera;
        $penyesuaian->save();
        
        return redirect()->route('penyesuaians.index')
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
        $penyesuaian = Penyesuaian::find($id);
        if (!$penyesuaian) return redirect()->route('penyesuaians.index')
            ->with('error_message', 'data tidak ditemukan');
        return view('penyesuaians.edit', [
            'penyesuaian' => $penyesuaian
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

        $penyesuaian = Penyesuaian::find($id);
        $penyesuaian->namaunit = $penyesuaian->namaunit;
        $penyesuaian->tahun = $penyesuaian->tahun;
        $penyesuaian->gapok = $request->gapok;
        $penyesuaian->tkel = $request->tkel;
        $penyesuaian->tjab = $request->tjab;
        $penyesuaian->tfung = $request->tfung;
        $penyesuaian->tumum = $request->tumum;
        $penyesuaian->tberas = $request->tberas;
        $penyesuaian->tpph = $request->tpph;
        $penyesuaian->pembulatan = $request->pembulatan;
        $penyesuaian->bpjs = $request->bpjs;
        $penyesuaian->jkk = $request->jkk;
        $penyesuaian->jkm = $request->jkm;
        $penyesuaian->tapera = $request->tapera;
        $penyesuaian->save();

        return redirect()->route('penyesuaians.index')
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
        $penyesuaian = Penyesuaian::find($id);
        $penyesuaian->delete();
        return redirect()->route('penyesuaians.index')
        ->with('success_message', 'Data berhasil dihapus');
    }
}
