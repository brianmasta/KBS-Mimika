@extends('admin.layouts.MainLayout')

@section('title', 'Data Kaluarga')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>Data Keluarga</h5>
                </div>
                <div class="card-body">
                        <a class="btn btn-success" href="/input-kk">Tambah</a>
                    <br>
                    <br>
                    @if (Session::has('status'))
                    <div class="alert alert-success" role="alert">
                        {{Session::get('message')}}
                    </div>
                    @endif
                    <table class="table table-resposive table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kepala Keluarga</th>
                                <th>Alamat</th>
                                <th>Rayon</th>
                                <th>Asal Jemaat</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($keluarga as $item)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->alamat}}</td>
                                <td>{{$item->Rayon->name}}</td>
                                <td>{{$item->asal_jemaat}}</td>
                                <td>
                                    <div class="btn-group-sm">
                                        {{-- <button type="button" class="btn btn-primary btn-sm">Detail</button> --}}
                                        <a class="btn btn-primary btn-sm" href="/detail-kk/{{$item->id}}">Detail</a>
                                        <a class="btn btn-warning btn-sm" href="/edit-kk/{{$item->id}}">Edit</a>
                                        <button type="button" class="btn btn-danger btn-sm">Hapus</button>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection