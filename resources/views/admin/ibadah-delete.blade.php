@extends('admin.layouts.MainLayout')

@section('title', 'Hapus Ibadah')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>Hapus Ibadah</h5>
                </div>
                <div class="card-body">
                    <div class="form-row">
                        <div class="col-md-10">
                            <form action="/destroy-ibadah/{{ $ibadah->id }}" method="post">
                                @csrf
                                @method('delete')
                                <h2>Apakah Anda yakin untuk menghapus data Ibadah Keluarga: <strong>{{$ibadah->keluarga}}</strong></h2>
                                <button type="submit" class="btn  btn-danger">Ya</button>
                                <a class="btn  btn-primary"href="/data-ibadah">Tidak</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection