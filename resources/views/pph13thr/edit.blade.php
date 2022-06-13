@extends('adminlte::page')

@section('title', 'Edit Data Pph 13 THR')

@section('content_header')
    <h1 class="m-0 text-dark">Edit Data Pph 13 THR</h1>
@stop

@section('content')
    <form action="{{ url ('/pphthr/update-pphthr', $pphthr)}}" method="post">
        @method('PUT')
        @csrf
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body" style="overflow:auto">

                    <table style="width:100%">
                    <tr>
                        <td><label for="exampleInputUnit">Unit</label></td>
                        <!-- <input type="text" class="form-control" id="exampleInputUnit" name="unit" value="{{$datagaji->namaunit ?? old('namaunit')}}"> -->
                        <td><select class="form-control" id="exampleInputUnit" name="unit" disabled>
                            <!-- @foreach($units as $unit)                         -->
                                <option value="$pphthr->namaunit"{{$pphthr->namaunit ? 'selected' : ''}}>{{$pphthr->namaunit}}</option>
                            <!-- @endforeach -->
                        </select></td>
                        <!-- <select name="unit" class="form-control custom-select">
                            <option value="">Select unit</option>
                                @foreach($units as $unit)
                                <option value="{{ $unit->id }}" @if(old('id') == $unit->id || $unit->id == $datagaji->id_unit) selected @endif>{{ $unit->namaunit }}</option>
                                @endforeach
                        </select> -->
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
                        <td><label for="exampleInputNilaiPphLalu">Nilai Pph Lalu</label></td>
                        <td><input type="text" id="exampleInputNilaiPphLalu" placeholder="Nilai Pph Lalu" name="nilaipphlalu" value="{{$pphthr->nilaipphlalu ?? old('nilaipphlalu')}}"></td>
                        <td></td><td></td><td></td><td></td>
                        <td><label for="exampleInputPengali">Pengali</label></td>
                        <td><input type="text" id="exampleInputPengali" placeholder="Pengali" name="pengli" value="{{$pphthr->pengali ?? old('pengali')}}"></td>
                    </tr>
                    </table>

                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{url('/pphthr')}}" class="btn btn-default">
                        Batal
                    </a>
                </div>
            </div>
        </div>
    </div>
@stop