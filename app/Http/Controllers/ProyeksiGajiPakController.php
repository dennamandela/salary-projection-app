<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProyeksiGajiPak;
use DB;

class ProyeksiGajiPakController extends Controller
{
    public function index () {

        $proyeksigajipak = ProyeksiGajiPak::leftjoin('unit', 'unit.namaunit', '=', 'proyeksigajipak.namaunit')
                            ->leftjoin('tahun', 'tahun.tahun', '=', 'proyeksigajipak.tahun')
                            ->orderby('kodeunit', 'asc')
                            ->orderby('tahun', 'desc')
                            ->selectRaw('proyeksigajipak.*, (proyeksigajipak.gapok+proyeksigajipak.tkel+proyeksigajipak.tjab+proyeksigajipak.tfung+proyeksigajipak.tumum+proyeksigajipak.tberas+proyeksigajipak.tpph+proyeksigajipak.pembulatan+proyeksigajipak.bpjs+proyeksigajipak.jkk+proyeksigajipak.jkm+proyeksigajipak.tapera) as total')
                            ->get();
        return view ('proyeksigajipak.index', compact('proyeksigajipak'));
    }

    public function hitungProyeksiGajiPak(){
        DB::select('call HitungProyeksi');
        return redirect('/proyeksigajipak');
    }

    public function cetakProyeksiGajiPak($id) {
        $cetakProyeksiPak = ProyeksiGajiPak::find($id);
        return view('proyeksigajipak.cetakProyeksiPak', compact('cetakProyeksiPak'));
    }
}
