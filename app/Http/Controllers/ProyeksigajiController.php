<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use App\Models\Jenisgaji;
use App\Models\Proyeksigaji;
use Illuminate\Http\Request;
use DB;

class ProyeksigajiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $proyeksigajis = Proyeksigaji::orderby('kodeunit', 'asc')
        //                 ->orderby('tahun', 'desc')
        //                 ->select('proyeksigaji.*')
        //                 ->get();
        // return view('proyeksigajis.index', [
        //     'proyeksigajis' => $proyeksigajis
        // ]);
        
        
        $proyeksigajis = Proyeksigaji::leftJoin('unit', 'unit.namaunit', '=', 'proyeksigaji.namaunit')
                            ->leftJoin('tahun', 'tahun.tahun', '=', 'proyeksigaji.tahun')
                            ->orderby('kodeunit', 'asc')
                            ->orderby('tahun', 'desc')
                            // ->select('proyeksigaji.*')
                            ->selectRaw('proyeksigaji.*, (proyeksigaji.gapok+proyeksigaji.tkel+proyeksigaji.tjab+proyeksigaji.tfung+proyeksigaji.tumum+proyeksigaji.tberas+proyeksigaji.tpph+proyeksigaji.pembulatan+proyeksigaji.bpjs+proyeksigaji.jkk+proyeksigaji.jkm+proyeksigaji.tapera) as total')
                            ->get();
        
        return view('proyeksigajis.index', [
            'proyeksigajis' => $proyeksigajis
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // DB::select('exec my_stored_procedure("Param1", "param2")');
        DB::select('call HitungProyeksi');
        
        return redirect()->route('proyeksigajis.index')
            ->with('success_message', 'Berhasil menghitung nilai Proyeksi Gaji');
        // return $request;

        // $units = Unit::all();
        // $jenisgajis = Jenisgaji::all();
        // return view('proyeksigajis.index', compact('units', 'jenisgajis'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
        // return $id;
        $cetakProyeksi = Proyeksigaji::find($id);
        return view('proyeksigajis.cetakProyeksi', compact('cetakProyeksi'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    // public function parHitungproyeksi()
    // {
    //     // return $request;

    //     $units = Unit::all();
    //     $jenisgajis = Jenisgaji::all();
    //     return view('proyeksigajis.index', compact('units', 'jenisgajis'));
    // }
    
    public function spHitungproyeksi()
    {
        // DB::select('exec my_stored_procedure("Param1", "param2")');
        DB::select('call HitungProyeksi');
        
        return redirect()->route('proyeksigajis.index')
            ->with('success_message', 'Berhasil menghitung nilai Proyeksi Gaji');
    }
    
    public function cetakProyeksi($id)
    {
        //
        $cetakProyeksi = Proyeksigaji::all();
        return view('proyeksigajis.cetakProyeksi', compact('cetakProyeksi'));
    }
}
