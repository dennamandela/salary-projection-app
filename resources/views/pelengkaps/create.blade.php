@extends('adminlte::page')

@section('title', 'Tambah Data Pelengkap BPJS')

@section('content_header')
    <h1 class="m-0 text-dark">Tambah Data Pelengkap BPJS</h1>
@stop

@section('content')
    <form action="{{route('pelengkaps.store')}}" method="post">
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
                        <td><label for="exampleInputTambahantpp">Tambahan TPP</label></td>
                        <td><input type="text" id="exampleInputTambahantpp" placeholder="Tambahan TPP" name="tambahantpp" value="{{old('tambahantpp')}}"></td>
                        <td></td><td></td><td></td><td></td>
                        <td><label for="exampleInputTpg">TPG</label></td>
                        <td><input type="text" id="exampleInputTpg" placeholder="TPG" name="tpg" value="{{old('tpg')}}"></td>
                    </tr>
                    <tr>
                        <td><label for="exampleInputTamsilguru">Tambahan Penghasilan Guru</label></td>
                        <td><input type="text" id="exampleInputTamsilguru" placeholder="Tambahan Penghasilan Guru" name="tamsilguru" value="{{old('tamsilguru')}}"></td>
                        <td></td><td></td><td></td><td></td>
                        <td><label for="exampleInputInsentif">Insentif</label></td>
                        <td><input type="text" id="exampleInputInsentif" placeholder="Insentif" name="insentif" value="{{old('insentif')}}"></td>
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