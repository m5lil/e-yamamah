<script src="{{ URL::to('backend/lib/jquery/jquery.min.js') }}"></script>
<script src="{{ URL::to('backend/lib/jquery-ui/ui/widgets/datepicker.js') }}"></script>
<script src="{{ URL::to('backend/lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ URL::to('backend/lib/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
<script src="{{ URL::to('backend/lib/moment/min/moment.min.js') }}"></script>
<script src="{{ URL::to('backend/lib/peity/jquery.peity.min.js') }}"></script>

<script src="{{ URL::to('backend/js/jquery.pjax.js') }}"></script>
<script src="{{ URL::to('backend/js/nprogress.js') }}"></script>
<script src="{{ URL::to('backend/js/loadjs.min.js') }}"></script>
<script src="{{ URL::to('backend/js/loadCSS.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>

<script type="text/javascript">

    var path = "{{ route('backend.autocomplete') }}";
    $('input.typeahead').typeahead({
        source:  function (query, process) {
            return $.get(path, { query: query }, function (data) {
                console.log(data)
                return process(data);
            });
        }
    });

</script>

<div class="second-container">
    @stack('scripts')
</div>

<script src="{{ URL::to('backend/js/bracket.js') }}"></script>
