@extends('admin.layouts.MainLayout')

@section('title', 'Edit Galeri')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>Tambah Galeri</h5>
                </div>
                <div class="card-body">
                    <form method="post" action="/update-galeri/{{$galeri->id}}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="mb-3">
                                <div class="form-group">
                                    <label for="judul">Judul</label>
                                    <input name="judul" type="text" class="form-control" id="judul" placeholder="judul" value="{{$galeri->judul}}" required>
                                    <small id="judul" class="form-text text-muted">Ubah judul foto.</small>
                                </div>
                                <img class="img-thumbnail" src="{{asset('storage/galeri/'.$galeri->gambar)}}" alt="" width="500px">
                                <div class="input-group cust-file-button">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="galeri" name="foto">
                                        <label class="custom-file-label" for="galeri">Ganti Foto</label>
                                    </div>
                                </div>
                                <input type="hidden" value="{{$galeri->gambar}}" name="update_gambar">
                                <br>
                                <div class="form-group">
                                    <button type="submit" class="btn  btn-primary">Update</button>
                                    <a class="btn btn-danger"href="/data-galeri">Batal</a>
                                </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection