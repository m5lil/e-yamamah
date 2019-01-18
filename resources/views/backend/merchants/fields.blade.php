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
            {!!  __('email') !!}
        </label>
        {!! Form::email('email',null, array('placeholder' => '','class' => 'form-control','id'=>'email')) !!}
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
            {!!  __('status') !!}
        </label>
        {!! Form::select('status' ,status() ,null , array('placeholder' => __('Choose'),'class' => 'form-control','id'=>'status')) !!}
    </div>
</div>

<div class="col-lg-4">
    <div class="form-group">
        <label for="name" class="form-control-label">
            {!!  __('merchant_contract_id') !!}
        </label>
        {!! Form::select('merchant_contract_id',ModelList(\App\Models\MerchantContract::class) ,null, array('placeholder' => '','class' => 'form-control','id'=>'merchant_contract_id')) !!}
    </div>
</div>

<div class="col-lg-4">
    <div class="form-group">
        <label for="name" class="form-control-label">
            {!!  __('wallet_id') !!}
        </label>
        {!! Form::select('wallet_id',ModelList(\App\Models\Wallet::class, 'store_name'), null, array('placeholder' => '','class' => 'form-control','id'=>'wallet_id')) !!}
    </div>
</div>


<div class="col-lg-12">
    <div class="form-layout-footer">
        <button class="btn btn-info">@lang('Submit Form')</button>
        <button class="btn btn-secondary" href="{{route('backend.merchants.index')}}">@lang('Cancel')</button>
    </div><!-- form-layout-footer -->
</div>