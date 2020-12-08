@extends('layouts.admin')


@section('content')







<div class="content d-flex flex-column flex-column-fluid" id="kt_content">

		<!--begin::Subheader-->
						<div class="subheader py-2 py-lg-6 subheader-solid" id="kt_subheader">
							<div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">

								<!--begin::Info-->
								<div class="d-flex align-items-center flex-wrap mr-1">

									<!--begin::Page Heading-->
									<div class="d-flex align-items-baseline flex-wrap mr-5">

										<!--begin::Page Title-->
										<h5 class="text-dark font-weight-bold my-1 mr-5">GST | Edit  GST Details</h5>

										<!--end::Page Title-->
									</div>

									<!--end::Page Heading-->
								</div>

								<!--end::Info-->

								<!--begin::Toolbar-->
								
								<!--end::Toolbar-->
							</div>
						</div>

						<!--end::Subheader-->				
						<div class="card card-custom gutter-b example example-compact">
							<div class="card-header">
								<h3 class="card-title">
									 Edit GST Form
								</h3>
								
							</div>
							<!--begin::Form-->
							<form class="form" action="{{ route('gst.update',$edit->id) }}" method="post">
								@csrf
								@method('put')
								<div class="card-body">
									<div class="form-group row">
										
										<label class="col-lg-2 col-form-label text-right">CGST:</label>
										<div class="col-lg-3">
											<input type="number" name="cgst" value="{{ $edit->cgst }}" class="form-control" placeholder="CGST"/>
											<span class="form-text text-muted">Please enter Cgst</span>
										</div>

										<label class="col-lg-2 col-form-label text-right">SGST:</label>
										<div class="col-lg-3">
											<div class="input-group">
												<input type="number" name="sgst" value="{{ $edit->sgst }}" class="form-control" placeholder="SGST"/>
												
											</div>
											<span class="form-text text-muted">Please enter Sgst</span>
										</div>
									</div>
									<div class="form-group row">
										
										<label class="col-lg-2 col-form-label text-right">Cess:</label>
										<div class="col-lg-3">
											<div class="input-group">
												<input type="number" name="cess" value="{{ $edit->cess }}" class="form-control" placeholder="Cess"/>
												<div class="input-group-append"></div>
											</div>
											<span class="form-text text-muted">Please enter Cess</span>
										</div>
									</div>
									

									
								</div>
								<div class="card-footer">
									<div class="row">
										<div class="col-lg-2"></div>
										<div class="col-lg-10">
											<button type="submit" class="btn btn-success mr-2">Submit</button>
											<button type="reset" class="btn btn-secondary">Cancel</button>
										</div>
									</div>
								</div>
							</form>
							<!--end::Form-->
						</div>
						
						<!--[html-partial:include:{"file":"partials/_content.html"}]/-->
					</div>









@endsection


@section('css')

      <link href="{{asset('assets/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />


@endsection



@section('script')

       






     <!--begin::Page Vendors(used by this page)-->
		<script src="{{asset('assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
		<!--end::Page Vendors-->
		<!--begin::Page Scripts(used by this page)-->
		<script src="{{asset('assets/js/pages/crud/datatables/basic/paginations.js')}}"></script>
		<script src="{{asset('assets/js/pages/crud/forms/widgets/select2.js')}}"></script>

		<script src="{{asset('assets/js/pages/crud/forms/widgets/select2.js')}}"></script>

		

@endsection