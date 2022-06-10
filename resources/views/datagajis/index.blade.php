@extends('adminlte::page')

@section('title', 'Daftar Gaji')

@section('content_header')
    <h1 class="m-0 text-dark">Daftar Gaji</h1>
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

                    <a href="{{route('datagajis.create')}}" class="btn btn-primary mb-2">
                        Tarik Data Gaji
                    </a>

                    <table class="table table-hover table-bordered table-stripped" id="example2" style="font-size: 10px">
                        <thead>
                        <tr>
                            <!-- <th>Id Unit</th> -->
                            <th>Nama Unit</th>
                            <!-- <th>Id Tahun</th> -->
                            <th>Tahun</th>
                            <!-- <th>Id Jenis Gaji</th> -->
                            <th>Jenis Gaji</th>
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
                            <th>Edit</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($datagajis as $key => $datagaji)
                            <tr>
                                <!-- <td>{{$key+1}}</td> -->
                                <!-- <td>{{$datagaji->id_unit}}</td> -->
                                <td>{{$datagaji->namaunit}}</td>
                                <!-- <td>{{$datagaji->id_tahun}}</td> -->
                                <td>{{$datagaji->tahun}}</td>
                                <!-- <td>{{$datagaji->id_jenisgaji}}</td> -->
                                <td>{{$datagaji->jenisgaji}}</td>
                                <td>@money($datagaji->gapok)</td>
                                <td>@money($datagaji->tkel)</td>
                                <td>@money($datagaji->tjab)</td>
                                <td>@money($datagaji->tfung)</td>
                                <td>@money($datagaji->tumum)</td>
                                <td>@money($datagaji->tberas)</td>
                                <td>@money($datagaji->tpph)</td>
                                <td>@money($datagaji->pembulatan)</td>
                                <td>@money($datagaji->bpjs)</td>
                                <td>@money($datagaji->jkk)</td>
                                <td>@money($datagaji->jkm)</td>
                                <td>@money($datagaji->tapera)</td>
                                <td>
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                    <a href="{{route('datagajis.edit', $datagaji)}}" class="fas fa-edit  fa-lg"></a>
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
