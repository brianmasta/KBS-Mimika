@extends('admin.layouts.MainLayout')

@section('title', 'Galeri')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>Galeri KBS</h5>
                </div>
                <div class="card-body">
                        <a class="btn btn-success" href="/input-galeri">Tambah</a>
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
                                <th>Judul</th>
                                <th>Foto</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($galeri as $item)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$item->judul}}</td>
                                <td>
                                    <img src="{{asset('storage/galeri/'.$item->gambar)}}" alt="" width="200px">
                                    {{-- {{ asset('storage/'.$item->gambar)}} --}}
                                </td>
                                <td>
                                    <div class="btn-group-sm">
                                        {{-- <button type="button" class="btn btn-primary btn-sm">Detail</button> --}}
                                        <a class="btn btn-warning btn-sm" href="/edit-galeri/{{$item->id}}">Edit</a>
                                        <a class="btn btn-danger btn-sm" href="/delete-galeri/{{$item->id}}">Hapus</a>
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