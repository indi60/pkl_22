<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INSPINIA - @yield('title') </title>

    <link rel="stylesheet" href="{!! asset('css/vendor.css') !!}" />
    <link rel="stylesheet" href="{!! asset('css/app.css') !!}" />
<!-- chartist chart -->
    <link href="{!! asset('templates/css/plugins/chartist/chartist.min.css') !!}" rel="stylesheet">
<!-- morris chart -->
    <link rel="stylesheet" href="{!! asset('templates/css/plugins/morris/morris-0.4.3.min.css') !!}">
<!-- calendar  -->
    <link href="{!! asset('templates/css/plugins/fullcalendar/fullcalendar.css') !!}" rel="stylesheet">
    <link href="{!! asset('templates/css/plugins/fullcalendar/fullcalendar.print.css') !!}" rel='stylesheet' media='print'>
    
</head>
<body>

  <!-- Wrapper-->
    <div id="wrapper">

        <!-- Navigation -->
        @include('layouts.navigation')

        <!-- Page wraper -->
        <div id="page-wrapper" class="gray-bg">

            <!-- Page wrapper -->
            @include('layouts.topnavbar')

            <!-- Main view  -->
            @yield('content')

            <!-- Footer -->
            @include('layouts.footer')

        </div>
        <!-- End page wrapper-->

    </div>
    <!-- End wrapper-->

<script src="{!! asset('js/app.js') !!}" type="text/javascript"></script>

@section('scripts')
@show

</body>
</html>
