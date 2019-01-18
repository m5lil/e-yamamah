<div class="col-lg-4">
    <div class="form-group">
        <label for="name" class="form-control-label">
            {!!  __('Name') !!}
        </label>
        {!! Form::text('name',null, array('placeholder' =>  __('Name'),'class' => 'form-control','id'=>'name')) !!}
    </div>
</div>

<div class="col-md-12 mg-b-30">
    <div class="row">
        @php $title1 = 'Staff'; @endphp
        @foreach($permissions as $value)
            @if(@$title1 != explode('-', $value->name)[1])
                </div>
                <h6 class="br-section-label">{{ucfirst(explode('-', $value->name)[1])}}</h6>
                <div class="row">
            @endif
            @php $title1 = explode('-', $value->name)[1]; @endphp
            <div class="col-md-2">
                <label class="ckbox">
                    {{ Form::checkbox('permissions[]', $value->id, null, array('class' => 'name')) }}
                    <span>@lang(title_case(str_replace('-',' ',$value->name)))</span>
                </label>
            </div>
        @endforeach
    </div>
</div>
<div class="col-md-12">
    <div class="form-layout-footer">
        <button class="btn btn-info">@lang('Submit Form')</button>
        <button class="btn btn-secondary" href="{{route('backend.roles.index')}}">@lang('Cancel')</button>
    </div><!-- form-layout-footer -->
</div>