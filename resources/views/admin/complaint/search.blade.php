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
										<h5 class="text-dark font-weight-bold my-1 mr-5">Complaints |  New Complaints  Page</h5>

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
									 New Complaint's
								</h3>
								
							</div>
							<!--begin::Form-->
							<br>
							<form class="form" action="{{ route('complaint.complaint_reg') }}" method="post"  id="form-complaint">
								@csrf
							<div class="row">
							<label class="col-lg-3 col-form-label text-right">Cus Id:</label>
										<div class="col-lg-6">
											<input type="number" name="search" id="search"  class="form-control" placeholder="Enter Customer Id"/>
											<span class="form-text text-muted">Please enter Customer Id</span>


                                              @if ($message = Session::get('message'))
                                               <div>
                                                  <p class="text-center text-danger" style="font-size: 18px">{{ $message }}</p>
                                               </div>
                                              


                                              @elseif ($data = Session::get('data'))
                                               <div>
                                                  <p class="text-center text-danger" style="font-size: 18px">{{ $data }}</p>
                                               </div>
                                              @endif


											 {{-- @error('search')
												<p class="text-danger">{{ $message }}</p>
											 @enderror --}}

                                           


										</div>

										<div class="col-lg-3">
											<button type="submit" class="btn btn-success mr-2">Go</button>
											
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