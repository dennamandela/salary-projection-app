<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MutasiSkpd;
use App\Models\Unit;
use App\Models\Tahun;

class MutasiSkpdController extends Controller
{
    public function index () {
        $units = Unit::all();
        $tahuns = Tahun::all();
        $mutasiskpd = MutasiSkpd::leftjoin('unit as u1', 'u1.namaunit', '=', 'mutasi_skpd.unitasal')
                                ->leftjoin('unit as u2', 'u2.namaunit', '=', 'mutasi_skpd.unittujuan')
                                ->leftjoin('tahun', 'tahun.tahun', '=', 'mutasi_skpd.tahun')
                                ->orderby('tahun', 'desc')
                                ->select('mutasi_skpd.*')
                                ->get();
        return view ('mutasiskpd.index', compact('mutasiskpd', 'units')); 
    }

    public function create(){
        $units = Unit::all();
        $tahuns = Tahun::all();
        return view ('mutasiskpd.create-mutasiskpd', compact('units', 'tahuns'));
    }

    public function postSkpd (Request $request) {

        $mutasiskpd = new MutasiSkpd;
        $mutasiskpd->unitasal = $request->namaunit;
        $mutasiskpd->unittujuan = $request->namaunit;
        $mutasiskpd->tahun = $request->tahun;
        $mutasiskpd->gapok = $request->gapok;
        $mutasiskpd->tkel = $request->tkel;
        $mutasiskpd->tjab = $request->tjab;
        $mutasiskpd->tfung = $request->tfung;
        $mutasiskpd->tumum = $request->tumum;
        $mutasiskpd->tberas = $request->tberas;
        $mutasiskpd->tpph = $request->tpph;
        $mutasiskpd->pembulatan = $request->pembulatan;
        $mutasiskpd->bpjs = $request->bpjs;
        $mutasiskpd->jkk = $request->jkk;
        $mutasiskpd->jkm = $request->jkm;
        $mutasiskpd->tapera = $request->tapera;
        $mutasiskpd->save();
        return redirect('/skpd')->with('success_message', 'Berhasil menambahkan data');
    }

    public function editSkpd ($id) {
        $units = Unit::all();
        $tahuns = Tahun::all();
        $mutasiskpd = MutasiSkpd::find($id);
        if (!$mutasiskpd) {
            return redirect ('/skpd')->with('error_message', 'data tidak ditemukan');
        } else {
            return view ('mutasiskpd.edit', compact('units', 'tahuns', 'mutasiskpd'));
        }
    }

    public function updateSkpd (Request $request, $id) {

        $mutasiskpd = MutasiSkpd::find($id);
        $mutasiskpd->unitasal = $request->namaunit;
        $mutasiskpd->unittujuan = $request->namaunit;
        $mutasiskpd->tahun = $request->tahun;
        $mutasiskpd->gapok = $request->gapok;
        $mutasiskpd->tkel = $request->tkel;
        $mutasiskpd->tjab = $request->tjab;
        $mutasiskpd->tfung = $request->tfung;
        $mutasiskpd->tumum = $request->tumum;
        $mutasiskpd->tberas = $request->tberas;
        $mutasiskpd->tpph = $request->tpph;
        $mutasiskpd->pembulatan = $request->pembulatan;
        $mutasiskpd->bpjs = $request->bpjs;
        $mutasiskpd->jkk = $request->jkk;
        $mutasiskpd->jkm = $request->jkm;
        $mutasiskpd->tapera = $request->tapera;
        $mutasiskpd->save();
        return redirect('/skpd')->with('success_message', 'Berhasil mengubah data');
    }

    public function deleteSkpd($id) {
        $mutasiskpd = MutasiSkpd::find($id);
        $mutasiskpd->delete();
        return redirect('/skpd')->with('success_message', 'Berhasil menghapus data');
    }
}
