<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Pphpembulatan;
use App\Models\Unit;
use App\Models\Tahun;
use Illuminate\Http\Request;
use Datatables;

class PphpembulatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $pphpembulatans = Pphpembulatan::orderby('kodeunit', 'asc')
        //                 ->orderby('tahun', 'desc')
        //                 ->select('pphpembulatan.*')
        //                 ->get();
        // return view('pphpembulatans.index', [
        //     'pphpembulatans' => $pphpembulatans
        // ]);
        
        $pphpembulatans = Pphpembulatan::leftJoin('unit', 'unit.namaunit', '=', 'pphpembulatan.namaunit')
                        ->leftJoin('tahun', 'tahun.tahun', '=', 'pphpembulatan.tahun')
                        ->orderby('kodeunit', 'asc')
                        ->orderby('tahun', 'desc')
                        ->select('pphpembulatan.*')
                        ->get();
                        
        return view('pphpembulatans.index', [
            'pphpembulatans' => $pphpembulatans
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
        return view('pphpembulatans.create', compact('units', 'tahuns'));
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

        $pphpembulatan = new Pphpembulatan;
        $pphpembulatan->namaunit = $request->unit;
        $pphpembulatan->tahun = $request->tahun;
        $pphpembulatan->gapok = $request->gapok;
        $pphpembulatan->tkel = $request->tkel;
        $pphpembulatan->tjab = $request->tjab;
        $pphpembulatan->tfung = $request->tfung;
        $pphpembulatan->tumum = $request->tumum;
        $pphpembulatan->tberas = $request->tberas;
        $pphpembulatan->tpph = $request->tpph;
        $pphpembulatan->pembulatan = $request->pembulatan;
        $pphpembulatan->bpjs = $request->bpjs;
        $pphpembulatan->jkk = $request->jkk;
        $pphpembulatan->jkm = $request->jkm;
        $pphpembulatan->tapera = $request->tapera;
        $pphpembulatan->save();

        // $request->validate([
        //     'namaunit' => 'required',
        //     'tahun' => 'required',
        //     'gapok' => 'required',
        //     'tkel' => 'required',
        //     'tjab' => 'required',
        //     'tfung' => 'required',
        //     'tumum' => 'required',
        //     'tberas' => 'required',
        //     'tpph' => 'required',
        //     'pembulatan' => 'required',
        //     'bpjs' => 'required',
        //     'jkk' => 'required',
        //     'jkm' => 'required',
        //     'tapera' => 'required'
        // ]);
        // $array = $request->only([
            
        //     'namaunit', 'tahun', 'gapok', 'tkel', 'tjab', 'tfung', 'tumum', 'tberas', 'tpph', 'pembulatan', 'bpjs', 'jkk', 'jkm', 'tapera'
        // ]);
        // // $array['password'] = bcrypt($array['password']);
        // $pphpembulatans = Pphpembulatan::create($array);
        return redirect()->route('pphpembulatans.index')
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
        $pphpembulatan = Pphpembulatan::find($id);
        if (!$pphpembulatan) return redirect()->route('pphpembulatans.index')
            ->with('error_message', 'data tidak ditemukan');
        return view('pphpembulatans.edit', [
            'pphpembulatan' => $pphpembulatan
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

        $pphpembulatan = Pphpembulatan::find($id);
        $pphpembulatan->namaunit = $pphpembulatan->namaunit;
        $pphpembulatan->tahun = $pphpembulatan->tahun;
        $pphpembulatan->gapok = $request->gapok;
        $pphpembulatan->tkel = $request->tkel;
        $pphpembulatan->tjab = $request->tjab;
        $pphpembulatan->tfung = $request->tfung;
        $pphpembulatan->tumum = $request->tumum;
        $pphpembulatan->tberas = $request->tberas;
        $pphpembulatan->tpph = $request->tpph;
        $pphpembulatan->pembulatan = $request->pembulatan;
        $pphpembulatan->bpjs = $request->bpjs;
        $pphpembulatan->jkk = $request->jkk;
        $pphpembulatan->jkm = $request->jkm;
        $pphpembulatan->tapera = $request->tapera;
        $pphpembulatan->save();

        return redirect()->route('pphpembulatans.index')
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
        $pphpembulatan = Pphpembulatan::find($id);
        $pphpembulatan->delete();
        return redirect()->route('pphpembulatans.index')
        ->with('success_message', 'Data berhasil dihapus');
    }
}
