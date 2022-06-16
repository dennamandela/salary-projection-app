<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PphThr;
use App\Models\Unit;
use App\Models\Tahun;

class PphThrController extends Controller
{
    public function index (){
        $units = Unit::all();
        $tahuns = Tahun::all();
        $pphthr = PphThr::leftjoin('unit', 'unit.namaunit', '=', 'pph13thr.namaunit')
                        ->leftjoin('tahun', 'tahun.tahun', '=', 'pph13thr.tahunanggaran')
                        ->orderby('kodeunit', 'asc')
                        ->orderby('tahun', 'desc')
                        ->select('pph13thr.*')
                        ->get();
        return view('pph13thr.pphthr', compact('pphthr', 'tahuns', 'units')); 
    }

    public function tarikPphThr (){
        DB::select('call TarikDataPphThr');
        
        return redirect('/pphthr')
            ->with('success_message', 'Berhasil mengambil Data Pph 13 Dan THR');
    }

    public function editPphThr($id) {
        $units = Unit::all();
        $tahuns = Tahun::all();
        $pphthr = PphThr::find($id);
        if (!$pphthr) {
            return redirect('/pphthr')->with('error_message', 'data tidak ditemukan');
        }else {
            return view('pph13thr.edit', compact('pphthr'));
        }
    }

    public function updatePphThr (Request $request, $id) {
        $pphthr = PphThr::find($id);
        $pphthr->namaunit = $request->namaunit;
        $pphthr->tahunanggaran = $request->tahunanggaran;
        $pphthr->nilaipphlalu = $request->nilaipphlalu;
        $pphthr->pengali = $request->pengali;
        $pphthr->save();
        return redirect('/pphthr')->with('Berhasil mengubah data');
    }
}
