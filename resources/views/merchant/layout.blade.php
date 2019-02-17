<!DOCTYPE html>
<html  lang="{{ __('en') }}" dir="{{ __('ltr') }}" class="{{ __('ltr') }}">
<head>
    @include('merchant.partials.head')
    <style>
        #pjax-container {
            opacity: 1;
            transition: opacity 0.20s linear;
        }
        #pjax-container.loading {
            opacity: 0.3;
        }
    </style>
</head>
<body>

    @include('merchant.partials.sidebar')
    @include('merchant.partials.header')

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel"  id="pjax-container">
        <div class="br-pageheader">
            <nav class="breadcrumb pd-0 mg-0 tx-12">
                <a class="breadcrumb-item" href="{{ url(env('BACKEND_PATH')) }}">{{ __('Home') }}</a>
                @for($i = 1; $i <= count(Request::segments()); $i++)
                    <span class="breadcrumb-item">
                        {{__(ucfirst(Request::segment($i)))}}
                    </span>
                @endfor
            </nav>
        </div>
        <div class="br-pagetitle">
            <div>
                <h4>{{ $title ?? __(ucfirst(Request::segment(2))) ?: __('Home') }}</h4>
            </div>
        </div><!-- d-flex -->
        <div class="br-pagebody">
            @include('merchant.partials.errors')
            @yield('content')
        </div><!-- br-pagebody -->
    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->



    @include('merchant.partials.footer')
    <script>

        $(document).ready(function(){
            $(document).pjax('a.data-pjax, [data-pjax]', '#pjax-container');

            $('#pjax-container').on('pjax:end', function () {
                $.pjax({
                    url: window.location.href,
                    container: '.second-container',
                });
            });
            $(document).on('pjax:send', function() {
                $('#pjax-container').addClass('loading')
                NProgress.start();
            })
            $(document).on('pjax:complete', function() {
                NProgress.done();
                $('#pjax-container').removeClass('loading')

            })
            $(document).on('pjax:timeout', function(event) { event.preventDefault(); })
        });

    </script>
</body>
</html>
