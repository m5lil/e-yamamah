<!-- ########## START: LEFT PANEL ########## -->
<div class="br-logo"><a href=""><span>[</span>@lang(env('APP_NAME'))<span>]</span></a></div>
<div class="br-sideleft sideleft-scrollbar">
    <label class="sidebar-label pd-x-10 mg-t-20 op-3">@lang('Services')</label>
    <ul class="br-sideleft-menu">
        {{--{{dd(service_menu())}}--}}
        @foreach(\App\Models\ServiceProviderCategory::get() as $category)
            <li class="br-menu-item">
                <a data-pjax href="#" class="br-menu-link with-sub">
                    <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
                    <span class="menu-item-label">{{ $category->name }}</span>
                </a><!-- br-menu-link -->
                <ul class="br-menu-sub">
                    @foreach($category->service_providers as $provider)
                        <li class="sub-item"><a data-pjax    href="{{route('merchant.provider', $provider->id)}}" class="sub-link">{{ $provider->name }}</a></li>
                    @endforeach
                </ul>
            </li>
        @endforeach
        @foreach(\App\Models\ServiceProvider::where('service_provider_category_id',0)->get() as $provider)
            <li class="br-menu-item">
                <a data-pjax href="{{route('merchant.provider', $provider->id)}}" class="br-menu-link">
                    <i class="menu-item-icon icon ion-ios-home-outline tx-24"></i>
                    <span class="menu-item-label">{{ $provider->name }}</span>
                </a><!-- br-menu-link -->
            </li>
        @endforeach
    <br>
</div><!-- br-sideleft -->
<!-- ########## END: LEFT PANEL ########## -->
