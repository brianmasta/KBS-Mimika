<!DOCTYPE html>
<html lang="en">
<head>
    <title>KBS | @yield('title')</title>
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

<body class="">
	<!-- [ Pre-loader ] start -->
	<div class="loader-bg">
		<div class="loader-track">
			<div class="loader-fill"></div>
		</div>
	</div>
	<!-- [ Pre-loader ] End -->
	<!-- [ Mobile header ] start -->
	<div class="pc-mob-header pc-header">
		<div class="pcm-logo">
			<img src="{{asset('assets-admin/images/logo.svg')}}" alt="" class="logo logo-lg">
		</div>
		<div class="pcm-toolbar">
			<a href="#!" class="pc-head-link" id="mobile-collapse">
				<div class="hamburger hamburger--arrowturn">
					<div class="hamburger-box">
						<div class="hamburger-inner"></div>
					</div>
				</div>
				<!-- <i data-feather="menu"></i> -->
			</a>
			<a href="#!" class="pc-head-link" id="headerdrp-collapse">
				<i data-feather="align-right"></i>
			</a>
			<a href="#!" class="pc-head-link" id="header-collapse">
				<i data-feather="more-vertical"></i>
			</a>
		</div>
	</div>
	<!-- [ Mobile header ] End -->

	<!-- [ navigation menu ] start -->
	<nav class="pc-sidebar ">
		<div class="navbar-wrapper">
			<div class="m-header">
				<a href="" class="b-brand">
					<!-- ========   change your logo hear   ============ -->
					{{-- <img src="assets-admin/images/logo.svg" alt="" class="logo logo-lg">
					<img src="assets-admin/images/logo-sm.svg" alt="" class="logo logo-sm"> --}}
                    <h1  style="color:white;">KBS Mimika</h1>
				</a>
			</div>
			<div class="navbar-content">
				<ul class="pc-navbar">
					<li class="pc-item pc-caption">
						<label>Navigation</label>
					</li>
					<li class="pc-item pc-hasmenu">
						<a href="#!" class="pc-link "><span class="pc-micon"><i data-feather="box"></i></span><span class="pc-mtext">Data Statistik</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
						<ul class="pc-submenu">
							<li class="pc-item"><a class="pc-link" href="/data-kk">Keluarga</a></li>
						</ul>
					</li>
                    <li class="pc-item pc-hasmenu">
						<a href="#!" class="pc-link "><span class="pc-micon"><i data-feather="box"></i></span><span class="pc-mtext">Pengumuman</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
						<ul class="pc-submenu">
							<li class="pc-item"><a class="pc-link" href="/data-ibadah">Jadwal Ibadah</a></li>
							<li class="pc-item"><a class="pc-link" href="/data-galeri">Galeri</a></li>
						</ul>
					</li>
					<li class="pc-item pc-hasmenu">
						<a href="#!" class="pc-link "><span class="pc-micon"><i data-feather="box"></i></span><span class="pc-mtext">Surat</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
						<ul class="pc-submenu">
							<li class="pc-item"><a class="pc-link" href="/data-tamplate-surat">Tamplate Surat</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- [ navigation menu ] end -->
	<!-- [ Header ] start -->
	<header class="pc-header ">
		<div class="header-wrapper">
			<div class="mr-auto pc-mob-drp">
			</div>
			<div class="ml-auto">
				<ul class="list-unstyled">
					<li class="dropdown pc-h-item">
						<a class="pc-head-link dropdown-toggle arrow-none mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
							<i data-feather="search"></i>
						</a>
						<div class="dropdown-menu dropdown-menu-right pc-h-dropdown drp-search">
							<form class="px-3">
								<div class="form-group mb-0 d-flex align-items-center">
									<i data-feather="search"></i>
									<input type="search" class="form-control border-0 shadow-none" placeholder="Search here. . .">
								</div>
							</form>
						</div>
					</li>
					<li class="dropdown pc-h-item">
						<a class="pc-head-link dropdown-toggle arrow-none mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
							<img src="{{asset('assets-admin/images/user/kbs.png')}}" alt="user-image" class="user-avtar">
							<span>
								<span class="user-name">{{Auth::user()->name}}</span>
								<span class="user-desc">{{Auth::user()->role->name}}</span>
							</span>
						</a>
						<div class="dropdown-menu dropdown-menu-right pc-h-dropdown">
							<div class=" dropdown-header">
								<h6 class="text-overflow m-0">Welcome !</h6>
							</div>
							<a href="#!" class="dropdown-item">
								<i data-feather="user"></i>
								<span>My Account</span>
							</a>
							<a href="#!" class="dropdown-item">
								<i data-feather="settings"></i>
								<span>Settings</span>
							</a>
							<a href="#!" class="dropdown-item">
								<i data-feather="life-buoy"></i>
								<span>Support</span>
							</a>
							<a href="#!" class="dropdown-item">
								<i data-feather="lock"></i>
								<span>Lock Screen</span>
							</a>
							<a href="/logout" class="dropdown-item">
								<i data-feather="power"></i>
								<span>Logout</span>
							</a>
						</div>
					</li>
				</ul>
			</div>

		</div>
	</header>
	<!-- [ Header ] end -->

<!-- [ Main Content ] start -->
<div class="pc-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Dashboard</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                            <li class="breadcrumb-item">@yield('title')</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        @yield('content')
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