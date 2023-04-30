@extends('admin.layouts.MainLayout')

@section('title', 'Input Galeri')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>Tambah Galeri</h5>
                </div>
                <div class="card-body">
                    <form method="post" action="/galeri-add" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="mb-3">
                                <div class="form-group">
                                    <label for="judul">Judul</label>
                                    <input name="judul" type="text" class="form-control" id="judul" placeholder="judul" required>
                                    <small id="judul" class="form-text text-muted">judul foto.</small>
                                </div>
                                <div class="input-group cust-file-button">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="galeri" name="foto">
                                        <label class="custom-file-label" for="galeri">Pilih Foto</label>
                                    </div>
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="submit">Simpan</button>
                                    </div>
                                    
                                </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection