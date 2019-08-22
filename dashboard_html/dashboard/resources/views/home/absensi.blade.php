@extends('layouts.app')

@section('title', 'Minor page')

@section('content')
<!-- cssnya dari box -->
<style>
    #box1{
        width: 15px;
        height: 15px;
        background-color: #D3D3D3;
    }
    #box2{
        width: 15px;
        height: 15px;
        background-color: #1AB394;
    }
    #box3{
        width: 15px;
        height: 15px;
        background-color: #79D2C0;
    }
</style>
  <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center m-t-lg">
                    <h1>
                        <b>ABSENSI PENDIS</b>
                    </h1>
                </div>
<!-- catatan -->
<div id="box1"></div><p>IZIN/SAKIT</p>
<div id="box2"></div><p>MASUK</p>
<div id="box3"></div><p>ALFA</p>
<!-- codingan chartnya -->
                <div class="row" class="center">
                    <div class="col-lg-2">
                        <div id="ct-chart1" class="ct-perfect-fourth"></div>
                        <center><h5>DIT PAI</h5></center>
                    </div>
                    <div class="col-lg-2">
                        <div id="ct-chart2" class="ct-perfect-fourth"></div>
                        <center><h5>DIT GTK</h5></center>
                    </div>
                     <div class="col-lg-2">
                        <div id="ct-chart3" class="ct-perfect-fourth"></div>
                        <center><h5>DIT KSKK</h5></center>
                    </div>
                     <div class="col-lg-2">
                        <div id="ct-chart4" class="ct-perfect-fourth"></div>
                        <center><h5>DIT PONTRA</h5></center>
                    </div>
                     <div class="col-lg-2">
                        <div id="ct-chart5" class="ct-perfect-fourth"></div>
                        <center><h5>DIT PTKI</h5></center>
                    </div>
                     <div class="col-lg-2">
                        <div id="ct-chart6" class="ct-perfect-fourth"></div>
                        <center><h5>SEKRETARIAT</h5></center>
                    </div>
                    <div class="text-justify">
                        <!-- belum sempurna -->
                        <h5><b>TAHUN <span style="padding-left: 48px">:</span> ________ </b></h5>
                        <h5><b>BULAN <span style="padding-left: 49px">:</span> ________ </b></h5>
                        <!-- terlalu banyak p maaf -->
                        <h5><b>STATUS <span style="padding-left: 46px">:</span> - ALL <p><p style="padding-left: 100px"> - PNS <p style="padding-left: 100px"> - NON PNS</p></p></p></b></h5>
                        <h5><b>DIEKTORAT <span style="padding-left: 23px">:</span> ________ </b></h5>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div id="morris-bar-chart"></div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('templates/js/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('templates/js/popper.min.js') }}"></script>
    <script src="{{ asset('templates/js/bootstrap.js') }}"></script>
    <script src="{{ asset('templates/js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>
    <script src="{{ asset('templates/js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>

    <!-- Chartist -->
    <script src="{{ asset('templates/js/plugins/chartist/chartist.min.js') }}"></script>

    <!-- Custom and plugin javascript -->
    <script src="{{ asset('templates/js/inspinia.js') }}"></script>
    <script src="{{ asset('templates/js/plugins/pace/pace.min.js') }}"></script>

    <!-- Morris -->
    <script src="{{ asset('templates/js/plugins/morris/raphael-2.1.0.min.js') }}"></script>
    <script src="{{ asset('templates/js/plugins/morris/morris.js') }}"></script>

    <!-- Morris demo data-->
    <script src="{{ asset('templates/js/demo/morris-demo.js') }}"></script>

    <script>
        $(document).ready(function(){
            // simple pie chart (graph_chartist.html)
            var data = {
                series: [40, 20, 40]
            };

            var sum = function(a, b) { return a + b };

            new Chartist.Pie('#ct-chart1', data, {
                labelInterpolationFnc: function(value) {
                    return Math.round(value / data.series.reduce(sum) * 100) + '%';
                }
            });
            var data = {
                series: [35, 30, 35]
            };

            var sum = function(a, b) { return a + b };

            new Chartist.Pie('#ct-chart2', data, {
                labelInterpolationFnc: function(value) {
                    return Math.round(value / data.series.reduce(sum) * 100) + '%';
                }
            });
                        var data = {
                series: [40, 20, 40]
            };

            var sum = function(a, b) { return a + b };

            new Chartist.Pie('#ct-chart3', data, {
                labelInterpolationFnc: function(value) {
                    return Math.round(value / data.series.reduce(sum) * 100) + '%';
                }
            });
                        var data = {
                series: [25, 50, 25]
            };

            var sum = function(a, b) { return a + b };

            new Chartist.Pie('#ct-chart4', data, {
                labelInterpolationFnc: function(value) {
                    return Math.round(value / data.series.reduce(sum) * 100) + '%';
                }
            });
                        var data = {
                series: [40, 25, 35]
            };

            var sum = function(a, b) { return a + b };

            new Chartist.Pie('#ct-chart5', data, {
                labelInterpolationFnc: function(value) {
                    return Math.round(value / data.series.reduce(sum) * 100) + '%';
                }
            });
            var data = {
                series: [40, 40, 20]
            };

            var sum = function(a, b) { return a + b };

            new Chartist.Pie('#ct-chart6', data, {
                labelInterpolationFnc: function(value) {
                    return Math.round(value / data.series.reduce(sum) * 100) + '%';
                }
            });
    Morris.Bar({
        element: 'morris-bar-chart',
        data: [{ y: 'SUBDIT TK', a: 50, b: 100 },
            { y: 'SUBDIT SD', a: 65, b: 100 },
            { y: 'SUBDIT SMA', a: 60, b: 80 },
            { y: 'SUBDIT PTU', a: 83, b: 95 },
            { y: 'TATA USAHA', a: 81, b: 87 } ],
        xkey: 'y',
        ykeys: ['a', 'b'],
        labels: ['PNS', 'NON PNS'],
        hideHover: 'auto',
        resize: true,
        barColors: ['#79D2C0', '#1AB394'],
    });
        })
    </script>
@endsection