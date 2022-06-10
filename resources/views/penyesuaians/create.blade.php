@extends('adminlte::page')

@section('title', 'Tambah Data Penyesuaian Gaji')

@section('content_header')
    <h1 class="m-0 text-dark">Tambah Data Penyesuaian Gaji</h1>
@stop

@section('content')
    <form action="{{route('penyesuaians.store')}}" method="post">
        @csrf
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body" style="overflow:auto">

                    <div class="form-group">
                        <label for="exampleInputUnit">Unit
                        </label>
                        <select class="form-control" id="exampleInputUnit" name="unit">
                            <option>-- SKPD --</option>
                            @foreach ($units as $unit)
                            <option value="{{ $unit->namaunit }}">{{ $unit->namaunit }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputTahun">Tahun
                        </label>
                        <select class="form-control" id="exampleInputTahun" name="tahun">
                            <option>-- Tahun --</option>
                            @foreach ($tahuns as $tahun)
                            <option value="{{ $tahun->tahun }}">{{ $tahun->tahun }}</option>
                            @endforeach
                        </select>
                    </div>

                    <table style="width:100%">
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
                    <tr>
                        <td><label for="exampleInputGapok">Gaji Pokok</label></td>
                        <td><input type="text" id="exampleInputGapok" placeholder="Gaji Pokok" name="gapok" value="{{old('gapok')}}"></td>
                        <td></td><td></td><td></td><td></td>
                        <td><label for="exampleInputTkel">Tunj. Keluarga</label></td>
                        <td><input type="text" id="exampleInputTkel" placeholder="Tunjangan Keluarga" name="tkel" value="{{old('tkel')}}"></td>
                    </tr>
                    <tr>
                        <td><label for="exampleInputTjab">Tunj. Jabatan</label></td>
                        <td><input type="text" id="exampleInputTjab" placeholder="Tunjangan Jabatan" name="tjab" value="{{old('tjab')}}"></td>
                        <td></td><td></td><td></td><td></td>
                        <td><label for="exampleInputTfung">Tunj. Fungsional</label></td>
                        <td><input type="text" id="exampleInputTfung" placeholder="Tunjangan Fungsional" name="tfung" value="{{old('tfung')}}"></td>
                    </tr>
                    <tr>
                        <td><label for="exampleInputTumum">Tunj. Fungsional Umum</label></td>
                        <td><input type="text" id="exampleInputTumum" placeholder="Tunjangan Umum" name="tumum" value="{{old('tumum')}}"></td>
                        <td></td><td></td><td></td><td></td>
                        <td><label for="exampleInputTberas">Tunj. Beras</label></td>
                        <td><input type="text" id="exampleInputTberas" placeholder="Tunjangan Beras" name="tberas" value="{{old('tberas')}}"></td>
                    </tr>
                    <tr>
                        <td><label for="exampleInputTpph">Tunj. Pph</label></td>
                        <td><input type="text" id="exampleInputTpph" placeholder="Tunjangan Pph" name="tpph" value="{{old('tpph')}}"></td>
                        <td></td><td></td><td></td><td></td>
                        <td><label for="exampleInputPembulatan">Pembulatan</label></td>
                        <td><input type="text" id="exampleInputPembulatan" placeholder="Pembulatan" name="pembulatan" value="{{old('pembulatan')}}"></td>
                    </tr>
                    <tr>
                        <td><label for="exampleInputBpjs">BPJS</label></td>
                        <td><input type="text" id="exampleInputBpjs" placeholder="BPJS" name="bpjs" value="{{old('bpjs')}}"></td>
                        <td></td><td></td><td></td><td></td>
                        <td><label for="exampleInputJkk">JKK</label></td>
                        <td><input type="text" id="exampleInputJkk" placeholder="JKK" name="jkk" value="{{old('jkk')}}"></td>
                    </tr>
                        <td><label for="exampleInputJkm">JKM</label></td>
                        <td><input type="text" id="exampleInputJkm" placeholder="JKM" name="jkm" value="{{old('jkm')}}"></td>
                        <td></td><td></td><td></td><td></td>
                        <td><label for="exampleInputTapera">Tapera</label></td>
                        <td><input type="text" id="exampleInputTapera" placeholder="Tapera" name="tapera" value="{{old('tapera')}}"></td>
                    </tr>
                    </table>

                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{route('penyesuaians.index')}}" class="btn btn-default">
                        Batal
                    </a>
                </div>
            </div>
        </div>
    </div>
@stop