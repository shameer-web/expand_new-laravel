@extends('layouts.technician_staff')


@section('content')


 <?php
 $complaint =$page_data['complaint'] 
 ?>

 <?php
 $user =$page_data['user'] 
 ?>

 <?php
 $customer =$page_data['customer'] 
 ?>

 <?php
 $complainttype =$page_data['complainttype'] 
 ?>









<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
         <!--begin::Subheader-->
						<div class="subheader py-2 py-lg-6 subheader-solid" id="kt_subheader">
							<div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">

								<!--begin::Info-->
								<div class="d-flex align-items-center flex-wrap mr-1">

									<!--begin::Page Heading-->
									<div class="d-flex align-items-baseline flex-wrap mr-5">

										<!--begin::Page Title-->
										<h5 class="text-dark font-weight-bold my-1 mr-5">Complaints |  Edit Complaints  Page</h5>

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
									 Edit Form
								</h3>
								
							</div>
							<!--begin::Form-->
							<form class="form" action="{{ route('comp.update',$complaint->id) }}" method="post">
								@csrf
								@method('put')
								<div class="card-body">
									<div class="form-group row">
										

                                         <label class="col-lg-2 col-form-label text-right">Customer Name:</label>
										<div class="col-lg-3">
											<div class="input-group">
												



												<select class="form-control  "  name="customer_name" value="{{ $complaint->customer_name }}">
                                                            @foreach($customer as $row)
															<option value="{{ $row->id }}"
                                                                     @if($row->id == $complaint->customer_name )
                                                                     selected
                                                                     @endif

																>
																{{ $row->name }}</option>
															 @endforeach
                                                    
                                                    
                                                   
                                                </select>
												
											</div>
											<span class="form-text text-muted">Please select your customer</span>
										</div>

										<label class="col-lg-2 col-form-label text-right">Phone No:</label>
										<div class="col-lg-3">
											<input type="text" name="phone_no" value="{{ $complaint->phone_no }}"  class="form-control" placeholder="Enter Phone No"/>
											<span class="form-text text-muted">Please enter Phone number</span>
										</div>



										
									</div>
									<div class="form-group row">


										<label class="col-lg-2 col-form-label text-right">Email Id:</label>
										<div class="col-lg-3">
											<input type="text" name="email" value="{{ $complaint->email }}"  class="form-control" placeholder="Enter Email Id"/>
											<span class="form-text text-muted">Please enter Email Id</span>
										</div>



										<label class="col-lg-2 col-form-label text-right">Staff:</label>
										<div class="col-lg-3">
											<div class="input-group">
												



												<select class="form-control  "  name="staff" value="{{ $complaint->staff }}">
                                                            @foreach($user as $row)
															<option value="{{ $row->id }}"
                                                                     @if($row->id == $complaint->staff )
                                                                     selected
                                                                     @endif

																>
																{{ $row->name }}</option>
															 @endforeach
                                                    
                                                    
                                                   
                                                </select>
												
											</div>
											<span class="form-text text-muted">Please enter your address</span>
										</div>
										
									</div>

									<div class="form-group row">


										<label class="col-lg-2 col-form-label text-right">KSEB Post No:</label>
										<div class="col-lg-3">
											<input type="text" name="post_no" value="{{ $complaint->post_no }}"  class="form-control" placeholder=""/>
											<span class="form-text text-muted">Please enter KSEB Post No</span>
										</div>




										<label class="col-lg-2 col-form-label text-right">Complaint's:</label>
										<div class="col-lg-3">
											<div class="input-group">
												



												

                                                	@php
                                                            	$val = $complaint->complaint;
                                                            	
                                                            @endphp
                                                 <select name="complaint[]"  class="form-control selectpicker select2" id="kt_select2_3" placeholder=""  multiple="multiple" style="width: 100%" >

															 
															@foreach($complainttype as $row)
															<option value="{{ $row->id }}"
                                                                    <?php if(in_array($row->id, $val)){
                                                                    echo 'selected'; } else{}?>                                                             
                                                 
																>
																{{ $row->complainttype }}</option>
															 @endforeach



															
															
												 </select>

												
											</div>
											<span class="form-text text-muted">Please select your complaint's</span>
										</div>

										
										

									</div>

									<div class="form-group row">

										<label class="col-lg-2 col-form-label text-right">Other complaint:</label>
										<div class="col-lg-3">
											<input type="text" name="other_complaint" value="{{ $complaint->other_complaint }}"  class="form-control" placeholder="Enter Email Id"/>
											<span class="form-text text-muted">Please enter other complaint</span>
										</div>
                                        

                                        <label class="col-lg-2 col-form-label text-right">Remarks:</label>
										<div class="col-lg-3">
											<input type="text" name="remarks" value="{{ $complaint->remarks }}"  class="form-control" placeholder="Enter Email Id"/>
											<span class="form-text text-muted">Please enter Remarks</span>
										</div>

									</div>

									{{-- <div class="form-group row">


										<label class="col-lg-2 col-form-label text-right">Assign To:</label>
										<div class="col-lg-3">
											<div class="input-group">
												



												<select class="form-control  "  name="staff" value="{{ $complaint->staff }}">
                                                            @foreach($user as $row)
															<option value="{{ $row->id }}"
                                                                     @if($row->id == $complaint->assigned )
                                                                     selected
                                                                     @endif

																>
																{{ $row->name }}</option>
															 @endforeach
                                                    
                                                    
                                                   
                                                </select>
												
											</div>
											<span class="form-text text-muted">Please enter your Assign Name</span>
										</div>

								    </div> --}}
									

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