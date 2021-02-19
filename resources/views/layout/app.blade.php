<!doctype html>
<html lang="en">
	
<head>
	@include('layout.meta')
	<title>@yield('title') - Admin Dashboard</title>
	<link rel="shortcut icon" href="{{ asset('assets/img/fav.png') }}" />
	@include('layout.styles')
	</head>

	<body>

		<!-- Loading starts -->
		<div id="loading-wrapper">
			<div class="spinner-border" role="status">
				<span class="sr-only">Loading...</span>
			</div>
		</div>
		<!-- Loading ends -->


		<!-- Page wrapper start -->
		<div class="page-wrapper">
			
			@include('layout.sidebar')
			
			<!-- Page content start  -->
			<div class="page-content">

				@include('layout.header')
				
				<!-- Main container start -->
				<div class="main-container">

					<!-- Row start -->
					@yield('content')
					
					

				</div>
				
				
				
				<!-- Main container end -->

			</div>
			
			
			<!-- Page content end -->

		</div>
		@include('layout.scripts')
	</body>

</html>