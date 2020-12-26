@extends('layouts.office_staff')


@section('content')


 <?php
 $assign_to =$page_data['assign_to'] 
 ?>

  <?php
 $assist_by =$page_data['assist_by'] 
 ?>


 <?php
 $enquiery =$page_data['enquiery'] 
 ?>


 <?php
 $data =$page_data['data'] 
 ?>






<div class="content d-flex flex-column flex-column-fluid" id="kt_content">

						<!--[html-partial:include:{"file":"partials/_subheader/subheader-v1.html"}]/-->
						{{-- <?php include('sub-header.php') ?> --}}
						 @include('layouts.include.sub-header')
						<div class="card card-custom gutter-b example example-compact">
							<div class="card-header">
								<h3 class="card-title">
									 Edit Form
								</h3>
								
							</div>
							<!--begin::Form-->
							<form class="form" action="{{ route('enquiries.update',$enquiery->id) }}" method="post">
								@csrf
								@method('put')
								<div class="card-body">
									<div class="form-group row">
										<label class="col-lg-2 col-form-label text-right">Full Name:</label>
										<div class="col-lg-3">
											<input type="text" name="full_name" value="{{ $enquiery->full_name }}"  class="form-control" placeholder="Enter full name"/>
											<span class="form-text text-muted">Please enter your full name</span>
										</div>
										<label class="col-lg-2 col-form-label text-right">Contact Number:</label>
										<div class="col-lg-3">
											<input type="text" name="contact_number" value="{{ $enquiery->contact_number }}" class="form-control" placeholder="Enter contact number"/>
											<span class="form-text text-muted">Please enter your contact number</span>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-lg-2 col-form-label text-right">Address:</label>
										<div class="col-lg-3">
											<div class="input-group">
												<input type="text" name="address"
												value="{{ $enquiery->address }}" class="form-control" placeholder="Enter your address"/>
												<div class="input-group-append"><span class="input-group-text"><i class="la la-map-marker"></i></span></div>
											</div>
											<span class="form-text text-muted">Please enter your address</span>
										</div>
										<label class="col-lg-2 col-form-label text-right">Postcode:</label>
										<div class="col-lg-3">
											<div class="input-group">
												<input type="text" name="postcode" value="{{ $enquiery->postcode }}" class="form-control" placeholder="Enter your postcode"/>
												<div class="input-group-append"><span class="input-group-text"><i class="la la-bookmark-o"></i></span></div>
											</div>
											<span class="form-text text-muted">Please enter your postcode</span>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-lg-2 col-form-label text-right">Assign To:</label>
										<div class=" col-lg-3">
											<select class="form-control " id="kt_select2_1" name="assign_to">


												<option value="{{ $assign_to }}">--select Technician--</option>
												

												@foreach($data as $row)
															<option value="{{ $row->id }}"

                                                              @if($row->id == $assign_to)  selected  
                                                                    @endif



															 >{{ $row->name }}</option>
												@endforeach



												 
												
												
											</select>
										</div>



										<label class="col-lg-2 col-form-label text-right">Assist By:</label>
										<div class=" col-lg-3">
											<select class="form-control " id="kt_select2_1" name="assist_by">

												  <option value="{{ $assist_by }}">--select Technician--</option>
												

												@foreach($data as $row)
															<option value="{{ $row->id }}"

                                                              @if($row->id == $assist_by)  selected  
                                                                    @endif



															 >{{ $row->name }}</option>
												@endforeach



												 
												
												
											</select>
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

		<script src="{{asset('assets/js/pages/crud/forms/widgets/select2.js')}}"></script>

		

@endsection