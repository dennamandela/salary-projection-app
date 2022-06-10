@extends('adminlte::page')

@section('title', 'Tambah Data Pph dan Pembulatan')

@section('content_header')
    <h1 class="m-0 text-dark">Tambah Data Pph dan Pembulatan</h1>
@stop

@section('content')
    <form action="{{route('pphpembulatans.store')}}" method="post">
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





                    <!-- <div class="form-group">
                        <label for="exampleInputGapok">Gaji Pokok</label>
                        <input type="text" class="form-control @error('gapok') is-invalid @enderror" id="exampleInputGapok" placeholder="Gapok" name="gapok" value="{{old('gapok')}}">
                        @error('gapok') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputTkel">Tunj. Keluarga</label>
                        <input type="text" class="form-control @error('tkel') is-invalid @enderror" id="exampleInputTkel" placeholder="Tkel" name="tkel" value="{{old('tkel')}}">
                        @error('tkel') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputTjab">Tunj. Jabatan</label>
                        <input type="text" class="form-control @error('tjab') is-invalid @enderror" id="exampleInputTjab" placeholder="Tjab" name="tjab" value="{{old('tjab')}}">
                        @error('tjab') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputTfung">Tunj. Fungsional</label>
                        <input type="text" class="form-control @error('tfung') is-invalid @enderror" id="exampleInputTfung" placeholder="Tfung" name="tfung" value="{{old('tfung')}}">
                        @error('tfung') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputTumum">Tunj. Fungsional Umum</label>
                        <input type="text" class="form-control @error('tumum') is-invalid @enderror" id="exampleInputTumum" placeholder="Tumum" name="tumum" value="{{old('tumum')}}">
                        @error('tumum') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputTberas">Tunj. Beras</label>
                        <input type="text" class="form-control @error('tberas') is-invalid @enderror" id="exampleInputTberas" placeholder="Tberas" name="tberas" value="{{old('tberas')}}">
                        @error('tberas') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputTpph">Tunj. Pph</label>
                        <input type="text" class="form-control @error('tpph') is-invalid @enderror" id="exampleInputTpph" placeholder="Tpph" name="tpph" value="{{old('tpph')}}">
                        @error('tpph') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPembulatan">Pembulatan</label>
                        <input type="text" class="form-control @error('pembulatan') is-invalid @enderror" id="exampleInputPembulatan" placeholder="Pembulatan" name="pembulatan" value="{{old('pembulatan')}}">
                        @error('pembulatan') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputBpjs">BPJS</label>
                        <input type="text" class="form-control @error('bpjs') is-invalid @enderror" id="exampleInputBpjs" placeholder="Bpjs" name="bpjs" value="{{old('bpjs')}}">
                        @error('bpjs') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputJkk">JKK</label>
                        <input type="text" class="form-control @error('jkk') is-invalid @enderror" id="exampleInputJkk" placeholder="Jkk" name="jkk" value="{{old('jkk')}}">
                        @error('jkk') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputJkm">JKM</label>
                        <input type="text" class="form-control @error('jkk') is-invalid @enderror" id="exampleInputJkm" placeholder="Jkm" name="jkm" value="{{old('jkm')}}">
                        @error('jkm') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputTapera">Tapera</label>
                        <input type="text" class="form-control @error('tapera') is-invalid @enderror" id="exampleInputTapera" placeholder="Tapera" name="tapera" value="{{old('tapera')}}">
                        @error('tapera') <span class="text-danger">{{$message}}</span> @enderror
                    </div> -->

                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{route('pphpembulatans.index')}}" class="btn btn-default">
                        Batal
                    </a>
                </div>
            </div>
        </div>
    </div>
@stop