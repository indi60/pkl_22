@extends('layouts.app')

@section('title', 'Realisasi page')

@section('content')
<style type="text/css">
    .right {text-align: right;}
</style>
  <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center m-t-lg">
                    <h1>
                        <b><u>REALISASI ANGGARAN</u></b>
                    </h1><br>
                </div>
                <div class="row">
                    <div class="col-lg-2">
                        <div id="ct-chart1"></div>
                        <center><h4>DIT PTKI</h4></center>
                    </div>
                    <div class="col-lg-2">
                        <div id="ct-chart2"></div>
                        <center><h4>DIT KSKK</h4></center>
                    </div>
                    <div class="col-lg-2">
                        <div id="ct-chart3"></div>
                        <center><h4>DIT GTK</h4></center>
                    </div>
                    <div class="col-lg-2">
                        <div id="ct-chart4"></div>
                        <center><h4>DIT PD PONTREN</h4></center>
                    </div>
                    <div class="col-lg-2">
                        <div id="ct-chart5"></div>
                        <center><h4>DIT PAI</h4></center>
                    </div>
                    <div class="col-lg-2">
                        <div id="ct-chart6"></div>
                        <center><h4>SEKRETARIAT</h4></center>
                    </div>
                </div><br>
            <div class="row">
                <center><div class="col-lg-6"><h3>Pilih Direktorat</h3>
                    <select name="Pilih Direktorat">
                        <option value="A">Admin</option>
                        <option value="G">Guru</option>
                    </select>
                </div>
                <div class="col-lg-6"><h3>Pilih Subdit</h3>
                <select name="Pilih Subdit">
                    <option value="A">Admin</option>
                    <option value="G">Guru</option>
                </select>
                </div></center>
            </div>
            </div><br>
                <h4>Direktorat : Pendidikan Agama Islam</h4>
                <h4>Sub DIrektorat : Subit PTU</h4>
<h4 class="right">-Satuan Dalam Juta</h4>
        </div>
        <div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul Kegiatan</th>
                        <th>Waktu & Lokasi</th>
                        <th>Pagu</th>
                        <th>Realisasi</th>
                        <th>Pengembalian</th>
                        <th>Detail</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>Pengembalian Life Skill</td>
                        <td>Swiss Beli Hotel Di Bekasi <p>17-19 April 2019</p></td>
                        <td>13.000</td>
                        <td>1745</td>
                        <td>30</td>
                        <td>#</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Beasiswa 80 Ribu Doktor</td>
                        <td>Horison Jakarta <p>17-20 April 2019</p></td>
                        <td>14.000</td>
                        <td>57.100</td>
                        <td>20</td>
                        <td>#</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Peningkatan Kompetensi</td>
                        <td>Bandung <p>21-24 April 2019</p></td>
                        <td>7.001</td>
                        <td>8.000</td>
                        <td>-14</td>
                        <td>#</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td rowspan="2">Total</td>
                        <td>80.000</td>
                        <td>79.000</td>
                        <td>40</td>
                        <td></td>
                    </tr>
                    </tbody>
            </table>
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
        $(document).ready(function () {
            var data = {
                series: [25, 75]
            };
            // dataset.setDrawValues(false);

            var sum = function(a, b) { return a + b };

            new Chartist.Pie('#ct-chart1', data, {
                labelInterpolationFnc: function(value) {
                    return Math.round(value / data.series.reduce(sum) * 100) + '%';
                }
            });
            var data = {
                series: [40, 60]
            };
            // dataset.setDrawValues(false);

            var sum = function(a, b) { return a + b };

            new Chartist.Pie('#ct-chart2', data, {
                labelInterpolationFnc: function(value) {
                    return Math.round(value / data.series.reduce(sum) * 100) + '%';
                }
            });
            var data = {
                series: [40, 60]
            };
            // dataset.setDrawValues(false);

            var sum = function(a, b) { return a + b };

            new Chartist.Pie('#ct-chart3', data, {
                labelInterpolationFnc: function(value) {
                    return Math.round(value / data.series.reduce(sum) * 100) + '%';
                }
            });
            var data = {
                series: [60, 40]
            };
            // dataset.setDrawValues(false);

            var sum = function(a, b) { return a + b };

            new Chartist.Pie('#ct-chart4', data, {
                labelInterpolationFnc: function(value) {
                    return Math.round(value / data.series.reduce(sum) * 100) + '%';
                }
            });
            var data = {
                series: [20, 80]
            };
            // dataset.setDrawValues(false);

            var sum = function(a, b) { return a + b };

            new Chartist.Pie('#ct-chart5', data, {
                labelInterpolationFnc: function(value) {
                    return Math.round(value / data.series.reduce(sum) * 100) + '%';
                }
            });
            var data = {
                series: [60, 40]
            };
            // dataset.setDrawValues(false);

            var sum = function(a, b) { return a + b };

            new Chartist.Pie('#ct-chart6', data, {
                labelInterpolationFnc: function(value) {
                    return Math.round(value / data.series.reduce(sum) * 100) + '%';
                }
            });
        });
    </script>
@endsection