@extends('layouts.admin')


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
	                Customer Details & Complaints                	            </h5>
				<!--end::Page Title-->

	            					<!--begin::Breadcrumb-->
	                <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
	                    							
	                    							<li class="breadcrumb-item">
	                        	<a href="" class="text-muted">
	                            	Complaints	                        	</a>
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
             <div class="text-center">
                   <h1><b>CUSTOMER</b></h1>
             </div>
<div class="d-flex flex-row pt-5">

    <!--begin::Aside-->
    <div class="flex-row-auto offcanvas-mobile w-300px w-xl-350px" id="kt_profile_aside">
        <!--begin::Profile Card-->

<div class="card card-custom card-stretch">
    <!--begin::Body-->

    <div class="card-body pt-4">
        <!--begin::Toolbar-->
    
        <!--end::Toolbar-->

        <!--begin::User-->
       {{--  <div class="d-flex align-items-center">
            
            <div>
                <a href="#" class="font-weight-bolder font-size-h5 text-dark-75 text-hover-primary">
                   name
                </a>
                
            </div>
        </div> --}}
        <!--end::User-->

        <!--begin::Contact-->
        <div class="py-9">
            <div class="d-flex align-items-center justify-content-between mb-2">
                <span class="font-weight-bold mr-2">Name:</span>
                <a href="#" class="text-muted text-hover-primary">Sandeep</a>
            </div>
            <div class="d-flex align-items-center justify-content-between mb-2">
                <span class="font-weight-bold mr-2">Customer Id:</span>
                <span class="text-muted">03-KM-1217</span>
            </div>
            <div class="d-flex align-items-center justify-content-between">
                <span class="font-weight-bold mr-2">KSEB Post No</span>
                <span class="text-muted">AK 31C</span>
            </div>

            <div class="d-flex align-items-center justify-content-between">
                <span class="font-weight-bold mr-2">Installation Address</span>
                <span class="text-muted">Sneham Thattil
                    <br>Kttakkalam
                    <br>cct</span>
            </div>

            <div class="d-flex align-items-center justify-content-between">
                <span class="font-weight-bold mr-2">Phone</span>
                <span class="text-muted">155485256</span>
            </div>

            <div class="d-flex align-items-center justify-content-between">
                <span class="font-weight-bold mr-2">Mobile</span>
                <span class="text-muted">84154544</span>
            </div>

             <div class="d-flex align-items-center justify-content-between">
                <span class="font-weight-bold mr-2">Remark</span>
                <span class="text-muted"></span>
            </div>


        </div>
        <!--end::Contact-->

        <!--begin::Nav-->
       {{--  <a href="#" id="overview_menu" class="btn btn-hover-light-primary font-weight-bold py-3 px-6 mb-2 text-center btn-block">
                    Profile Overview
                </a> --}}
                <a href="#" id="complaint" class="btn btn-hover-light-primary font-weight-bold py-3 px-6 mb-2 text-center btn-block">
                    Complaint Register
                </a>
                <a href="#" id="active_deactive" class="btn btn-hover-light-primary font-weight-bold py-3 px-6 mb-2 text-center btn-block">
                    Active/Deactive Request
                </a>

                <a href="#" id="reports" class="btn btn-hover-light-primary font-weight-bold py-3 px-6 mb-2 text-center btn-block">
                   Reports
                </a>
                <a href="#" id="payreports" class="btn btn-hover-light-primary font-weight-bold py-3 px-6 mb-2 text-center btn-block">
                     Payreport- Cable TV
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
               
<!--end::List Widget 14-->
            </div>
         
        </div>
        <!--end::Row-->

        <!--begin::Advance Table: Widget 7-->
<div class="card card-custom gutter-b">
    <!--begin::Header-->
    <div class="card-header border-0 pt-5">
        {{-- <h3 class="card-title align-items-start flex-column text-center">
            <span class="card-label font-weight-bolder text-dark ">Cable TV</span>
          
        </h3> --}}
        <div class="bg-light w-100 h-10">
             <h3 style="margin-left:200px;margin-top: 10px">Cable TV</h3> 
        </div>
       
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
                        <th >Type</th>
                        <th >Digital</th>
                        <th  >Active</th>
                        <th  ></th>
                        <th >Date</th>
                        <th>20-12-09</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td >
                            package
                        </td>
                        <td >
                            JKM1215
                        </td>
                        <td >
                            Credict limit
                        </td>
                        <td >
                            300
                        </td>
                        <td >
                       
                            CRF NO
                        </td>
                        <td>
                            KL10J132421552
                        </td>
                    </tr>



                     <tr>
                        <td >
                            Rate
                        </td>
                        <td >
                            215
                        </td>
                        <td >
                           Balance
                        </td>
                        <td style="color: red" >
                            522.2
                        </td>
                        <td >
                       
                            Device
                        </td>
                        <td>
                           1234567890000
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
			{{-- <form class="form">
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
							<input class="form-control form-control-lg form-control-solid" type="text" value="cust_id}}"/>
							
						</div>
					</div>

                    <div class="form-group row">
                        <label class="col-xl-3 col-lg-3 col-form-label">Area Subcode Id </label>
                        <div class="col-lg-9 col-xl-6">
                            <input class="form-control form-control-lg form-control-solid" type="text" value="area_subcode_id}}"/>
                            
                        </div>
                    </div>


                    <div class="form-group row">
                        <label class="col-xl-3 col-lg-3 col-form-label">Enquiry Id </label>
                        <div class="col-lg-9 col-xl-6">
                            <input class="form-control form-control-lg form-control-solid" type="text" value="enqid}}"/>
                            
                        </div>
                    </div>


					<div class="form-group row">
						<label class="col-xl-3 col-lg-3 col-form-label"> Name</label>
						<div class="col-lg-9 col-xl-6">
							<input class="form-control form-control-lg form-control-solid" type="text" value="name}}"/>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-xl-3 col-lg-3 col-form-label">Sub Code</label>
						<div class="col-lg-9 col-xl-6">
							<input class="form-control form-control-lg form-control-solid" type="text" value="Subcode['subcode']}}"/>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-xl-3 col-lg-3 col-form-label">Area ID</label>
						<div class="col-lg-9 col-xl-6">
							<input class="form-control form-control-lg form-control-solid" type="text" value="Area['area_name']}}"/>
							
						</div>
					</div>
					
					<div class="form-group row">
						<label class="col-xl-3 col-lg-3 col-form-label">CRF No</label>
						<div class="col-lg-9 col-xl-6">
							<input class="form-control form-control-lg form-control-solid" type="text" value="crf_no}}"/>
							
						</div>
					</div>
					<div class="form-group row">
						<label class="col-xl-3 col-lg-3 col-form-label">KSEB Post No</label>
						<div class="col-lg-9 col-xl-6">
							<input class="form-control form-control-lg form-control-solid" type="text" value="kseb_post_no}}"/>
							
						</div>
					</div>
					<div class="form-group row">
						<label class="col-xl-3 col-lg-3 col-form-label">Installation Address</label>
						<div class="col-lg-9 col-xl-6">
							<input class="form-control form-control-lg form-control-solid" type="text" value="installation_address }}"/>
							
						</div>
					</div>

					<div class="form-group row">
						<label class="col-xl-3 col-lg-3 col-form-label">District</label>
						<div class="col-lg-9 col-xl-6">
							<input class="form-control form-control-lg form-control-solid" type="text" value="District['district_name']}}"/>
							
						</div>
					</div>
					<div class="form-group row">
						<label class="col-xl-3 col-lg-3 col-form-label">Pin Code</label>
						<div class="col-lg-9 col-xl-6">
							<input class="form-control form-control-lg form-control-solid" type="text" value="pin_code}}"/>
							
						</div>
                    </div>

                    <div class="form-group row">
						<label class="col-xl-3 col-lg-3 col-form-label">Communication Address</label>
						<div class="col-lg-9 col-xl-6">
							<input class="form-control form-control-lg form-control-solid" type="text" value="communication_address}}"/>
							
						</div>
                    </div>


                    <div class="form-group row">
                        <label class="col-xl-3 col-lg-3 col-form-label">District</label>
                        <div class="col-lg-9 col-xl-6">
                            <input class="form-control form-control-lg form-control-solid" type="text" value="District1['district_name']}}"/>
                            
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-xl-3 col-lg-3 col-form-label">Pin Code</label>
                        <div class="col-lg-9 col-xl-6">
                            <input class="form-control form-control-lg form-control-solid" type="text" value="pin_code1}}"/>
                            
                        </div>
                    </div>
                    
                    <div class="form-group row">
						<label class="col-xl-3 col-lg-3 col-form-label">Customer Type</label>
						<div class="col-lg-9 col-xl-6">
                       dfghjkl
						</div>
					</div>
                    
                   
					<div class="form-group row">
						<label class="col-xl-3 col-lg-3 col-form-label">ID Type</label>
						<div class="col-lg-9 col-xl-6">

                            sdfghjkl

							
						</div>
					</div>


                    <div class="form-group row">
                        <label class="col-xl-3 col-lg-3 col-form-label">Id Proof Number</label>
                        <div class="col-lg-9 col-xl-6">
                            <input class="form-control form-control-lg form-control-solid" type="text" value="id_proof_number}}"/>
                            
                        </div>
                    </div>


					
					<div class="form-group row">
						<label class="col-xl-3 col-lg-3 col-form-label">Phone</label>
						<div class="col-lg-9 col-xl-6">
							<input class="form-control form-control-lg form-control-solid" type="text" value="phone}}"/>
							
						</div>
					</div>
					<div class="form-group row">
						<label class="col-xl-3 col-lg-3 col-form-label">Mobile</label>
						<div class="col-lg-9 col-xl-6">
							<input class="form-control form-control-lg form-control-solid" type="text" value="mobile_number}}"/>
							
						</div>
					</div>


					<div class="form-group row">
						<label class="col-xl-3 col-lg-3 col-form-label">Email</label>
						<div class="col-lg-9 col-xl-6">
							<input class="form-control form-control-lg form-control-solid" type="text" value="email}}"/>
							<!-- <span class="label label-lg font-weight-bold label-light-danger label-inline">Regular</span> -->
							
						</div>
					</div>
					<div class="form-group row">
						<label class="col-xl-3 col-lg-3 col-form-label">Remarks</label>
						<div class="col-lg-9 col-xl-6">
							<input class="form-control form-control-lg form-control-solid" type="text" value="remark}}"/>
							
						</div>
					</div>
					<div class="form-group row">
						<label class="col-xl-3 col-lg-3 col-form-label">Created At</label>
						<div class="col-lg-9 col-xl-6">
							<input class="form-control form-control-lg form-control-solid" type="text" value="created_at}}"/>
							
						</div>
					</div>
					
					
					
					
				</div>
				<!--end::Body-->
			</form> --}}

            <form class="form" action="#" method="post">
                                @csrf
                                <div class="card-body">
                                    <div class="row">
                                   <label class="col-xl-3"></label>
                                    <div class="col-lg-9 col-xl-6">
                                        <h5 class="font-weight-bold mb-6">Complaint Register</h5>
                                    </div>
                        
                                    </div>
                                    <div class="form-group row mt-3">
                                        

                                         <label class="col-lg-2 col-form-label text-right">Customer Name:</label>
                                       {{--  <div class="col-lg-3">
                                            <div class="input-group">
                                                



                                                <select class="form-control  "  name="customer_name">
                                                            @foreach($customer as $row)
                                                            <option value="{{ $row->id }}">{{ $row->name }}</option>
                                                            
                                                             @endforeach
                                                    
                                                    
                                                   
                                                </select>
                                                
                                            </div>
                                            <span class="form-text text-muted">Please select your customer</span>
                                        </div> --}}

                                         <div class="col-lg-3">
                                            <input type="text" name="name"  class="form-control" placeholder="Enter Name"/>
                                            <span class="form-text text-muted">Please enter name</span>
                                        </div>


                                        <label class="col-lg-2 col-form-label text-right">Phone No:</label>
                                        <div class="col-lg-3">
                                            <input type="number" name="phone_no"  class="form-control" placeholder="Enter Phone No"/>
                                            <span class="form-text text-muted">Please enter Phone number</span>
                                        </div>



                                        
                                    </div>
                                    <div class="form-group row">


                                        <label class="col-lg-2 col-form-label text-right">Email Id:</label>
                                        <div class="col-lg-3">
                                            <input type="email" name="email"  class="form-control" placeholder="Enter Email Id"/>
                                            <span class="form-text text-muted">Please enter Email Id</span>
                                        </div>



                                        <label class="col-lg-2 col-form-label text-right">Staff:</label>
                                       {{--  <div class="col-lg-3">
                                            <div class="input-group">
                                                



                                                <select class="form-control  "  name="staff">
                                                            @foreach($user as $row)
                                                            <option value="{{ $row->id }}">{{ $row->name }}</option>
                                                            
                                                             @endforeach
                                                    
                                                    
                                                   
                                                </select>
                                                
                                            </div>
                                            <span class="form-text text-muted">Please enter your address</span>
                                        </div> --}}
                                         <div class="col-lg-3">
                                            <input type="text" name="Staff"  class="form-control" placeholder="Enter Staff Name"/>
                                            <span class="form-text text-muted">Please enter staff name</span>
                                        </div>


                                        
                                    </div>

                                    <div class="form-group row">


                                        <label class="col-lg-2 col-form-label text-right">KSEB Post No:</label>
                                        <div class="col-lg-3">
                                            <input type="text" name="post_no"  class="form-control" placeholder="Enter KSEB Post No"/>
                                            <span class="form-text text-muted">Please enter KSEB Post No</span>
                                        </div>

                                        <label class="col-lg-2 col-form-label text-right">Complaint's:</label>
                                        <div class="col-lg-3">
                                            <div class="input-group">
                                                



                                                {{-- <select class="form-control  "  name="complaint">
                                                    <option selected="selected">Select User</option>
                                                    <option value="Rahul">Rahul</option>
                                                    <option value="Ram">Ram</option>
                                                    <option value="prem">Prem</option>
                                                    
                                                    
                                                   
                                                </select> --}}


                                                 <select name="complaint[]" class="form-control selectpicker select2" id="kt_select2_3" placeholder=""  multiple="multiple" style="width: 100%" >

                                                             
                                                            {{--  @foreach($complainttype as $row)
                                                            <option value="{{ $row->id }}" >{{ $row->complainttype }}</option>
                                                             @endforeach --}}
                                                             <option value="1">connection</option>
                                                             <option value="1">connection</option>
                                                             <option value="1">connection</option>
                                                             
                                                            
                                                            
                                                 </select>

                                                
                                            </div>
                                            <span class="form-text text-muted">Please select your complaint's</span>
                                        </div>

                                        
                                        

                                    </div>

                                    <div class="form-group row">

                                        <label class="col-lg-2 col-form-label text-right">Other complaint:</label>
                                        <div class="col-lg-3">
                                            <input type="text" name="other_complaint"  class="form-control" placeholder="Enter other_complaint"/>
                                            <span class="form-text text-muted">Please enter other complaint</span>
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
	</div>

    <!-- *********************************************second nav end *********************************** -->



    <!-- /**************************** third section start here ************************************************/ -->

    <div class="flex-row-fluid ml-lg-8" id="device_div" style="display: none;">
		<!--begin::Card-->
		<div class="card card-custom card-stretch">
			<!--begin::Header-->
			
			<!--end::Header-->

			<!--begin::Form-->
			<form class="form" action="#" method="post">
                @csrf
				<!--begin::Body-->
				<div class="card-body">
					<div class="row">
						<label class="col-xl-3"></label>
						<div class="col-lg-9 col-xl-6">
							<h5 class="font-weight-bold mb-6">Active/Deactive Request</h5>
						</div>
                        
                       {{--  <button type="button" class="btn btn-outline-danger"> <i class="fa fa-plus" data-toggle="modal" data-target="#adddevice">Add Device</i></button> --}}
                    


					</div>
					
					<div class="form-group row">
						<label class="col-xl-3 col-lg-3 col-form-label"> Phone</label>
						<div class="col-lg-9 col-xl-6">
							<input class="form-control form-control-lg form-control-solid" type="number" />
						</div>
                    </div>
                    <div class="form-group row">
						<label class="col-xl-3 col-lg-3 col-form-label"> Mobile</label>
						<div class="col-lg-9 col-xl-6">
							<input class="form-control form-control-lg form-control-solid" type="number" />
						</div>
					</div>
					<div class="form-group row">
						<label class="col-xl-3 col-lg-3 col-form-label">KSEB No</label>
						<div class="col-lg-9 col-xl-6">
							<input class="form-control form-control-lg form-control-solid" type="text" />
						</div>
					</div>
					<div class="form-group row">
						<label class="col-xl-3 col-lg-3 col-form-label">Staff</label>
						<div class="col-lg-9 col-xl-6">
							<input class="form-control form-control-lg form-control-solid" type="text" />
							
						</div>
					</div>
					<div class="form-group row">
						<label class="col-xl-3 col-lg-3 col-form-label">Service</label>
						<div class="col-lg-9 col-xl-6">
							<input class="form-control form-control-lg form-control-solid" type="text"/>
							
						</div>
					</div>
					<div class="form-group row">
						<label class="col-xl-3 col-lg-3 col-form-label">Request</label>
						<div class="col-lg-9 col-xl-6">
							<input class="form-control form-control-lg form-control-solid" type="text"/>
							
						</div>
					</div>
					<div class="form-group row">
						<label class="col-xl-3 col-lg-3 col-form-label">Date</label>
						<div class="col-lg-9 col-xl-6">
							<input class="form-control form-control-lg form-control-solid" type="text"/>
							
						</div>
					</div>
					

					
					<div class="card-footer">
                                    <div class="row">
                                        <div class="col-lg-2"></div>
                                        <div class="col-lg-10">
                                            <button type="submit" class="btn btn-success mr-2">Add</button>
                                            <button type="reset" class="btn btn-secondary">Cancel</button>
                                        </div>
                                    </div>
                    </div>


					


					
					
					
					
				</div>
				<!--end::Body-->
			</form>
			<!--end::Form-->
		</div>
    </div>
    
   {{--  <div class="modal fade" id="adddevice" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" >New Device</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="post">
                    @csrf
								
                        <div class="form-group">
                            <label  class="form-control-label">Device :</label>
                            <select class="form-control " id="kt_select2_2" name="deviceid">
                                <option selected="selected">Select Device</option>
                                
                              
                            </select>
                        </div>
                        <input type="hidden" name="status" value="id}}" >
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" id="kt_blockui_modal_default_btn">Add</button>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
    </div> --}}

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
                <span class="card-label font-weight-bolder text-dark">Payreport</span>
                
            </h3>
          {{--   <button type="button" class="btn btn-outline-danger"> <i class="fa fa-plus" data-toggle="modal" data-target="#addpackage">Add Package</i></button> --}}
        </div>
    <!--end::Header-->
    {{-- <div class="modal fade" id="addpackage" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" >New Package</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="POST">
                        @csrf
                        <div class="form-group">
                            <label  class="form-control-label">Package Name:</label>
                            <select class="form-control " id="kt_select2_1" name="package_name">
                                <option selected="selected">Select Package</option>
                               
                                
                                
                            </select>
                            <input type="hidden" name="cus_id" value="->id}} ">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Add</button>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
    </div> --}}
    <!--begin::Body-->
    <div class="card-body py-2">
        <!--begin::Table-->
        <div class="table-responsive">
            <table class="table table-bordered  table-vertical-center">
                <thead>
                    <tr>
                        <th colspan="2">Bill Durations</th>
                        <th>Previous Balance</th>
                        <th >Current Bill Amount</th>
                        <th >Tax</th>
                        <th >Total</th>
                        <th >Pay date</th>
                        <th >Payment Recieved</th>
                        <th >Balance</th>
                        <th >Mode</th>


                        
                    </tr>
                </thead>
                    <tbody>
                        
                        <tr>
                            <td>19-10-2010</td>
                         
                            <td>23-10-2010</td>
                           
                            <td>0</td> 
                            
                            <td > 90</td>
                            <td>17.1</td>
                            <td>107.1</td>   
                            <td></td>
                            <td></td> 
                            <td></td>
                            <td></td> 
                            
                        </tr>


                        <tr>
                            <td>13-10-2010</td>
                         
                            <td>29-10-2010</td>
                           
                            <td>107</td> 
                            
                            <td >215</td>
                            <td>40.85</td>
                            <td>362.95</td>   
                            <td></td>
                            <td></td> 
                            <td></td>
                            <td></td> 
                            
                        </tr>



                        <tr class="bg-light">
                            <td></td>
                         
                            <td></td>
                           
                            <td>362</td> 
                            
                            <td ></td>
                            <td></td>
                            <td></td>   
                            <td>12-10-2010</td>
                            <td>360</td> 
                            <td>2.95</td>
                            <td>Thanka-C.P</td> 
                            
                        </tr>


                        <tr>
                            <td>19-10-2010</td>
                         
                            <td>23-10-2010</td>
                           
                            <td>0</td> 
                            
                            <td > 90</td>
                            <td>17.1</td>
                            <td>107.1</td>   
                            <td></td>
                            <td></td> 
                            <td></td>
                            <td></td> 
                            
                        </tr>


                        <tr>
                            <td>13-10-2010</td>
                         
                            <td>29-10-2010</td>
                           
                            <td>107</td> 
                            
                            <td >215</td>
                            <td>40.85</td>
                            <td>362.95</td>   
                            <td></td>
                            <td></td> 
                            <td></td>
                            <td></td> 
                            
                        </tr>



                        <tr class="bg-light">
                            <td></td>
                         
                            <td></td>
                           
                            <td>362</td> 
                            
                            <td ></td>
                            <td></td>
                            <td></td>   
                            <td>12-10-2010</td>
                            <td>360</td> 
                            <td>2.95</td>
                            <td>Thanka-C.P</td> 
                            
                        </tr>
                        


                        <tr>
                            <td>19-10-2010</td>
                         
                            <td>23-10-2010</td>
                           
                            <td>0</td> 
                            
                            <td > 90</td>
                            <td>17.1</td>
                            <td>107.1</td>   
                            <td></td>
                            <td></td> 
                            <td></td>
                            <td></td> 
                            
                        </tr>


                        <tr>
                            <td>13-10-2010</td>
                         
                            <td>29-10-2010</td>
                           
                            <td>107</td> 
                            
                            <td >215</td>
                            <td>40.85</td>
                            <td>362.95</td>   
                            <td></td>
                            <td></td> 
                            <td></td>
                            <td></td> 
                            
                        </tr>



                        <tr class="bg-light">
                            <td></td>
                         
                            <td></td>
                           
                            <td>362</td> 
                            
                            <td ></td>
                            <td></td>
                            <td></td>   
                            <td>12-10-2010</td>
                            <td>360</td> 
                            <td>2.95</td>
                            <td>Thanka-C.P</td> 
                            
                        </tr>
                        

                        <tr>
                            <td>19-10-2010</td>
                         
                            <td>23-10-2010</td>
                           
                            <td>0</td> 
                            
                            <td > 90</td>
                            <td>17.1</td>
                            <td>107.1</td>   
                            <td></td>
                            <td></td> 
                            <td></td>
                            <td></td> 
                            
                        </tr>


                        <tr>
                            <td>13-10-2010</td>
                         
                            <td>29-10-2010</td>
                           
                            <td>107</td> 
                            
                            <td >215</td>
                            <td>40.85</td>
                            <td>362.95</td>   
                            <td></td>
                            <td></td> 
                            <td></td>
                            <td></td> 
                            
                        </tr>



                        <tr class="bg-light">
                            <td></td>
                         
                            <td></td>
                           
                            <td>362</td> 
                            
                            <td ></td>
                            <td></td>
                            <td></td>   
                            <td>12-10-2010</td>
                            <td>360</td> 
                            <td>2.95</td>
                            <td>Thanka-C.P</td> 
                            
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
        $("#complaint").removeClass('active');
        $("#active_deactive").removeClass('active');     
        $("#payreports").removeClass('active');
        $("#service_menu").removeClass('active');
    })
    $("#complaint").click(function(){
        $("#first_div").hide();
        $("device_div").hide();
        $("#second1_div").show();
        $("#overview_menu").removeClass('active');
        $("#complaint").addClass('active');
        $("#active_deactive").removeClass('active');   
        $("#payreports").removeClass('active');
        $("#service_menu").removeClass('active');  
    })
    $("#active_deactive").click(function(){
        $("#first_div").hide();
        $("#second1_div").hide();
        $("#device_div").show();
        $("#overview_menu").removeClass('active');
        $("#complaint").removeClass('active');
        $("#active_deactive").addClass('active');  
        $("#payreports").removeClass('active');
        $("#service_menu").removeClass('active');  
    })
    $("#payreports").click(function(){
        $("#first_div").hide();
        $("#second1_div").hide();
        $("#device_div").hide();
        $("#package_div").show();
        $("#overview_menu").removeClass('active');
        $("#complaint").removeClass('active');
        $("#active_deactive").removeClass('active'); 
        $("#payreports").addClass('active');
        $("#service_menu").removeClass('active'); 
    })

    $("#service_menu").click(function(){
        $("#first_div").hide();
        $("#second1_div").hide();
        $("#device_div").hide();
        $("#package_div").hide();
        $("#service_div").show();
        $("#overview_menu").removeClass('active');
        $("#complaint").removeClass('active');
        $("#active_deactive").removeClass('active'); 
        $("#payreports").removeClass('active');
        $("#service_menu").addClass('active');
    })
   

</script>

@endsection