@extends('merchant.layout')

@push('links')

@endpush

@section('content')
<div class="br-section-wrapper">
    <form action="{{ route("merchant.api.pay") }}" method="post">
        @csrf
        <input type="hidden" name="api_id" value="{{ $api->id }}">
        @foreach($api->parameters as $parameter)
            @if($parameter->visible)
                <div class="form-group">
                    <label>{{ $parameter->name }}</label>
                    <input type="text" class="form-control" name="{{ $parameter->default_value }}" value="{{ $parameter->default_value }}" placeholder="{{ $parameter->name }}">
                </div>
            @else
                <div class="form-group">
                    <input type="hidden" value="{{ $parameter->default_value }}">
                </div>
            @endif
        @endforeach
        <div class="form-group">
            <button type="submit" class="btn btn-primary mb-2">{{ __('merchant/main.pay') }}</button>
        </div>
    </form>
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
