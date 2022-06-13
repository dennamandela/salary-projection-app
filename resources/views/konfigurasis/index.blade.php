@extends('adminlte::page')

@section('title', 'Data Konfigurasi')

@section('content_header')
    <h1 class="m-0 text-dark">Data Konfigurasi</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body" style="overflow:auto">

                    <!-- <table style="width:75%">
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
                    @foreach($konfigurasis as $key => $konfigurasi)
                    <tr>
                        <td><label for="exampleInputTahunanggaran">Gaji Pokok</label></td>
                        <td><input type="text" id="exampleInputTahunanggaran" placeholder="Tahun Anggaran" name="tahunanggaran">{{$konfigurasi->tahunanggaran}}</td>
                    </tr>
                    <tr>
                        <td><label for="exampleInputBulanacuan">Gaji Pokok</label></td>
                        <td><input type="text" id="exampleInputBulanacuan" placeholder="Bulan Acuan" name="bulanacuan">{{$konfigurasi->bulanacuan}}</td>
                    </tr>
                    @endforeach
                    </table> -->

                    <table class="table table-hover table-bordered table-stripped" id="example2">
                        <thead>
                        <tr>
                            <!-- <th>Id Unit</th>
                            <th>Id Tahun</th> -->
                            <th>Tahun Anggaran</th>
                            <th>Bulan Acuan Murni</th>
                            <th>Bulan Acuan PAK</th>
                            <th>Nilai Accress</th>
                            <th>Opsi</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($konfigurasis as $key => $konfigurasi)
                            <tr>
                                <!-- <td>{{$key+1}}</td> -->
                                <td>{{$konfigurasi->tahunanggaran}}</td>
                                <td>{{$konfigurasi->bulanacuanmurni}}</td>
                                <td>{{$konfigurasi->bulanacuanpak}}</td>
                                <td>{{$konfigurasi->nilaiaccress}}</td>
                                <td>
                                    <a href="{{route('konfigurasis.edit', $konfigurasi)}}" class="fas fa-edit  fa-lg"></a>
                                    </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
@stop