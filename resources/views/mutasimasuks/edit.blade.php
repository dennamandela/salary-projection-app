@extends('adminlte::page')

@section('title', 'Edit Data Mutasi Masuk')

@section('content_header')
    <h1 class="m-0 text-dark">Edit Data Mutasi Masuk</h1>
@stop

@section('content')
    <form action="{{route('mutasimasuks.update', $mutasimasuk)}}" method="post">
        @method('PUT')
        @csrf
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body" style="overflow:auto">

                    <table style="width:100%">
                    <tr>
                        <td><label for="exampleInputUnit">Unit</label></td>
                        <!-- <input type="text" class="form-control" id="exampleInputUnit" name="unit" value="{{$mutasimasuk->namaunit ?? old('namaunit')}}"> -->
                        <td><select class="form-control" id="exampleInputUnit" name="unit" disabled>
                            <!-- @foreach($units as $unit)                         -->
                                <option value="$mutasimasuk->namaunit"{{$mutasimasuk->namaunit ? 'selected' : ''}}>{{$mutasimasuk->namaunit}}</option>
                            <!-- @endforeach -->
                        </select></td>
                        <!-- <select name="unit" class="form-control custom-select">
                            <option value="">Select unit</option>
                                @foreach($units as $unit)
                                <option value="{{ $unit->id }}" @if(old('id') == $unit->id || $unit->id == $mutasimasuk->id_unit) selected @endif>{{ $unit->namaunit }}</option>
                                @endforeach
                        </select> -->
                    </tr>
                    <tr><td></td></tr>
                    <tr><td></td></tr>
                    <tr><td></td></tr>
                    <tr>
                        <td><label for="exampleInputTahun">Tahun</label></td>
                        <td><select class="form-control" id="exampleInputUnit" name="unit" disabled>
                            <option value="$mutasimasuk->tahun"{{$mutasimasuk->tahun ? 'selected' : ''}}>{{$mutasimasuk->tahun}}</option>
                        </select></td>
                    </tr>
                    <tr></tr>
                    <tr></tr>
                    </table>

                    <br><br>

                    <table style="width:100%">
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
                    <tr>
                        <td><label for="exampleInputGapok">Gaji Pokok</label></td>
                        <td><input type="text" id="exampleInputGapok" placeholder="Gaji Pokok" name="gapok" value="{{$mutasimasuk->gapok ?? old('gapok')}}"></td>
                        <td></td><td></td><td></td><td></td>
                        <td><label for="exampleInputTkel">Tunj. Keluarga</label></td>
                        <td><input type="text" id="exampleInputTkel" placeholder="Tunjangan Keluarga" name="tkel" value="{{$mutasimasuk->tkel ?? old('tkel')}}"></td>
                    </tr>
                    <tr>
                        <td><label for="exampleInputTjab">Tunj. Jabatan</label></td>
                        <td><input type="text" id="exampleInputTjab" placeholder="Tunjangan Jabatan" name="tjab" value="{{$mutasimasuk->tjab ?? old('tjab')}}"></td>
                        <td></td><td></td><td></td><td></td>
                        <td><label for="exampleInputTfung">Tunj. Fungsional</label></td>
                        <td><input type="text" id="exampleInputTfung" placeholder="Tunjangan Fungsional" name="tfung" value="{{$mutasimasuk->tfung ?? old('tfung')}}"></td>
                    </tr>
                    <tr>
                        <td><label for="exampleInputTumum">Tunj. Fungsional Umum</label></td>
                        <td><input type="text" id="exampleInputTumum" placeholder="Tunjangan Umum" name="tumum" value="{{$mutasimasuk->tumum ?? old('tumum')}}"></td>
                        <td></td><td></td><td></td><td></td>
                        <td><label for="exampleInputTberas">Tunj. Beras</label></td>
                        <td><input type="text" id="exampleInputTberas" placeholder="Tunjangan Beras" name="tberas" value="{{$mutasimasuk->tberas ?? old('tberas')}}"></td>
                    </tr>
                    <tr>
                        <td><label for="exampleInputTpph">Tunj. Pph</label></td>
                        <td><input type="text" id="exampleInputTpph" placeholder="Tunjangan Pph" name="tpph" value="{{$mutasimasuk->tpph ?? old('tpph')}}"></td>
                        <td></td><td></td><td></td><td></td>
                        <td><label for="exampleInputPembulatan">Pembulatan</label></td>
                        <td><input type="text" id="exampleInputPembulatan" placeholder="Pembulatan" name="pembulatan" value="{{$mutasimasuk->pembulatan ?? old('pembulatan')}}"></td>
                    </tr>
                    <tr>
                        <td><label for="exampleInputBpjs">BPJS</label></td>
                        <td><input type="text" id="exampleInputBpjs" placeholder="BPJS" name="bpjs" value="{{$mutasimasuk->bpjs ?? old('bpjs')}}"></td>
                        <td></td><td></td><td></td><td></td>
                        <td><label for="exampleInputJkk">JKK</label></td>
                        <td><input type="text" id="exampleInputJkk" placeholder="JKK" name="jkk" value="{{$mutasimasuk->jkk ?? old('jkk')}}"></td>
                    </tr>
                        <td><label for="exampleInputJkm">JKM</label></td>
                        <td><input type="text" id="exampleInputJkm" placeholder="JKM" name="jkm" value="{{$mutasimasuk->jkm ?? old('jkm')}}"></td>
                        <td></td><td></td><td></td><td></td>
                        <td><label for="exampleInputTapera">Tapera</label></td>
                        <td><input type="text" id="exampleInputTapera" placeholder="Tapera" name="tapera" value="{{$mutasimasuk->tapera ?? old('tapera')}}"></td>
                    </tr>
                    </table>

                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{route('mutasimasuks.index')}}" class="btn btn-default">
                        Batal
                    </a>
                </div>
            </div>
        </div>
    </div>
@stop