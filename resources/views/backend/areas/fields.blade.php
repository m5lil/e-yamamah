<div class="col-lg-4">
    <div class="form-group">
        <label for="name" class="form-control-label">
            {!!  __('Name') !!}
        </label>
        {!! Form::text('name',null, array('placeholder' =>  __('Name'),'class' => 'form-control','id'=>'name')) !!}
    </div>
</div>
<div class="col-lg-4">
    <div class="form-group">
        <label for="name" class="form-control-label">
            {!!  __('Area Type') !!}
        </label>
        {!! Form::select('area_type',['0'=>'دولة','1'=>'محافظة','2'=>'مدينة','3'=>'منطقة','4'=>'شارع'], null,array('placeholder' =>  __('Area type'),'class' => 'form-control','id'=>'area_type')) !!}
    </div>
</div>
<div class="col-lg-4">
    <div class="form-group">
        <label for="name" class="form-control-label">
            {!!  __('Parent') !!}
        </label>
        {!! Form::select('parent_id', ModelList(\App\Models\Area::class),null, array('placeholder' =>  __('Select'),'class' => 'form-control','id'=>'parent_id')) !!}
    </div>
</div>


<div class="col-lg-12">
    <div class="form-layout-footer">
        <button class="btn btn-info">@lang('Submit Form')</button>
        <button class="btn btn-secondary" href="{{route('backend.areas.index')}}">@lang('Cancel')</button>
    </div><!-- form-layout-footer -->
</div>