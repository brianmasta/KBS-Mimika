@extends('admin.layouts.MainLayout')

@section('title', 'Edit Keluarga')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>Edit Keluarga</h5>
                </div>
                <div class="card-body">
                    <div class="form-row">
                        <div class="col-md-6">
                            <form action="/update-keluarga/{{$keluarga->id}}" method="post">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="nama">Nama Kepala Keluarga</label>
                                    <input value="{{ $keluarga->name }}" name="name" type="text" class="form-control" id="nama" placeholder="Nama Lengkap" required>
                                    <small id="emailHelp" class="form-text text-muted">Nama lengkap sesuai KTP.</small>
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <input value="{{ $keluarga->alamat }}" name="alamat" type="text" class="form-control" id="alamat" placeholder="Alamat" required>
                                    <small id="emailHelp" class="form-text text-muted">Alamat di Timika.</small>
                                </div>
                                <div class="form-group">
                                    <label for="asal_jemaat">Asal Jemaat</label>
                                    <input value="{{ $keluarga->asal_jemaat }}" name="asal_jemaat" type="text" class="form-control" id="asal_jemaat" placeholder="Asal Jemaat" required>
                                    <small id="emailHelp" class="form-text text-muted">Jemaat Asal Biak.</small>
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Rayon</label>
                                    <select name="rayon_id" class="mb-3 form-control" required>
                                        <option value="{{ $keluarga->rayon->id }}">{{ $keluarga->rayon->name }}</option>
                                        @foreach ($rayon as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                    <small id="emailHelp" class="form-text text-muted">Rayon sesuai tempat tinggal sekarang.</small>
                                </div>
                                <div class="form-group">
                                    <label for="provinsi">Provinsi</label>
                                    <input value="{{ $keluarga->provinsi }}" name="provinsi" type="text" class="form-control" id="provinsi" placeholder="Provinsi" required>
                                    <small id="emailHelp" class="form-text text-muted">Alamat di Timika.</small>
                                </div>
                                <div class="form-group">
                                    <label for="kabupaten">Kabupaten</label>
                                    <input value="{{ $keluarga->kabupaten }}" name="kabupaten" type="text" class="form-control" id="kabupaten" placeholder="Kabupaten" required>
                                    <small id="emailHelp" class="form-text text-muted">Provinsi sesuai alamat sekarang.</small>
                                </div>
                                <div class="form-group">
                                    <label for="distrik">Distrik</label>
                                    <input value="{{ $keluarga->distrik }}" name="distrik" type="text" class="form-control" id="distrik" placeholder="Distrik" required>
                                    <small id="emailHelp" class="form-text text-muted">Distrik sesuai alamat sekarang.</small>
                                </div>
                                <div class="form-group">
                                    <label for="desa">Desa/Kelurahan</label>
                                    <input value="{{ $keluarga->kelurahan }}" name="kelurahan" type="text" class="form-control" id="desa" placeholder="Desa/Kelurahan" required>
                                    <small id="emailHelp" class="form-text text-muted">Desa/Kecamatan sesuai alamat sekarang.</small>
                                </div>
                                <div class="form-group">
                                    <label for="rt">RT/TW</label>
                                    <input value="{{ $keluarga->rt }}" name="rt" type="text" class="form-control" id="rt" placeholder="RT/RW" required>
                                    <small id="emailHelp" class="form-text text-muted">RT/RW sesuai alamt sekarang.</small>
                                </div>
                                <div class="form-group">
                                    <label for="pos">Kode Pos</label>
                                    <input value="{{ $keluarga->pos }}" name="pos" type="number" class="form-control" id="pos" placeholder="Kode Pos" required>
                                    <small id="emailHelp" class="form-text text-muted">Kode Pos Sekarang.</small>
                                </div>
                                <div class="form-group">
                                    <label for="hp">Nomor HP</label>
                                    <input value="{{ $keluarga->hp }}" name="hp" type="number" class="form-control" id="hp" placeholder="Nomor HP"required>
                                    <small id="emailHelp" class="form-text text-muted">No HP yang masih aktif.</small>
                                </div>
                                <button type="submit" class="btn  btn-primary">Submit</button>
                                <a class="btn  btn-danger"href="/data-kk">Batal</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection