<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Unit;
use App\Models\Tahun;
use App\Models\Jenisgaji;
use App\Models\PegawaiPensiun;
use DB;

class PegawaiPensiunController extends Controller
{
    public function index () {
        $units = Unit::all();
        $pegawaipensiun = PegawaiPensiun::leftjoin('unit', 'unit.namaunit', '=', 'datagajipensiun.namaunit')
                                        ->leftjoin('tahun', 'tahun.tahun', '=', 'datagajipensiun.tahun')
                                        ->leftjoin('jenisgaji', 'jenisgaji.jenisgaji', '=', 'datagajipensiun.jenisgaji')
                                        ->orderby('unit.kodeunit', 'asc')
                                        ->orderby('tahun', 'desc')
                                        ->orderby('jenisgaji.id', 'asc')
                                        ->select('datagajipensiun.*')
                                        ->get();
        return view ('gajipensiun.gajipensiun', compact('units', 'pegawaipensiun'));
    }

    public function tarikGajiPensiun() {
        DB::select('call TarikGajiPensiun');
        return redirect ('/pegawaipensiun')->with('success_message', 'Berhasil mengambil Data Gaji Pensiun');
    }

    public function editGajiPensiun($id){
        $units = Unit::all();
        $tahuns = Tahun::all();
        $jenisgajis = Jenisgaji::all();
        $pegawaipensiun = PegawaiPensiun::find($id);
        if (!$pegawaipensiun){
            return redirect ('/pegawaipensiun')->with('error_message', 'data tidak ditemukan');
        } else {
            return view ('gajipensiun.edit', compact('units', 'tahuns', 'jenisgajis', 'pegawaipensiun'));
        }
    }

    public function update (Request $request, $id) {
        $pegawaipensiun = PegawaiPensiun::find($id);
        $pegawaipensiun->namaunit = $pegawaipensiun->namaunit;
        $pegawaipensiun->tahun = $pegawaipensiun->tahun;
        $pegawaipensiun->jenisgaji = $pegawaipensiun->jenisgaji;
        $pegawaipensiun->gapok = $request->gapok;
        $pegawaipensiun->tkel = $request->tkel;
        $pegawaipensiun->tjab = $request->tjab;
        $pegawaipensiun->tfung = $request->tfung;
        $pegawaipensiun->tumum = $request->tumum;
        $pegawaipensiun->tberas = $request->tberas;
        $pegawaipensiun->tpph = $request->tpph;
        $pegawaipensiun->pembulatan = $request->pembulatan;
        $pegawaipensiun->bpjs = $request->bpjs;
        $pegawaipensiun->jkk = $request->jkk;
        $pegawaipensiun->jkm = $request->jkm;
        $pegawaipensiun->tapera = $request->tapera;
        $pegawaipensiun->save();

        return redirect('/pegawaipensiun')
            ->with('success_message', 'Berhasil mengubah data');
    }
}
