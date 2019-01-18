
<div class="col-lg-4">
    <div class="form-group">
        <label for="name" class="form-control-label">
            {!!  __('name') !!}
        </label>
        {!! Form::text('name',null, array('placeholder' => '','class' => 'form-control','id'=>'name')) !!}
    </div>
</div>

<div class="col-lg-4">
    <div class="form-group">
        <label for="name" class="form-control-label">
            {!!  __('store_name') !!}
        </label>
        {!! Form::text('store_name',null, array('placeholder' => '','class' => 'form-control','id'=>'store_name','required'=>'')) !!}
    </div>
</div>

<div class="col-lg-4">
    <div class="form-group">
        <label for="name" class="form-control-label">
            {!!  __('email') !!}
        </label>
        {!! Form::email('email',null, array('placeholder' => '','class' => 'form-control','id'=>'email','required'=>'')) !!}
    </div>
</div>

<div class="col-lg-4">
    <div class="form-group">
        <label for="name" class="form-control-label">
            {!!  __('image') !!}
        </label>
        {!! Form::file('image', array('class' => 'form-control','id'=>'image','accept'=>'image/*')) !!}
    </div>
</div>

<div class="col-lg-4">
    <div class="form-group">
        <label for="name" class="form-control-label">
            {!!  __('phone') !!}
        </label>
        {!! Form::tel('phone',null, array('placeholder' => '01x xxxxxxxx','class' => 'form-control','required'=>'','maxlength'=>'11','pattern'=>'01[0-5]{1}[0-9]{8}')) !!}
    </div>
</div>

<div class="col-lg-4">
    <div class="form-group">
        <label for="name" class="form-control-label">
            {!!  __('bd') !!}
        </label>
        {!! Form::date('bd',null, array('placeholder' => '','class' => 'form-control','id'=>'bd')) !!}
    </div>
</div>

<div class="col-lg-4">
    <div class="form-group">
        <label for="name" class="form-control-label">
            {!!  __('is_reseller') !!}
        </label>
        {!! Form::select('is_reseller' ,[true => __('yamamah.yes'), false => __('yamamah.no')] ,null , array('placeholder' => __('yamamah.none'),'class' => 'form-control','id'=>'is_reseller')) !!}
    </div>
</div>

<div class="col-lg-4">
    <div class="form-group">
        <label for="name" class="form-control-label">
            {!!  __('parent_id') !!}
        </label>
        {!! Form::select('parent_id', ModelList(\App\Models\MerchantContract::class),null, array('placeholder' => '','class' => 'form-control','id'=>'parent_id')) !!}
    </div>
</div>

<div class="col-lg-4">
    <div class="form-group">
        <label for="name" class="form-control-label">
            {!!  __('merchant_category_id') !!}
        </label>
        {!! Form::select('merchant_category_id',ModelList(\App\Models\MerchantCategory::class), null, array('placeholder' => '','class' => 'form-control','id'=>'merchant_category_id')) !!}
    </div>
</div>

<div class="col-lg-4">
    <div class="form-group">
        <label for="name" class="form-control-label">
            {!!  __('nationality_id') !!}
        </label>
        {!! Form::text('nationality_id',null, array('placeholder' => '','class' => 'form-control','id'=>'nationality_id')) !!}
    </div>
</div>

<div class="col-lg-4">
    <div class="form-group">
        <label for="name" class="form-control-label">
            {!!  __('id_image_f') !!}
        </label>
        {!! Form::file('id_image_f', array('class' => 'form-control','id'=>'id_image_f','accept'=>'image/*')) !!}
    </div>
</div>

<div class="col-lg-4">
    <div class="form-group">
        <label for="name" class="form-control-label">
            {!!  __('id_image_b') !!}
        </label>
        {!! Form::file('id_image_b', array('class' => 'form-control','id'=>'id_image_b','accept'=>'image/*')) !!}
    </div>
</div>

<div class="col-lg-4">
    <div class="form-group">
        <label for="name" class="form-control-label">
            {!!  __('area_id') !!}
        </label>
        {!! Form::select('area_id',ModelList(\App\Models\Area::class), null, array('placeholder' => '','class' => 'form-control','id'=>'area_id')) !!}
    </div>
</div>

<div class="col-lg-4">
    <div class="form-group">
        <label for="name" class="form-control-label">
            {!!  __('address') !!}
        </label>
        {!! Form::text('address', null, array('placeholder' => 'Choose','class' => 'form-control','id'=>'areas')) !!}
    </div>
</div>


<div class="col-lg-12">
    <div class="form-layout-footer">
        <button class="btn btn-info">@lang('Submit Form')</button>
        <button class="btn btn-secondary" href="{{route('backend.commissions.index')}}">@lang('Cancel')</button>
    </div><!-- form-layout-footer -->
</div>