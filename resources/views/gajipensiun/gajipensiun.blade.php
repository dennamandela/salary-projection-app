@extends('adminlte::page')

@section('title', 'Daftar Gaji Pensiun')

@section('content_header')
    <h1 class="m-0 text-dark">Daftar Gaji Pensiun</h1>
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

                    <a href="{{url('/pegawaipensiun/tarikgaji')}}" class="btn btn-primary mb-2">
                        Tarik Data Gaji Pensiun
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
                        @foreach($pegawaipensiun as $key => $pensiun)
                            <tr>
                                <!-- <td>{{$key+1}}</td> -->
                                <!-- <td>{{$datagaji->id_unit}}</td> -->
                                <td>{{$pensiun->namaunit}}</td>
                                <!-- <td>{{$datagaji->id_tahun}}</td> -->
                                <td>{{$pensiun->tahun}}</td>
                                <!-- <td>{{$datagaji->id_jenisgaji}}</td> -->
                                <td>{{$pensiun->jenisgaji}}</td>
                                <td>@money($pensiun->gapok)</td>
                                <td>@money($pensiun->tkel)</td>
                                <td>@money($pensiun->tjab)</td>
                                <td>@money($pensiun->tfung)</td>
                                <td>@money($pensiun->tumum)</td>
                                <td>@money($pensiun->tberas)</td>
                                <td>@money($pensiun->tpph)</td>
                                <td>@money($pensiun->pembulatan)</td>
                                <td>@money($pensiun->bpjs)</td>
                                <td>@money($pensiun->jkk)</td>
                                <td>@money($pensiun->jkm)</td>
                                <td>@money($pensiun->tapera)</td>
                                <td>
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                    <a href="{{url('pegawaipensiun/edit', $pensiun->id)}}" class="fas fa-edit  fa-lg"></a>
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
