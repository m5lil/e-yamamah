<!-- ########## START: HEAD PANEL ########## -->
<div class="br-header">
    <div class="br-header-left">
        <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a></div>
        <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="icon ion-navicon-round"></i></a></div>
        <div class="input-group hidden-xs-down wd-170 transition">
            <input id="searchbox" type="text" class="form-control tx-11" placeholder="@lang('Search for Transactions')">
            <span class="input-group-btn">
            <button class="btn btn-secondary" type="button"><i class="fa fa-search"></i></button>
          </span>
        </div><!-- input-group -->
        <nav class="nav">
            <div class="dropdown">
                <a href="" class="nav-link nav-link-profile  mg-t-10" data-toggle="dropdown">
                    <span class="logged-name hidden-md-down"><i class="fa fa-cog"></i> @lang('Settings')</span>
                </a>
                <div class="dropdown-menu dropdown-menu-header wd-250 ">
                    <ul class="list-unstyled user-profile-nav">
                        <li><a href=""><i class="fa fa-users"></i> @lang('Employees')</a></li>
                        <li><a href=""><i class="fa fa-wallet"></i> @lang('Wallet')</a></li>
                    </ul>
                </div><!-- dropdown-menu -->
            </div><!-- dropdown -->
            <a href="#" class="nav-link nav-link-profile  mg-t-10">
                <span class="logged-name hidden-md-down"><i class="fa fa-wallet"></i> @lang('Transaction')</span>
            </a>
            <a href="#" class="nav-link nav-link-profile  mg-t-10">
                <span class="logged-name hidden-md-down"><i class="fa fa-wallet"></i> @lang('Transfer')</span>
            </a>

        </nav>

    </div><!-- br-header-left -->
    <div class="br-header-right">
        <nav class="nav">
            <div class="dropdown">
                <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
                    <span class="logged-name hidden-md-down">{{ auth()->user()->name }}</span>
                    <img src="{{ url('backend/img/img1.jpg') }}" class="wd-32 rounded-circle" alt="">
                    <span class="square-10 bg-success"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-header wd-250">
                    <div class="tx-center">
                        <a href=""><img src="img/img1.jpg" class="wd-80 rounded-circle" alt=""></a>
                        <h6 class="logged-fullname">{{ auth()->user()->name }}</h6>
                        <p>{{ auth()->user()->email }}</p>
                    </div>
                    <hr>
                    <div class="tx-center">
                        <span class="profile-earning-label">@lang('Wallet Balance')</span>
                        <h3 class="profile-earning-amount">EGP 13,230</h3>
                        {{--<span class="profile-earning-text">Based on list price.</span>--}}
                    </div>
                    <hr>
                    <ul class="list-unstyled user-profile-nav">
                        <li><a href=""><i class="icon ion-ios-person"></i> @lang('Edit Profile')</a></li>
                        <li><a href="{{route('merchant.logout')}}"><i class="icon ion-power"></i> @lang('Logout')</a></li>
                    </ul>
                </div><!-- dropdown-menu -->
            </div><!-- dropdown -->
            <div class="dropdown">
                <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
                    <i class="icon ion-android-globe tx-24"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-header wd-250">
                    <ul class="list-unstyled user-profile-nav">
                        <li><a href="{{ route('merchant.lang', 'ar') }}"><i class="fa fa-globe"></i> @lang('Arabic')</a></li>
                        <li><a href="{{ route('merchant.lang', 'en') }}"><i class="fa fa-globe"></i> @lang('English')</a></li>
                    </ul>
                </div><!-- dropdown-menu -->
            </div><!-- dropdown -->
        </nav>
    </div><!-- br-header-right -->
</div><!-- br-header -->
<!-- ########## END: HEAD PANEL ########## -->
