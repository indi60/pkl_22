@extends('layouts.app')

@section('title', 'Reolisasi page')

@section('content')
  <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center m-t-lg">
                    <h1>
                        <b>REOLISASI ANGGARAN</b>
                    </h1>
                </div>
                <div class="row">
                    <div class="col-lg-2">
                        <div id="pie"></div>
                        <center><h5>DIT PTKI</h5></center>
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

    <script>
        $(document).ready(function () {
            c3.generate({
                bindto: '#pie',
                data:{
                    columns: [
                        ['data01', 75],
                        ['data02', 25]
                    ],
                    colors:{
                        data1: '#1ab394',
                        data2: '#BABABA'
                    },
                    type : 'pie'
                }
            });
        });
    </script>
@endsection