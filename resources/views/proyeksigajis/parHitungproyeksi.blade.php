@extends('adminlte::page')

@section('title', 'Parameter Hitung Proyeksi')

@section('content_header')
    <h1 class="m-0 text-dark">Parameter Hitung Proyeksi</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <div class="form-group">
                        <label for="exampleInputUnit">Unit
                        </label>
                        <select class="form-control" id="exampleInputUnit" name="unit">
                            <option>-- SKPD --</option>
                            @foreach ($units as $unit)
                            <option value="{{ $unit->id }}">{{ $unit->namaunit }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputJenisgaji">Bulan Acuan
                        </label>
                        <select class="form-control" id="exampleInputJenisgaji" name="jenisgaji">
                            <option>-- Bulan --</option>
                            @foreach ($jenisgajis as $jenisgaji)
                            <option value="{{ $jenisgaji->id }}">{{ $jenisgaji->jenisgaji }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="card-footer">
                    <a href="{{route('proyeksigajis.spHitungproyeksi')}}" class="btn btn-default">
                        Hitung
                    </a>
                </div>
            </div>
        </div>
    </div>
@stop