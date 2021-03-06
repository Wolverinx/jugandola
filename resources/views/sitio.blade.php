<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('titulo','Me la Juego') | Me la Juego | Club Unilever</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ url('css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ url('css/alertify.min.css') }}" rel="stylesheet">
    <link href="{{ url('css/default.min.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ url('css/clean-blog.min.css') }}" rel="stylesheet">
    <link href="{{ url('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="http://clubunilever.cl/js/jquery.fancybox.css">

    <!-- Custom Fonts -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    @yield('styles')
</head>
<body>
    
    @yield('header')
    @yield('content')
    @yield('footer')

    <!-- jQuery -->
    <script src="{{ url('js/jquery.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ url('js/bootstrap.min.js') }}"></script>
    <script src="{{ url('js/validaCampos.js') }}"></script>
    <script src="{{ url('js/alertify.min.js') }}"></script>
    <script src="http://clubunilever.cl/js/jquery.fancybox.js"></script>
    <!-- Le JavaScript -->
    <script src="{{ url('js/script.js') }}"></script>

    <script>
        @yield('scripts')
    </script>

    @yield('otrosScripts')
</body>

</html>