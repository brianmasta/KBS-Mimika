@extends('admin.layouts.MainLayout')

@section('title', 'Detail')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>Detail Keluarga</h5>
                </div>
                <div class="card-body">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <table class="table">
                                    <tr>
                                        <th>Kepala Keluarga</th>
                                        <td>: {{$anggota->name}}</td>
                                    </tr>
                                    <tr>
                                        <th>No HP</th>
                                        <td>: {{$anggota->hp}}</td>
                                    </tr>
                                    <tr>
                                        <th>Asal Jemaat</th>
                                        <td>: {{$anggota->asal_jemaat}}</td>
                                    </tr>
                                    <tr>
                                        <th>Rayon</th>
                                        <td>: {{$anggota->rayon->name}}</td>
                                    </tr>
                                    <tr>
                                        <th>Alamat</th>
                                        <td>: {{$anggota->alamat}}</td>
                                    </tr>
                                    <tr>
                                        <th>Provinsi</th>
                                        <td>: {{$anggota->provinsi}}</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col">
                                <table class="table">
                                    
                                    <tr>
                                        <th>Kabupaten</th>
                                        <td>: {{$anggota->kabupaten}}</td>
                                    </tr>
                                    <tr>
                                        <th>Distrik</th>
                                        <td>: {{$anggota->distrik}}</td>
                                    </tr>
                                    <tr>
                                        <th>Kelurahan</th>
                                        <td>: {{$anggota->kelurahan}}</td>
                                    </tr>
                                    <tr>
                                        <th>RT/RW</th>
                                        <td>: {{$anggota->rt}}</td>
                                    </tr>
                                    <tr>
                                        <th>Kode Pos</th>
                                        <td>: {{$anggota->pos}}</td>
                                    </tr>
                                    <tr>
                                        <th><a class="btn btn-danger btn-sm" href="/data-kk">Kembali</a></th>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    
                    <hr>
                    <a class="btn btn-success btn-sm" href="/input-anggota/{{$anggota->id}}">Tambah Anggota</a>
                    <br>
                    <br>
                    @if (Session::has('status'))
                    <div class="alert alert-success" role="alert">
                        {{Session::get('message')}}
                    </div>
                    @endif
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Hubungan</th>
                                <th>Pendidikan</th>
                                <th>Status</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($anggota->anggotas as $item)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->hubungan->name}}</td>
                                <td>{{$item->pendidikan->name}}</td>
                                <td>{{$item->perkawinan->name}}</td>
                                <td>
                                    <div class="btn-group-sm">
                                        {{-- <a class="btn btn-primary btn-sm" href="/">Detail</a> --}}
                                        <a class="btn btn-warning btn-sm" href="/edit-anggota/{{$item->id}}">Edit</a>
                                        <a class="btn btn-danger btn-sm" href="/delete-anggota/{{$item->id}}">Hapus</a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection