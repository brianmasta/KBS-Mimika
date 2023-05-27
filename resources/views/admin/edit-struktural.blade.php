@extends('admin.layouts.MainLayout')

@section('title', 'Edit Struktural')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>Edit Struktural</h5>
                </div>
                <div class="card-body">
                    <form method="post" action="/update-struktural/{{$struktural->id}}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="mb-3">
                                <div class="form-group">
                                    <label for="nama">Judul</label>
                                    <input name="name" type="text" class="form-control" id="nama" placeholder="judul" value="{{$struktural->name}}" required>
                                    <small id="nama" class="form-text text-muted">Ubah judul foto.</small>
                                </div>
                                <img class="img-thumbnail" src="{{asset('storage/struktural/'.$struktural->foto)}}" alt="" width="500px">
                                <div class="input-group cust-file-button">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="picture" name="picture">
                                        <label class="custom-file-label" for="galeri">Ganti Foto</label>
                                    </div>
                                </div>
                                <input type="hidden" value="{{$struktural->foto}}" name="update_picture">
                                <br>
                                <div class="form-group">
                                    <button type="submit" class="btn  btn-primary">Update</button>
                                    <a class="btn btn-danger"href="/data-struktural">Batal</a>
                                </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection