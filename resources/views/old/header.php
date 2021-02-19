<!doctype html>
<html lang="en">
	
<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Meta -->
		
		<link rel="shortcut icon" href="img/fav.png" />

		<!-- Title -->
		<title>Wowdeals - Admin Dashboard</title>


		<!-- *************
			************ Common Css Files *************
		************ -->
		<!-- Bootstrap css -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- Icomoon Font Icons css -->
		<link rel="stylesheet" href="fonts/style.css">
		<!-- Main css -->
		<link rel="stylesheet" href="css/main.css">




		<!-- *************
			************ Vendor Css Files *************
		************ -->
		<!-- DateRange css -->
		<link rel="stylesheet" href="vendor/daterange/daterange.css" />
		<link rel="stylesheet" href="vendor/bs-select/bs-select.css" />
		<link rel="stylesheet" href="vendor/gallery/gallery.css">

		<!-- Datepicker css -->
		<link rel="stylesheet" href="vendor/datepicker/css/classic.css" />
		<link rel="stylesheet" href="vendor/datepicker/css/classic.date.css" />

		<!-- Input Tags css -->
		<link rel="stylesheet" href="vendor/input-tags/tagsinput.css" />

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
			
			<!-- Sidebar wrapper start -->
			<nav id="sidebar" class="sidebar-wrapper">
				
				<!-- Sidebar brand start  -->
				<div class="sidebar-brand">
					<a href="welcome.php" class="logo">
						<img src="img/logo.png" alt="wowdeals"  />
					</a>
				</div>
				<!-- Sidebar brand end  -->

				<!-- Sidebar content start -->
				<div class="sidebar-content">

					<!-- sidebar menu start -->
					<div class="sidebar-menu">
						<ul>
							
							
							
							<li>
								<a href="welcome.php">
									<i class="icon-devices_other"></i>
									<span class="menu-text">Dashboard</span>
								</a>
							</li>
							
							<li>
								<a href="#">
									<i class="icon-user1"></i>
									<span class="menu-text">Users</span>
								</a>
							</li>
							
							<li class="sidebar-dropdown">
								<a href="javascript:void(0)">
									<i class="icon-archive1"></i>
									<span class="menu-text">Categories</span>
								</a>
								<div class="sidebar-submenu">
									<ul>
										<li>
											<a href="new_category.php">Create Category</a>
										</li>
										<li>
											<a href="manage_categories.php">Manage Category</a>
										</li>
										
									</ul>
								</div>
							</li>
							
							<li class="sidebar-dropdown">
								<a href="javascript:void(0)">
									<i class="icon-archive1"></i>
									<span class="menu-text">Famous Offers</span>
								</a>
								<div class="sidebar-submenu">
									<ul>
										<li>
											<a href="companies.php">Companies</a>
										</li>
										<li>
											<a href="new_famous_offer.php">Create Offer</a>
										</li>
										<li>
											<a href="#">Manage Offer</a>
										</li>
										
									</ul>
								</div>
							</li>
							
							<li class="sidebar-dropdown">
								<a href="javascript:void(0)">
									<i class="icon-archive1"></i>
									<span class="menu-text">Business Registration</span>
								</a>
								<div class="sidebar-submenu">
									<ul>
										<li>
											<a href="new_category.php">Pending Business</a>
										</li>
										<li>
											<a href="manage_categories.php">Manage Business</a>
										</li>
										
									</ul>
								</div>
							</li>
							
							<li>
								<a href="state_manage.php">
									<i class="icon-devices_other"></i>
									<span class="menu-text">State Management</span>
								</a>
							</li>

							<li>
								<a href="city_manage.php">
									<i class="icon-devices_other"></i>
									<span class="menu-text">City Management</span>
								</a>
							</li>
					
							<li>
								<a href="index.php">
									<i class="icon-log-out1"></i>
									<span class="menu-text">Logout</span>
								</a>
							</li>
						
							
						</ul>
					</div>
					<!-- sidebar menu end -->

				</div>
				<!-- Sidebar content end -->
				
			</nav>
			<!-- Sidebar wrapper end -->
			
			

			<!-- Page content start  -->
			<div class="page-content">

				<!-- Header start -->
				<header class="header">
					<div class="toggle-btns">
						<a id="toggle-sidebar" href="#">
							<i class="icon-list"></i>
						</a>
						<a id="pin-sidebar" href="#">
							<i class="icon-list"></i>
						</a>
					</div>
					<div class="header-items">
						<!-- Custom search start -->
						
						<!-- Custom search end -->

						<!-- Header actions start -->
						<ul class="header-actions">
							
							
							<li class="dropdown">
								<a href="#" id="userSettings" class="user-settings" data-toggle="dropdown" aria-haspopup="true">
									<span class="user-name">Wowdeals</span>
									<span class="avatar">
										<img src="img/shreemart-icon.png" alt="avatar" style="border-radius:2%; height: 38px;">
										<span class="status busy"></span>
									</span>
								</a>
								<div class="dropdown-menu dropdown-menu-right" aria-labelledby="userSettings">
									<div class="header-profile-actions">
										<div class="header-user-profile">
											<div class="header-user">
												<img src="img/shreemart-icon.png" alt="avatar">
											</div>
											<h5>Wowdeals</h5>
											<p>Admin</p>
										</div>
										<a href="password_change.php"><i class="icon-lock1"></i> Change Password</a>
										<a href="index.php"><i class="icon-log-out1"></i> Sign Out</a>
									</div>
								</div>
							</li>
						</ul>						
						<!-- Header actions end -->
					</div>
				</header>
				<!-- Header end -->