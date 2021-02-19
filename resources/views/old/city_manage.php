<?php
	require_once("include/header.php");
?>								
				
				
				<div class="page-header">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">Home</li>
						<li class="breadcrumb-item active">City Management</li>
					</ol>

					<ul class="app-actions">
						<div class="custom-search">
							<input type="text" class="search-query" placeholder="Enter City Name">
							<i class="icon-search1"></i>
						</div>
						<li>
							<a href="#" data-toggle="modal" data-target="#addNewContact">
								<i class="icon-circle-with-plus" data-toggle="tooltip" data-placement="top" title="Add New City"></i>
							</a>
						</li>
					</ul>


				</div>


				<!-- Modal -->

				<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
										<div class="modal-dialog modal-sm">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title"  id="mySmallModalLabel">Modal Title</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
													...
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
													<button type="button" class="btn btn-primary">Save</button>
												</div>
											</div>
									  </div>
									</div>


				<!-- Modal End -->
				
				<!-- Main container start -->
				<div class="main-container">

					<!-- Row start -->
					<div class="row gutters">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

							<div class="table-container">
								<div class="table-responsive">
									<table class="table custom-table m-0">
										<thead>
											<tr>
												<th>No.</th>
												<th>City Name</th>
												<th>State Name</th>
												<th>Action</th>
												
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>1</td>
												<td>Rajkot</td>
												<td>Gujarat</td>
												<td>
													
													<div class="td-actions">

														<a href="#" class="icon red" data-toggle="tooltip" data-placement="top" title="Delete State">
															<i class="icon-trash-2"></i>
														</a>

														<a href="#" class="icon red" data-toggle="tooltip" data-placement="top" title="Edit State">
															<i class="icon-edit1"></i>
														</a>

													</div>
													
												</td>
												
											</tr>
											<tr>
												<td>2</td>
												<td>Prayagraj</td>
												<td>Uttar Pradesh</td>
												<td>
													
													<div class="td-actions">

														
														<a href="#" class="icon red" data-toggle="tooltip" data-placement="top" title="Delete State">
															<i class="icon-trash-2"></i>
														</a>

														<a href="#" class="icon red" data-toggle="tooltip" data-placement="top" title="Edit State">
															<i class="icon-edit1"></i>
														</a>

													</div>
													
												</td>
												
											</tr>
											<tr>
												<td>3</td>
												<td>Kerala</td>
												<td>Tamilnadu</td>
												<td>
													
													<div class="td-actions">

														
														<a href="#" class="icon red" data-toggle="tooltip" data-placement="top" title="Delete State">
															<i class="icon-trash-2"></i>
														</a>

														<a href="#" class="icon red" data-toggle="tooltip" data-placement="top" title="Edit State">
															<i class="icon-edit1"></i>
														</a>

													</div>
													
												</td>
												
											</tr>
											<tr>
												<td>4</td>
												<td>Ambala</td>
												<td>Punjab</td>
												<td>
													
													<div class="td-actions">

														<a href="#" class="icon red" data-toggle="tooltip" data-placement="top" title="Delete State">
															<i class="icon-trash-2"></i>
														</a>

														<a href="#" class="icon red" data-toggle="tooltip" data-placement="top" title="Edit State">
															<i class="icon-edit1"></i>
														</a>

													</div>
													
												</td>
												
											</tr>
											<tr>
												<td>5</td>
												<td>Jammu</td>
												<td>Jammu & Kashmir</td>
												<td>
													
													<div class="td-actions">

														<a href="#" class="icon red" data-toggle="tooltip" data-placement="top" title="Delete State">
															<i class="icon-trash-2"></i>
														</a>

														<a href="#" class="icon red" data-toggle="tooltip" data-placement="top" title="Edit State">
															<i class="icon-edit1"></i>
														</a>

													</div>
													
												</td>
												
											</tr>
										</tbody>
									</table>
								</div>
							</div>


						</div>

					</div>

					<div class="card-body">
					<nav aria-label="Page navigation example">
						<ul class="pagination justify-content-end primary">
							<li class="page-item disabled"><a class="page-link" href="#">
								<i class="icon-chevron-left"></i></a></li>
							<li class="page-item active"><a class="page-link" href="#">1</a></li>
							<li class="page-item"><a class="page-link" href="#">2</a></li>
							<li class="page-item"><a class="page-link" href="#">3</a></li>
							<li class="page-item"><a class="page-link" href="#">4</a></li>
							<li class="page-item"><a class="page-link" href="#">5</a></li>
							<li class="page-item"><a class="page-link" href="#">6</a></li>
							<li class="page-item"><a class="page-link" href="#">7</a></li>
							<li class="page-item"><a class="page-link" href="#"><i class="icon-chevron-right"></i></a></li>
						</ul>
					</nav>
				</div>

					<!-- Row end -->
				</div>

				



				
				
<?php
	require_once("include/footer.php");
?>	