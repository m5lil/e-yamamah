@extends('merchant.layout')

@push('links')

@endpush

@section('content')
    @foreach($service->apis as $api)
        {{ $api->name }}
    @endforeach
@endsection

@push('scripts')
    <script>
        loadjs([
{{--        '{{ url('backend/lib/jquery-sparkline/jquery.sparkline.min.js') }}',--}}
        ], function() {

        });
    </script>
@endpush
