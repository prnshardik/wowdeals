<?php
	require_once("include/header.php");
?>				
				
				
				<div class="page-header">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">Home</li>
						<li class="breadcrumb-item active">New Famous Offer</li>
					</ol>

					
				</div>
				
				<!-- Page header end -->
				
				<!-- Main container start -->
				
				<div class="main-container">

					<!-- Row start -->
					<div class="row justify-content-center gutters">
						<div class="col-xl-7 col-lg-7 col-md-8 col-sm-10">
							<form>
								<div class="card m-0">
									<div class="card-header">
										<div class="card-title">Create Famous Offer</div>
									</div>
									
									<div class="card-body">
										
										<div class="form-group">
										<p><code>Select Company</code></p>
											<select class="form-control selectpicker">
												<option>Swiggy</option>
												<option>Zomato</option>
												<option>Ola</option>
											</select>
										</div>
										
										
										<div class="row gutters">
											<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
												<div class="form-group">
												<p><code>Enter Title</code></p>
													<input type="text" class="form-control" id="rtlphn" name="rtlphn" placeholder="Get 15% Discount using HSBC Credit Cards" required="">
												</div>
											</div>
										</div>
										
										<div class="row gutters">
											<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
												<div class="form-group">
												<p><code>Enter Promocode</code></p>
													<input type="text" class="form-control" id="rtlphn" name="rtlphn" placeholder="HAPPY2021" required="">
												</div>
											</div>
										</div>
										
										
										<button type="button" id="submit" name="submit" class="btn btn-primary float-right">Create New Offer</button>

									</div>
								</div>
							</form>
						</div>
					</div>
					<!-- Row end -->

				</div>
				<!-- Main container end -->
	
	
<?php
	require_once("include/footer.php");
?>	