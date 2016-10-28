<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>SB Admin 2 - Bootstrap Admin Theme</title>

	<link href="{{ asset('public/css/app.css') }}" rel="stylesheet">

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- Bootstrap Core CSS -->
    <link href="{{ asset('public/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{ asset('public/vendor/metisMenu/metisMenu.min.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('public/dist/css/sb-admin-2.css') }}" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="{{ asset('public/vendor/morrisjs/morris.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ asset('public/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
  <body>
    @yield('content')
    <!-- jQuery -->
    <script src="{{ asset('public/vendor/jquery/jquery.min.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('public/vendor/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{ asset('public/vendor/metisMenu/metisMenu.min.js') }}"></script>

    <!-- Morris Charts JavaScript -->
    <script src="{{ asset('public/vendor/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('public/vendor/morrisjs/morris.min.js') }}"></script>
    <script src="{{ asset('public/data/morris-data.js') }}"></script>
    <!--<script src="{{ asset('public/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
    <!--<script src="{{ asset('public/vendor/datatables-plugins/dataTables.bootstrap.min.js') }}"></script>
    <!--<script src="{{ asset('public/vendor/datatables-responsive/dataTables.responsive.js') }}"></script>
    <!-- Custom Theme JavaScript -->
    <script src="{{ asset('public/dist/js/sb-admin-2.js') }}"></script>
    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    // $(document).ready(function() {
    //     $('#dataTables-example').DataTable({
    //         responsive: true,
    //         "aLengthMenu": [[5, 10, 50, 100,-1], [5, 10, 50, 100,"All"]],
    //         "iDisplayLength": 5
    //     });
    // });
    </script>
   
  </body>
</html>
