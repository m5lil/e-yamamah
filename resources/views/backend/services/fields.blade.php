<div class="col-lg-4">
    <div class="form-group">
        <label for="name" class="form-control-label">
            {!!  __('name ar') !!}
        </label>
        {!! Form::text('name[ar]',null, array('placeholder' => '','class' => 'form-control','id'=>'name')) !!}
    </div>
</div>

<div class="col-lg-4">
    <div class="form-group">
        <label for="name" class="form-control-label">
            {!!  __('name en') !!}
        </label>
        {!! Form::text('name[en]',null, array('placeholder' => '','class' => 'form-control','id'=>'name')) !!}
    </div>
</div>

<div class="col-lg-4">
    <div class="form-group">
        <label for="name" class="form-control-label">
            {!!  __('sdk_id') !!}
        </label>
        {!! Form::select('sdk_id', ModelList(\App\Models\SDK::class),null, array('placeholder' =>  __('Select'),'class' => 'form-control','id'=>'sdk_id')) !!}
    </div>
</div>

<div class="col-lg-4">
    <div class="form-group">
        <label for="name" class="form-control-label">
            {!!  __('service_provider_id') !!}
        </label>
        {!! Form::select('service_provider_id', ModelList(\App\Models\ServiceProvider::class), null,array('placeholder' => __('Select'),'class' => 'form-control','id'=>'service_provider_id')) !!}
    </div>
</div>

<div class="col-lg-4">
    <div class="form-group">
        <label for="name" class="form-control-label">
            {!!  __('commission_id') !!}
        </label>
        {!! Form::select('commission_id', ModelList(\App\Models\Commission::class),null, array('placeholder' =>  __('Select'),'class' => 'form-control','id'=>'commission_id')) !!}
    </div>
</div>

<div class="col-lg-4">
    <div class="form-group">
        <label for="name" class="form-control-label">
            {!!  __('output') !!}
        </label>
        {!! Form::text('output',null, array('placeholder' => '','class' => 'form-control','id'=>'output')) !!}
    </div>
</div>

<div class="col-lg-4">
    <div class="form-group">
        <label for="name" class="form-control-label">
            {!!  __('request_amount') !!}
        </label>
        {!! Form::text('request_amount',null, array('placeholder' => '','class' => 'form-control','id'=>'request_amount')) !!}
    </div>
</div>

<div class="col-lg-4">
    <div class="form-group">
        <label for="name" class="form-control-label">
            {!!  __('status') !!}
        </label>
        {!! Form::text('status',null, array('placeholder' => '','class' => 'form-control','id'=>'status')) !!}
    </div>
</div>

<div class="col-lg-4">
    <div class="form-group">
        <label for="name" class="form-control-label">
            {!!  __('icon') !!}
        </label>
        {!! Form::text('icon',null, array('placeholder' => '','class' => 'form-control','id'=>'icon')) !!}
    </div>
</div>

<div class="col-lg-4">
    <div class="form-group">
        <label for="name" class="form-control-label">
            {!!  __('order') !!}
        </label>
        {!! Form::text('order',null, array('placeholder' => '','class' => 'form-control','id'=>'order')) !!}
    </div>
</div>


<div class="col-lg-12">
    <div class="form-layout-footer">
        <button class="btn btn-info">@lang('Submit Form')</button>
        <button class="btn btn-secondary" href="{{route('backend.services.index')}}">@lang('Cancel')</button>
    </div><!-- form-layout-footer -->
</div>