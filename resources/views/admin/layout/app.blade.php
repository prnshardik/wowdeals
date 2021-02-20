<!doctype html>
<html lang="en">
	
<head>
	<title>@yield('title') - {{ _site_name() }}</title>
	
    <link rel="shortcut icon" href="{{ asset('assets/img/fav.png') }}" />

    @include('admin.layout.meta')

	@include('admin.layout.styles')
</head>

	<body>
		<div id="loading-wrapper">
			<div class="spinner-border" role="status">
				<span class="sr-only">Loading...</span>
			</div>
		</div>

        <div class="page-wrapper">

			@include('admin.layout.sidebar')
			
			<div class="page-content">

				@include('admin.layout.header')
				
				<div class="main-container">

					@yield('content')

				</div>
				
			</div>
			
		</div>

		@include('admin.layout.scripts')

    </body>
</html>