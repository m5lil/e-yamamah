<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<title>@lang(env('APP_NAME')) - {{ __(@ucfirst(Request::segment(2))) }}</title>

<!-- vendor css -->
<link href="{{URL::to('backend/lib/@fortawesome/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
<link href="{{URL::to('backend/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">

@stack('links')
<link href="{{url('backend/lib/datatables.net-responsive-dt/css/responsive.dataTables.min.css')}}"  rel="stylesheet">
<link href="{{url('backend/lib/datatables.net-dt/css/jquery.dataTables.min.css')}}"  rel="stylesheet">

<!-- Bracket CSS -->
<link rel="stylesheet" href="{{URL::to('backend/css/bracket.css')}}">
