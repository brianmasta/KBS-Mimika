@extends('admin.layouts.MainLayout')

@section('title', 'Hapus Struktural')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>Hapus Struktural</h5>
                </div>
                <div class="card-body">
                    <div class="form-row">
                        <div class="col-md-10">
                            <form action="/destroy-struktural/{{ $struktural->id }}" method="post">
                                @csrf
                                @method('delete')
                                <h2>Apakah Anda yakin untuk menghapus data Struktural: <strong>{{$struktural->name}}</strong></h2>
                                <button type="submit" class="btn  btn-danger">Ya</button>
                                <a class="btn  btn-primary"href="/data-struktural">Tidak</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection