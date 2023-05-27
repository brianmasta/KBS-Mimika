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
                <div class="card">
                    <div class="card-header">
                        <h5>Presentasi Jumlah KK Masuk</h5>
                    </div>
                    <div class="card-body">
                        <div id="bar-chart-kk-masuk"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Persentasi KK Per-Rayon</h5>
                    </div>
                    <div class="card-body">
                        <div id="pie-chart-rayon" style="width:100%"></div>
                    </div>
                </div>
            </div>

            <!-- support-section end -->
        </div>
        <!-- [ Main Content ] end -->
</div>
<!-- Required Js -->
    <script src="{{asset('assets-admin/js/vendor-all.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>

    <!-- Apex Chart -->
<script src="{{asset('assets-admin/js/plugins/apexcharts.min.js')}}"></script>
<script src="assets/js/plugins/apexcharts.min.js"></script>

<!-- custom-chart js -->
<script src="{{asset('assets-admin/js/pages/dashboard-sale.js')}}"></script>
<script>
    $(document).ready(function() {
    setTimeout(function() {
                $(function() {
                var options = {
                    chart: {
                        height: 320,
                        type: 'donut',
                    },
                    series: [{{ Js::from($total_rayon1) }}, {{ Js::from($total_rayon2) }}, {{ Js::from($total_rayon3) }}, {{ Js::from($total_rayon4) }}, {{ Js::from($total_rayon5) }}],
                    labels: ['Rayon 1', 'Rayon 2', 'Rayon 3', 'Rayon 4', 'Rayon 5'],
                    colors: ["#7267EF", "#0e9e4a", "#3ec9d6", "#ffa21d", "#EA4D4D"],
                    legend: {
                        show: true,
                        position: 'bottom',
                    },
                    plotOptions: {
                        pie: {
                            donut: {
                                labels: {
                                    show: true,
                                    name: {
                                        show: true
                                    },
                                    value: {
                                        show: true
                                    }
                                }
                            }
                        }
                    },
                    dataLabels: {
                        enabled: true,
                        dropShadow: {
                            enabled: false,
                        }
                    },
                    responsive: [{
                        breakpoint: 480,
                        options: {
                            legend: {
                                position: 'bottom'
                            }
                        }
                    }]
                }
                var chart = new ApexCharts(
                    document.querySelector("#pie-chart-rayon"),
                    options
                );
                chart.render();
            });

            // Data KK Masuk
            $(function() {
            var options = {
                chart: {
                    height: 350,
                    type: 'bar',
                },
                plotOptions: {
                    bar: {
                        horizontal: false,
                        columnWidth: '70%',
                        endingShape: 'rounded'
                    },
                },
                dataLabels: {
                    enabled: true,
                },
                colors: ["#0e9e4a", "#7267EF", "#EA4D4D"],
                stroke: {
                    show: true,
                    width: 2,
                    colors: ['transparent']
                },
                series: [{
                    name: 'Total KK',
                    data: [{{ Js::from($total_rayon1) }}, {{ Js::from($total_rayon2) }}, {{ Js::from($total_rayon3) }}, {{ Js::from($total_rayon4) }}, {{ Js::from($total_rayon5) }}]
                }, {
                    name: 'Total KK Masuk',
                    data: [{{ Js::from($Rayon1kk) }}, {{ Js::from($Rayon2kk) }}, {{ Js::from($Rayon3kk) }}, {{ Js::from($Rayon4kk) }}, {{ Js::from($Rayon5kk) }}]
                }],
                xaxis: {
                    categories: ['Rayon 1', 'Rayon 2', 'Rayon 3', 'Rayon 4', 'Rayon 5'],
                },
                yaxis: {
                    title: {
                        text: 'Jumlah Keluarga'
                    }
                },
                fill: {
                    opacity: 1

                },
                tooltip: {
                    y: {
                        formatter: function(val) {
                            return val + " Keluarga"
                        }
                    }
                }
            }
            var chart = new ApexCharts(
                document.querySelector("#bar-chart-kk-masuk"),
                options
            );
            chart.render();
        });
        }, 700);
    });
</script>
@endsection
