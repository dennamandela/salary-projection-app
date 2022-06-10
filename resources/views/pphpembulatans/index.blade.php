@extends('adminlte::page')

@section('title', 'Daftar Pph dan Pembulatan')

@section('content_header')
    <h1 class="m-0 text-dark">Daftar Pph dan Pembulatan</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-18">
            <div class="card">
                <div class="card-body" style="overflow:auto">

                    <a href="{{route('pphpembulatans.create')}}" class="btn btn-primary mb-2">
                        Tambah
                    </a>

                    <table class="table table-hover table-bordered table-stripped" id="example2" style="font-size: 10px">
                        <thead>
                        <tr>
                            <!-- <th>Id Unit</th> -->
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
                            <th>Opsi</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($pphpembulatans as $key => $pphpembulatan)
                            <tr>
                                <!-- <td>{{$key+1}}</td> -->
                                <td>{{$pphpembulatan->namaunit}}</td>
                                <td>{{$pphpembulatan->tahun}}</td>
                                <td>@money($pphpembulatan->gapok)</td>
                                <td>@money($pphpembulatan->tkel)</td>
                                <td>@money($pphpembulatan->tjab)</td>
                                <td>@money($pphpembulatan->tfung)</td>
                                <td>@money($pphpembulatan->tumum)</td>
                                <td>@money($pphpembulatan->tberas)</td>
                                <td>@money($pphpembulatan->tpph)</td>
                                <td>@money($pphpembulatan->pembulatan)</td>
                                <td>@money($pphpembulatan->bpjs)</td>
                                <td>@money($pphpembulatan->jkk)</td>
                                <td>@money($pphpembulatan->jkm)</td>
                                <td>@money($pphpembulatan->tapera)</td>
                                <td>
                                    <a href="{{route('pphpembulatans.edit', $pphpembulatan)}}" class="fas fa-edit  fa-lg"></a>
                                    &nbsp;
                                    <!-- <a href="{{route('pphpembulatans.destroy', $pphpembulatan)}}" onclick="notificationBeforeDelete(event, this)" class="fas fa-trash fa-lg text-danger"></a> -->
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
<!-- delete section -->
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

    <!-- filter section -->
    <!-- <form action="{{route('pphpembulatans.index')}}" method="post"> -->
    
@endpush