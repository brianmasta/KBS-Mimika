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

    <!-- font css -->
    <link rel="stylesheet" href="{{asset('assets-admin/fonts/font-awsome-pro/css/pro.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets-admin/fonts/feather.css')}}">
    <link rel="stylesheet" href="{{asset('assets-admin/fonts/fontawesome.css')}}">

    <!-- vendor css -->
    <link rel="stylesheet" href="{{asset('assets-admin/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets-admin/css/customizer.css')}}">
</head>
<body>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <img class="card-img-top" src="{{asset('assets-admin/images/Cop Surat KBS.png')}}" alt="Card image cap">
                    
                </div>
                <div class="card-body">
                    <h5>Data Anggota KBS Tahun 2023:</h5>
                    <div class="table-responsive">
                        <table class="table" >
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kepala Keluarga</th>
                                    <th>Alamat</th>
                                    <th>Rayon</th>
                                    <th>Asal Jemaat</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($keluarga as $item)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->alamat}}</td>
                                    <td>{{$item->Rayon->name}}</td>
                                    <td>{{$item->asal_jemaat}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- [ Main Content ] end -->

        <!-- Warning Section start -->
    <!-- Older IE warning message -->
    <!--[if lt IE 11]>
        <div class="ie-warning">
            <h1>Warning!!</h1>
            <p>You are using an outdated version of Internet Explorer, please upgrade
               <br/>to any of the following web browsers to access this website.
            </p>
            <div class="iew-container">
                <ul class="iew-download">
                    <li>
                        <a href="http://www.google.com/chrome/">
                            <img src="assets-admin/images/browser/chrome.png" alt="Chrome">
                            <div>Chrome</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.mozilla.org/en-US/firefox/new/">
                            <img src="assets-admin/images/browser/firefox.png" alt="Firefox">
                            <div>Firefox</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://www.opera.com">
                            <img src="assets-admin/images/browser/opera.png" alt="Opera">
                            <div>Opera</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.apple.com/safari/">
                            <img src="assets-admin/images/browser/safari.png" alt="Safari">
                            <div>Safari</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                            <img src="assets-admin/images/browser/ie.png" alt="">
                            <div>IE (11 & above)</div>
                        </a>
                    </li>
                </ul>
            </div>
            <p>Sorry for the inconvenience!</p>
        </div>
    <![endif]-->
    <!-- Warning Section Ends -->
    <!-- Required Js -->
    <script src="{{asset('assets-admin/js/vendor-all.min.js')}}"></script>
    <script src="{{asset('assets-admin/js/plugins/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets-admin/js/plugins/feather.min.js')}}"></script>
    <script src="{{asset('assets-admin/js/pcoded.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
    <script src="{{asset('assets-admin/js/plugins/clipboard.min.js')}}"></script>
    <script src="{{asset('assets-admin/js/uikit.min.js')}}"></script>

<!-- Apex Chart -->
<script src="{{asset('assets-admin/js/plugins/apexcharts.min.js')}}"></script>
{{-- <script>
    $("body").append('<div class="fixed-button active"><a href="https://1.envato.market/VGznk" target="_blank" class="btn btn-md btn-success"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Upgrade To Pro</a> </div>');
</script> --}}

<!-- custom-chart js -->
<script src="{{asset('assets-admin/js/pages/dashboard-sale.js')}}"></script>
</body>
</html>
    