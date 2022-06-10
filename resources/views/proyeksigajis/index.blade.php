@extends('adminlte::page')

@section('title', 'Proyeksi Gaji')

@section('content_header')
    <h1 class="m-0 text-dark">Proyeksi Gaji</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-18">
            <div class="card">
                <div class="card-body" style="overflow:auto">

                    <a href="{{route('proyeksigajis.create')}}" class="btn btn-primary mb-2">
                        Hitung Proyeksi Gaji
                    </a>

                    <table class="table table-hover table-bordered table-stripped" id="example2" style="font-size: 10px">
                        <thead>
                        <tr>
                            <th>Nama Unit</th>
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
                            <th>Total</th>
                            <th>Print</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($proyeksigajis as $key => $proyeksigaji)
                            <tr>
                                <!-- <td>{{$key+1}}</td> -->
                                <td>{{$proyeksigaji->namaunit}}</td>
                                <td>{{$proyeksigaji->tahun}}</td>
                                <td>@money($proyeksigaji->gapok)</td>
                                <td>@money($proyeksigaji->tkel)</td>
                                <td>@money($proyeksigaji->tjab)</td>
                                <td>@money($proyeksigaji->tfung)</td>
                                <td>@money($proyeksigaji->tumum)</td>
                                <td>@money($proyeksigaji->tberas)</td>
                                <td>@money($proyeksigaji->tpph)</td>
                                <td>@money($proyeksigaji->pembulatan)</td>
                                <td>@money($proyeksigaji->bpjs)</td>
                                <td>@money($proyeksigaji->jkk)</td>
                                <td>@money($proyeksigaji->jkm)</td>
                                <td>@money($proyeksigaji->tapera)</td>
                                <td><b>@money($proyeksigaji->total)</b></td>
                                <td align="center">
                                    <a href="{{route('proyeksigajis.edit', $proyeksigaji)}}" target="_blank" class="fas fa-print  fa-lg"></a>
                                    <!-- <a href="{{route('proyeksigajis.destroy', $proyeksigaji)}}" onclick="notificationBeforeDelete(event, this)" class="btn btn-danger btn-xs">
                                        Delete
                                    </a> -->
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

@push('js')
    <form action="" id="delete-form" method="post">
        @method('delete')
        @csrf
    </form>
    <script>
        $('#example2').DataTable({
            "responsive": true,
        });

        function notificationBeforeDelete(event, el) {
            event.preventDefault();
            if (confirm('Apakah anda yakin akan menghapus data ? ')) {
                $("#delete-form").attr('action', $(el).attr('href'));
                $("#delete-form").submit();
            }
        }

    </script>
@endpush