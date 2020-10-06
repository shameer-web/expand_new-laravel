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
										<h5 class="text-dark font-weight-bold my-1 mr-5">Device |  New Device Details </h5>

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
									 Create Form
								</h3>
								
							</div>
							<!--begin::Form-->
							<form class="form" action="{{ route('device.store') }}" method="post">
								@csrf
								<div class="card-body">
									<div class="form-group row">
										<label class="col-lg-2 col-form-label text-right">Company Name:</label>
										<div class="col-lg-3">
										<div class="input-group">
												<div class="input-group-append"></div>
												<select class="form-control " id="kt_select2_5" name="company">
													<option selected="selected">Select Company</option>
													@foreach($company as $row5)
													<option value="{{$row5->id}}">{{$row5->company_name}}</option>
													@endforeach
													
												</select>
											</div>
											<span class="form-text text-muted">Please Selecet Device Type</span>
										</div>
										<label class="col-lg-2 col-form-label text-right">Device Type:</label>
										<div class="col-lg-3">
											
											<div class="input-group">
												<div class="input-group-append"></div>
												<select class="form-control " id="kt_select2_4" name="type">
													<option selected="selected">Select Type</option>
													@foreach($type as $row4)
													<option value="{{$row4->id}}">{{$row4->type_name}}</option>
													@endforeach
													
												</select>
											</div>
											<span class="form-text text-muted">Please Selecet Device Type</span>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-lg-2 col-form-label text-right">Device ID:</label>
										<div class="col-lg-3">
											<div class="input-group">
												  <input type="text" name='device_id' placeholder='Device ID' class="form-control" id="" />
											</div>
											
										</div>
										<label class="col-lg-2 col-form-label text-right">Serial Number:</label>
										<div class="col-lg-3">
											<div class="input-group">
												 <input type="number" name="serial_number" class="form-control" id="" placeholder="Serial Number">
												
											</div>
											
										</div>
									</div>
									<div class="form-group row">
										<label class="col-lg-2 col-form-label text-right">Model:</label>
										<div class="col-lg-3">
											
											<div class="input-group">
												<div class="input-group-append"></div>
												<select class="form-control " id="kt_select2_1" name="model">
													<option selected="selected">Select Model</option>
													@foreach($mode as $row11)
													<option value="{{$row11->id}}">{{$row11->model_name}}</option>
													@endforeach
													
												</select>
											</div>
											<span class="form-text text-muted">Please select your model</span>
										</div>


										<label class="col-lg-2 col-form-label text-right">District:</label>
										<div class="col-lg-3">
											
											<div class="input-group">
												<div class="input-group-append"></div>
												<select class="form-control " id="kt_select2_2" name="district">
													<option selected="selected">Select District</option>
													@foreach($district as $row1)
													<option value="{{$row1->id}}">{{$row1->district_name}}</option>
													@endforeach
													
												</select>
											</div>
											<span class="form-text text-muted">Please enter your District</span>
										</div>
									</div>


									<div class="form-group row">
										<label class="col-lg-2 col-form-label text-right">LCO ID:</label>
										<div class="col-lg-3">
											
											<div class="input-group">
												<div class="input-group-append"></div>
												<select class="form-control " id="kt_select2_3" name="lco_id">
													<option selected="selected">Select Loc</option>
													@foreach($loc as $row2)
													<option value="{{$row2->id}}">{{$row2->loc_name}}</option>
													@endforeach
													
												</select>
											</div>
											<span class="form-text text-muted">Please Select loc</span>
										</div>
									</div>	

									<!-- begin: Example Code-->
									
									<!-- end: Example Code-->
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

		

		

@endsection