@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">My Company</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Information</span>
						</div>
					</div>
					
				</div>
				<!-- breadcrumb -->
@endsection
@section('content')
				<!-- row -->
								<!-- row -->
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Basic Information
								</div>
								<div id="wizard1" class="mt-3">
									
									<section>

										<div class="control-group form-group">
											<label class="form-label">Name</label>
											<input type="text" class="form-control required" placeholder="Name">
										</div>
										
										<div class="control-group form-group">
											<label class="form-label">Email</label>
											<input type="email" class="form-control required" placeholder="Email Address">
										</div>

										<div class="control-group form-group">
											<label class="form-label">image & Logo</label>
											<div class="row row-sm">
												<div class="col-md-5 col-lg-4">
													<input type="file" class="form-control " placeholder="image">
											    </div>
												<div class="col-md-5 col-lg-4">
													<input type="file" class="form-control " placeholder="logo">
												</div>
											</div>
										</div>
										<div class="control-group form-group">
											<label class="form-label">Phone Number</label>
											<div class="row row-sm">
												<div class="col-md-5 col-lg-4">
													
													<input type="number" class="form-control required" placeholder="telephone 1" name="telephone1">
											    </div>
												<div class="col-md-5 col-lg-4">
													<input type="number" class="form-control required" placeholder="telephone 2" name="telephone2">
												</div>
											</div>
										</div>
										<div class="control-group form-group mb-0">
											<label class="form-label">Address</label>
											<input type="text" class="form-control required" placeholder="Address">
										</div>
										<button type="submit" class="btn btn-primary mt-3">Save</button>
									</section>
								</div>
							</div>
						</div>
					</div>
					
				</div>
				<!-- /row -->
				<!-- row closed -->
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
@endsection
@section('js')
@endsection