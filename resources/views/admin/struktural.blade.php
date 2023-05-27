@extends('admin.layouts.MainLayout')

@section('title', 'Strutural')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>Struktural KBS Mimika</h5>
                </div>
                <div class="card-body">
                        <a class="btn btn-success" href="/input-struktural">Tambah</a>
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
                                <th>Nama</th>
                                <th>Jabatan</th>
                                <th>Sosial Media</th>
                                <th>Foto</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($struktural as $item)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->jabatan}}</td>
                                <td>{{$item->sosial_media}}</td>
                                <td>
                                    <img src="{{asset('storage/struktural/'.$item->foto)}}" alt="" width="200px">
                                    {{-- {{ asset('storage/'.$item->gambar)}} --}}
                                </td>
                                <td>
                                    <div class="btn-group-sm">
                                        {{-- <button type="button" class="btn btn-primary btn-sm">Detail</button> --}}
                                        <a class="btn btn-warning btn-sm" href="/edit-struktural/{{$item->id}}">Edit</a>
                                        <a class="btn btn-danger btn-sm" href="/delete-struktural/{{$item->id}}">Hapus</a>
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