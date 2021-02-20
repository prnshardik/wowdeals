@extends('layout.app')

@section('title')
Index
@endsection

@section('meta')
@endsection

@section('styles')
@endsection

@section('content')
<div class="row justify-content-center gutters">
	<div class="col-xl-7 col-lg-7 col-md-8 col-sm-10">
		<form>
			<div class="card m-0">
				<div class="card-header">
					<div class="card-title">Create New Category</div>
				</div>
				
				<div class="card-body">
					
					
					<div class="row gutters">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							<div class="form-group">
							<p><code>Enter Category Name</code></p>
								<input type="text" class="form-control" id="rtlphn" name="rtlphn" placeholder="Fruits & Vegitables" required="">
							</div>
						</div>
					</div>
					
					<div class="form-group">
					<p><code>Select Category Icon</code></p>
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroupFileAddon01">Upload Icon</span>
								</div>
								<div class="custom-file">
									<input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
									<label class="custom-file-label" for="inputGroupFile01">Choose file</label>
								</div>
							</div>
					</div>

					
					<button type="button" id="submit" name="submit" class="btn btn-primary float-right">Create New Category</button>

				</div>
			</div>
		</form>
	</div>
</div>
@endsection

@section('scripts')
@endsection