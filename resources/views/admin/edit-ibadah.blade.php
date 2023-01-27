@extends('admin.layouts.MainLayout')

@section('title', 'Edit Jadwal Ibadah')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>Edit Jadwal Ibadah</h5>
                </div>
                <div class="card-body">
                    <form method="post" action="/update-ibadah/{{$ibadah->id}}" >
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="date">Tanggal</label>
                                    <input value="{{ $ibadah->date}}" name="date" type="date" class="form-control" id="date" placeholder="Hari, Tanggal Bulan Tahun" required>
                                    <small id="date" class="form-text text-muted">Tanggal Ibadah.</small>
                                </div>
                                <div class="form-group">
                                    <label for="keluarga">Keluarga</label>
                                    <input value="{{ $ibadah->keluarga}}" name="keluarga" type="text" class="form-control" id="keluarga" placeholder="Keluarga" required>
                                    <small id="keluarga" class="form-text text-muted">Keluarga yang dikunjungi.</small>
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <input value="{{ $ibadah->alamat}}" name="alamat" type="text" class="form-control" id="alamat" placeholder="Alamat" required>
                                    <small id="alamat" class="form-text text-muted">Alamat keluarga yang dikunjungi.</small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="liturgi">Pembawa Liturgi</label>
                                    <input value="{{ $ibadah->liturgi}}" name="liturgi" type="text" class="form-control" id="liturgi" placeholder="Pembawah Liturgi" required>
                                    <small id="liturgi" class="form-text text-muted">Pembawa Liturgi.</small>
                                </div>
                                <div class="form-group">
                                    <label for="firman">Pelayan Firman</label>
                                    <input value="{{ $ibadah->firman}}" name="firman" type="text" class="form-control" id="firman" placeholder="Firman" required>
                                    <small id="firman" class="form-text text-muted">Pelayan Firman.</small>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn  btn-primary">Simpan</button>
                                <a class="btn btn-danger"href="/data-ibadah">Batal</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection