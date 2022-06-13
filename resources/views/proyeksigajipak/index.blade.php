@extends('adminlte::page')

@section('title', 'Proyeksi Gaji PAK')

@section('content_header')
    <h1 class="m-0 text-dark">Proyeksi Gaji PAK</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-18">
            <div class="card">
                <div class="card-body" style="overflow:auto">

                    <a href="{{ url ('/proyeksigajipak/hitung-proyeksi-pak')}}" class="btn btn-primary mb-2">
                        Hitung Proyeksi Gaji PAK
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
                        @foreach($proyeksigajipak as $key => $proyeksigajipak)
                            <tr>
                                <!-- <td>{{$key+1}}</td> -->
                                <td>{{$proyeksigajipak->namaunit}}</td>
                                <td>{{$proyeksigajipak->tahun}}</td>
                                <td>@money($proyeksigajipak->gapok)</td>
                                <td>@money($proyeksigajipak->tkel)</td>
                                <td>@money($proyeksigajipak->tjab)</td>
                                <td>@money($proyeksigajipak->tfung)</td>
                                <td>@money($proyeksigajipak->tumum)</td>
                                <td>@money($proyeksigajipak->tberas)</td>
                                <td>@money($proyeksigajipak->tpph)</td>
                                <td>@money($proyeksigajipak->pembulatan)</td>
                                <td>@money($proyeksigajipak->bpjs)</td>
                                <td>@money($proyeksigajipak->jkk)</td>
                                <td>@money($proyeksigajipak->jkm)</td>
                                <td>@money($proyeksigajipak->tapera)</td>
                                <td><b>@money($proyeksigajipak->total)</b></td>
                                <td align="center">
                                    <a href="{{ url ('proyeksigajipak/cetak-proyeksi-pak', $proyeksigajipak)}}" target="_blank" class="fas fa-print  fa-lg"></a>
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