@extends('layouts.app')

@section('title', 'Program bantuan page')

@section('content')
  <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center m-t-lg">
                    <h1>
                        <b>PROGRAM BANTUAN</b>
                    </h1>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div id="ct-chart1" class="ct-perfect-fourth"></div>
                        <center><h4>PAI</h4></center>
                    </div>
                     <div class="col-lg-4">
                        <div id="ct-chart2" class="ct-perfect-fourth"></div>
                        <center><h4>GTK</h4></center>
                    </div>
                     <div class="col-lg-4">
                        <div id="ct-chart3" class="ct-perfect-fourth"></div>
                        <center><h4>KSKK</h4></center>
                    </div>
                    <div class="col-lg-4">
                        <div id="ct-chart4" class="ct-perfect-fourth"></div>
                        <center><h4>PONTREN</h4></center>
                    </div>
                    <div class="col-lg-4">
                        <div id="ct-chart5" class="ct-perfect-fourth"></div>
                        <center><h4>PTKI</h4></center>
                    </div>
                    <div class="col-lg-4">
                        <div id="ct-chart6" class="ct-perfect-fourth"></div>
                        <center><h4>SEKRETARIAT</h4></center>
                    </div>
                </div>
            </div>
<div> 
<center><h2><b>
DIREKTORAT PONTREN   V
</b></h2></center></div>
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
                series: [100]
            };
            // dataset.setDrawValues(false);

            var sum = function(a, b) { return a + b };

            new Chartist.Pie('#ct-chart1', data, {
                labelInterpolationFnc: function(value) {
                    return Math.round(value / data.series.reduce(sum) * 100) + '%';
                }
            });
            var data = {
                series: [25, 25, 25, 25]
            };

            var sum = function(a, b, c) { return a + b +c };

            new Chartist.Pie('#ct-chart2', data, {
                labelInterpolationFnc: function(value) {
                    return Math.round(value / data.series.reduce(sum) * 100) + '%';
                }
            });
                        var data = {
                series: [100]
            };

            var sum = function(a, b) { return a + b };

            new Chartist.Pie('#ct-chart3', data, {
                labelInterpolationFnc: function(value) {
                    return Math.round(value / data.series.reduce(sum) * 100) + '%';
                }
            });
                        var data = {
                series: [100]
            };

            var sum = function(a, b) { return a + b };

            new Chartist.Pie('#ct-chart4', data, {
                labelInterpolationFnc: function(value) {
                    return Math.round(value / data.series.reduce(sum) * 100) + '%';
                }
            });
                        var data = {
                series: [100]
            };

            var sum = function(a, b) { return a + b };

            new Chartist.Pie('#ct-chart5', data, {
                labelInterpolationFnc: function(value) {
                    return Math.round(value / data.series.reduce(sum) * 100) + '%';
                }
            });
            var data = {
                series: [100]
            };

            var sum = function(a, b) { return a + b };

            new Chartist.Pie('#ct-chart6', data, {
                labelInterpolationFnc: function(value) {
                    return Math.round(value / data.series.reduce(sum) * 100) + '%';
                }
            });
                Morris.Bar({
        element: 'morris-bar-chart',
        data: [{ y: 'SUBDIT PONTREN', a: 70, b: 78, c: 90, d: 35},
            { y: 'SUBDIT PDMA', a: 68, b: 85, c: 65, d: 85 },
            { y: 'SUBDIT MDT', a: 60, b: 55, c: 40, d: 70 },
            { y: 'TATA USAHA', a: 50, b: 70, c: 40, d: 70 } ],
        xkey: 'y',
        ykeys: ['a', 'b', 'c', 'd'],
        labels: ['Lembaga', 'Tenaga Didik', 'Pendidik', 'Peserta Didik'],
        hideHover: 'auto',
        resize: true,
        barColors: ['#ff9900', '#1AB394', '#1eca33', '#1e8aca'],
    });
        })
    </script>
@endsection