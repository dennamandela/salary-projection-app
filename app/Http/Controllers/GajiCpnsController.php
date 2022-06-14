<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Unit;
use App\Models\GajiCpns;
use App\Models\Tahun;
use App\Models\Jenisgaji;
use DB;

class GajiCpnsController extends Controller
{
    public function index () {
        $units = Unit::all();
        $gajicpns = GajiCpns::leftjoin('unit', 'unit.namaunit', '=', 'datagajicpns.namaunit')
        ->leftJoin('tahun', 'tahun.tahun', '=', 'datagajicpns.tahun')
        ->leftJoin('jenisgaji', 'jenisgaji.jenisgaji', '=', 'datagajicpns.jenisgaji')
        ->orderby('unit.kodeunit', 'asc')
        ->orderby('tahun', 'desc')
        ->orderby('jenisgaji.id', 'asc')
        ->select('datagajicpns.*')
        ->get();

    return view('gajicpns.data-gajicpns', compact('units', 'gajicpns'));
    }

    public function tarikGajiCpns () {
        DB::select('call TarikDataGajiCpns');
        return redirect('/gajicpns')->with('success_message', 'Berhasil mengambil Data Gaji CPNS');
    }

    public function edit ($id) {
        $units = Unit::all();
        $tahuns = Tahun::all();
        $jenisgajis = Jenisgaji::all();
        $gajicpns = GajiCpns::find($id);
        if (!$gajicpns) {
            return redirect('/gajicpns')->with('error_message', 'data tidak ditemukan');
        }else {
            return view('gajicpns.edit', compact('gajicpns', 'units', 'tahuns', 'jenisgajis'));
        }
    }

    public function update (Request $request, $id) {
        return $request;

        $gajicpns = GajiCpns::find($id);
        $gajicpns->namaunit = $gajicpns->namaunit;
        $gajicpns->tahun = $gajicpns->tahun;
        $gajicpns->jenisgaji = $gajicpns->jenisgaji;
        $gajicpns->gapok = $request->gapok;
        $gajicpns->tkel = $request->tkel;
        $gajicpns->tjab = $request->tjab;
        $gajicpns->tfung = $request->tfung;
        $gajicpns->tumum = $request->tumum;
        $gajicpns->tberas = $request->tberas;
        $gajicpns->tpph = $request->tpph;
        $gajicpns->pembulatan = $request->pembulatan;
        $gajicpns->bpjs = $request->bpjs;
        $gajicpns->jkk = $request->jkk;
        $gajicpns->jkm = $request->jkm;
        $gajicpns->tapera = $request->tapera;
        $gajicpns->save();

        return redirect('/gajicpns')
            ->with('success_message', 'Berhasil mengubah data');
    }
}
