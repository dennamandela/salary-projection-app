@extends('adminlte::page')

@section('title', 'Daftar Unit')

@section('content_header')
    <h1 class="m-0 text-dark">Daftar Unit</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <!-- <a href="{{route('units.create')}}" class="btn btn-primary mb-2">
                        Tambah
                    </a> -->

                    <table class="table table-hover table-bordered table-stripped" id="example2">
                        <thead>
                        <tr>
                            <th>Kode Unit</th>
                            <th>Nama Unit</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($units as $key => $unit)
                            <tr>
                                <!-- <td>{{$key+1}}</td> -->
                                <td>{{$unit->kodeunit}}</td>
                                <td>{{$unit->namaunit}}</td>
                                <!-- <td>
                                    <a href="{{route('units.edit', $unit)}}" class="btn btn-primary btn-xs">
                                        Edit
                                    </a>
                                    <a href="{{route('units.destroy', $unit)}}" onclick="notificationBeforeDelete(event, this)" class="btn btn-danger btn-xs">
                                        Delete
                                    </a>
                                </td> -->
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