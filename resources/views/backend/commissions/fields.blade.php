<div class="col-lg-6">
    <div class="form-group">
        <label for="name" class="form-control-label">
            {!!  __('Name') !!}
        </label>
        {!! Form::text('name',null, array('placeholder' =>  __('Name'),'class' => 'form-control','id'=>'name')) !!}
    </div>
</div>
<div class="col-lg-6">
    <div class="form-group">
        <label for="name" class="form-control-label">
            {!!  __('Commission Multi') !!}
        </label>
        {!! Form::select('commission_multi', choose(),null, array('placeholder' =>  __('Choose'),'class' => 'form-control','id'=>'name')) !!}
    </div>
</div>



@foreach(\App\Models\MerchantCategory::all() as $value)
<div class="col-lg-4">
    <div class="form-group">
        <label for="name" class="form-control-label">
            {!!  $value->name !!}
        </label>
        {!! Form::text('condition_data[$value->name]',null, array('placeholder' =>  __('00.00'),'class' => 'form-control','id'=>'name')) !!}
        {{--TODO Percent Or no--}}
    </div>
</div>
@endforeach

<div class="col-lg-6">
    <div class="form-group">
        <label for="name" class="form-control-label">
            {!!  __('Commission Reseller') !!}
        </label>
        {!! Form::text('commission_multi[reseller]', null, array('placeholder' =>  __('Commission Reseller'),'class' => 'form-control','id'=>'name')) !!}
    </div>
</div>

<div class="col-lg-6">
    <div class="form-group">
        <label for="name" class="form-control-label">
            {!!  __('System') !!}
        </label>
        {!! Form::text('commission_multi[system]',null, array('placeholder' =>  __('System'),'class' => 'form-control','id'=>'name')) !!}
    </div>
</div>



<div class="col-lg-12">
    <div class="form-layout-footer">
        <button class="btn btn-info">@lang('Submit Form')</button>
        <button class="btn btn-secondary" href="{{route('backend.merchant_contracts.index')}}">@lang('Cancel')</button>
    </div><!-- form-layout-footer -->
</div>