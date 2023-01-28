@extends('admin.layouts.MainLayout')

@section('title', 'Home')

@section('content')
        
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- support-section start -->
            <div class="col-xl-6 col-md-12">
                <div class="card flat-card">
                    <div class="row-table">
                        <div class="col-sm-6 card-body br">
                            <div class="row">
                                <div class="col-sm-4">
                                    <i class="icon feather icon-users text-primary mb-1 d-block"></i>
                                </div>
                                <div class="col-sm-8 text-md-center">
                                    <h5>{{ $total_rayon1 }}</h5>
                                    <span>RAYON 1</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 d-none d-md-table-cell d-lg-table-cell d-xl-table-cell card-body br">
                            <div class="row">
                                <div class="col-sm-4">
                                    <i class="icon feather icon-users text-primary mb-1 d-block"></i>
                                </div>
                                <div class="col-sm-8 text-md-center">
                                    <h5>{{ $total_rayon2 }}</h5>
                                    <span>RAYON 2</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 card-body">
                            <div class="row">
                                <div class="col-sm-4">
                                    <i class="icon feather icon-users text-primary mb-1 d-block"></i>
                                </div>
                                <div class="col-sm-8 text-md-center">
                                    <h5>{{ $total_rayon3 }}</h5>
                                    <span>RAYON 3</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row-table">
                        <div class="col-sm-6 card-body br">
                            <div class="row">
                                <div class="col-sm-4">
                                    <i class="icon feather icon-users text-primary mb-1 d-block"></i>
                                </div>
                                <div class="col-sm-8 text-md-center">
                                    <h5>{{ $total_rayon4 }}</h5>
                                    <span>RAYON 4</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 d-none d-md-table-cell d-lg-table-cell d-xl-table-cell card-body br">
                            <div class="row">
                                <div class="col-sm-4">
                                    <i class="icon feather icon-users text-primary mb-1 d-block"></i>
                                </div>
                                <div class="col-sm-8 text-md-center">
                                    <h5>{{ $total_rayon5 }}</h5>
                                    <span>RAYON 5</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 card-body">
                            <div class="row">
                                <div class="col-sm-4">
                                    <i class="icon feather icon-file text-primary mb-1 d-blockz"></i>
                                </div>
                                <div class="col-sm-8 text-md-center">
                                    <h5>{{ $total_rayon }}</h5>
                                    <span>TOTAL</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- support-section end -->
        </div>
        <!-- [ Main Content ] end -->
</div>
@endsection
