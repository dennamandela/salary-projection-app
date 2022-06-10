@extends('adminlte::page')

@section('title', 'Data Penyesuaian')

@section('content_header')
    <h1 class="m-0 text-dark">Data Penyesuaian</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body" style="overflow:auto">

                    <a href="{{route('penyesuaians.create')}}" class="btn btn-primary mb-2">
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
                        @foreach($penyesuaians as $key => $penyesuaian)
                            <tr>
                                <!-- <td>{{$key+1}}</td> -->
                                <td>{{$penyesuaian->namaunit}}</td>
                                <td>{{$penyesuaian->tahun}}</td>
                                <td>@money($penyesuaian->gapok)</td>
                                <td>@money($penyesuaian->tkel)</td>
                                <td>@money($penyesuaian->tjab)</td>
                                <td>@money($penyesuaian->tfung)</td>
                                <td>@money($penyesuaian->tumum)</td>
                                <td>@money($penyesuaian->tberas)</td>
                                <td>@money($penyesuaian->tpph)</td>
                                <td>@money($penyesuaian->pembulatan)</td>
                                <td>@money($penyesuaian->bpjs)</td>
                                <td>@money($penyesuaian->jkk)</td>
                                <td>@money($penyesuaian->jkm)</td>
                                <td>@money($penyesuaian->tapera)</td>
                                <td>
                                    <a href="{{route('penyesuaians.edit', $penyesuaian)}}" class="fas fa-edit  fa-lg"></a>
                                    &nbsp;
                                    <a href="{{route('penyesuaians.destroy', $penyesuaian)}}" onclick="notificationBeforeDelete(event, this)" class="fas fa-trash fa-lg text-danger"></a>
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