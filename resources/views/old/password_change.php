<?php
	require_once("include/header.php");
?>				
				
				
				<div class="page-header">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">Home</li>
						<li class="breadcrumb-item active">Change Password</li>
					</ol>

					
				</div>
				
				<!-- Page header end -->

				<!-- Main container start -->
				
				<div class="main-container">

					<!-- Row start -->
					<div class="row gutters">
						<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
							<div class="card h-100">
								<div class="card-body">
									<div class="account-settings">
										<div class="user-profile">
											<div class="user-avatar">
												<img src="img/icon.png" alt="HCMC Icon" />
											</div>
											<h5 class="user-name">Wowdeals</h5>
											<h6 class="user-email">info@wowdeals.in</h6>
										</div>
										
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Change Password</div>
								</div>
								<div class="card-body">
									
									<div class="form-group row">
										<label for="inputPassword" class="col-sm-2 col-form-label">Old Password</label>
										<div class="col-sm-10">
											<input type="password" class="form-control" id="inputPassword" placeholder="Password">
										</div>
									</div>
									<div class="form-group row">
										<label for="inputPassword" class="col-sm-2 col-form-label">New Password</label>
										<div class="col-sm-10">
											<input type="password" class="form-control" id="inputPassword" placeholder="Password">
										</div>
									</div>
									<div class="form-group row">
										<label for="inputPassword" class="col-sm-2 col-form-label">Confirm New Password</label>
										<div class="col-sm-10">
											<input type="password" class="form-control" id="inputPassword" placeholder="Password">
										</div>
									</div>
									
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
											<div class="text-right">
												<button type="button" id="submit" name="submit" class="btn btn-white">Cancel</button>&nbsp;
												<button type="button" id="submit" name="submit" class="btn btn-primary">Change Password</button>
											</div>
										</div>

								</div>
							</div>
						</div>
					</div>
					<!-- Row end -->

				</div>
				
				
<?php
	require_once("include/footer.php");
?>