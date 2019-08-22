@extends('layouts.app')

@section('title', 'Main page')

@section('content')
    <div class="wrapper wrapper-content animated fadeInRight">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center m-t-lg">
                            <h1>
                                <b>DASHBOARD DIRJEN PENDIS</b>
                            </h1>
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
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="ibox">
                                        <canvas id="barChart" height="140"></canvas>
                                        <h5>Pendidik T Kepondal</h5>
                                        </div>
                                    </div>
                                </div>
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

    <script>
                $(document).ready(function () {
            c3.generate({
                bindto: '#gauge',
                data:{
                    columns: [
                        ['Data', 38.00]
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
                        ['Data', 76.50]
                    ],

                    type: 'gauge'
                },
                color:{
                    pattern: ['#1ab394', '#BABABA']

                }
            });
        });
    </script>
@endsection