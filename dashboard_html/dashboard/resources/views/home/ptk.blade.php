@extends('layouts.app')

@section('title', 'Pendidik & Tenaga Pendidik')

@section('content')
  <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center m-t-lg">
                    <h1>
                        <b>PENDIDIK & TENAGA KEPENDIDIKAN</b>
                    </h1>
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <div id="ct-chart1" class="ct-perfect-fourth"></div>
                        <center><h4>TOTAL PAI</h4></center>
                    </div>
                     <div class="col-lg-3">
                        <div id="ct-chart2" class="ct-perfect-fourth"></div>
                        <center><h4>TOTAL GTK</h4></center>
                    </div>
                     <div class="col-lg-3">
                        <div id="ct-chart3" class="ct-perfect-fourth"></div>
                        <center><h4>TOTAL PTKI</h4></center>
                    </div>
                    <div class="col-lg-3">
                        <div id="ct-chart4" class="ct-perfect-fourth"></div>
                        <center><h4>TOTAL PESANTREN</h4></center>
                    </div>
                </div>
                <center><h3><b>DIREKTORAT</b></h3></center>
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
        })
    </script>
@endsection