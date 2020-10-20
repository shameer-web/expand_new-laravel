@extends('layouts.admin')


@section('content')



<div >
		 @if ($message = Session::get('message'))
        <div class="alert alert-info">
            <p class="text-center" style="font-size: 24px">{{ $message }}</p>
        </div>
       @endif
</div>





<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Subheader-->
						<div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
							<div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
								<!--begin::Info-->
								<div class="d-flex align-items-center flex-wrap mr-1">
									<!--begin::Page Heading-->
									<div class="d-flex align-items-baseline mr-5">
										<!--begin::Page Title-->
										<h5 class="text-dark font-weight-bold my-2 mr-5">Create User </h5>
										<!--end::Page Title-->
										<!--begin::Breadcrumb-->
										<ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
											
										</ul>
										<!--end::Breadcrumb-->
									</div>
									<!--end::Page Heading-->
								</div>
								<!--end::Info-->
								<!--begin::Toolbar-->
								<div class="d-flex align-items-center">
									<!--begin::Actions-->
									<a href="#" class="btn btn-light font-weight-bold btn-sm">Actions</a>
									<!--end::Actions-->
									<!--begin::Dropdown-->
									<div class="dropdown dropdown-inline" data-toggle="tooltip" title="Quick actions" data-placement="left">
										<a href="#" class="btn btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<span class="svg-icon svg-icon-success svg-icon-2x">
												<!--begin::Svg Icon | path:assets/media/svg/icons/Files/File-plus.svg-->
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<polygon points="0 0 24 0 24 24 0 24" />
														<path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
														<path d="M11,14 L9,14 C8.44771525,14 8,13.5522847 8,13 C8,12.4477153 8.44771525,12 9,12 L11,12 L11,10 C11,9.44771525 11.4477153,9 12,9 C12.5522847,9 13,9.44771525 13,10 L13,12 L15,12 C15.5522847,12 16,12.4477153 16,13 C16,13.5522847 15.5522847,14 15,14 L13,14 L13,16 C13,16.5522847 12.5522847,17 12,17 C11.4477153,17 11,16.5522847 11,16 L11,14 Z" fill="#000000" />
													</g>
												</svg>
												<!--end::Svg Icon-->
											</span>
										</a>
										
									</div>
									<!--end::Dropdown-->
								</div>
								<!--end::Toolbar-->
							</div>
						</div>
						<!--end::Subheader-->
						<!--begin::Entry-->
						<div class="d-flex flex-column-fluid">
							<!--begin::Container-->
							<div class="container">
								<div class="row">
									<div class="col-lg-12">
										<!--begin::Card-->
										<div class="card card-custom gutter-b example example-compact">
											<div class="card-header">
												<h3 class="card-title"></h3>
												<div class="card-toolbar">
													<div class="example-tools justify-content-center">
														<span class="example-toggle" data-toggle="tooltip" title="View code"></span>
														<span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
													</div>
												</div>
											</div>
											<!--begin::Form-->
											<form class="form" action="{{ route('user.store') }}" method="post" enctype="multipart/form-data">
												@csrf
												<div class="card-body">


													<div class="form-group row">


														
                                                            
                                                            <div class="col-lg-6">
															<label>Name:</label>
															<input type="text" name="name" class="form-control" placeholder="Enter name" />


														@error('name')
														<p class="text-danger">{{ $message }}</p>
														@enderror
															
														</div>


														
														
														<div class="col-lg-6">
															<label>Password</label>
															<input type="password" class="form-control" name="password" placeholder="Enter Password" />


													    @error('password')
														<p class="text-danger">{{ $message }}</p>
														@enderror
															
														</div>


														
													</div>
													





													<div class="form-group row">


														<div class="col-lg-6">
																<label> Email:</label>
															<input type="text" name="email" class="form-control" placeholder="Enter Email" />




                                                       @error('email')
														<p class="text-danger">{{ $message }}</p>
														@enderror
															
														</div>
														
													



                                                 <div class="col-lg-6">
																<label> state:</label>
															<input type="text" name="state" class="form-control" placeholder="Enter State" />




                                                       @error('state')
														<p class="text-danger">{{ $message }}</p>
														@enderror
															
														</div>
														

														
													</div>



													<div class="form-group row">



														{{-- <div class="col-lg-6">
															<label>role:</label>
															<input type="text" name="role" class="form-control" placeholder="Enter Role" />

														@error('role')
														<p class="text-danger">{{ $message }}</p>
														@enderror
															
														</div> --}}



														 <div class="col-lg-6">
                                                
                                                   <label>Roles:</label>
                                                  <select name="role" class="form-control  " id="kt_select2_3" placeholder=""   style="width: 100%" >

															 
															
															<option value="1" >Admin</option>
															<option value="2" >Office Staff</option>
															<option value="3" >Technician-staff</option>
															<option value="4" >Collection Agent</option>
															<option value="5" >Customer</option>
															
															
															
												 </select>


												 @error('role')
														<p class="text-danger">{{ $message }}</p>
												 @enderror
												</div>




														<div class="col-lg-6">
															<label>Phone:</label>
															<input type="text" name="phone" class="form-control" placeholder="Enter Phone Number" />

														@error('phone')
														<p class="text-danger">{{ $message }}</p>
														@enderror
															
														</div>


														
														
														
														



													</div>

													


												









													
													<!-- begin: Example Code-->
													
													<!-- end: Example Code-->
												</div>
												<div class="card-footer">
													<div class="row">
														<div class="col-lg-6">
															<button type="submit" class="btn btn-primary mr-2">Save</button>
															<button type="reset" class="btn btn-secondary">Cancel</button>
														</div>
														
													</div>
												</div>
											</form>
											<!--end::Form-->
										</div>
										<!--end::Card-->
										<!--begin::Card-->
										<!--end::Card-->
										<!--begin::Card-->
										<!--end::Card-->
										<!--begin::Card-->
										
										<!--end::Card-->
									</div>
								</div>
							</div>
							<!--end::Container-->
						</div>
						<!--end::Entry-->
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