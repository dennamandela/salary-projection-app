@extends('adminlte::page')

@section('title', 'Daftar Mutasi Antar SKPD')

@section('content_header')
    <h1 class="m-0 text-dark">Daftar Mutasi Antar SKPD</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-18">
            <div class="card">
                <div class="card-body" style="overflow:auto">

                    
                    <!-- <h4>Filter</h4>

                    <table class="table table-hover table-stripped" style="font-size: 16px">
                    <tr>
                    <td style="width: 50px;"><label for="exampleInputUnitfilter">Unit</label></td>
                    <td>
                    <div class="form-group">
                        <select class="form-control" id="exampleInputUnitfilter" name="unitfilter" style="width: 250px;">
                            <option></option>
                            @foreach ($units as $unit)
                            <option value="{{ $unit->namaunit }}">{{ $unit->namaunit }}</option>
                            @endforeach
                        </select>
                    </div>
                    </td>
                    <td><a href="{{route('datagajis.index')}}" class="btn btn-primary mb-2">Cari</a></td>
                    </tr>
                    </table> -->

                    <!-- <br>
                    <br> -->

                    <a href="{{url('/skpd/create-skpd')}}" class="btn btn-primary mb-2">
                        Tambah Mutasi SKPD
                    </a>

                    <table class="table table-hover table-bordered table-stripped" id="example2" style="font-size: 10px">
                        <thead>
                        <tr>
                            <!-- <th>Id Unit</th> -->
                            <th>Unit Asal</th>
                            <!-- <th>Id Tahun</th> -->
                            <th>Unit Tujuan</th>
                            <!-- <th>Id Jenis Gaji</th> -->
                            <th>Tahun</th>
                            <th>Gaji Pokok</th>
                            <th>Tunj. Keluarga</th>
                            <th>Tunj. Jabatan</th>
                            <th>Tunj. Fungsional</th>
                            <th>Tunj. Umum</th>
                            <th>Tunj. Beras</th>
                            <th>Tunj. Pph</th>
                            <th>Pembulatan</th>
                            <th>BPJS</th>
                            <th>JKK</th>
                            <th>JKM</th>
                            <th>Tapera</th>
                            <th>AKSI</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($mutasiskpd as $key => $mutasiskpd)
                            <tr>
                                <!-- <td>{{$key+1}}</td> -->
                                <!-- <td>{{$datagaji->id_unit}}</td> -->
                                <td>{{$mutasiskpd->namaunit}}</td>
                                <!-- <td>{{$datagaji->id_tahun}}</td> -->
                                <td>{{$mutasiskpd->tahun}}</td>
                                <!-- <td>{{$datagaji->id_jenisgaji}}</td> -->
                                <td>{{$mutasiskpd->jenisgaji}}</td>
                                <td>@money($mutasiskpd->gapok)</td>
                                <td>@money($mutasiskpd->tkel)</td>
                                <td>@money($mutasiskpd->tjab)</td>
                                <td>@money($mutasiskpd->tfung)</td>
                                <td>@money($mutasiskpd->tumum)</td>
                                <td>@money($mutasiskpd->tberas)</td>
                                <td>@money($mutasiskpd->tpph)</td>
                                <td>@money($mutasiskpd->pembulatan)</td>
                                <td>@money($mutasiskpd->bpjs)</td>
                                <td>@money($mutasiskpd->jkk)</td>
                                <td>@money($mutasiskpd->jkm)</td>
                                <td>@money($mutasiskpd->tapera)</td>
                                <td>
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                    <a href="{{url('/skpd/edit', $mutasiskpd->id)}}" class="fas fa-edit  fa-lg"></a>
                                    <a href="{{url('/skpd/hapus', $mutasiskpd->id)}}" class="fas fa-trash  fa-lg"></a>
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
