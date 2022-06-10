@extends('adminlte::page')

@section('title', 'Edit Data Pelengkap BPJS')

@section('content_header')
    <h1 class="m-0 text-dark">Edit Data Pelengkap BPJS</h1>
@stop

@section('content')
    <form action="{{route('pelengkaps.update', $pelengkap)}}" method="post">
        @method('PUT')
        @csrf
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body" style="overflow:auto">

                    <table style="width:100%">
                    <tr>
                        <td><label for="exampleInputUnit">Unit</label></td>
                        <!-- <input type="text" class="form-control" id="exampleInputUnit" name="unit" value="{{$pelengkap->namaunit ?? old('namaunit')}}"> -->
                        <td><select class="form-control" id="exampleInputUnit" name="unit" disabled>
                            <!-- @foreach($units as $unit)                         -->
                                <option value="$pelengkap->namaunit"{{$pelengkap->namaunit ? 'selected' : ''}}>{{$pelengkap->namaunit}}</option>
                            <!-- @endforeach -->
                        </select></td>
                        <!-- <select name="unit" class="form-control custom-select">
                            <option value="">Select unit</option>
                                @foreach($units as $unit)
                                <option value="{{ $unit->id }}" @if(old('id') == $unit->id || $unit->id == $pelengkap->id_unit) selected @endif>{{ $unit->namaunit }}</option>
                                @endforeach
                        </select> -->
                    </tr>
                    <tr><td></td></tr>
                    <tr><td></td></tr>
                    <tr><td></td></tr>
                    <tr>
                        <td><label for="exampleInputTahun">Tahun</label></td>
                        <td><select class="form-control" id="exampleInputUnit" name="unit" disabled>
                            <option value="$pelengkap->tahun"{{$pelengkap->tahun ? 'selected' : ''}}>{{$pelengkap->tahun}}</option>
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
                        <td><label for="exampleInputTambahantpp">Tambahan TPP</label></td>
                        <td><input type="text" id="exampleInputTambahantpp" placeholder="Tambahan TPP" name="tambahantpp" value="{{$pelengkap->tambahantpp ?? old('tambahantpp')}}"></td>
                        <td></td><td></td><td></td><td></td>
                        <td><label for="exampleInputTpg">TPG</label></td>
                        <td><input type="text" id="exampleInputTpg" placeholder="TPG" name="tpg" value="{{$pelengkap->tpg ?? old('tpg')}}"></td>
                    </tr>
                    <tr>
                        <td><label for="exampleInputTamsilguru">Tambahan Penghasilan Guru</label></td>
                        <td><input type="text" id="exampleInputTamsilguru" placeholder="Tambahan Penghasilan Guru" name="tamsilguru" value="{{$pelengkap->tamsilguru ?? old('tamsilguru')}}"></td>
                        <td></td><td></td><td></td><td></td>
                        <td><label for="exampleInputInsentif">Insentif</label></td>
                        <td><input type="text" id="exampleInputInsentif" placeholder="Insentif" name="insentif" value="{{$pelengkap->insentif ?? old('insentif')}}"></td>
                    </tr>
                    </table>

                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{route('pelengkaps.index')}}" class="btn btn-default">
                        Batal
                    </a>
                </div>
            </div>
        </div>
    </div>
@stop