@extends('layouts.app')

@section('title', 'Home page')

@section('content')
    <div class="wrapper wrapper-content animated fadeInRight">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center m-t-lg">
                            <h1>
                                <b><u>DASHBOARD DIRJEN PENDIS</u></b>
                            </h1><br>
                    <!-- Charts Realisasi Anggaran -->
                            <div class="row">
                                <div class="col-lg-3">
                                    <div id="gauge"></div>
                                    <h5>Realisasi Anggaran</h5>
                                </div>
                    <!-- Charts Absensi -->
                                <div class="col-lg-3">
                                    <div id="gaugechart"></div>
                                    <h5>Absensi</h5>
                                </div>
                                </div>
<!--                                 <div class="row">
                                    <div class="col-lg-3">
                                        <div id="morris-bar-chart"></div>
                                        <h5>Pendidik T Kepondal</h5>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection
@section('scripts')
    <!-- Mainly scripts -->
    <script src="{{ asset('templates/js/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('templates/js/popper.min.js') }}"></script>
    <script src="{{ asset('templates/js/bootstrap.js') }}"></script>
    <script src="{{ asset('templates/js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>
    <script src="{{ asset('templates/js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>

    <!-- Custom and plugin javascript -->
    <script src="{{ asset('templates/js/inspinia.js') }}"></script>
    <script src="{{ asset('templates/js/plugins/pace/pace.min.js') }}"></script>

    <!-- d3 and c3 charts -->
    <script src="{{ asset('templates/js/plugins/d3/d3.min.js') }}"></script>
    <script src="{{ asset('templates/js/plugins/c3/c3.min.js') }}"></script>
        <!-- ChartJS-->
    <script src="{{ asset('templates/js/plugins/chartJs/Chart.min.js') }}"></script>
    <script src="{{ asset('templates/js/demo/chartjs-demo.js') }}"></script>
        <!-- Morris -->
    <script src="{{ asset('templates/js/plugins/morris/raphael-2.1.0.min.js') }}"></script>
    <script src="{{ asset('templates/js/plugins/morris/morris.js') }}"></script>
        <!-- Morris demo data-->
    <script src="{{ asset('templates/js/demo/morris-demo.js') }}"></script>

    <script>
                $(document).ready(function () {
            c3.generate({
                bindto: '#gauge',
                data:{
                    columns: [
                        ['Realisasi', 38.00]
                    ],

                    type: 'gauge'
                },
                color:{
                    pattern: ['#1ab394', '#BABABA']

                }
            });
            c3.generate({
                bindto: '#gaugechart',
                data:{
                    columns: [
                        ['Absensi', 76.50]
                    ],

                    type: 'gauge'
                },
                color:{
                    pattern: ['#1ab394', '#BABABA']

                }
            });
    // Morris.Bar({
    //     element: 'morris-bar-chart',
    //     data: [{ y: 'PTKI', a: 50, b: 100 },
    //         { y: 'PON', a: 65, b: 100 },
    //         { y: 'GTK', a: 60, b: 80 },
    //         { y: 'KSKK', a: 83, b: 95 } ],
    //     xkey: 'y',
    //     ykeys: ['a', 'b'],
    //     labels: ['PNS', 'NON PNS'],
    //     hideHover: 'auto',
    //     resize: true,
    //     barColors: ['#79D2C0', '#1AB394'],
    // });
        });
    </script>
@endsection