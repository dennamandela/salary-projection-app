@extends('adminlte::page')

@section('title', 'Edit Mutasi Antar SKPD')

@section('content_header')
    <h1 class="m-0 text-dark">Edit Mutasi Antar SKPD</h1>
@stop

@section('content')
    <form action="{{url('/skpd/update-skpd', $mutasiskpd->id)}}" method="post">
        @csrf
        @method('put')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body" style="overflow:auto">

                    <table style="width:100%">
                    <tr>
                        <td><label for="exampleInputUnitAsal">Unit Asal</label></td>
                        <!-- <input type="text" class="form-control" id="exampleInputUnit" name="unit" value="{{$datagaji->namaunit ?? old('namaunit')}}"> -->
                        <td><select class="form-control" id="exampleInputUnitAsal" name="unitasal" disabled>
                            @foreach($units as $unit)
                                <option value="{{ $unit->namaunit }}"
                                {{ $unit->namaunit == $mutasiskpd->unitasal ? 'selected="selected"' : '' }}> {{$unit->namaunit () }}</option>
                            @endforeach
                        </select></td>
                        <!-- <select name="unit" class="form-control custom-select">
                            <option value="">Select unit</option>
                                @foreach($units as $unit)
                                <option value="{{ $unit->id }}" @if(old('id') == $unit->id || $unit->id == $datagaji->id_unit) selected @endif>{{ $unit->namaunit }}</option>
                                @endforeach
                        </select> -->
                    </tr>
                    <tr><td></td></tr>
                    <tr><td></td></tr>
                    <tr><td></td></tr>
                    <tr>
                        <td><label for="exampleInputUnitTujuan">Unit Tujuan</label></td>
                        <td><select class="form-control" id="exampleInputUnitTujuan" name="unittujuan" disabled>
                            @foreach($units as $unit)
                                <option value="{{ $unit->namaunit }}"
                                {{ $unit->namaunit == $mutasiskpd->unittujuan ? 'selected="selected"' : '' }}> {{$unit->namaunit () }}</option>
                            @endforeach
                        </select></td>
                    </tr>
                    <tr><td></td></tr>
                    <tr><td></td></tr>
                    <tr><td></td></tr>
                    <tr>
                        <td><label for="exampleInputTahun">Tahun</label></td>
                        <td><select class="form-control" id="exampleInputTahun" name="tahun" disabled>
                            @foreach($tahuns as $tahun)
                                <option value="{{ $tahun->tahun }}"
                                {{ $tahun->tahun == $mutasiskpd->tahun ? 'selected="selected"' : '' }}> {{$tahun->tahun () }}</option>
                            @endforeach
                        </select></td>
                    </tr>
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
                    </table>

                    <br><br>

                    <table style="width:75%">
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
                    <tr>
                        <td><label for="exampleInputGapok">Gaji Pokok</label></td>
                        <td><input type="text" id="exampleInputGapok" placeholder="Gaji Pokok" name="gapok" value="{{$mutasiskpd->gapok}}"></td>
                        <td></td><td></td><td></td><td></td>
                        <td><label for="exampleInputTkel">Tunj. Keluarga</label></td>
                        <td><input type="text" id="exampleInputTkel" placeholder="Tunjangan Keluarga" name="tkel" value="{{$mutasiskpd->tkel}}"></td>
                    </tr>
                    <tr>
                        <td><label for="exampleInputTjab">Tunj. Jabatan</label></td>
                        <td><input type="text" id="exampleInputTjab" placeholder="Tunjangan Jabatan" name="tjab" value="{{$mutasiskpd->tjab}}"></td>
                        <td></td><td></td><td></td><td></td>
                        <td><label for="exampleInputTfung">Tunj. Fungsional</label></td>
                        <td><input type="text" id="exampleInputTfung" placeholder="Tunjangan Fungsional" name="tfung" value="{{$mutasiskpd->tfung}}"></td>
                    </tr>
                    <tr>
                        <td><label for="exampleInputTumum">Tunj. Fungsional Umum</label></td>
                        <td><input type="text" id="exampleInputTumum" placeholder="Tunjangan Umum" name="tumum" value="{{$mutasiskpd->tumum}}"></td>
                        <td></td><td></td><td></td><td></td>
                        <td><label for="exampleInputTberas">Tunj. Beras</label></td>
                        <td><input type="text" id="exampleInputTberas" placeholder="Tunjangan Beras" name="tberas" value="{{$mutasiskpd->tberas}}"></td>
                    </tr>
                    <tr>
                        <td><label for="exampleInputTpph">Tunj. Pph</label></td>
                        <td><input type="text" id="exampleInputTpph" placeholder="Tunjangan Pph" name="tpph" value="{{$mutasiskpd->tpph}}"></td>
                        <td></td><td></td><td></td><td></td>
                        <td><label for="exampleInputPembulatan">Pembulatan</label></td>
                        <td><input type="text" id="exampleInputPembulatan" placeholder="Pembulatan" name="pembulatan" value="{{$mutasiskpd->pembulatan}}"></td>
                    </tr>
                    <tr>
                        <td><label for="exampleInputBpjs">BPJS</label></td>
                        <td><input type="text" id="exampleInputBpjs" placeholder="BPJS" name="bpjs" value="{{$mutasiskpd->bpjs}}"></td>
                        <td></td><td></td><td></td><td></td>
                        <td><label for="exampleInputJkk">JKK</label></td>
                        <td><input type="text" id="exampleInputJkk" placeholder="JKK" name="jkk" value="{{$mutasiskpd->jkk}}"></td>
                    </tr>
                        <td><label for="exampleInputJkm">JKM</label></td>
                        <td><input type="text" id="exampleInputJkm" placeholder="JKM" name="jkm" value="{{$mutasiskpd->jkm}}"></td>
                        <td></td><td></td><td></td><td></td>
                        <td><label for="exampleInputTapera">Tapera</label></td>
                        <td><input type="text" id="exampleInputTapera" placeholder="Tapera" name="tapera" value="{{$mutasiskpd->tapera}}"></td>
                    </tr>
                    </table>

                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{url('/skpd')}}" class="btn btn-default">
                        Batal
                    </a>
                </div>
            </div>
        </div>
    </div>
@stop