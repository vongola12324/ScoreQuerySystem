<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico"/>
	<title>@if (trim($__env->yieldContent('title'))) @yield('title') - @endif{{ Config::get('site.name') }}</title>

    <!-- Css -->
	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    @yield('css')

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		{!! HTML::script('//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js'); !!}
        {!! HTML::script('//oss.maxcdn.com/respond/1.4.2/respond.min.js'); !!}
	<![endif]-->
</head>
<body>
    @if(Request::is('admin/*'))
        @include('navbar.admin')
    @endif

	@yield('content')

    <!-- Footer -->
    <hr>
    <div class="footer text-center">
        <p>User contributions licensed under {!! HTML::link('//www.gnu.org/copyleft/lesser.html', 'GNU Lesser General Public License v3.0') !!} with attribution required</p>
        <p>HackerSir (c) 2014 - 2015 | Production by {!! HTML::link('//hackersir.info', 'HackerSir') !!}</p>
    </div>
	<!-- Scripts -->
    {!! HTML::script('//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'); !!}
    {!! HTML::script('//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js'); !!}
    @yield('js')
</body>
</html>
