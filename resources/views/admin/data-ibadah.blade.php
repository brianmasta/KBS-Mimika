@extends('admin.layouts.MainLayout')

@section('title', 'Jadwal Ibadah')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>Jadwal Ibadah</h5>
                </div>
                <div class="card-body">
                        <a class="btn btn-success" href="/input-ibadah">Tambah</a>
                    <br>
                    <br>
                    @if (Session::has('status'))
                    <div class="alert alert-success" role="alert">
                        {{Session::get('message')}}
                    </div>
                    @endif
                    <table class="table table-responsive table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tanggal</th>
                                <th>Keluarga</th>
                                <th>Alamat</th>
                                <th>Liturgi</th>
                                <th>Firman</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($ibadah as $item)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$item->date}}</td>
                                <td>{{$item->keluarga}}</td>
                                <td>{{$item->alamat}}</td>
                                <td>{{$item->liturgi}}</td>
                                <td>{{$item->firman}}</td>
                                <td>
                                    <div class="btn-group-sm">
                                        {{-- <button type="button" class="btn btn-primary btn-sm">Detail</button> --}}
                                        <a class="btn btn-warning btn-sm" href="/edit-ibadah/{{$item->id}}">Edit</a>
                                        <a class="btn btn-danger btn-sm" href="/delete-ibadah/{{$item->id}}">Hapus</a>
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