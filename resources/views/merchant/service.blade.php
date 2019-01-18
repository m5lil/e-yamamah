@extends('merchant.layout')

@push('links')

@endpush

@section('content')
@endsection

@push('scripts')
    <script>
        loadjs([
{{--        '{{ url('backend/lib/jquery-sparkline/jquery.sparkline.min.js') }}',--}}
        ], function() {

        });
    </script>
@endpush
