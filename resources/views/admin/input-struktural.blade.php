@extends('admin.layouts.MainLayout')

@section('title', 'Input Struktural')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>Tambah Badan Pengurus KBS Mimika</h5>
                </div>
                <div class="card-body">
                    <form method="post" action="/struktural-add" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="mb-3">
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input name="name" type="text" class="form-control" id="nama" placeholder="nama" required>
                                    <small id="nama" class="form-text text-muted">Nama.</small>
                                </div>
                                <div class="form-group">
                                    <label for="jabatan">Jabatan</label>
                                    <input name="jabatan" type="text" class="form-control" id="jabatan" placeholder="jabatan" required>
                                    <small id="jabatan" class="form-text text-muted">Nama.</small>
                                </div>
                                <div class="form-group">
                                    <label for="sosial_media">Link Sosial Media</label>
                                    <input name="sosial_media" type="text" class="form-control" id="sosial_media" placeholder="Sosial Media" required>
                                    <small id="sosial_media" class="form-text text-muted">Nama.</small>
                                </div>
                                <div class="input-group cust-file-button">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="foto" name="picture">
                                        <label class="custom-file-label" for="foto">Pilih Foto</label>
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