<!-- ########## START: LEFT PANEL ########## -->
<div class="br-logo"><a href=""><span>[</span>@lang(env('APP_NAME'))<span>]</span></a></div>
<div class="br-sideleft sideleft-scrollbar">
    <label class="sidebar-label pd-x-10 mg-t-20 op-3">@lang('Services')</label>
    <ul class="br-sideleft-menu">
        {{--{{dd(service_menu())}}--}}
        @foreach(service_menu() as $category)
            @if(array_key_exists('providers', $category))
                <li class="br-menu-item">
                    <a data-pjax href="#" class="br-menu-link with-sub">
                        <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
                        <span class="menu-item-label">{{ $category['name'] }}</span>
                    </a><!-- br-menu-link -->
                    <ul class="br-menu-sub">
                        @if(!empty($category['providers']))
                            @foreach($category['providers'] as $provider)
                                <li class="sub-item"><a data-pjax    href="{{route('merchant.provider', $provider['id'])}}" class="sub-link">{{ $provider['name'] }}</a></li>
                            @endforeach
                        @endif
                    </ul>
                </li>
            @elseif(array_key_exists('services', $category))
{{--                @foreach($category['services'] as $provider)--}}
                    <li class="br-menu-item">
                        <a data-pjax href="{{route('merchant.provider', $category['id'])}}" class="br-menu-link">
                            <i class="menu-item-icon icon ion-ios-home-outline tx-24"></i>
                            <span class="menu-item-label">{{ $category['name'] }}</span>
                        </a><!-- br-menu-link -->
                    </li><!-- br-menu-item -->
                {{--@endforeach--}}
            @endif
        @endforeach


    <br>
</div><!-- br-sideleft -->
<!-- ########## END: LEFT PANEL ########## -->
