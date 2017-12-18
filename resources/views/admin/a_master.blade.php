<!DOCTYPE HTML>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>@yield('title')</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="{{ asset('css/admin/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="{{ asset('css/admin/animate.min.css') }}" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="{{ asset('css/admin/light-bootstrap-dashboard.css?v=1.4.0') }}" rel="stylesheet"/>

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="{{ asset('css/admin/pe-icon-7-stroke.css') }}" rel="stylesheet" />

</head>

<body>
	@include('admin.a_shared.a_sidebar')
</body>


	<!--   Core JS Files   -->
    <script src="{{ asset('js/admin/jquery.3.2.1.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('js/admin/bootstrap.min.js') }}" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="{{ asset('js/admin/chartist.min.js') }}"></script>

	<!--  Notifications Plugin    -->
    <script src="{{ asset('js/admin/bootstrap-notify.js') }}"></script>

    <script src="{{ asset('js/admin/light-bootstrap-dashboard.js?v=1.4.0') }}"></script>

    <script src="{{ asset('js/admin/demo.js') }}"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB8_ej3ip8jBlN7N0X8YIRsrUBGa2-52OY"></script>

    <script>
        $().ready(function(){
            demo.initGoogleMaps();
        });
    </script>

</html>