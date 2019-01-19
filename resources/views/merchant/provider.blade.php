@extends('merchant.layout')

@push('links')

@endpush

@section('content')

    <h6 class="br-section-label">{{ $provider->name }}</h6>

    <div class="row">
        <div class="card-columns column-count-4 mg-t-20">
            @foreach($provider->services as $service)
                <div class="card pd-25 bd-0 shadow-base">
                    <img src="{{url('backend/services/')}}" class="img-fluid" alt="">
                    <a href="{{route('merchant.service', $service->id)}}" class="btn btn-success btn-oblong pd-x-25 pd-y-12 tx-11 tx-mont tx-uppercase tx-13-force tx-bold d-block">{{$service->name}}</a>
                    <hr>
                    <div>
                        @foreach($service->apis as $api)
                            <a href="{{ route('merchant.api.show', $api->id)}}" class="btn btn-primary">{{$api->name}}</a>
                        @endforeach
                    </div>
                </div>
            @endforeach
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
