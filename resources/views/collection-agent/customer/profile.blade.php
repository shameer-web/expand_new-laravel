@extends('layouts.collection_agent')


@section('content')

<div class="subheader py-2 py-lg-6  subheader-solid " id="kt_subheader">
    <div class=" container-fluid  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
		<!--begin::Info-->
        <div class="d-flex align-items-center flex-wrap mr-1">
							<!--begin::Mobile Toggle-->
				<button class="burger-icon burger-icon-left mr-4 d-inline-block d-lg-none" id="kt_subheader_mobile_toggle">
					<span></span>
				</button>
				<!--end::Mobile Toggle-->

			<!--begin::Page Heading-->
			<div class="d-flex align-items-baseline flex-wrap mr-5">
				<!--begin::Page Title-->
	            <h5 class="text-dark font-weight-bold my-1 mr-5">
	                Profile 	                	            </h5>
				<!--end::Page Title-->

	            					<!--begin::Breadcrumb-->
	                <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
	                    							
	                    							<li class="breadcrumb-item">
	                        	<a href="" class="text-muted">
	                            	Profile	                        	</a>
							</li>
	                    							
	                    							<li class="breadcrumb-item">
	                        	<a href="" class="text-muted">
	                            	Overview	                        	</a>
							</li>
	                    	                </ul>
					<!--end::Breadcrumb-->
	            			</div>
			<!--end::Page Heading-->
        </div>
		<!--end::Info-->

		
    
    </div>
</div>
<!--end::Subheader-->






<!--begin::Entry-->
<div class="d-flex flex-column-fluid">
		<!--begin::Container-->
		<div class=" container ">
			<!--begin::Profile Overview-->
<div class="d-flex flex-row">
    <!--begin::Aside-->
    <div class="flex-row-auto offcanvas-mobile w-300px w-xl-350px" id="kt_profile_aside">
        <!--begin::Profile Card-->
<div class="card card-custom card-stretch">
    <!--begin::Body-->
    <div class="card-body pt-4">
        <!--begin::Toolbar-->
    
        <!--end::Toolbar-->

        <!--begin::User-->
        <div class="d-flex align-items-center">
            <!-- <div class="symbol symbol-60 symbol-xxl-100 mr-5 align-self-start align-self-xxl-center">
                <div class="symbol-label" style="background-image:url('assets/media/users/300_21.jpg')"></div>
                <i class="symbol-badge bg-success"></i>
            </div> -->
            <div>
                <a href="#" class="font-weight-bolder font-size-h5 text-dark-75 text-hover-primary">
                   {{ $customer->name}}
                </a>
                
            </div>
        </div>
        <!--end::User-->

        <!--begin::Contact-->
        <div class="py-9">
            <div class="d-flex align-items-center justify-content-between mb-2">
                <span class="font-weight-bold mr-2">Email:</span>
                <a href="#" class="text-muted text-hover-primary">{{ $customer->email}}</a>
            </div>
            <div class="d-flex align-items-center justify-content-between mb-2">
                <span class="font-weight-bold mr-2">Phone:</span>
                <span class="text-muted">{{ $customer->mobile_number}}</span>
            </div>
            <div class="d-flex align-items-center justify-content-between">
                <span class="font-weight-bold mr-2">Location:</span>
                <span class="text-muted">{{ $customer->Area['area_name']}}</span>
            </div>
        </div>
        <!--end::Contact-->

        <!--begin::Nav-->
        <a href="#" id="overview_menu" class="btn btn-hover-light-primary font-weight-bold py-3 px-6 mb-2 text-center btn-block">
                    Profile Overview
                </a>
                <a href="#" id="personal_menu" class="btn btn-hover-light-primary font-weight-bold py-3 px-6 mb-2 text-center btn-block">
                    Personal info
                </a>
                <a href="#" id="device_menu" class="btn btn-hover-light-primary font-weight-bold py-3 px-6 mb-2 text-center btn-block">
                    Device Info
                </a>
                <a href="#" id="package_menu" class="btn btn-hover-light-primary font-weight-bold py-3 px-6 mb-2 text-center btn-block">
                    Package Info
                </a>
                <a href="#" id="service_menu" class="btn btn-hover-light-primary font-weight-bold py-3 px-6 mb-2 text-center btn-block">
                    Service Info
                </a>
               
        <!--end::Nav-->
    </div>
    <!--end::Body-->
</div>
<!--end::Profile Card-->
    </div>
    <!--end::Aside-->

    <!--begin::Content-->
    
    <!-- first nav start  -->




    <div class="flex-row-fluid ml-lg-8 first_div" id="first_div" style="display: none;">
        <!--begin::Row-->
        <div class="row">
            <div class="col-lg-6">


<!--begin::List Widget 14-->
                <div class="card card-custom card-stretch gutter-b">
                    <!--begin::Header-->
                    <div class="card-header border-0">
                        <h3 class="card-title font-weight-bolder text-dark">Packages</h3>
                        
                </div>
    <!--end::Header-->

    <!--begin::Body-->
                <div class="card-body pt-2">
                    <!--begin::Item-->
                    <div class="d-flex flex-wrap align-items-center mb-10">
                        <!--begin::Symbol-->
                        <!-- <div class="symbol symbol-60 symbol-2by3 flex-shrink-0 mr-4">
                            <div class="symbol-label" style="background-image: url('assets/media/stock-600x400/img-17.jpg')"></div>
                        </div> -->
                        <!--end::Symbol-->

                        <!--begin::Title-->
                        <div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pr-3">
                            <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg">
                                Cup & Green
                            </a>
                            <span class="text-muted font-weight-bold font-size-sm my-1">
                                Local, clean & environmental
                            </span>
                            <span class="text-muted font-weight-bold font-size-sm">
                                Created by: <span class="text-primary font-weight-bold">CoreAd</span>
                            </span>
                        </div>
                        <!--end::Title-->

            <!--begin::Info-->
                        <div class="d-flex align-items-center py-lg-0 py-2">
                            <div class="d-flex flex-column text-right">
                                <span class="text-dark-75 font-weight-bolder font-size-h4">
                                    24,900
                                </span>
                                <span class="text-muted font-size-sm font-weight-bolder">
                                    votes
                                </span>
                            </div>
                        </div>
                        <!--end::Info-->
                    </div>
            </div>
    <!--end::Body-->
</div>
<!--end::List Widget 14-->
            </div>
            <div class="col-lg-6">
                <!--begin::List Widget 10-->
<div class="card card-custom  card-stretch gutter-b">
    <!--begin::Header-->
    <div class="card-header border-0">
        <h3 class="card-title font-weight-bolder text-dark">Notifications</h3>
    
    </div>
    <!--end::Header-->

    <!--begin::Body-->
    <div class="card-body pt-0">
        
        <!--begin: Item-->
        <div class="">
            <!--begin::Content-->
            <div class="d-flex align-items-center flex-grow-1">
                <!--begin::Checkbox-->
               
                <!--end::Checkbox-->

                <!--begin::Section-->
                <div class="d-flex flex-wrap align-items-center justify-content-between w-100">
                    <!--begin::Info-->
                    <div class="d-flex flex-column align-items-cente py-2 w-75">
                        <!--begin::Title-->
                        <a href="#" class="text-dark-75 font-weight-bold text-hover-primary font-size-lg mb-1">
                            Data analytics research showcase
                        </a>
                        <!--end::Title-->

                        <!--begin::Data-->
                        <span class="text-muted font-weight-bold">
                            Due in 2 Days
                        </span>
                        <!--end::Data-->
                    </div>
                    <!--end::Info-->

                    <!--begin::Label-->
                    <span class="label label-lg label-light-warning label-inline font-weight-bold py-4">In Progress</span>
                    <!--end::Label-->
                </div>
                <!--end::Section-->
            </div>
            <!--end::Content-->
        </div>
        <!--end: Item-->
    </div>
    <!--end: Card Body-->
</div>
<!--end: Card-->
<!--end: List Widget 10-->
            </div>
        </div>
        <!--end::Row-->

        <!--begin::Advance Table: Widget 7-->
<div class="card card-custom gutter-b">
    <!--begin::Header-->
    <div class="card-header border-0 pt-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label font-weight-bolder text-dark">Complaints</span>
          
        </h3>
        <!-- <div class="card-toolbar">
            <ul class="nav nav-pills nav-pills-sm nav-dark-75">
                <li class="nav-item">
                    <a class="nav-link py-2 px-4" data-toggle="tab" href="#kt_tab_pane_1_1">Month</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link py-2 px-4" data-toggle="tab" href="#kt_tab_pane_1_2">Week</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link py-2 px-4 active" data-toggle="tab" href="#kt_tab_pane_1_3">Day</a>
                </li>
            </ul>
        </div> -->
    </div>
    <!--end::Header-->

    <!--begin::Body-->
    <div class="card-body py-2">
        <!--begin::Table-->
        <div class="table-responsive">
            <table class="table  table-vertical-center" >
                <thead>
                    <tr>
                        <th >ID</th>
                        <th >Customer</th>
                        <th >Complaint</th>
                        <th  >Status</th>
                        <th  >Payment</th>
                        <th >Date</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td >
                            1
                        </td>
                        <td >
                            nane
                        </td>
                        <td >
                            Network Error
                        </td>
                        <td >
                            <span class="label label-lg label-light-primary label-inline">Approved</span>
                        </td>
                        <td >
                        <span class="text-muted font-weight-bold">
                                Paid
                            </span>
                            
                        </td>
                        <td>
                            01-10-20
                        </td>
                    </tr>
                    
                    
                </tbody>
            </table>
        </div>
        <!--end::Table-->
    </div>
    <!--end::Body-->
</div>
<!--end::Advance Table Widget 7-->
    </div>
    <!-- end first nav  -->







     <!-- ********************************************second nav start ********************************* -->
     <div class="flex-row-fluid ml-lg-8" id="second1_div" style="display: none;">
		<!--begin::Card-->
		<div class="card card-custom card-stretch">
			<!--begin::Header-->
			
			<!--end::Header-->

			<!--begin::Form-->
			<form class="form">
				<!--begin::Body-->
				<div class="card-body">
					<div class="row">
						<label class="col-xl-3"></label>
						<div class="col-lg-9 col-xl-6">
							<h5 class="font-weight-bold mb-6">Customer Info</h5>
						</div>
					</div>
					<!-- <div class="form-group row">
						<label class="col-xl-3 col-lg-3 col-form-label">Avatar</label>
						<div class="col-lg-9 col-xl-6">
							<div class="image-input image-input-outline" id="kt_profile_avatar" style="background-image: url(assets/media/users/blank.png)">
                                <div class="image-input-wrapper" style="background-image: url(assets/media/users/300_21.jpg)"></div>

                                <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                                    <i class="fa fa-pen icon-sm text-muted"></i>
                                    <input type="file" name="profile_avatar" accept=".png, .jpg, .jpeg"/>
        							<input type="hidden" name="profile_avatar_remove"/>
                                </label>

        						<span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
                                    <i class="ki ki-bold-close icon-xs text-muted"></i>
                                </span>

                                <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="remove" data-toggle="tooltip" title="Remove avatar">
                                    <i class="ki ki-bold-close icon-xs text-muted"></i>
                                </span>
                            </div>
                            <span class="form-text text-muted">Allowed file types:  png, jpg, jpeg.</span>
						</div>
                    </div> -->
                    <div class="form-group row">
						<label class="col-xl-3 col-lg-3 col-form-label">Customer ID	</label>
						<div class="col-lg-9 col-xl-6">
							<input class="form-control form-control-lg form-control-solid" type="text" value="{{$customer->cust_id}}"/>
							
						</div>
					</div>
					<div class="form-group row">
						<label class="col-xl-3 col-lg-3 col-form-label"> Name</label>
						<div class="col-lg-9 col-xl-6">
							<input class="form-control form-control-lg form-control-solid" type="text" value="{{$customer->name}}"/>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-xl-3 col-lg-3 col-form-label">Sub Code</label>
						<div class="col-lg-9 col-xl-6">
							<input class="form-control form-control-lg form-control-solid" type="text" value="{{$customer->sub_code}}"/>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-xl-3 col-lg-3 col-form-label">Area ID</label>
						<div class="col-lg-9 col-xl-6">
							<input class="form-control form-control-lg form-control-solid" type="text" value="{{$customer->area}}"/>
							
						</div>
					</div>
					
					<div class="form-group row">
						<label class="col-xl-3 col-lg-3 col-form-label">CRF No</label>
						<div class="col-lg-9 col-xl-6">
							<input class="form-control form-control-lg form-control-solid" type="text" value="{{$customer->crf_no}}"/>
							
						</div>
					</div>
					<div class="form-group row">
						<label class="col-xl-3 col-lg-3 col-form-label">KSEB Post No</label>
						<div class="col-lg-9 col-xl-6">
							<input class="form-control form-control-lg form-control-solid" type="text" value="{{$customer->kseb_post_no}}"/>
							
						</div>
					</div>
					<div class="form-group row">
						<label class="col-xl-3 col-lg-3 col-form-label">Installation Address</label>
						<div class="col-lg-9 col-xl-6">
							<input class="form-control form-control-lg form-control-solid" type="text" value="{{ $customer->installation_address }}"/>
							
						</div>
					</div>

					<div class="form-group row">
						<label class="col-xl-3 col-lg-3 col-form-label">District</label>
						<div class="col-lg-9 col-xl-6">
							<input class="form-control form-control-lg form-control-solid" type="text" value="{{$customer->district}}"/>
							
						</div>
					</div>
					<div class="form-group row">
						<label class="col-xl-3 col-lg-3 col-form-label">Pin Code</label>
						<div class="col-lg-9 col-xl-6">
							<input class="form-control form-control-lg form-control-solid" type="text" value="{{$customer->pin_code}}"/>
							
						</div>
                    </div>

                    <div class="form-group row">
						<label class="col-xl-3 col-lg-3 col-form-label">Communication Address</label>
						<div class="col-lg-9 col-xl-6">
							<input class="form-control form-control-lg form-control-solid" type="text" value="{{$customer->communication_address}}"/>
							
						</div>
                    </div>
                    
                    <div class="form-group row">
						<label class="col-xl-3 col-lg-3 col-form-label">Customer Type</label>
						<div class="col-lg-9 col-xl-6">
                        @if($customer->customer_type==1)
                            <span class="label label-success label-inline mr-2">Prepaid</span>
                            @else
                            <span class="label label-primery label-inline mr-2">Pospaid</span>
                            @endif
						</div>
					</div>
                    
                   
					<div class="form-group row">
						<label class="col-xl-3 col-lg-3 col-form-label">ID Type</label>
						<div class="col-lg-9 col-xl-6">
							<input class="form-control form-control-lg form-control-solid" type="text" value="{{$customer->proof}}"/>
							
						</div>
					</div>


					
					<div class="form-group row">
						<label class="col-xl-3 col-lg-3 col-form-label">Phone</label>
						<div class="col-lg-9 col-xl-6">
							<input class="form-control form-control-lg form-control-solid" type="text" value="{{$customer->phone}}"/>
							
						</div>
					</div>
					<div class="form-group row">
						<label class="col-xl-3 col-lg-3 col-form-label">Mobile</label>
						<div class="col-lg-9 col-xl-6">
							<input class="form-control form-control-lg form-control-solid" type="text" value="{{$customer->mobile_number}}"/>
							
						</div>
					</div>


					<div class="form-group row">
						<label class="col-xl-3 col-lg-3 col-form-label">Email</label>
						<div class="col-lg-9 col-xl-6">
							<input class="form-control form-control-lg form-control-solid" type="text" value="{{$customer->email}}"/>
							<!-- <span class="label label-lg font-weight-bold label-light-danger label-inline">Regular</span> -->
							
						</div>
					</div>
					<div class="form-group row">
						<label class="col-xl-3 col-lg-3 col-form-label">Remarks</label>
						<div class="col-lg-9 col-xl-6">
							<input class="form-control form-control-lg form-control-solid" type="text" value="{{$customer->remark}}"/>
							
						</div>
					</div>
					<div class="form-group row">
						<label class="col-xl-3 col-lg-3 col-form-label">Created At</label>
						<div class="col-lg-9 col-xl-6">
							<input class="form-control form-control-lg form-control-solid" type="text" value="{{$customer->created_at}}"/>
							
						</div>
					</div>
					
					
					
					
				</div>
				<!--end::Body-->
			</form>
			<!--end::Form-->
		</div>
	</div>

    <!-- *********************************************second nav end *********************************** -->



    <!-- /**************************** third section start here ************************************************/ -->

    <div class="flex-row-fluid ml-lg-8" id="device_div" style="display: none;">
		<!--begin::Card-->
		<div class="card card-custom card-stretch">
			<!--begin::Header-->
			
			<!--end::Header-->

			<!--begin::Form-->
			<form class="form">
				<!--begin::Body-->
				<div class="card-body">
					<div class="row">
						<label class="col-xl-3"></label>
						<div class="col-lg-9 col-xl-6">
							<h5 class="font-weight-bold mb-6">Device Info</h5>
						</div>
                        
                        <button type="button" class="btn btn-outline-danger"> <i class="fa fa-plus" data-toggle="modal" data-target="#adddevice">Add Device</i></button>
                    


					</div>
					
					<div class="form-group row">
						<label class="col-xl-3 col-lg-3 col-form-label"> Device</label>
						<div class="col-lg-9 col-xl-6">
							<input class="form-control form-control-lg form-control-solid" type="text" value="{{$cdevice->deviceid}}"/>
						</div>
                    </div>
                    <div class="form-group row">
						<label class="col-xl-3 col-lg-3 col-form-label"> Device Company</label>
						<div class="col-lg-9 col-xl-6">
							<input class="form-control form-control-lg form-control-solid" type="text" value="{{$cdevice->company_name}}"/>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-xl-3 col-lg-3 col-form-label">Type</label>
						<div class="col-lg-9 col-xl-6">
							<input class="form-control form-control-lg form-control-solid" type="text" value="{{$cdevice->type_name}}"/>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-xl-3 col-lg-3 col-form-label">Device ID</label>
						<div class="col-lg-9 col-xl-6">
							<input class="form-control form-control-lg form-control-solid" type="text" value="{{$cdevice->device_id}}"/>
							
						</div>
					</div>
					<div class="form-group row">
						<label class="col-xl-3 col-lg-3 col-form-label">Serial Number	</label>
						<div class="col-lg-9 col-xl-6">
							<input class="form-control form-control-lg form-control-solid" type="text" value="{{$cdevice->serial_number}}"/>
							
						</div>
					</div>
					<div class="form-group row">
						<label class="col-xl-3 col-lg-3 col-form-label">Model</label>
						<div class="col-lg-9 col-xl-6">
							<input class="form-control form-control-lg form-control-solid" type="text" value="{{$cdevice->model_name}}"/>
							
						</div>
					</div>
					<div class="form-group row">
						<label class="col-xl-3 col-lg-3 col-form-label">District</label>
						<div class="col-lg-9 col-xl-6">
							<input class="form-control form-control-lg form-control-solid" type="text" value="{{$cdevice->district_name}}"/>
							
						</div>
					</div>
					

					
					<div class="form-group row">
						<label class="col-xl-3 col-lg-3 col-form-label">LCO ID</label>
						<div class="col-lg-9 col-xl-6">
							<input class="form-control form-control-lg form-control-solid" type="text" value="{{$cdevice->loc_name}}"/>
							
						</div>
					</div>


					


					
					
					
					
				</div>
				<!--end::Body-->
			</form>
			<!--end::Form-->
		</div>
    </div>
    
    <div class="modal fade" id="adddevice" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" >New Device</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('cust.device') }}" method="post">
                    @csrf
								
                        <div class="form-group">
                            <label  class="form-control-label">Device :</label>
                            <select class="form-control " id="kt_select2_2" name="deviceid">
                                <option selected="selected">Select Device</option>
                                
                                @foreach($device as $row)
                                <option value="{{$row->id}}">{{$row->deviceid}}</option>
                                @endforeach
                            </select>
                        </div>
                        <input type="hidden" name="status" value="{{$customer->id}}" >
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" id="kt_blockui_modal_default_btn">Add</button>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
    </div>

    <!-- /**************************** third section end  here ************************************************/ -->

    <!-- ********************************** Package section start here ******************************************* -->

    <div class="flex-row-fluid ml-lg-8" id="package_div" style="display: none;">
        <!--begin::Row-->
        <div class="row">
            <div class="col-lg-6">


<!--begin::List Widget 14-->

<!--end::List Widget 14-->
            </div>
            
        </div>
        <!--end::Row-->

        <!--begin::Advance Table: Widget 7-->
    <div class="card card-custom gutter-b">
    <!--begin::Header-->
        <div class="card-header border-0 pt-5">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label font-weight-bolder text-dark">Package</span>
                
            </h3>
            <button type="button" class="btn btn-outline-danger"> <i class="fa fa-plus" data-toggle="modal" data-target="#addpackage">Add Package</i></button>
        </div>
    <!--end::Header-->
        <div class="modal fade" id="addpackage" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" >New Package</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('cust.package')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label  class="form-control-label">Package Name:</label>
                            <select class="form-control " id="kt_select2_1" name="package_name">
                                <option selected="selected">Select Package</option>
                                @foreach($package as $p)
                                <option value="{{$p->id}}">{{$p->package_name}}</option>
                                @endforeach
                                
                                
                            </select>
                            <input type="hidden" name="cus_id" value="{{ $customer->id}} ">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Add</button>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
    <!--begin::Body-->
    <div class="card-body py-2">
        <!--begin::Table-->
        <div class="table-responsive">
            <table class="table table-borderless table-vertical-center">
                <thead>
                    <tr>
                        <th>Package Name</th>
                        <th>Amount </th>
                        <th >Type</th>
                        <th >Status</th>
                        <th >Payment Status</th>
                        <th >Payment</th>
                        <th >Date</th>

                        
                    </tr>
                </thead>
                    <tbody>
                        @foreach($pkg as $pk)
                        <tr>
                            <td >
                                {{$pk->pname}}
                            </td>
                            
                            <td>
                           
                            <span class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                {{$pk->price}}
                                </span>  
                            </td>
                            <td >
                                
                            <span class="label label-lg label-light-success label-inline">{{$pk->ptype}}</span>
                            </td>

                                @if($pk->package_status == 0) 
                                    <td><button class="badge btn btn-danger" type="submit">in-active</button></td>
                                @else
                                     <td><button class="badge btn btn-success" type="submit">active</button></td>
                                @endif


                                @if($pk->payment_status == 0) 
                                   <td><button class="badge btn btn-danger" type="submit">pending</button></td>
                                @else
                                   <td><button class="badge btn btn-success" type="submit">success</button></td>
                                @endif
                                <td>
                                    <button class="badge btn btn-primary" type="submit">Pay</button>
                                </td>


                            
                            <td>
                            {{$pk->date}}
                            </td>
                            
                        </tr>
                        @endforeach
                    
                        
                        
                        
                    </tbody>
                </table>
                </div>
                <!--end::Table-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::Advance Table Widget 7-->
    </div>


    <!-- *************************************** End Package section here ***************************************** -->

    <!-- ******************************************** Service Section Start Here ************************************ -->

    <div class="flex-row-fluid ml-lg-8" id="service_div" style="display: none;">
        <!--begin::Row-->
        <div class="row">
            <div class="col-lg-6">


<!--begin::List Widget 14-->

<!--end::List Widget 14-->
            </div>
            
        </div>
        <!--end::Row-->

        <!--begin::Advance Table: Widget 7-->
        <div class="card card-custom gutter-b">
            <!--begin::Header-->
            <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <!-- <span class="card-label font-weight-bolder text-dark">Service</span> -->
                    <button type="button" class="btn btn-outline-danger"> <i class="fa fa-plus" data-toggle="modal" data-target="#addservice">Add Service</i></button>
                </h3>
                
            </div>
    <!--end::Header-->

            <div class="modal fade" id="addservice" tabindex="-1" role="dialog"  aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" >Create Service</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <label  class="form-control-label">Service Name:</label>
                                    <input type="text" class="form-control" />
                                </div>
                                

                                <div class="form-group">
                                    <label  class="form-control-label">Package Price:</label>
                                    <input type="text" class="form-control" />
                                </div>
                                
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" data-dismiss="modal" id="kt_blockui_modal_default_btn">Save</button>
                        </div>
                    </div>
                </div>
            </div>

    <!--begin::Body-->
            <div class="card-body py-2">
                <!--begin::Table-->
                <div class="table-responsive">
                    <table class="table table-borderless table-vertical-center">
                        <thead>
                            <tr>
                                <th class="p-0" ></th>
                                <th class="p-0" ></th>
                                <th class="p-0" ></th>
                                <th class="p-0" ></th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="pl-0">
                                    <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">11-02-20</a>
                                    
                                </td>
                                
                                <td class="pl-0">
                                    <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Service</a>
                                    
                                </td>
                                <td class="text-right">
                                    <span class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                        500 INR
                                    </span>
                                
                                </td>
                                
                                <td class="text-right">
                                    <span class="label label-lg label-light-success label-inline">Paid</span>
                                </td>
                                
                            </tr>
                            <tr>
                                <td class="pl-0">
                                    <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">11-02-20</a>
                                    
                                </td>
                                <td class="pl-0">
                                    <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Service2</a>
                                    
                                </td>
                                <td class="text-right">
                                    <span class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                        1299 INR
                                    </span>
                                
                                </td>
                                
                                
                                <td class="text-right">
                                    <span class="label label-lg label-light-success label-inline">Paid</span>
                                </td>
                                
                            </tr>
                            <tr>
                                <td class="pl-0">
                                    <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">11-02-20</a>
                                    
                                </td>
                                <td class="pl-0">
                                    <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Service3</a>
                                
                                </td>
                                <td class="text-right">
                                    <span class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                        00 INR
                                    </span>
                                    
                                </td>
                                
                                <td class="text-right">
                                    <span class="label label-lg label-light-warning label-inline">Free</span>
                                </td>
                                
                            </tr>
                            
                            
                        </tbody>
                    </table>
                </div>
                <!--end::Table-->
            </div>
            <!--end::Body-->
        </div>
<!--end::Advance Table Widget 7-->
    </div>

    <!-- ************************************************** Service Section End Here ********************************* -->


    <!--end::Content-->
</div>
<!--end::Profile Overview-->
		</div>
		<!--end::Container-->
	</div>
<!--end::Entry-->
@endsection


@section('css')

      <link href="{{asset('assets/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />
      <script src="{{asset('assets/js/pages/crud/forms/widgets/select2.js')}}"></script>
      
@endsection



@section('script')

<script src="{{asset('assets/js/pages/crud/ktdatatable/base/html-table.js')}}"></script>
<script>
    $("#first_div").show();
    $("#overview_menu").addClass('active');
    $("#second1_div").hide();
    $("#device_div").hide();
    $("#package_div").hide();
    $("#service_div").hide();
    

    $("#overview_menu").click(function(){
        $("#first_div").show();
        $("#second1_div").hide();
        $("#second1_div").hide();
        $("#overview_menu").addClass('active');
        $("#personal_menu").removeClass('active');
        $("#device_menu").removeClass('active');     
        $("#package_menu").removeClass('active');
        $("#service_menu").removeClass('active');
    })
    $("#personal_menu").click(function(){
        $("#first_div").hide();
        $("device_div").hide();
        $("#second1_div").show();
        $("#overview_menu").removeClass('active');
        $("#personal_menu").addClass('active');
        $("#device_menu").removeClass('active');   
        $("#package_menu").removeClass('active');
        $("#service_menu").removeClass('active');  
    })
    $("#device_menu").click(function(){
        $("#first_div").hide();
        $("#second1_div").hide();
        $("#device_div").show();
        $("#overview_menu").removeClass('active');
        $("#personal_menu").removeClass('active');
        $("#device_menu").addClass('active');  
        $("#package_menu").removeClass('active');
        $("#service_menu").removeClass('active');  
    })
    $("#package_menu").click(function(){
        $("#first_div").hide();
        $("#second1_div").hide();
        $("#device_div").hide();
        $("#package_div").show();
        $("#overview_menu").removeClass('active');
        $("#personal_menu").removeClass('active');
        $("#device_menu").removeClass('active'); 
        $("#package_menu").addClass('active');
        $("#service_menu").removeClass('active'); 
    })

    $("#service_menu").click(function(){
        $("#first_div").hide();
        $("#second1_div").hide();
        $("#device_div").hide();
        $("#package_div").hide();
        $("#service_div").show();
        $("#overview_menu").removeClass('active');
        $("#personal_menu").removeClass('active');
        $("#device_menu").removeClass('active'); 
        $("#package_menu").removeClass('active');
        $("#service_menu").addClass('active');
    })
   

</script>

@endsection