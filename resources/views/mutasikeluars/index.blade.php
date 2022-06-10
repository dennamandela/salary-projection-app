@extends('adminlte::page')

@section('title', 'Data Mutasi Keluar')

@section('content_header')
    <h1 class="m-0 text-dark">Data Mutasi Keluar</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body" style="overflow:auto">

                    <a href="{{route('mutasikeluars.create')}}" class="btn btn-primary mb-2">
                        Tambah
                    </a>

                    <table class="table table-hover table-bordered table-stripped" id="example2" style="font-size: 10px">
                        <thead>
                        <tr>
                            <!-- <th>Id Unit</th>
                            <th>Id Tahun</th> -->
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
                        @foreach($mutasikeluars as $key => $mutasikeluar)
                            <tr>
                                <!-- <td>{{$key+1}}</td> -->
                                <td>{{$mutasikeluar->namaunit}}</td>
                                <td>{{$mutasikeluar->tahun}}</td>
                                <td>@money($mutasikeluar->gapok)</td>
                                <td>@money($mutasikeluar->tkel)</td>
                                <td>@money($mutasikeluar->tjab)</td>
                                <td>@money($mutasikeluar->tfung)</td>
                                <td>@money($mutasikeluar->tumum)</td>
                                <td>@money($mutasikeluar->tberas)</td>
                                <td>@money($mutasikeluar->tpph)</td>
                                <td>@money($mutasikeluar->pembulatan)</td>
                                <td>@money($mutasikeluar->bpjs)</td>
                                <td>@money($mutasikeluar->jkk)</td>
                                <td>@money($mutasikeluar->jkm)</td>
                                <td>@money($mutasikeluar->tapera)</td>
                                <td>
                                    <a href="{{route('mutasikeluars.edit', $mutasikeluar)}}" class="fas fa-edit  fa-lg"></a>
                                    &nbsp;
                                    <a href="{{route('mutasikeluars.destroy', $mutasikeluar)}}" onclick="notificationBeforeDelete(event, this)" class="fas fa-trash fa-lg text-danger"></a>
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