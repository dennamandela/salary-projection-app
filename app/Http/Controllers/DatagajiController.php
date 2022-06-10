<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Datagaji;
use App\Models\Unit;
use App\Models\Tahun;
use App\Models\Jenisgaji;
use Illuminate\Http\Request;
use Datatables;

class DatagajiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $units = Unit::all();
        
        // return dd($request->unitfilter);
        // return $request;
        // if($request->unitfilter)
        // {
        //     return dd($request->unitfilter);
        //     // $units = Unit::all();
        //     $datagajis = Datagaji::leftJoin('unit', 'unit.namaunit', '=', 'datagaji.namaunit')
        //         ->leftJoin('tahun', 'tahun.tahun', '=', 'datagaji.tahun')
        //         ->leftJoin('jenisgaji', 'jenisgaji.jenisgaji', '=', 'datagaji.jenisgaji')
        //         ->where('namaunit', 'like', '%'.$request->unitfilter.'%')
        //         ->orderby('unit.kodeunit', 'asc')
        //         ->orderby('tahun', 'desc')
        //         ->orderby('jenisgaji.id', 'asc')
        //         ->select('datagaji.*')
        //         ->get();
        
        //         // return view('datagajis.index', [
        //         //     'datagajis' => $datagajis
        //         //     ], compact('units'));
        // }
        // else
        // {
        //     // $units = Unit::all();
        //     $datagajis = Datagaji::leftJoin('unit', 'unit.namaunit', '=', 'datagaji.namaunit')
        //         ->leftJoin('tahun', 'tahun.tahun', '=', 'datagaji.tahun')
        //         ->leftJoin('jenisgaji', 'jenisgaji.jenisgaji', '=', 'datagaji.jenisgaji')
        //         ->orderby('unit.kodeunit', 'asc')
        //         ->orderby('tahun', 'desc')
        //         ->orderby('jenisgaji.id', 'asc')
        //         ->select('datagaji.*')
        //         ->get();
        
        //         // return view('datagajis.index', [
        //         //     'datagajis' => $datagajis
        //         //     ], compact('units'));
        // };
        // tampilkan semua data
        // $datagajis = Datagaji::orderby('kodeunit', 'asc')
        //                 ->orderby('tahun', 'desc')
        //                 ->orderby('id_jenisgaji', 'asc')
        //                 ->select('datagaji.*')
        //                 ->get();
        // return view('datagajis.index', [
        //     'datagajis' => $datagajis
        // ]);

        //tampilkan semua data + left join
        $datagajis = Datagaji::leftJoin('unit', 'unit.namaunit', '=', 'datagaji.namaunit')
                        ->leftJoin('tahun', 'tahun.tahun', '=', 'datagaji.tahun')
                        ->leftJoin('jenisgaji', 'jenisgaji.jenisgaji', '=', 'datagaji.jenisgaji')
                        ->orderby('unit.kodeunit', 'asc')
                        ->orderby('tahun', 'desc')
                        ->orderby('jenisgaji.id', 'asc')
                        ->select('datagaji.*')
                        ->get();
        
        return view('datagajis.index', [
            'datagajis' => $datagajis
            ], compact('units'));
        //-------------------------------------

    }

    // public function filterindex(Request $request)
    // {
    //     if($request->unitfilter)
    //     {
    //         return $request;
    //     }

        
    //     return view('datagajis.index', [
    //         'datagajis' => $datagajis
    //         ]);
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // DB::select('exec my_stored_procedure("Param1", "param2")');
        DB::select('call TarikDataGaji');
        
        return redirect()->route('datagajis.index')
            ->with('success_message', 'Berhasil mengambil Data Gaji');
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
        // return $id;
        $units = Unit::all();
        $tahuns = Tahun::all();
        $jenisgajis = Jenisgaji::all();
        $datagaji = Datagaji::find($id);
        if (!$datagaji) return redirect()->route('datagajis.index')
            ->with('error_message', 'data tidak ditemukan');
        return view('datagajis.edit', [
            'datagaji' => $datagaji
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
        return $request;

        $datagaji = Datagaji::find($id);
        $datagaji->namaunit = $datagaji->namaunit;
        $datagaji->tahun = $datagaji->tahun;
        $datagaji->jenisgaji = $datagaji->jenisgaji;
        $datagaji->gapok = $request->gapok;
        $datagaji->tkel = $request->tkel;
        $datagaji->tjab = $request->tjab;
        $datagaji->tfung = $request->tfung;
        $datagaji->tumum = $request->tumum;
        $datagaji->tberas = $request->tberas;
        $datagaji->tpph = $request->tpph;
        $datagaji->pembulatan = $request->pembulatan;
        $datagaji->bpjs = $request->bpjs;
        $datagaji->jkk = $request->jkk;
        $datagaji->jkm = $request->jkm;
        $datagaji->tapera = $request->tapera;
        $datagaji->save();

        return redirect()->route('datagajis.index')
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
        //
    }
}
