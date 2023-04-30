@extends('admin.layouts.MainLayout')

@section('title', 'Galeri')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>Template Surat KBS</h5>
                </div>
                <div class="card-body">
                        <a class="btn btn-success" href="/input-tamplate-surat">Tambah</a>
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
                                <th>Surat</th>
                                <th>File</th>
                                <th>Created At</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($TamplateSurat as $item)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$item->judul}}</td>
                                <td>
                                    <a class="btn btn-primary btn-sm" href="{{asset('storage/tamplate_surat/'.$item->file)}}">Download</a>
                                    <img src="{{asset('storage/tamplate_surat/'.$item->file)}}" alt="" width="200px">
                                </td>
                                <td>{{$item->created_at}}</td>
                                <td>
                                    <div class="btn-group-sm">
                                        <a class="btn btn-danger btn-sm" href="/delete-tamplate-surat/{{$item->id}}">Hapus</a>
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