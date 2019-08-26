@extends('layouts.app')

@section('title', 'Agenda page')

@section('content')
  <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center m-t-lg">
                    <h1>
                        <b><u>AGENDA PENDIS</u></b>
                    </h1><br>
                    <div>
                        <div id="calendar"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<!-- Mainly scripts -->
<script src="{{ asset('templates/js/plugins/fullcalendar/moment.min.js') }}"></script>
<script src="{{ asset('templates/js/jquery-3.1.1.min.js') }}"></script>
<script src="{{ asset('templates/js/popper.min.js') }}"></script>
<script src="{{ asset('templates/js/bootstrap.js') }}"></script>
<script src="{{ asset('templates/js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>
<script src="{{ asset('templates/js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
<!-- Custom and plugin javascript -->
<script src="{{ asset('templates/js/inspinia.js') }}"></script>
<script src="{{ asset('templates/js/plugins/pace/pace.min.js') }}"></script>

<!-- jQuery UI  -->
<script src="{{ asset('templates/js/plugins/jquery-ui/jquery-ui.min.js') }}"></script>

<!-- iCheck -->
<script src="{{ asset('templates/js/plugins/iCheck/icheck.min.js') }}"></script>

<!-- Full Calendar -->
<script src="{{ asset('templates/js/plugins/fullcalendar/fullcalendar.min.js') }}"></script>

<script>

    $(document).ready(function() {

            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green'
            });

        /* initialize the external events
         -----------------------------------------------------------------*/


        $('#external-events div.external-event').each(function() {

            // store data so the calendar knows to render an event upon drop
            $(this).data('event', {
                title: $.trim($(this).text()), // use the element's text as the event title
                stick: true // maintain when user navigates (see docs on the renderEvent method)
            });

            // make the event draggable using jQuery UI
            $(this).draggable({
                zIndex: 1111999,
                revert: true,      // will cause the event to go back to its
                revertDuration: 0  //  original position after the drag
            });

        });


        /* initialize the calendar
         -----------------------------------------------------------------*/
        var date = new Date();
        var d = date.getDate();
        var m = date.getMonth();
        var y = date.getFullYear();

        $('#calendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'prev,next today',
            },
            editable: true,
            droppable: true, // this allows things to be dropped onto the calendar
            drop: function() {
                // is the "remove after drop" checkbox checked?
                if ($('#drop-remove').is(':checked')) {
                    // if so, remove the element from the "Draggable Events" list
                    $(this).remove();
                }
            },
        });


    });

</script>
@endsection
