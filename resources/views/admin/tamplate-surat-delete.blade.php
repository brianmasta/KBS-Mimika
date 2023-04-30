@extends('admin.layouts.MainLayout')

@section('title', 'Hapus Galeri')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>Hapus Template Surat</h5>
                </div>
                <div class="card-body">
                    <div class="form-row">
                        <div class="col-md-10">
                            <form action="/destroy-tamplate-surat/{{ $surat->id }}" method="post">
                                @csrf
                                @method('delete')
                                <h2>Apakah Anda yakin untuk menghapus data Surat: <strong>{{$surat->judul}}</strong></h2>
                                <button type="submit" class="btn  btn-danger">Ya</button>
                                <a class="btn  btn-primary"href="/data-tamplate-surat">Tidak</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection