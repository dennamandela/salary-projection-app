@extends('adminlte::page')

@section('title', 'Data Pelengkap BPJS')

@section('content_header')
    <h1 class="m-0 text-dark">Data Pelengkap BPJS</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body" style="overflow:auto">

                    <a href="{{route('pelengkaps.create')}}" class="btn btn-primary mb-2">
                        Tambah
                    </a>

                    <table class="table table-hover table-bordered table-stripped" id="example2" style="font-size: 10px">
                        <thead>
                        <tr>
                            <!-- <th>Id Unit</th>
                            <th>Id Tahun</th> -->
                            <th>Nama Unit</th>
                            <th>Tahun</th>
                            <th>Penambah TPP</th>
                            <th>TPG</th>
                            <th>Tambahan Penghasilan Guru</th>
                            <th>Insentif</th>
                            <th>Opsi</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($pelengkaps as $key => $pelengkap)
                            <tr>
                                <!-- <td>{{$key+1}}</td> -->
                                <td>{{$pelengkap->namaunit}}</td>
                                <td>{{$pelengkap->tahun}}</td>
                                <td>@money($pelengkap->tambahantpp)</td>
                                <td>@money($pelengkap->tpg)</td>
                                <td>@money($pelengkap->tamsilguru)</td>
                                <td>@money($pelengkap->insentif)</td>
                                <td>
                                    <a href="{{route('pelengkaps.edit', $pelengkap)}}" class="fas fa-edit  fa-lg"></a>
                                    &nbsp;
                                    <a href="{{route('pelengkaps.destroy', $pelengkap)}}" onclick="notificationBeforeDelete(event, this)" class="fas fa-trash fa-lg text-danger"></a>
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