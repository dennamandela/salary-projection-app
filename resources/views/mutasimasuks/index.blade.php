@extends('adminlte::page')

@section('title', 'Data Mutasi Masuk')

@section('content_header')
    <h1 class="m-0 text-dark">Data Mutasi Masuk</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body" style="overflow:auto">

                    <a href="{{route('mutasimasuks.create')}}" class="btn btn-primary mb-2">
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
                        @foreach($mutasimasuks as $key => $mutasimasuk)
                            <tr>
                                <!-- <td>{{$key+1}}</td> -->
                                <td>{{$mutasimasuk->namaunit}}</td>
                                <td>{{$mutasimasuk->tahun}}</td>
                                <td>@money($mutasimasuk->gapok)</td>
                                <td>@money($mutasimasuk->tkel)</td>
                                <td>@money($mutasimasuk->tjab)</td>
                                <td>@money($mutasimasuk->tfung)</td>
                                <td>@money($mutasimasuk->tumum)</td>
                                <td>@money($mutasimasuk->tberas)</td>
                                <td>@money($mutasimasuk->tpph)</td>
                                <td>@money($mutasimasuk->pembulatan)</td>
                                <td>@money($mutasimasuk->bpjs)</td>
                                <td>@money($mutasimasuk->jkk)</td>
                                <td>@money($mutasimasuk->jkm)</td>
                                <td>@money($mutasimasuk->tapera)</td>
                                <td>
                                    <a href="{{route('mutasimasuks.edit', $mutasimasuk)}}" class="fas fa-edit  fa-lg"></a>
                                    &nbsp;
                                    <a href="{{route('mutasimasuks.destroy', $mutasimasuk)}}" onclick="notificationBeforeDelete(event, this)" class="fas fa-trash fa-lg text-danger"></a>
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