@extends('merchant.layout')

@push('links')

@endpush

@section('content')

    {{Form::open(['route'=>['merchant.payment',$service->id],'method'=>'POST' ])}}
    <div class="form-layout form-layout-1">
        <div class="row mg-b-25">
            @if(isset($service_api_pars))
                @foreach($service_api_pars as $para)
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="name" class="form-control-label">
                                    {{ $para->name }}
                                </label>
                                {!! Form::text($para->external_api_id,null, array('placeholder' =>  $para->name,'class' => 'form-control','data-'.$para->type,'pattern'=>$para->pattern,'id'=>'input', 'required' => $para->required ? true : false)) !!}
                            </div>
                        </div>
                @endforeach
                    <div class="col-lg-4">
                            <button type="submit" class="form-control btn btn-primary tx-12 tx-uppercase pd-y-12 pd-x-25 mg-t-30 tx-mont tx-medium" {{--data-toggle="modal"--}} data-target="#modaldemo2">@lang('Pay')</button>
                    </div>
            @endif
        </div>
        {{isset($respond) ? $respond : ''}}
    </div>

    <div id="modaldemo2" class="modal fade">
        <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
            <div class="modal-content bd-0 tx-14">
                <div class="modal-header pd-x-20">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body pd-20 tx-right">
                    <p class="mg-b-5">@lang('Are you sure')</p>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="submit" class="btn btn-primary tx-12 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium mg-r-0 mg-l-5">@lang('Yes')</button>
                    <button type="button" class="btn btn-secondary tx-12 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium mg-l-0 mg-r-5" data-dismiss="modal">@lang('No')</button>
                </div>
            </div>
        </div><!-- modal-dialog -->
    </div><!-- modal -->



    {{Form::close()}}

@endsection

@push('scripts')
    <script>
        // $(document).ready(function() {
        //     $('#input[data-n]').attr('pattern', '[0-2]{3}');
        // });
        loadjs([
        '{{ url('js/jquery.numpad.js') }}',
        ], function(e) {
            // $('#input[data-n]').numpad().setAttribute('pattern', '[0-2]*');
        });
    </script>
@endpush
