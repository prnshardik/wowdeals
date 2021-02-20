<!doctype html>
<html lang="en">
	
<head>
    <link rel="shortcut icon" href="{{ asset('assets/img/fav.png') }}" />
    
    <title>@yield('title') - {{ _site_name() }}</title>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    @yield('meta')
    
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />

    @yield('styles')
</head>

<body class="authentication">
    <div class="container">

        @yield('content')

    </div>

    @yield('scripts')
</body>
</html>