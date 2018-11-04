<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Sexus</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    
    <!-- Bootstrap core CSS     -->
    <link href="{{asset('plugin/light-bootstrap-dashboard-master/assets/css/bootstrap.min.css')}}" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="{{asset('plugin/light-bootstrap-dashboard-master/assets/css/animate.min.css')}}" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="{{asset('plugin/light-bootstrap-dashboard-master/assets/css/light-bootstrap-dashboard.css')}}" rel="stylesheet"/>





    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="{{asset('plugin/light-bootstrap-dashboard-master/assets/css/pe-icon-7-stroke.css')}}" rel="stylesheet" />

</head>
<body>

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

<div class="wrapper">
        @include('includes.sidenavbar')

    <div class="main-panel">
            @include('includes.navbar')



        <div class="content">
                @yield('container')
        </div>


        @include('includes.footer')

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="{{asset('plugin/light-bootstrap-dashboard-master/assets/js/jquery.3.2.1.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('plugin/light-bootstrap-dashboard-master/assets/js/bootstrap.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('plugin/light-bootstrap-dashboard-master/assets/js/chartist.min.js')}}"></script>
    <script src="{{asset('plugin/light-bootstrap-dashboard-master/assets/js/bootstrap-notify.js')}}"></script>
    <script src="{{asset('plugin/light-bootstrap-dashboard-master/assets/js/light-bootstrap-dashboard.js')}}"></script>



    
	 <script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();


    	});
	</script> 

</html>
<!-- Borrar desde $.notify hasta });