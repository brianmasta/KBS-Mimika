<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>KBS | Cetak Data</title>
    <!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 11]>
    	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    	<![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="Phoenixcoded" />

    <!-- Favicon icon -->
	<link rel="icon" href="{{asset('assets/img/kbs.png')}}" type="image/x-icon">
{{-- 
    <!-- font css -->
    <link rel="stylesheet" href="{{asset('assets-admin/fonts/font-awsome-pro/css/pro.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets-admin/fonts/feather.css')}}">
    <link rel="stylesheet" href="{{asset('assets-admin/fonts/fontawesome.css')}}">

    <!-- vendor css -->
    <link rel="stylesheet" href="{{asset('assets-admin/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets-admin/css/customizer.css')}}"> --}}

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div class="">
        <div class="col-md-12">           
            <div class="text-uppercase">
                    <img width="1200px" class="rounded mx-auto d-block" src="{{asset('assets-admin/images/Cop KK KBS2.png')}}" alt="Card image cap">
                    <hr>
                <div class="">
                    <div class="table">
                        <table class="table table-borderless table-sm">
                            <tbody>
                                <tr>
                                    <th>Nama Kepala Keluarga</th>
                                    <td>: {{$anggota->name}}</td>
                                    <th>Distrik</th>
                                    <td>: {{$anggota->distrik}}</td>
                                </tr>
                                <tr>
                                    <th>Alamat</th>
                                    <td>: {{$anggota->alamat}}</td>
                                    <th>Kabupaten</th>
                                    <td>: {{$anggota->kabupaten}}</td>
                                </tr>
                                <tr>
                                    <th>RT/RW</th>
                                    <td>: {{$anggota->rt}}</td>
                                    <th>Provinsi</th>
                                    <td>: {{$anggota->provinsi}}</td>
                                </tr>
                                <tr>
                                    <th>Jemaat Asal (Biak)</th>
                                    <td>: {{$anggota->asal_jemaat}}</td>
                                    <th>Nomor HP / WA</th>
                                    <td>: {{$anggota->hp}}</td>
                                </tr>
                                <tr>
                                    <th>Kode Pos</th>
                                    <td>: {{$anggota->pos}}</td>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead class="align-middle table-info" style="text-align: center;">
                                <tr>
                                    <th>NO</th>
                                    <th>NAMA LENGKAP</th>
                                    <th>NIK</th>
                                    <th>JENIS KELAMIN</th>
                                    <th>TEMPAT LAHIR</th>
                                    <th>TANGGAL LAHIR</th>
                                    <th>AGAMA</th>
                                    <th>PENDIDIKAN</th>
                                    <th>JENIS PEKERJAAN</th>
                                    <th>GOL. DARAH</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($anggota->anggotas as $item)
                                    <tr>
                                        <td style="text-align: center;">{{$loop->iteration}}</td>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->nik}}</td>
                                        <td>{{$item->kelamin->name}}</td>
                                        <td>{{$item->tempat_lahir}}</td>
                                        <td>{{ date('d-m-Y',strtotime($item->tanggal_lahir)) }}</td>
                                        <td>{{$item->agama->name}}</td>
                                        <td>{{$item->pendidikan->name}}</td>
                                        <td>{{$item->pekerjaan->name}}</td>
                                        <td>{{$item->darah->name}}</td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered border-danger align-middle">
                            <thead class="table-info" style="text-align: center;">
                                <tr>
                                    <th class="align-middle" rowspan="2">NO</th>
                                    <th class="align-middle" rowspan="2">STATUS PERKAWINAN</th>
                                    <th class="align-middle" rowspan="2">STATUS  HUBUNGAN DALAM KELUARGA</th>
                                    <th class="align-middle" rowspan="2">SUKU</th>
                                    <th class="align-middle" rowspan="2">KEWARGANEGARAAN</th>
                                    <th colspan="2">NAMA ORANG TUA</th>
                                    
                                </tr>
                                <tr>
                                    <th>AYAH/KAMAM</th>
                                    <th>IBU/AWIN</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($anggota->anggotas as $item)
                                <tr>
                                    <td style="text-align: center;">{{$loop->iteration}}</td>
                                    <td>{{$item->perkawinan->name}}</td>
                                    <td>{{$item->hubungan->name}}</td>
                                    <td>{{$item->suku}}</td>
                                    <td>{{$item->kewarganegaraan->name}}</td>
                                    <td>{{$item->nama_ayah}}</td>
                                    <td>{{$item->nama_ibu}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-borderless" style="text-align: center;">
                            <thead>
                                <tr class="align-bottom">
                                    <th>DILAKUKAN PADA TANGGAL</th>
                                    <th>KEPALA KELUARGA</th>
                                    <th>MANANWIR KBS MIMIKA</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{$anggota->created_at}}</td>
                                    <td><u>{{$anggota->name}}</u></td>
                                    <td>
                                        <div class="col-md-6 container">{!! DNS2D::getBarcodeHTML("$anggota->id", 'QRCODE',6,6) !!}</div>
                                        <strong><u>Yacob Yawan</u></strong> 
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
    