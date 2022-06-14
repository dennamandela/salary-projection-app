<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PphThr;

class PphThrController extends Controller
{
    public function index (){
        $pphthr = PphThr::all();
        return view ('pph13thr.pphthr', compact('pphthr'));
    }

    public function tarikPphThr (){
        DB::select('call TarikDataPphThr');
        
        return redirect('/pphthr')
            ->with('success_message', 'Berhasil mengambil Data Pph 13 Dan THR');
    }

    public function editPphThr($id) {
        $pphthr = PphThr::find($id);
        if (!$pphthr) {
            return redirect('/pphthr')->with('error_message', 'data tidak ditemukan');
        }else {
            return view('pph13thr.edit', compact('pphthr'));
        }
    }
}
