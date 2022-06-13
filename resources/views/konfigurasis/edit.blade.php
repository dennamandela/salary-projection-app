@extends('adminlte::page')

@section('title', 'Edit Konfigurasi')

@section('content_header')
    <h1 class="m-0 text-dark">Edit Konfigurasi</h1>
@stop

@section('content')
    <form action="{{route('konfigurasis.update', $konfigurasi)}}" method="post">
        @method('PUT')
        @csrf
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body" style="overflow:auto">

                    <table style="width:100%">
                    <tr>
                        <td><label for="exampleInputTahunanggaran">Tahun</label></td>
                        <td><input type="text" id="exampleInputTahunanggaran" placeholder="Tahun Anggaran" name="tahunanggaran" value="{{$konfigurasi->tahunanggaran ?? old('tahunanggaran')}}"></td>
                    </tr>
                    <tr><td></td></tr>
                    <tr><td></td></tr>
                    <tr><td></td></tr>
                    <tr>
                        <td><label for="exampleInputBulanacuan">Bulan Acuan Murni</label></td>
                        <td><select class="form-control" id="exampleInputBulanacuan" name="bulanacuan">
                            <option>-- Bulan Acuan --</option>
                            @foreach($jenisgajis as $jenisgaji)
                                <option value="{{ $jenisgaji->id }}">{{$jenisgaji->jenisgaji}}</option>
                            @endforeach
                        </select></td>
                    </tr>
                    <tr>
                        <td><label for="exampleInputBulanacuan">Bulan Acuan PAK</label></td>
                        <td><select class="form-control" id="exampleInputBulanacuan" name="bulanacuan">
                            <option>-- Bulan Acuan --</option>
                            @foreach($jenisgajis as $jenisgaji)
                                <option value="{{ $jenisgaji->id }}">{{$jenisgaji->jenisgaji}}</option>
                            @endforeach
                        </select></td>
                    </tr>
                    <tr>
                        <td><label for="exampleInputNilaiaccress">Nilai Accress</label></td>
                        <td><input type="text" id="exampleInputNilaiaccress" placeholder="Nilai Accress" name="nilaiaccress" value="{{$konfigurasi->nilaiaccress ?? old('nilaiaccress')}}"></td>
                    </tr>
                    <tr><td></td></tr>
                    <tr><td></td></tr>
                    <tr><td></td></tr>
                    <tr></tr>
                    <tr></tr>
                    </table>

                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{route('konfigurasis.index')}}" class="btn btn-default">
                        Batal
                    </a>
                </div>
            </div>
        </div>
    </div>
@stop