@extends('merchant.layout')

@push('links')

@endpush

@section('content')

    <div class="form-layout form-layout-1">
        <div class="row mg-b-25">
            {{dd($data)}}
        </div>
    </div>


@endsection

@push('scripts')
    <script>
        loadjs([
{{--        '{{ url('backend/lib/jquery-sparkline/jquery.sparkline.min.js') }}',--}}
        ], function() {

        });
    </script>
@endpush
