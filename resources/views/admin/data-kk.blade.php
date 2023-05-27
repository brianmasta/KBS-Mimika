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
                    <div class="mb-3">
                        <a class="btn btn-success" href="/input-kk">Tambah</a>
                        <a class="btn btn-success" href="/cetak-kk-pdf">PDF</a>
                    </div>
                    <form action="" method="get">
                        <div class="input-group mb-3">
                                <input type="text" name="pencarian" class="form-control" placeholder="Pencarian" aria-label="Pencarian" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn  btn-primary">Cari</button>
                                    <a class="btn  btn-warning" href="/data-kk" type="button">Reset</a>
                                </div>  
                        </div>
                    </form>
                    @if (Session::has('status'))
                    <div class="alert alert-success" role="alert">
                        {{Session::get('message')}}
                    </div>
                    @endif
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kepala Keluarga</th>
                                    <th>No Rayon</th>
                                    <th>No Hp</th>
                                    <th>keterangan</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($keluarga as $item)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->Rayon->name}}</td>
                                    <td>{{$item->hp}}</td>
                                    <td>{{$item->keterangan}}</td>
                                    <td>
                                        <div class="btn-group-sm">
                                            <a class="btn btn-primary btn-sm" href="/detail-kk/{{$item->id}}">Detail</a>
                                            <a class="btn btn-warning btn-sm" href="/edit-kk/{{$item->id}}">Edit</a>
                                            <a class="btn btn-info btn-sm" href="/cetak-kk/{{$item->id}}">Cetak</a>
                                            <a class="btn btn-danger btn-sm" href="/delete-keluarga/{{$item->id}}">Hapus</a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{$keluarga->WithQueryString()->links()}}
                </div>
            </div>
        </div>

    </div>
@endsection