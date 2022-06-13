@extends('adminlte::page')

@section('title', 'Data Pph 13 dan THR')

@section('content_header')
    <h1 class="m-0 text-dark">Data Pph 13 dan THR</h1>
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
                    
                    </td>
                    <td><a href="{{route('datagajis.index')}}" class="btn btn-primary mb-2">Cari</a></td>
                    </tr>
                    </table> -->

                    <!-- <br>
                    <br> -->

                    <a href="{{ url ('/pphthr/tarik-pphthr')}}" class="btn btn-primary mb-2">
                        Tarik Data Pph THR
                    </a> 

                    <table class="table table-hover table-bordered table-stripped" id="example2" style="font-size: 10px">
                        <thead>
                        <tr>
                            <th>Nama Unit</th>
                            <!-- <th>Id Unit</th> -->
                            <th>Tahun Anggaran</th>
                            <!-- <th>Id Tahun</th> -->
                            <th>Nilai Pph Lalu</th>
                            <!-- <th>Id Jenis Gaji</th> -->
                            <th>Pengali</th>
                            <th>AKSI</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($pphthr as $key => $datapphthr)
                            <tr>
                                <!-- <td>{{$key+1}}</td> -->
                                <!-- <td>{{$datagaji->id_unit}}</td> -->
                                <td>{{$datapphthr->namaunit}}</td>
                                <td>{{$datapphthr->tahunanggaran}}</td>
                                <!-- <td>{{$datagaji->id_tahun}}</td> -->
                                <td>@money($datapphthr->nilaipphlalu)</td>
                                <!-- <td>{{$datagaji->id_jenisgaji}}</td> -->
                                <td>{{$datapphthr->pengali}}</td>
                                <td>
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                    <a href="{{url('/pphthr/edit', $datapphthr)}}" class="fas fa-edit  fa-lg"></a>
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
