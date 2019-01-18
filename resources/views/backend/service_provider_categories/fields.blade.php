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
            {!!  __('status') !!}
        </label>
        {!! Form::select('status', status(),null, array('placeholder' => '','class' => 'form-control','id'=>'status')) !!}
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
        <button class="btn btn-secondary" href="{{route('backend.service_provider_categories.index')}}">@lang('Cancel')</button>
    </div><!-- form-layout-footer -->
</div>