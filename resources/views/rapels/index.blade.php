@extends('adminlte::page')

@section('title', 'Data Rapel')

@section('content_header')
    <h1 class="m-0 text-dark">Data Rapel</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <a href="{{route('rapels.create')}}" class="btn btn-primary mb-2">
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
                        @foreach($rapels as $key => $rapel)
                            <tr>
                                <!-- <td>{{$key+1}}</td> -->
                                <td>{{$rapel->namaunit}}</td>
                                <td>{{$rapel->tahun}}</td>
                                <td>@money($rapel->gapok)</td>
                                <td>@money($rapel->tkel)</td>
                                <td>@money($rapel->tjab)</td>
                                <td>@money($rapel->tfung)</td>
                                <td>@money($rapel->tumum)</td>
                                <td>@money($rapel->tberas)</td>
                                <td>@money($rapel->tpph)</td>
                                <td>@money($rapel->pembulatan)</td>
                                <td>@money($rapel->bpjs)</td>
                                <td>@money($rapel->jkk)</td>
                                <td>@money($rapel->jkm)</td>
                                <td>@money($rapel->tapera)</td>
                                <td>
                                    <a href="{{route('rapels.edit', $rapel)}}" class="fas fa-edit  fa-lg"></a>
                                    &nbsp;&nbsp;&nbsp;                               
                                    <a href="{{route('rapels.destroy', $rapel)}}" onclick="notificationBeforeDelete(event, this)" class="fas fa-trash fa-lg text-danger"></a>
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