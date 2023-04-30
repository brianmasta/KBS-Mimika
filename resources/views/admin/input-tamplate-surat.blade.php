@extends('admin.layouts.MainLayout')

@section('title', 'Input Template Surat KBS')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>Tambah Template Surat</h5>
                </div>
                <div class="card-body">
                    <form method="post" action="/tamplate-surat-add" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="mb-3">
                                <div class="form-group">
                                    <label for="jeni_surat">Jenis Surat</label>
                                    <input name="judul" type="text" class="form-control" id="jeni_surat" placeholder="Jenis Surat" required>
                                    <small id="jeni_surat" class="form-text text-muted">Jenis Surat KBS.</small>
                                </div>
                                <div class="input-group cust-file-button">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="surat" name="surat" required>
                                        <label class="custom-file-label" for="surat">Pilih File</label>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group">
                                    <button type="submit" class="btn  btn-primary">Simpan</button>
                                    <a class="btn btn-danger"href="/data-tamplate-surat">Batal</a>
                                </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection