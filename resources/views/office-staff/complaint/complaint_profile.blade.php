@extends('layouts.office_staff')


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
                    Profile                                     </h5>
                <!--end::Page Title-->

                                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                                                    
                                                    <li class="breadcrumb-item">
                                <a href="" class="text-muted">
                                    Profile                             </a>
                            </li>
                                                    
                                                    <li class="breadcrumb-item">
                                <a href="" class="text-muted">
                                    Overview                                </a>
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
       
        <!--end::User-->

        <!--begin::Contact-->
        <div class="py-9">
            
            <div class="d-flex align-items-center justify-content-between mb-2">
                <span class="font-weight-bold mr-2">Customer ID:</span>
                <a href="#" class="text-muted text-hover-primary">{{$cust->area_subcode_id}}</a>
            </div>

            <div class="d-flex align-items-center justify-content-between mb-2">
                <span class="font-weight-bold mr-2">Customer Name:</span>
                <a href="#" class="text-muted text-hover-primary">{{ $cust->name }}</a>
            </div>
            
             <div class="d-flex align-items-center justify-content-between mb-2">
                <span class="font-weight-bold mr-2">CRF NO:</span>
                <span class="text-muted">{{$cust->crf_no}}</span>
            </div>
             <div class="d-flex align-items-center justify-content-between mb-2">
                <span class="font-weight-bold mr-2">Installation Address:</span>
                <span class="text-muted" style="margin-left: 55px">{{$cust->installation_address}}</span>
            </div>
            <div class="d-flex align-items-center justify-content-between mb-2">
                <span class="font-weight-bold mr-2">Mobile No:</span>
                <span class="text-muted">{{$cust->mobile_number}}</span>
            </div>
            
             <div class="d-flex align-items-center justify-content-between mb-2">
                <span class="font-weight-bold mr-2">Phone No:</span>
                <span class="text-muted">{{$cust->phone}}</span>
            </div>
            
            
            <div class="d-flex align-items-center justify-content-between mb-2">
                <span class="font-weight-bold mr-2">KSEB No:</span>
                <span class="text-muted">{{$cust->kseb_post_no}}</span>
            </div>
           

            <div class="d-flex align-items-center justify-content-between mb-2">
                <span class="font-weight-bold mr-2">Email:</span>
                <span class="text-muted">{{$cust->email}}</span>
            </div>
           
            <div class="d-flex align-items-center justify-content-between mb-2">
                <span class="font-weight-bold mr-2">Remarks:</span>
                <span class="text-muted">{{$cust->remark}}</span>
            </div>
            
            
            <div class="d-flex align-items-center justify-content-between mb-2">
                <span class="font-weight-bold mr-2">Customer Type:</span>
                
                @if($cust->customer_type == 1)
                 <td><button class="badge btn btn-primary" type="submit">Regular</button></td>
                                @else
                                   <td><button class="badge btn btn-success" type="submit">Rent</button></td>
                                @endif
            </div>
            
            
            
            

            @if($cust_package == null)

             <div class="d-flex align-items-center justify-content-between mb-2">
                <span class="font-weight-bold mr-2">Payment Status:</span>
               
            </div>

            @else

            <div class="d-flex align-items-center justify-content-between mb-2">
                <span class="font-weight-bold mr-2">Payment Status:</span>
                <button class="badge btn btn-success" type="submit">
                    
                                @if($cust_package->payment_status == 0) 
                                   <td><button class="badge btn btn-danger" type="submit">pending</button></td>
                                @else
                                   <td><button class="badge btn btn-success" type="submit">success</button></td>
                                @endif

                </button>
            </div>

            @endif
            
            
        </div>
        <!--end::Contact-->

        <!--begin::Nav-->
        <a href="#" id="overview_menu" class="btn btn-hover-light-primary font-weight-bold py-3 px-6 mb-2 text-center btn-block">
                    Profile Overview
                </a>
                <a href="#" id="activation_menu" class="btn btn-hover-light-primary font-weight-bold py-3 px-6 mb-2 text-center btn-block">
                    Activation / Deactivation
                </a>
                
                <a href="#" id="history_menu" class="btn btn-hover-light-primary font-weight-bold py-3 px-6 mb-2 text-center btn-block">
                    Complaint History
                </a>

                <a href="#" id="payment_history" class="btn btn-hover-light-primary font-weight-bold py-3 px-6 mb-2 text-center btn-block">
                    package payment History
                </a>

                
                 <a href="#" id="channel_payment_history" class="btn btn-hover-light-primary font-weight-bold py-3 px-6 mb-2 text-center btn-block">
                    ChannelPayment History
                </a>


               
               
        <!--end::Nav-->
    </div>
    <!--end::Body-->
</div>
<!--end::Profile Card-->
    </div>




    <div class="flex-row-fluid ml-lg-6 first_div" id="first_div" style="display: none;">
       
    <div class="card card-custom gutter-b">
        <div class="card-body">
        
            <div class="separator separator-solid"></div>


               


        <!--begin::Items-->
                <div class="d-flex align-items-center flex-wrap mt-8">


                     <div class="d-flex align-items-center flex-lg-fill mr-5 mb-2">
                       {{--  <span class="mr-4">
                            <i class="flaticon-piggy-bank display-4 text-muted font-weight-bold"></i>
                        </span> --}}
                        @if( $cust == null)
                        <div class="d-flex flex-column text-dark-75">
                            <span class="font-weight-bolder font-size-h5">Status</span>
                            <p class="text-primary font-weight-bolder font-size-sm">Customer Not selected</p>
                        
                        </div>
                        @else
                        
                        <div class="d-flex flex-column text-dark-75">
                            <span class="font-weight-bolder font-size-h5">Status</span>
                           
                            @if($cust->customer_activation_status ==1)

                            <button class="btn btn-success badge">Active</button>
                            @else
                              <button class="btn btn-danger badge">Deactive</button>
                            @endif  

                        </div>
                        @endif
                    </div>







                   {{--  <div class="d-flex align-items-center flex-lg-fill mr-5 mb-2">
                      
                        @if( $cust_package == null)
                        <div class="d-flex flex-column text-dark-75">
                            <span class="font-weight-bolder font-size-h5">Basic Package</span>
                            <p class="text-primary font-weight-bolder font-size-sm">Package Not selected</p>
                        
                        </div>
                        @else
                        
                        <div class="d-flex flex-column text-dark-75">
                            <span class="font-weight-bolder font-size-h5">Basic Package</span>
                           
                           {{ $cust_package->package['package_name'] }}

                        </div>
                        @endif
                    </div> --}}


                    <!--begin::Item-->
                    <div class="d-flex align-items-center flex-lg-fill mr-5 mb-2">
                    {{--  <span class="mr-4">
                            <i class="flaticon-piggy-bank display-4 text-muted font-weight-bold"></i>
                        </span> --}}
                        @if($cust_package == null)
                        <div class="d-flex flex-column text-dark-75">
                            <span class="font-weight-bolder font-size-h5">Basic Package</span>
                            <p class="text-primary font-weight-bolder font-size-sm">package not selected</p>
                        
                        </div>
                        @else
                        
                        <div class="d-flex flex-column text-dark-75">
                            <span class="font-weight-bolder font-size-h5">Basic Package</span>
                            <a class="btn btn-primary badge" data-toggle="modal" data-target="#exampleModalSizeDefault2">{{ $cust_package->package['package_name'] }}</a>
                        </div>
                        @endif
                    </div>
            <!--end::Item-->


           {{--  <div class="d-flex align-items-center flex-lg-fill mr-5 mb-2">
               
                @if($cust_device == null)
                 <div class="d-flex flex-column text-dark-75" style="display: none;">
                    <span class="font-weight-bolder font-size-h5">Device Id</span>
                    <p class="text-primary font-weight-bolder font-size-sm">Device not selected</p>
                </div>
                @else
                <div class="d-flex flex-column text-dark-75">
                   

                     <span class="font-weight-bolder font-size-h5">Device Id</span>
                           
                           {{ $cust_device->deviceid   }}
                </div>
                @endif




            </div> --}}
            



            <!--begin::Item-->
            <div class="d-flex align-items-center flex-lg-fill mr-5 mb-2">
               {{--  <span class="mr-3">
                    <i class="flaticon-confetti display-4 text-muted font-weight-bold"></i>
                </span> --}}
                @if($cust_device == null)
                 <div class="d-flex flex-column text-dark-75" style="display: none;">
                    <span class="font-weight-bolder font-size-h5">Device Id</span>
                    <p class="text-primary font-weight-bolder font-size-sm">Device not selected</p>
                </div>
                @else
                <div class="d-flex flex-column text-dark-75">
                    <span class="font-weight-bolder font-size-h5">Device Id</span>
                    <a class="btn btn-primary badge" data-toggle="modal" data-target="#exampleModalSizeDefault1">{{ $cust_device->deviceid   }}</a>
                    <!--<span class="font-weight-bolder font-size-sm" data-toggle="modal" data-target="#exampleModalSizeXl1"><span class="text-dark-50 font-weight-bold"></span></span>-->
                </div>
                @endif




            </div>
            <!--end::Item-->

           
          
        </div>




         <div class="d-flex align-items-center flex-wrap mt-8">


                <div class="d-flex align-items-center flex-lg-fill mr-5 mb-2">
                       {{--  <span class="mr-4">
                            <i class="flaticon-piggy-bank display-4 text-muted font-weight-bold"></i>
                        </span> --}}
                        @if( $cust_package == null)
                        <div class="d-flex flex-column text-dark-75">
                            <span class="font-weight-bolder font-size-h5">Due Amount</span>
                            <p class="text-primary font-weight-bolder font-size-sm">Package Not selected</p>
                        
                        </div>
                        @else
                        
                        <div class="d-flex flex-column text-dark-75">
                            <span class="font-weight-bolder font-size-h5">Due Amount</span>
                           
                           {{ $cust_package->due_amount }}

                        </div>
                        @endif
                 </div>



                  <div class="d-flex align-items-center flex-lg-fill mr-5 mb-2">
                       {{--  <span class="mr-4">
                            <i class="flaticon-piggy-bank display-4 text-muted font-weight-bold"></i>
                        </span> --}}
                        @if( $customers_channel_count == 0)
                        <div class="d-flex flex-column text-dark-75">
                            <span class="font-weight-bolder font-size-h5">Add On Package</span>
                            <p class="text-primary font-weight-bolder font-size-sm">No Add on Package</p>
                        
                        </div>

                        

                      

                        @else
                        
                        <div class="d-flex flex-column text-dark-75">
                            <span class="font-weight-bolder font-size-h5">Add On Package</span>
                           
                          

                             

                              <a class="btn btn-primary badge" data-toggle="modal" data-target="#exampleModalSizeDefault">
                                  
                                {{--  @foreach($customer_channel as $pack)

                                {{ $pack->package_name }}<br>


                              @endforeach --}}


                                Package({{  $customers_channel_count }})

                              </a>

                        </div>
                        @endif
                 </div>


                 <div class="d-flex align-items-center flex-lg-fill mr-5 mb-2">
                       {{--  <span class="mr-4">
                            <i class="flaticon-piggy-bank display-4 text-muted font-weight-bold"></i>
                        </span> --}}
                        @if( $pending_complaint_count == 0)
                        <div class="d-flex flex-column text-dark-75">
                            <span class="font-weight-bolder font-size-h5">Pending Complaint</span>
                            <p class="text-primary font-weight-bolder font-size-sm">No Pending Complaint </p>
                        
                        </div>

                        

                      

                        @else
                        
                        <div class="d-flex flex-column text-dark-75">
                            <span class="font-weight-bolder font-size-h5">Pending Complaint's</span>
                           
                          

                             

                              <a class="btn btn-danger badge" data-toggle="modal" data-target="#exampleModalSizeDefault111">
                                  
                                {{--  @foreach($customer_channel as $pack)

                                {{ $pack->package_name }}<br>


                              @endforeach --}}


                                Complaint's({{  $pending_complaint_count }})

                              </a>

                        </div>
                        @endif
                 </div>





           




           {{--  <div class="d-flex align-items-center flex-lg-fill mr-5 mb-2">
              
                @if($cust_channel == null)
                 <div class="d-flex flex-column text-dark-75" style="display: none;">
                    <span class="font-weight-bolder font-size-h5">Activation Date</span>
                    <span class="font-weight-bolder font-size-sm"><span class="text-dark-50 font-weight-bold"></span></span>
                </div>
                @else
                <div class="d-flex flex-column text-dark-75">
                    <span class="font-weight-bolder font-size-h5">Activation Date</span>
                    <span class="font-weight-bolder font-size-sm"><span class="text-dark-50 font-weight-bold"></span>{{ $cust_channel->created_at }}</span>
                </div>
                @endif



                
            </div> --}}
            <!--end::Item--> 



         </div>




        <!--begin::Items-->
    </div>
</div>



        <!-- complaint form  -->


        <div class="card card-custom gutter-b example example-compact">
                            <div class="card-header">
                                <h3 class="card-title">
                                      Complaint Register
                                </h3>
                                
                            </div>
                            <!--begin::Form-->
                            <br>
                            
                            <form class="form" action="{{ route('complaints.store') }}" method="post"  id="form-complaint">
                                @csrf
                                <div class="card-body" >
                                    <div class="form-group row">
                                 
                                    </div>
                                    <div class="form-group row">

                                        <label class="col-lg-3 col-form-label text-right">Staff:</label>
                                        <div class="col-lg-5">
                                            <div class="input-group">
                                            
                                                <select class="form-control  "  name="staff">
                                                            @foreach($user as $row)
                                                            <option value="{{ $row->id }}">{{ $row->name }}</option>
                                                            
                                                             @endforeach
                                                 
                                                </select>
                                                
                                            </div>
                                            <span class="form-text text-muted">Please enter Staff name</span>
                                        </div>

                                        @error('staff')
                                           <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                        
                                    </div>







                                     <div class="form-group row">

                                        <label class="col-lg-3 col-form-label text-right">Assist by:</label>
                                        <div class="col-lg-5">
                                            <div class="input-group">
                                            
                                                <select class="form-control  "  name="assist_by">
                                                            @foreach($user as $row)
                                                            <option value="{{ $row->id }}">{{ $row->name }}</option>
                                                            
                                                             @endforeach
                                                 
                                                </select>
                                                
                                                
                                            </div>
                                            <span class="form-text text-muted">Please enter Assistant name</span>
                                        </div>

                                        @error('assist_by')
                                           <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                        
                                    </div>

                                    <div class="form-group row">



                                        <label class="col-lg-3 col-form-label text-right">Complaint's:</label>
                                        <div class="col-lg-5">
                                            <div class="input-group">
                                                



                                                


                                                 <select name="complaint[]" class="form-control selectpicker select2" id="kt_select2_3" placeholder=""  multiple="multiple" style="width: 100%" required>

                                                             
                                                             @foreach($complainttype as $row)
                                                            <option value="{{ $row->id }}" >{{ $row->complainttype }}</option>
                                                             @endforeach
                                                            
                                                            
                                                 </select>

                                                
                                            </div>
                                            <span class="form-text text-muted">Please select your complaint's</span>
                                        </div>



                                        
                                        

                                    </div>

                                    {{-- <div class="form-group row">
                                        
                                      

                                         <label class="col-lg-3 col-form-label text-right">Type :</label>
                                           <div class="col-lg-5">
                                            <div class="input-group">
                                                



                                                <select class="form-control  "  name="type">

                                                    <option value="">--Select--</option>
                                                    <option value="Activation">Activation</option>
                                                    <option value="Deactivation">Deactivation</option>
                                                    <option value="Complaints">Complaints</option>
                                                    <option value="Activation/Deactivation">Activation/Deactivation</option>    
                                                    
                                                    
                                                   
                                                </select>
                                                
                                            </div>
                                            <span class="form-text text-muted">Please enter Staff name</span>
                                        </div>
                                       
                                    </div> --}}

                                    <div class="form-group row">
                                        
                                       <label class="col-lg-3 col-form-label text-right">KSEB Post No:</label>
                                        <div class="col-lg-5">
                                            <input type="text" name="post_no"  class="form-control" value="{{$cust->kseb_post_no}}" placeholder="Enter KSEB Post No" required/>
                                            <span class="form-text text-muted">Please enter KSEB Post No</span>
                                        </div>


                                        
                                    </div>


                                    <div class="form-group row">
                                        
                                       <label class="col-lg-3 col-form-label text-right">Phone:</label>
                                        <div class="col-lg-5">
                                            <input type="text" name="phone" value="{{$cust->phone}}"  class="form-control" placeholder="Enter Phone No" required/>
                                            <span class="form-text text-muted">Please enter Phone No</span>
                                        </div>


                                        
                                    </div>
                                    <div class="form-group row">
                                        
                                       <label class="col-lg-3 col-form-label text-right">Mobile:</label>
                                        <div class="col-lg-5">
                                            <input type="text" name="mobile" value="{{$cust->mobile_number}}"  class="form-control" placeholder="Enter Mobile No" required/>
                                            <span class="form-text text-muted">Please enter Mobile No</span>
                                        </div>


                                        
                                    </div>
                                    


                                    
                                          


                                    <div class="form-group row">

                                         <label class="col-lg-3 col-form-label text-right">Other Complaints:</label>
                                        <div class="col-lg-5">
                                           {{--  <input type="text" name="other_complaint"  class="form-control" placeholder="Enter other_complaint"/>
                                            <span class="form-text text-muted">Please enter other complaint</span> --}}
                                            <textarea name="other_complaint" class="form-control" placeholder="Enter other_complaint" rows="3" ></textarea>
                                        </div>

                                        

                                    </div>




                                  <div class="form-group row">
                                        
                                       <label class="col-lg-3 col-form-label text-right">Remarks:</label>
                                        <div class="col-lg-5">
                                          

                                            <textarea name="remarks" class="form-control" placeholder="Enter Remarks" rows="3" ></textarea>

                                             <span class="form-text text-muted">Please enter Remarks</span>
                                        </div>


                                        
                                    </div>


                                     <div class="form-group row">
                                        
                                       <label class="col-lg-3 col-form-label text-right">Priority:</label>
                                        <div class="col-lg-5">
                                          

                                             <select class="form-control  "  name="priority">
                                                           <option value="1">High</option>
                                                           <option value="2">Medium</option>
                                                           <option value="3">Low</option>
                                                 
                                             </select>

                                             <span class="form-text text-muted">Please Select Priority</span>
                                        </div>


                                        
                                </div>
                                   
                                   
                                   
                          
                        </div>


                                     <input type="hidden" name="customer_id" value="{{ $cust->id }}">
                                      <input type="hidden" name="phone_no" value="{{ $cust->phone }}">
                                    <input type="hidden" name="email" value="{{ $cust->email }}">
                                    <input type="hidden" name="payment_due" value="">
                                    <input type="hidden" name="customer_request" value="">
                                     <input type="hidden" name="cus_name" value="{{ $cust->name }}">
                                     
                                    

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

        <!-- end complaint form -->


        <!-- active deactive div  -->

        <div class="flex-row-fluid ml-lg-6 activation_div" id="activation_div" style="display: none;">
       
    <div class="card card-custom gutter-b">
        <div class="card-body">
        
            <div class="separator separator-solid"></div>
            
            

        <!--begin::Items-->
                

         <div class="d-flex align-items-center flex-wrap mt-8">


                     <div class="d-flex align-items-center flex-lg-fill mr-5 mb-2">
                       {{--  <span class="mr-4">
                            <i class="flaticon-piggy-bank display-4 text-muted font-weight-bold"></i>
                        </span> --}}
                        @if( $cust == null)
                        <div class="d-flex flex-column text-dark-75">
                            <span class="font-weight-bolder font-size-h5">Status</span>
                            <p class="text-primary font-weight-bolder font-size-sm">Customer Not selected</p>
                        
                        </div>
                        @else
                        
                        <div class="d-flex flex-column text-dark-75">
                            <span class="font-weight-bolder font-size-h5">Status</span>
                           
                            @if($cust->customer_activation_status ==1)

                            <button class="btn btn-success badge">Active</button>
                            @elseif($cust->customer_activation_status ==2)
                              <button class="btn btn-danger badge">Deactive</button>
                            @else
                               <button class="btn btn-danger badge">Deactive</button>
                            @endif  

                        </div>
                        @endif
                    </div>







                   {{--  <div class="d-flex align-items-center flex-lg-fill mr-5 mb-2">
                      
                        @if( $cust_package == null)
                        <div class="d-flex flex-column text-dark-75">
                            <span class="font-weight-bolder font-size-h5">Basic Package</span>
                            <p class="text-primary font-weight-bolder font-size-sm">Package Not selected</p>
                        
                        </div>
                        @else
                        
                        <div class="d-flex flex-column text-dark-75">
                            <span class="font-weight-bolder font-size-h5">Basic Package</span>
                           
                           {{ $cust_package->package['package_name'] }}

                        </div>
                        @endif
                    </div> --}}


                    <!--begin::Item-->
                    <div class="d-flex align-items-center flex-lg-fill mr-5 mb-2">
                    {{--  <span class="mr-4">
                            <i class="flaticon-piggy-bank display-4 text-muted font-weight-bold"></i>
                        </span> --}}
                        @if($cust_package == null)
                        <div class="d-flex flex-column text-dark-75">
                            <span class="font-weight-bolder font-size-h5">Basic Package</span>
                            <p class="text-primary font-weight-bolder font-size-sm">package not selected</p>
                        
                        </div>
                        @else
                        
                        <div class="d-flex flex-column text-dark-75">
                            <span class="font-weight-bolder font-size-h5">Basic Package</span>
                            <a class="btn btn-primary badge" data-toggle="modal" data-target="#exampleModalSizeDefault">{{ $cust_package->package['package_name'] }}</a>
                        </div>
                        @endif
                    </div>
            <!--end::Item-->


           {{--  <div class="d-flex align-items-center flex-lg-fill mr-5 mb-2">
               
                @if($cust_device == null)
                 <div class="d-flex flex-column text-dark-75" style="display: none;">
                    <span class="font-weight-bolder font-size-h5">Device Id</span>
                    <p class="text-primary font-weight-bolder font-size-sm">Device not selected</p>
                </div>
                @else
                <div class="d-flex flex-column text-dark-75">
                   

                     <span class="font-weight-bolder font-size-h5">Device Id</span>
                           
                           {{ $cust_device->deviceid   }}
                </div>
                @endif




            </div> --}}
            



            <!--begin::Item-->
            <div class="d-flex align-items-center flex-lg-fill mr-5 mb-2">
               {{--  <span class="mr-3">
                    <i class="flaticon-confetti display-4 text-muted font-weight-bold"></i>
                </span> --}}
                @if($cust_device == null)
                 <div class="d-flex flex-column text-dark-75" style="display: none;">
                    <span class="font-weight-bolder font-size-h5">Device Id</span>
                    <p class="text-primary font-weight-bolder font-size-sm">Device not selected</p>
                </div>
                @else
                <div class="d-flex flex-column text-dark-75">
                    <span class="font-weight-bolder font-size-h5">Device Id</span>
                    <a class="btn btn-primary badge" data-toggle="modal" data-target="#exampleModalSizeDefault1">{{ $cust_device->deviceid   }}</a>
                    <!--<span class="font-weight-bolder font-size-sm" data-toggle="modal" data-target="#exampleModalSizeXl1"><span class="text-dark-50 font-weight-bold"></span></span>-->
                </div>
                @endif




            </div>
            <!--end::Item-->

           
          
        </div>




         <div class="d-flex align-items-center flex-wrap mt-8">


                <div class="d-flex align-items-center flex-lg-fill mr-5 mb-2">
                       {{--  <span class="mr-4">
                            <i class="flaticon-piggy-bank display-4 text-muted font-weight-bold"></i>
                        </span> --}}
                        @if( $cust_package == null)
                        <div class="d-flex flex-column text-dark-75">
                            <span class="font-weight-bolder font-size-h5">Due Amount</span>
                            <p class="text-primary font-weight-bolder font-size-sm">No Due</p>
                        
                        </div>
                        @else
                        
                        <div class="d-flex flex-column text-dark-75">
                            <span class="font-weight-bolder font-size-h5">Due Amount</span>
                           
                           {{ $cust_package->due_amount }}

                        </div>
                        @endif
                 </div>



                  <div class="d-flex align-items-center flex-lg-fill mr-5 mb-2">
                       {{--  <span class="mr-4">
                            <i class="flaticon-piggy-bank display-4 text-muted font-weight-bold"></i>
                        </span> --}}
                        @if( $customers_channel_count == 0)
                        <div class="d-flex flex-column text-dark-75">
                            <span class="font-weight-bolder font-size-h5">Add On Package</span>
                            <p class="text-primary font-weight-bolder font-size-sm">Package Not selected</p>
                        
                        </div>
                        @else
                        
                        <div class="d-flex flex-column text-dark-75">
                            <span class="font-weight-bolder font-size-h5">Add On Package</span>
                           
                          

                               <a class="btn btn-primary badge" data-toggle="modal" data-target="#exampleModalSizeDefault">
                                  
                                {{--  @foreach($customer_channel as $pack)

                                {{ $pack->package_name }}<br>


                              @endforeach --}}


                                Package({{  $customers_channel_count }})

                              </a>

                        </div>
                        @endif
                 </div>

                   <div class="d-flex align-items-center flex-lg-fill mr-5 mb-2">
                       {{--  <span class="mr-4">
                            <i class="flaticon-piggy-bank display-4 text-muted font-weight-bold"></i>
                        </span> --}}
                        @if( $pending_complaint_count == 0)
                        <div class="d-flex flex-column text-dark-75">
                            <span class="font-weight-bolder font-size-h5">Pending Complaint</span>
                            <p class="text-primary font-weight-bolder font-size-sm">No Pending Complaint </p>
                        
                        </div>

                        

                      

                        @else
                        
                        <div class="d-flex flex-column text-dark-75">
                            <span class="font-weight-bolder font-size-h5">Pending Complaint's</span>
                           
                          

                             

                              <a class="btn btn-danger badge" data-toggle="modal" data-target="#exampleModalSizeDefault111">
                                  
                                {{--  @foreach($customer_channel as $pack)

                                {{ $pack->package_name }}<br>


                              @endforeach --}}


                                Complaint's({{  $pending_complaint_count }})

                              </a>

                        </div>
                        @endif
                 </div>





           




           {{--  <div class="d-flex align-items-center flex-lg-fill mr-5 mb-2">
              
                @if($cust_channel == null)
                 <div class="d-flex flex-column text-dark-75" style="display: none;">
                    <span class="font-weight-bolder font-size-h5">Activation Date</span>
                    <span class="font-weight-bolder font-size-sm"><span class="text-dark-50 font-weight-bold"></span></span>
                </div>
                @else
                <div class="d-flex flex-column text-dark-75">
                    <span class="font-weight-bolder font-size-h5">Activation Date</span>
                    <span class="font-weight-bolder font-size-sm"><span class="text-dark-50 font-weight-bold"></span>{{ $cust_channel->created_at }}</span>
                </div>
                @endif



                
            </div> --}}
            <!--end::Item-->

            <!--begin::Item-->
            
            <!--end::Item-->

            <!--begin::Item-->
            
            <!--end::Item-->
        </div>




        <!--begin::Items-->
    </div>
</div>



        <!-- complaint form  -->



        <div class="card card-custom gutter-b example example-compact">
                            <div class="card-header">
                                <h3 class="card-title">
                                     Activation / Deactivation
                                </h3>
                                
                            </div>
                            <!--begin::Form-->
                            <br>
                            
                            <form class="form" action="{{ route('complaints.store') }}" method="post"  id="form-complaint">
                                @csrf
                                <div class="card-body" >
                                    <div class="form-group row">
                                 
                                    </div>
                                    <div class="form-group row">

                                        <label class="col-lg-3 col-form-label text-right">Staff:</label>
                                        <div class="col-lg-5">
                                            <div class="input-group">
                                            
                                                <select class="form-control  "  name="staff">
                                                            @foreach($user as $row)
                                                            <option value="{{ $row->id }}">{{ $row->name }}</option>
                                                            
                                                             @endforeach
                                                 
                                                </select>
                                                
                                            </div>
                                            <span class="form-text text-muted">Please enter Staff name</span>
                                        </div>


                                        @error('staff')
                                           <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                        
                                    </div>



                                     <div class="form-group row">

                                        <label class="col-lg-3 col-form-label text-right">Assist by:</label>
                                        <div class="col-lg-5">
                                            <div class="input-group">
                                            
                                                <select class="form-control  "  name="assist_by">
                                                            @foreach($user as $row)
                                                            <option value="{{ $row->id }}">{{ $row->name }}</option>
                                                            
                                                             @endforeach
                                                 
                                                </select>
                                                
                                                
                                            </div>
                                            <span class="form-text text-muted">Please enter Assistant name</span>
                                        </div>


                                        @error('assist_by')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                        
                                    </div>

                                   {{--  <div class="form-group row">



                                        <label class="col-lg-3 col-form-label text-right">Complaint's:</label>
                                        <div class="col-lg-5">
                                            <div class="input-group">
                                                



                                                


                                                 <select name="complaint[]" class="form-control selectpicker select2" id="kt_select2_3" placeholder=""  multiple="multiple" style="width: 100%" required>

                                                             
                                                             @foreach($complainttype as $row)
                                                            <option value="{{ $row->id }}" >{{ $row->complainttype }}</option>
                                                             @endforeach
                                                            
                                                            
                                                 </select>

                                                
                                            </div>
                                            <span class="form-text text-muted">Please select your complaint's</span>
                                        </div>



                                        
                                        

                                    </div> --}}

                                    

                                    <div class="form-group row">
                                        
                                       <label class="col-lg-3 col-form-label text-right">KSEB Post No:</label>
                                        <div class="col-lg-5">
                                            <input type="text" name="post_no"
                                            value="{{$cust->kseb_post_no}}"  class="form-control" placeholder="Enter KSEB Post No" readonly />
                                            <span class="form-text text-muted">Please enter KSEB Post No</span>
                                        </div>


                                        
                                    </div>


                                    <div class="form-group row">
                                        
                                       <label class="col-lg-3 col-form-label text-right">Phone:</label>
                                        <div class="col-lg-5">
                                            <input type="text" name="phone"  class="form-control" value="{{ $cust->phone }}" placeholder="Enter Phone No" readonly />
                                            <span class="form-text text-muted">Please enter Phone No</span>
                                        </div>


                                        
                                    </div>
                                    <div class="form-group row">
                                        
                                       <label class="col-lg-3 col-form-label text-right">Mobile:</label>
                                        <div class="col-lg-5">
                                            <input type="text" name="mobile" value="{{$cust->mobile_number}}"  class="form-control" placeholder="Enter Mobile No" readonly />
                                            <span class="form-text text-muted">Please enter Mobile No</span>
                                        </div>


                                        
                                    </div>
                                    


                                    
                                          


                                   {{--  <div class="form-group row">

                                         <label class="col-lg-3 col-form-label text-right">Other Complaints:</label>
                                        <div class="col-lg-5">
                                           
                                            <textarea name="other_complaint" class="form-control" placeholder="Enter other_complaint" rows="3" required></textarea>
                                        </div>

                                        

                                    </div> --}}
                                   <div class="form-group row">


                                    <label class="col-lg-3 col-form-label text-right">Active Or De-active:</label>
                                        <div class="radio-inline col-lg-6 ">
                                            <label class="radio radio-solid">
                                             <input type="radio" name="active_deactive" checked="checked" id="active" value="1" required/>
                                              <span></span>
                                                Active
                                            </label>
                                            <label class="radio radio-solid">
                                              <input type="radio" name="active_deactive" id="inactive"  value="2" onclick="myFunction()" required/>
                                             <span></span>
                                             De-active
                                            </label>
                                        
                                        </div>


                                   
                                      
                                   </div> 
                                   
                                <div class="form-group row">


                                   <label class="col-lg-3 col-form-label text-right">Active Or De-active Date:</label>
                                <div class="col-lg-5">
                                
                                <div class="input-group" >
                                <input type="text" name="active_deactive_date" id="datetimepicker1" class="form-control" placeholder="Date"/ required>
                                <div class="input-group-append"><span class="input-group-text"><i class="fa fa-calendar"></i></span></div>
                                </div>
                                <span class="form-text text-muted">Please enter Active Or De-active</span>
                                </div>
    



  
                                </div> 




                                <div class="form-group row">
                                        
                                      

                                         <label class="col-lg-3 col-form-label text-right">Payment Due :</label>
                                        <div class="col-lg-5">
                                            <div class="input-group">
                                                



                                                <select class="form-control  "  name="payment_due">

                                                    <option value="">--Select--</option>
                                                    <option value="yes">Yes</option>
                                                    <option value="no">No</option>
                                                       
                                                    
                                                    
                                                   
                                                </select>
                                                
                                            </div>
                                            <span class="form-text text-muted">Please Select Reason</span>
                                        </div>
                                       



                                        
                                    </div>



                                     <div class="form-group row">
                                        
                                      

                                         <label class="col-lg-3 col-form-label text-right">Customer Request :</label>
                                        <div class="col-lg-5">
                                            <div class="input-group">
                                                



                                                <select class="form-control  "  name="customer_request">

                                                    <option value="">--Select--</option>
                                                    <option value="yes">Yes</option>
                                                    <option value="no">No</option>
                                                       
                                                    
                                                    
                                                   
                                                </select>
                                                
                                            </div>
                                            <span class="form-text text-muted">Please Select Reason</span>
                                        </div>
                                       



                                        
                                    </div>

                                     <div class="form-group row">
                                        
                                       <label class="col-lg-3 col-form-label text-right">Remarks:</label>
                                        <div class="col-lg-5">
                                            {{-- <input type="text" name="remarks"   class="form-control" placeholder="Enter Remarks"  />
                                            <span class="form-text text-muted">Please enter Remarks</span> --}}

                                             <textarea name="remarks" class="form-control" placeholder="Enter Remarks" rows="3" ></textarea>

                                             <span class="form-text text-muted">Please enter Remarks</span>
                                        </div>


                                        
                                    </div>




                                     <div class="form-group row">
                                        
                                       <label class="col-lg-3 col-form-label text-right">Priority:</label>
                                        <div class="col-lg-5">
                                          

                                             <select class="form-control  "  name="priority">
                                                           <option value="1">High</option>
                                                           <option value="2">Medium</option>
                                                           <option value="3">Low</option>
                                                 
                                             </select>

                                             <span class="form-text text-muted">Please Select Priority</span>
                                        </div>


                                        
                                </div>
 

 



                               
                          
                        </div>


                                     <input type="hidden" name="customer_id" value="{{ $cust->id }}">
                                     {{--  <input type="hidden" name="phone_no" value="{{ $cust->phone }}"> --}}
                                    <input type="hidden" name="cus_name" value="{{ $cust->name }}">

                                   
                                    <input type="hidden" name="complaint[]" value="">
                                     
                                    

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

        <!-- end active deactive -->


        
        <div class="flex-row-fluid ml-lg-6 first_div" id="history_div" style="display: none;">
            
            
            
            <div class="card card-custom gutter-b">
        <div class="card-body">
        
            <div class="separator separator-solid"></div>


               


        <!--begin::Items-->
                <div class="d-flex align-items-center flex-wrap mt-8">


                     <div class="d-flex align-items-center flex-lg-fill mr-5 mb-2">
                       {{--  <span class="mr-4">
                            <i class="flaticon-piggy-bank display-4 text-muted font-weight-bold"></i>
                        </span> --}}
                        @if( $cust == null)
                        <div class="d-flex flex-column text-dark-75">
                            <span class="font-weight-bolder font-size-h5">Status</span>
                            <p class="text-primary font-weight-bolder font-size-sm">Customer Not selected</p>
                        
                        </div>
                        @else
                        
                        <div class="d-flex flex-column text-dark-75">
                            <span class="font-weight-bolder font-size-h5">Status</span>
                           
                            @if($cust->customer_activation_status ==1)

                            <button class="btn btn-success badge">Active</button>
                            @elseif($cust->customer_activation_status ==2)
                              <button class="btn btn-danger badge">Deactive</button>
                            @else
                               <button class="btn btn-danger badge">Deactive</button>
                            @endif  

                        </div>
                        @endif
                    </div>







                   {{--  <div class="d-flex align-items-center flex-lg-fill mr-5 mb-2">
                      
                        @if( $cust_package == null)
                        <div class="d-flex flex-column text-dark-75">
                            <span class="font-weight-bolder font-size-h5">Basic Package</span>
                            <p class="text-primary font-weight-bolder font-size-sm">Package Not selected</p>
                        
                        </div>
                        @else
                        
                        <div class="d-flex flex-column text-dark-75">
                            <span class="font-weight-bolder font-size-h5">Basic Package</span>
                           
                           {{ $cust_package->package['package_name'] }}

                        </div>
                        @endif
                    </div> --}}


                    <!--begin::Item-->
                    <div class="d-flex align-items-center flex-lg-fill mr-5 mb-2">
                    {{--  <span class="mr-4">
                            <i class="flaticon-piggy-bank display-4 text-muted font-weight-bold"></i>
                        </span> --}}
                        @if($cust_package == null)
                        <div class="d-flex flex-column text-dark-75">
                            <span class="font-weight-bolder font-size-h5">Basic Package</span>
                            <p class="text-primary font-weight-bolder font-size-sm">package not selected</p>
                        
                        </div>
                        @else
                        
                        <div class="d-flex flex-column text-dark-75">
                            <span class="font-weight-bolder font-size-h5">Basic Package</span>
                            <a class="btn btn-primary badge" data-toggle="modal" data-target="#exampleModalSizeDefault">{{ $cust_package->package['package_name'] }}</a>
                        </div>
                        @endif
                    </div>
            <!--end::Item-->


           {{--  <div class="d-flex align-items-center flex-lg-fill mr-5 mb-2">
               
                @if($cust_device == null)
                 <div class="d-flex flex-column text-dark-75" style="display: none;">
                    <span class="font-weight-bolder font-size-h5">Device Id</span>
                    <p class="text-primary font-weight-bolder font-size-sm">Device not selected</p>
                </div>
                @else
                <div class="d-flex flex-column text-dark-75">
                   

                     <span class="font-weight-bolder font-size-h5">Device Id</span>
                           
                           {{ $cust_device->deviceid   }}
                </div>
                @endif




            </div> --}}
            



            <!--begin::Item-->
            <div class="d-flex align-items-center flex-lg-fill mr-5 mb-2">
               {{--  <span class="mr-3">
                    <i class="flaticon-confetti display-4 text-muted font-weight-bold"></i>
                </span> --}}
                @if($cust_device == null)
                 <div class="d-flex flex-column text-dark-75" style="display: none;">
                    <span class="font-weight-bolder font-size-h5">Device Id</span>
                    <p class="text-primary font-weight-bolder font-size-sm">Device not selected</p>
                </div>
                @else
                <div class="d-flex flex-column text-dark-75">
                    <span class="font-weight-bolder font-size-h5">Device Id</span>
                    <a class="btn btn-primary badge" data-toggle="modal" data-target="#exampleModalSizeDefault1">{{ $cust_device->deviceid   }}</a>
                    <!--<span class="font-weight-bolder font-size-sm" data-toggle="modal" data-target="#exampleModalSizeXl1"><span class="text-dark-50 font-weight-bold"></span></span>-->
                </div>
                @endif




            </div>
            <!--end::Item-->

           
          
        </div>




         <div class="d-flex align-items-center flex-wrap mt-8">


                <div class="d-flex align-items-center flex-lg-fill mr-5 mb-2">
                       {{--  <span class="mr-4">
                            <i class="flaticon-piggy-bank display-4 text-muted font-weight-bold"></i>
                        </span> --}}
                        @if( $cust_package == null)
                        <div class="d-flex flex-column text-dark-75">
                            <span class="font-weight-bolder font-size-h5">Due Amount</span>
                            <p class="text-primary font-weight-bolder font-size-sm">Package Not selected</p>
                        
                        </div>
                        @else
                        
                        <div class="d-flex flex-column text-dark-75">
                            <span class="font-weight-bolder font-size-h5">Due Amount</span>
                           
                           {{ $cust_package->due_amount }}

                        </div>
                        @endif
                 </div>



                  <div class="d-flex align-items-center flex-lg-fill mr-5 mb-2">
                       {{--  <span class="mr-4">
                            <i class="flaticon-piggy-bank display-4 text-muted font-weight-bold"></i>
                        </span> --}}
                        @if( $customers_channel_count == 0)
                        <div class="d-flex flex-column text-dark-75">
                            <span class="font-weight-bolder font-size-h5">Add On Package</span>
                            <p class="text-primary font-weight-bolder font-size-sm">Package Not selected</p>
                        
                        </div>
                        @else
                        
                        <div class="d-flex flex-column text-dark-75">
                            <span class="font-weight-bolder font-size-h5">Add On Package</span>
                           
                          

                              <a class="btn btn-primary badge" data-toggle="modal" data-target="#exampleModalSizeDefault">
                                  
                                {{--  @foreach($customer_channel as $pack)

                                {{ $pack->package_name }}<br>


                              @endforeach --}}


                                Package({{  $customers_channel_count }})

                              </a>

                        </div>
                        @endif
                 </div>

                   <div class="d-flex align-items-center flex-lg-fill mr-5 mb-2">
                       {{--  <span class="mr-4">
                            <i class="flaticon-piggy-bank display-4 text-muted font-weight-bold"></i>
                        </span> --}}
                        @if( $pending_complaint_count == 0)
                        <div class="d-flex flex-column text-dark-75">
                            <span class="font-weight-bolder font-size-h5">Pending Complaint</span>
                            <p class="text-primary font-weight-bolder font-size-sm">No Pending Complaint </p>
                        
                        </div>

                        

                      

                        @else
                        
                        <div class="d-flex flex-column text-dark-75">
                            <span class="font-weight-bolder font-size-h5">Pending Complaint's</span>
                           
                          

                             

                              <a class="btn btn-danger badge" data-toggle="modal" data-target="#exampleModalSizeDefault111">
                                  
                                {{--  @foreach($customer_channel as $pack)

                                {{ $pack->package_name }}<br>


                              @endforeach --}}


                                Complaint's({{  $pending_complaint_count }})

                              </a>

                        </div>
                        @endif
                 </div>





           




           {{--  <div class="d-flex align-items-center flex-lg-fill mr-5 mb-2">
              
                @if($cust_channel == null)
                 <div class="d-flex flex-column text-dark-75" style="display: none;">
                    <span class="font-weight-bolder font-size-h5">Activation Date</span>
                    <span class="font-weight-bolder font-size-sm"><span class="text-dark-50 font-weight-bold"></span></span>
                </div>
                @else
                <div class="d-flex flex-column text-dark-75">
                    <span class="font-weight-bolder font-size-h5">Activation Date</span>
                    <span class="font-weight-bolder font-size-sm"><span class="text-dark-50 font-weight-bold"></span>{{ $cust_channel->created_at }}</span>
                </div>
                @endif



                
            </div> --}}
            <!--end::Item--> 



         </div>




        <!--begin::Items-->
    </div>
</div>


            
        <!--<div class="card card-custom gutter-b">-->
        <!--<div class="card-body">-->
            
            
            
            
            
        <!--    <div class="card-body">-->
        <!--    <h3 class="text-center">Complaint History</h3>-->
                    <!--begin: Datatable-->
            

        
        <!--</div> -->
        <!--</div>-->
        <!--</div>-->
            
        
    
        <div class="card card-custom gutter-b">
        <div class="card-body">
            
            
            
            
            
            <div class="card-body">
            <h3 class="text-center">Complaint History</h3>
                    <!--begin: Datatable-->
                <table class="table table-bordered table-checkable mt-5" id="kt_datatable">
                    <thead>
                        <tr>
                        
                        <th>ID</th>
                        <th>Complaint ID</th>
                        <th>Complaint</th>
                        <th>Customer Name</th>
                        <th>Mobile</th>
                        <th>Date</th>
                       {{--  <th>Act/Deact</th> --}}
                        <th>Status</th>
                        

                        {{-- <th>Actions</th> --}}
                    
                        </tr>
                    </thead>
                    <tbody>
                        @if($complaint == null)
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                           {{--  <td></td> --}}
                            <td></td> 
                        </tr>
                        @else
                        @foreach($complaint as $row)
                        <tr>
                        <td>{{ $row->id }}</td>
                        <td>{{ $row->complaint_id }}</td>

                           @if($row->active_deactive == 1 )
                            <td>
                               
                                <button class="btn btn-success badge">Activation</button>
                            </td>
                                                   
                            @elseif($row->active_deactive == 2 )

                              <td>
                                    <button class="btn btn-danger badge">Deactivation</button>
                             </td>
                                                     
                              
                            
                           
                            @else
                            <td>
                                                 
                               {{--  @foreach($single_com as$com )
                                  {{ $com->complainttype }},<br>
                                @endforeach --}}

                                 @foreach($row->complaint as $data)
                                                  <span class="btn"> {{ $data['complainttype'].';' }} </span>
                                 @endforeach
                            </td>
                        @endif

                     {{--    <td>{{ $complaint->complaint }}</td> --}}



                       
                        <td>{{ $row->customer_name }}</td>
                        <td>{{ $row->phone_no }}</td>
                        <td>{{ $row->created_at }}</td>
                       {{--  @if($complaint->active_deactive == null)
                        <td></td>
                        @elseif($complaint->active_deactive == 1)
                        <td> <button class=" badge btn btn-success">Active</button></td>
                        @else
                         <td><button class="badge btn btn-danger">Deactive</button></td>
                         @endif --}}

                        @if($row->status ==0) 
                            <td><button class="badge btn btn-danger">pendind</button></td>
                        @else
                        <td> <button class=" badge btn btn-success">Completed</button></td>
                        @endif
                        {{-- <td>{{ $complaint-> }}</td> --}}
                        </tr>
                        @endforeach
                        @endif
                    </tbody>
            
                </table>

        
        </div> 
        </div>
        </div></div>

        



        <div class="flex-row-fluid ml-lg-6 first_div" id="payment_history_div" style="display: none;">
            
            
        <div class="card card-custom gutter-b">
        <div class="card-body">
        
            <div class="separator separator-solid"></div>


               


        <!--begin::Items-->
                <div class="d-flex align-items-center flex-wrap mt-8">


                     <div class="d-flex align-items-center flex-lg-fill mr-5 mb-2">
                       {{--  <span class="mr-4">
                            <i class="flaticon-piggy-bank display-4 text-muted font-weight-bold"></i>
                        </span> --}}
                        @if( $cust == null)
                        <div class="d-flex flex-column text-dark-75">
                            <span class="font-weight-bolder font-size-h5">Status</span>
                            <p class="text-primary font-weight-bolder font-size-sm">Customer Not selected</p>
                        
                        </div>
                        @else
                        
                        <div class="d-flex flex-column text-dark-75">
                            <span class="font-weight-bolder font-size-h5">Status</span>
                           
                            @if($cust->customer_activation_status ==1)

                            <button class="btn btn-success badge">Active</button>
                            @elseif($cust->customer_activation_status ==2)
                              <button class="btn btn-danger badge">Deactive</button>
                            @else
                               <button class="btn btn-danger badge">Deactive</button>
                            @endif  

                        </div>
                        @endif
                    </div>







                   {{--  <div class="d-flex align-items-center flex-lg-fill mr-5 mb-2">
                      
                        @if( $cust_package == null)
                        <div class="d-flex flex-column text-dark-75">
                            <span class="font-weight-bolder font-size-h5">Basic Package</span>
                            <p class="text-primary font-weight-bolder font-size-sm">Package Not selected</p>
                        
                        </div>
                        @else
                        
                        <div class="d-flex flex-column text-dark-75">
                            <span class="font-weight-bolder font-size-h5">Basic Package</span>
                           
                           {{ $cust_package->package['package_name'] }}

                        </div>
                        @endif
                    </div> --}}


                    <!--begin::Item-->
                    <div class="d-flex align-items-center flex-lg-fill mr-5 mb-2">
                    {{--  <span class="mr-4">
                            <i class="flaticon-piggy-bank display-4 text-muted font-weight-bold"></i>
                        </span> --}}
                        @if($cust_package == null)
                        <div class="d-flex flex-column text-dark-75">
                            <span class="font-weight-bolder font-size-h5">Basic Package</span>
                            <p class="text-primary font-weight-bolder font-size-sm">package not selected</p>
                        
                        </div>
                        @else
                        
                        <div class="d-flex flex-column text-dark-75">
                            <span class="font-weight-bolder font-size-h5">Basic Package</span>
                            <a class="btn btn-primary badge" data-toggle="modal" data-target="#exampleModalSizeDefault">{{ $cust_package->package['package_name'] }}</a>
                        </div>
                        @endif
                    </div>
            <!--end::Item-->


           {{--  <div class="d-flex align-items-center flex-lg-fill mr-5 mb-2">
               
                @if($cust_device == null)
                 <div class="d-flex flex-column text-dark-75" style="display: none;">
                    <span class="font-weight-bolder font-size-h5">Device Id</span>
                    <p class="text-primary font-weight-bolder font-size-sm">Device not selected</p>
                </div>
                @else
                <div class="d-flex flex-column text-dark-75">
                   

                     <span class="font-weight-bolder font-size-h5">Device Id</span>
                           
                           {{ $cust_device->deviceid   }}
                </div>
                @endif




            </div> --}}
            



            <!--begin::Item-->
            <div class="d-flex align-items-center flex-lg-fill mr-5 mb-2">
               {{--  <span class="mr-3">
                    <i class="flaticon-confetti display-4 text-muted font-weight-bold"></i>
                </span> --}}
                @if($cust_device == null)
                 <div class="d-flex flex-column text-dark-75" style="display: none;">
                    <span class="font-weight-bolder font-size-h5">Device Id</span>
                    <p class="text-primary font-weight-bolder font-size-sm">Device not selected</p>
                </div>
                @else
                <div class="d-flex flex-column text-dark-75">
                    <span class="font-weight-bolder font-size-h5">Device Id</span>
                    <a class="btn btn-primary badge" data-toggle="modal" data-target="#exampleModalSizeDefault1">{{ $cust_device->deviceid   }}</a>
                    <!--<span class="font-weight-bolder font-size-sm" data-toggle="modal" data-target="#exampleModalSizeXl1"><span class="text-dark-50 font-weight-bold"></span></span>-->
                </div>
                @endif




            </div>
            <!--end::Item-->

           
          
        </div>




         <div class="d-flex align-items-center flex-wrap mt-8">


                <div class="d-flex align-items-center flex-lg-fill mr-5 mb-2">
                       {{--  <span class="mr-4">
                            <i class="flaticon-piggy-bank display-4 text-muted font-weight-bold"></i>
                        </span> --}}
                        @if( $cust_package == null)
                        <div class="d-flex flex-column text-dark-75">
                            <span class="font-weight-bolder font-size-h5">Due Amount</span>
                            <p class="text-primary font-weight-bolder font-size-sm">Package Not selected</p>
                        
                        </div>
                        @else
                        
                        <div class="d-flex flex-column text-dark-75">
                            <span class="font-weight-bolder font-size-h5">Due Amount</span>
                           
                           {{ $cust_package->due_amount }}

                        </div>
                        @endif
                 </div>



                  <div class="d-flex align-items-center flex-lg-fill mr-5 mb-2">
                       {{--  <span class="mr-4">
                            <i class="flaticon-piggy-bank display-4 text-muted font-weight-bold"></i>
                        </span> --}}
                        @if( $customers_channel_count == 0)
                        <div class="d-flex flex-column text-dark-75">
                            <span class="font-weight-bolder font-size-h5">Add On Package</span>
                            <p class="text-primary font-weight-bolder font-size-sm">Package Not selected</p>
                        
                        </div>
                        @else
                        
                        <div class="d-flex flex-column text-dark-75">
                            <span class="font-weight-bolder font-size-h5">Add On Package</span>
                           
                          

                              <a class="btn btn-primary badge" data-toggle="modal" data-target="#exampleModalSizeDefault">
                                  
                                {{--  @foreach($customer_channel as $pack)

                                {{ $pack->package_name }}<br>


                              @endforeach --}}


                                Package({{  $customers_channel_count }})

                              </a>

                        </div>
                        @endif
                 </div>


                   <div class="d-flex align-items-center flex-lg-fill mr-5 mb-2">
                       {{--  <span class="mr-4">
                            <i class="flaticon-piggy-bank display-4 text-muted font-weight-bold"></i>
                        </span> --}}
                        @if( $pending_complaint_count == 0)
                        <div class="d-flex flex-column text-dark-75">
                            <span class="font-weight-bolder font-size-h5">Pending Complaint</span>
                            <p class="text-primary font-weight-bolder font-size-sm">No Pending Complaint </p>
                        
                        </div>

                        

                      

                        @else
                        
                        <div class="d-flex flex-column text-dark-75">
                            <span class="font-weight-bolder font-size-h5">Pending Complaint's</span>
                           
                          

                             

                              <a class="btn btn-danger badge" data-toggle="modal" data-target="#exampleModalSizeDefault111">
                                  
                                {{--  @foreach($customer_channel as $pack)

                                {{ $pack->package_name }}<br>


                              @endforeach --}}


                                Complaint's({{  $pending_complaint_count }})

                              </a>

                        </div>
                        @endif
                 </div>





           




           {{--  <div class="d-flex align-items-center flex-lg-fill mr-5 mb-2">
              
                @if($cust_channel == null)
                 <div class="d-flex flex-column text-dark-75" style="display: none;">
                    <span class="font-weight-bolder font-size-h5">Activation Date</span>
                    <span class="font-weight-bolder font-size-sm"><span class="text-dark-50 font-weight-bold"></span></span>
                </div>
                @else
                <div class="d-flex flex-column text-dark-75">
                    <span class="font-weight-bolder font-size-h5">Activation Date</span>
                    <span class="font-weight-bolder font-size-sm"><span class="text-dark-50 font-weight-bold"></span>{{ $cust_channel->created_at }}</span>
                </div>
                @endif



                
            </div> --}}
            <!--end::Item--> 



         </div>




        <!--begin::Items-->
    </div>
</div>

    
            
            
            
            
    
        <div class="card card-custom gutter-b">
        <div class="card-body">
            <div class="card-body">
            <h3 class="text-center">Package Payment  History</h3>
                    <!--begin: Datatable-->
                <table class="table table-bordered table-checkable mt-5" id="kt_datatable">
                    <thead>
                        <tr>
                        
                        <th>ID</th>
                        <th>Package Name</th>
                        <th>Package Type</th>
                        <th>Package Amount</th>
                        <th>Customer Paid Amount</th>
                        <th>Due Amount</th>
                        <th>Balance</th>
                        <th>Date</th>
                        

                        {{-- <th>Actions</th> --}}
                    
                        </tr>
                    </thead>
                    <tbody>
                        @if($complaint == null)
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td> 
                        </tr>
                        @else
                        
                        @foreach($package_payment as $pack)
                        <tr>
                        <td>{{ $pack->id }}</td>
                        <td>{{ $pack->package_name }}</td>
                        <td>
                           {{ $pack->package_type }}
                        </td>
                        <td>{{ $pack->package_amount }}</td>
                        <td>{{ $pack->customer_paid_amount }}</td>
                        <td>{{ $pack->due_amount }}</td>
                       
                        <td>{{ $pack->balance }}</td>
                       
                        <td> {{ $pack->payment_date }}</td>
                       
                        </tr>

                        @endforeach
                         @endif
                    </tbody>
            
                </table>

        
        </div> 
        </div>
        </div></div>



        <div class="flex-row-fluid ml-lg-6 first_div" id="channelpayment_history_div" style="display: none;">
            
            <div class="card card-custom gutter-b">
        <div class="card-body">
        
            <div class="separator separator-solid"></div>


               


        <!--begin::Items-->
                <div class="d-flex align-items-center flex-wrap mt-8">


                     <div class="d-flex align-items-center flex-lg-fill mr-5 mb-2">
                       {{--  <span class="mr-4">
                            <i class="flaticon-piggy-bank display-4 text-muted font-weight-bold"></i>
                        </span> --}}
                        @if( $cust == null)
                        <div class="d-flex flex-column text-dark-75">
                            <span class="font-weight-bolder font-size-h5">Status</span>
                            <p class="text-primary font-weight-bolder font-size-sm">Customer Not selected</p>
                        
                        </div>
                        @else
                        
                        <div class="d-flex flex-column text-dark-75">
                            <span class="font-weight-bolder font-size-h5">Status</span>
                           
                            @if($cust->customer_activation_status ==1)

                            <button class="btn btn-success badge">Active</button>
                            @elseif($cust->customer_activation_status ==2)
                              <button class="btn btn-danger badge">Deactive</button>
                            @else
                               <button class="btn btn-danger badge">Deactive</button>
                            @endif  

                        </div>
                        @endif
                    </div>







                   {{--  <div class="d-flex align-items-center flex-lg-fill mr-5 mb-2">
                      
                        @if( $cust_package == null)
                        <div class="d-flex flex-column text-dark-75">
                            <span class="font-weight-bolder font-size-h5">Basic Package</span>
                            <p class="text-primary font-weight-bolder font-size-sm">Package Not selected</p>
                        
                        </div>
                        @else
                        
                        <div class="d-flex flex-column text-dark-75">
                            <span class="font-weight-bolder font-size-h5">Basic Package</span>
                           
                           {{ $cust_package->package['package_name'] }}

                        </div>
                        @endif
                    </div> --}}


                    <!--begin::Item-->
                    <div class="d-flex align-items-center flex-lg-fill mr-5 mb-2">
                    {{--  <span class="mr-4">
                            <i class="flaticon-piggy-bank display-4 text-muted font-weight-bold"></i>
                        </span> --}}
                        @if($cust_package == null)
                        <div class="d-flex flex-column text-dark-75">
                            <span class="font-weight-bolder font-size-h5">Basic Package</span>
                            <p class="text-primary font-weight-bolder font-size-sm">package not selected</p>
                        
                        </div>
                        @else
                        
                        <div class="d-flex flex-column text-dark-75">
                            <span class="font-weight-bolder font-size-h5">Basic Package</span>
                            <a class="btn btn-primary badge" data-toggle="modal" data-target="#exampleModalSizeDefault">{{ $cust_package->package['package_name'] }}</a>
                        </div>
                        @endif
                    </div>
            <!--end::Item-->


           {{--  <div class="d-flex align-items-center flex-lg-fill mr-5 mb-2">
               
                @if($cust_device == null)
                 <div class="d-flex flex-column text-dark-75" style="display: none;">
                    <span class="font-weight-bolder font-size-h5">Device Id</span>
                    <p class="text-primary font-weight-bolder font-size-sm">Device not selected</p>
                </div>
                @else
                <div class="d-flex flex-column text-dark-75">
                   

                     <span class="font-weight-bolder font-size-h5">Device Id</span>
                           
                           {{ $cust_device->deviceid   }}
                </div>
                @endif




            </div> --}}
            



            <!--begin::Item-->
            <div class="d-flex align-items-center flex-lg-fill mr-5 mb-2">
               {{--  <span class="mr-3">
                    <i class="flaticon-confetti display-4 text-muted font-weight-bold"></i>
                </span> --}}
                @if($cust_device == null)
                 <div class="d-flex flex-column text-dark-75" style="display: none;">
                    <span class="font-weight-bolder font-size-h5">Device Id</span>
                    <p class="text-primary font-weight-bolder font-size-sm">Device not selected</p>
                </div>
                @else
                <div class="d-flex flex-column text-dark-75">
                    <span class="font-weight-bolder font-size-h5">Device Id</span>
                    <a class="btn btn-primary badge" data-toggle="modal" data-target="#exampleModalSizeDefault1">{{ $cust_device->deviceid   }}</a>
                    <!--<span class="font-weight-bolder font-size-sm" data-toggle="modal" data-target="#exampleModalSizeXl1"><span class="text-dark-50 font-weight-bold"></span></span>-->
                </div>
                @endif




            </div>
            <!--end::Item-->

           
          
        </div>




         <div class="d-flex align-items-center flex-wrap mt-8">


                <div class="d-flex align-items-center flex-lg-fill mr-5 mb-2">
                       {{--  <span class="mr-4">
                            <i class="flaticon-piggy-bank display-4 text-muted font-weight-bold"></i>
                        </span> --}}
                        @if( $cust_package == null)
                        <div class="d-flex flex-column text-dark-75">
                            <span class="font-weight-bolder font-size-h5">Due Amount</span>
                            <p class="text-primary font-weight-bolder font-size-sm">Package Not selected</p>
                        
                        </div>
                        @else
                        
                        <div class="d-flex flex-column text-dark-75">
                            <span class="font-weight-bolder font-size-h5">Due Amount</span>
                           
                           {{ $cust_package->due_amount }}

                        </div>
                        @endif
                 </div>



                  <div class="d-flex align-items-center flex-lg-fill mr-5 mb-2">
                       {{--  <span class="mr-4">
                            <i class="flaticon-piggy-bank display-4 text-muted font-weight-bold"></i>
                        </span> --}}
                        @if( $customers_channel_count == 0)
                        <div class="d-flex flex-column text-dark-75">
                            <span class="font-weight-bolder font-size-h5">Add On Package</span>
                            <p class="text-primary font-weight-bolder font-size-sm">Package Not selected</p>
                        
                        </div>
                        @else
                        
                        <div class="d-flex flex-column text-dark-75">
                            <span class="font-weight-bolder font-size-h5">Add On Package</span>
                           
                          

                               <a class="btn btn-primary badge" data-toggle="modal" data-target="#exampleModalSizeDefault">
                                  
                                {{--  @foreach($customer_channel as $pack)

                                {{ $pack->package_name }}<br>


                              @endforeach --}}


                                Package({{  $customers_channel_count }})

                              </a>

                        </div>
                        @endif
                 </div>

                   <div class="d-flex align-items-center flex-lg-fill mr-5 mb-2">
                       {{--  <span class="mr-4">
                            <i class="flaticon-piggy-bank display-4 text-muted font-weight-bold"></i>
                        </span> --}}
                        @if( $pending_complaint_count == 0)
                        <div class="d-flex flex-column text-dark-75">
                            <span class="font-weight-bolder font-size-h5">Pending Complaint</span>
                            <p class="text-primary font-weight-bolder font-size-sm">No Pending Complaint </p>
                        
                        </div>

                        

                      

                        @else
                        
                        <div class="d-flex flex-column text-dark-75">
                            <span class="font-weight-bolder font-size-h5">Pending Complaint's</span>
                           
                          

                             

                              <a class="btn btn-danger badge" data-toggle="modal" data-target="#exampleModalSizeDefault111">
                                  
                                {{--  @foreach($customer_channel as $pack)

                                {{ $pack->package_name }}<br>


                              @endforeach --}}


                                Complaint's({{  $pending_complaint_count }})

                              </a>

                        </div>
                        @endif
                 </div>





           




           {{--  <div class="d-flex align-items-center flex-lg-fill mr-5 mb-2">
              
                @if($cust_channel == null)
                 <div class="d-flex flex-column text-dark-75" style="display: none;">
                    <span class="font-weight-bolder font-size-h5">Activation Date</span>
                    <span class="font-weight-bolder font-size-sm"><span class="text-dark-50 font-weight-bold"></span></span>
                </div>
                @else
                <div class="d-flex flex-column text-dark-75">
                    <span class="font-weight-bolder font-size-h5">Activation Date</span>
                    <span class="font-weight-bolder font-size-sm"><span class="text-dark-50 font-weight-bold"></span>{{ $cust_channel->created_at }}</span>
                </div>
                @endif



                
            </div> --}}
            <!--end::Item--> 



         </div>




        <!--begin::Items-->
    </div>
</div>


    
        <div class="card card-custom gutter-b">
        <div class="card-body">
            <div class="card-body">
            <h3 class="text-center">Channel Payment  History</h3>
                    <!--begin: Datatable-->
                <table class="table table-bordered table-checkable mt-5" id="kt_datatable">
                    <thead>
                        <tr>
                        
                        <th>ID</th>
                        <th>Channel Name</th>
                        <th>Channel Type</th>
                        <th>Channel Amount</th>
                        <th>Customer Paid Amount</th>
                        <th>Due Amount</th>
                        <th>Balance</th>
                        <th>Date</th>
                        

                        {{-- <th>Actions</th> --}}
                    
                        </tr>
                    </thead>
                    <tbody>
                        @if($complaint == null)
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td> 
                        </tr>
                        @else
                        
                        @foreach($channel_payment as $channel)
                        <tr>
                        <td>{{ $channel->id }}</td>
                        <td>{{ $channel->channel_name }}</td>
                        <td>
                           {{ $channel->channel_type }}
                        </td>
                        <td>{{ $channel->channel_amount }}</td>
                        <td>{{ $channel->customer_paid_amount }}</td>
                        <td>{{ $channel->due_amount }}</td>
                       
                        <td>{{ $channel->balance }}</td>
                       
                        <td> {{ $channel->payment_date }}</td>
                       
                        </tr>

                        @endforeach
                         @endif
                    </tbody>
            
                </table>
        
        </div> 
        </div>
        </div></div>















    </div>



    <!-- end first nav  -->



   



</div>


    
</div>
<!--end::Profile Overview-->

<div class="modal fade" id="exampleModalSizeDefault" tabindex="-1" role="dialog" aria-labelledby="exampleModalSizeDefault" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Package Details</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <i aria-hidden="true" class="ki ki-close"></i>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>
                                          @foreach($customer_channel as $pack)  
                                         <div class="py-9">
                                            <div class="d-flex align-items-center justify-content-between mb-2">
                                                <span class="font-weight-bold mr-2">ID:</span>
                                                <span class="font-weight-bold mr-2">{{ $pack->id }}</span>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mb-2">
                                                <span class="font-weight-bold mr-2">channel Name:</span>
                                                <span class="font-weight-bold mr-2">{{ $pack->channel_name }}</span>
                                            </div>
                                            
                                             <div class="d-flex align-items-center justify-content-between mb-2">
                                                <span class="font-weight-bold mr-2">channel Type:</span>
                                                <span class="font-weight-bold mr-2">{{ $pack->channel_type }}</span>
                                            </div>
                                             <div class="d-flex align-items-center justify-content-between mb-2">
                                                <span class="font-weight-bold mr-2">Channel Amount:</span>
                                                <span class="font-weight-bold mr-2">{{ $pack->channel_amount }}</span>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mb-2">
                                                <span class="font-weight-bold mr-2">Customer Paid Amount:</span>
                                                <span class="font-weight-bold mr-2">{{ $pack->customer_paid_amount }}</span>
                                            </div>
                                            
                                             {{-- <div class="d-flex align-items-center justify-content-between mb-2">
                                                <span class="font-weight-bold mr-2">Due Amount:</span>
                                                <span class="font-weight-bold mr-2">{{ $pack->due_amount }}</span>
                                            </div> --}}
                                            
                                            
                                            <div class="d-flex align-items-center justify-content-between mb-2">
                                                <span class="font-weight-bold mr-2">Balance:</span>
                                                <span class="font-weight-bold mr-2">{{ $pack->balance }}</span>
                                            </div>


                                            <div class="d-flex align-items-center justify-content-between mb-2">
                                                <span class="font-weight-bold mr-2">Activate Date:</span>
                                                <span class="font-weight-bold mr-2">{{ $pack->created_at }}</span>
                                            </div>



                                            {{-- <div class="d-flex align-items-center justify-content-between mb-2">
                                                <span class="font-weight-bold mr-2">Deactivation Date:</span>
                                                <span class="font-weight-bold mr-2">
                                                      @if($pack->package_type == 'Prepaid')
                                                         {{ $pack->deactivation_date }}
                                                      @else
                                                          <p></p>
                                                      @endif 


                                                </span>
                                            </div> --}}


                                             <div class="d-flex align-items-center justify-content-between mb-2">
                                                <span class="font-weight-bold mr-2">Status:</span>
                                                <span class="font-weight-bold mr-2">
                                                   
                                                @if($pack->channel_type == 'Prepaid')
                                                 @if($count <= 0)
                                                    <button class="badge btn btn-danger">pending</button>
                                                 @elseif($pack->channel_status == 0)
                                                    <button class="badge btn btn-danger">pending</button> 
                                                 @else

                                                    <button class="badge btn btn-success" type="submit">active</button>
                                                @endif
                                                @else
                                                  @if($pack->channel_status == 0) 
                                                     <button class="badge btn btn-danger" type="submit">pending</button>
                                                  @else
                                                     <button class="badge btn btn-success" type="submit">active</button>
                                                  @endif
                                                @endif  



                                                </span>
                                            </div>
                                            <hr><hr>
                                           
                                
                                          
                                            
                                        </div>  
                                        @endforeach


                                            
                                            
                                            
                                            
                                          
                                        </p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>


</div>



 <div class="modal fade" id="exampleModalSizeDefault2" tabindex="-1" role="dialog" aria-labelledby="exampleModalSizeDefault2" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Package Details</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <i aria-hidden="true" class="ki ki-close"></i>
                                        </button>
                                    </div>
                                    @if($cust_package == null)
                                    <div class="modal-body">
                                    </div>
                                    @else
                                    <div class="modal-body">
                                        <p>
                                           
                                         <div class="py-9">
                                            <div class="d-flex align-items-center justify-content-between mb-2">
                                                <span class="font-weight-bold mr-2">ID:</span>
                                                <span class="font-weight-bold mr-2">{{ $cust_package->id }}</span>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mb-2">
                                                <span class="font-weight-bold mr-2">Package Name:</span>
                                                <span class="font-weight-bold mr-2">{{ $cust_package->package['package_name'] }}</span>
                                            </div>
                                            
                                             <div class="d-flex align-items-center justify-content-between mb-2">
                                                <span class="font-weight-bold mr-2">Package Type:</span>
                                                <span class="font-weight-bold mr-2">{{ $cust_package->package['package_type'] }}</span>
                                            </div>
                                             <div class="d-flex align-items-center justify-content-between mb-2">
                                                <span class="font-weight-bold mr-2">Package Amount:</span>
                                                <span class="font-weight-bold mr-2">{{ $cust_package->package_amount }}</span>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mb-2">
                                                <span class="font-weight-bold mr-2">Customer Paid Amount:</span>
                                                <span class="font-weight-bold mr-2">{{ $cust_package->customer_paid_amount }}</span>
                                            </div>
                                            
                                             <div class="d-flex align-items-center justify-content-between mb-2">
                                                <span class="font-weight-bold mr-2">Due Amount:</span>
                                                <span class="font-weight-bold mr-2">{{ $cust_package->due_amount }}</span>
                                            </div>
                                            
                                            
                                            <div class="d-flex align-items-center justify-content-between mb-2">
                                                <span class="font-weight-bold mr-2">Balance:</span>
                                                <span class="font-weight-bold mr-2">{{ $cust_package->balance }}</span>
                                            </div>


                                            <div class="d-flex align-items-center justify-content-between mb-2">
                                                <span class="font-weight-bold mr-2">Activate Date:</span>
                                                <span class="font-weight-bold mr-2">{{ $cust_package->created_at }}</span>
                                            </div>



                                            <div class="d-flex align-items-center justify-content-between mb-2">
                                                <span class="font-weight-bold mr-2">Deactivation Date:</span>
                                                <span class="font-weight-bold mr-2">
                                                      @if($cust_package->package_type == 'Prepaid')
                                                         {{ $cust_package->deactivation_date }}
                                                      @else
                                                          <p></p>
                                                      @endif 


                                                </span>
                                            </div>


                                             <div class="d-flex align-items-center justify-content-between mb-2">
                                                <span class="font-weight-bold mr-2">Status:</span>
                                                <span class="font-weight-bold mr-2">
                                                   
                                                @if($cust_package->package_type == 'Prepaid')
                                                 @if($count <= 0)
                                                    <button class="badge btn btn-danger">pending</button>
                                                 @elseif($cust_package->package_status == 0)
                                                    <button class="badge btn btn-danger">pending</button> 
                                                 @else

                                                    <button class="badge btn btn-success" type="submit">active</button>
                                                @endif
                                                @else
                                                  @if($cust_package->package_status == 0) 
                                                     <button class="badge btn btn-danger" type="submit">pending</button>
                                                  @else
                                                     <button class="badge btn btn-success" type="submit">active</button>
                                                  @endif
                                                @endif  



                                                </span>
                                            </div>
                                            <hr><hr>
                                           
                                
                                          
                                            
                                        </div>  
                                       


                                            
                                            
                                            
                                            
                                          
                                        </p>
                                    </div>
                                    @endif
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
        
        
        <div  class="modal fade" id="exampleModalSizeDefault1" tabindex="-1" role="dialog" aria-labelledby="exampleModalSizeDefault1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Device Details</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <i aria-hidden="true" class="ki ki-close"></i>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>
                                            
                                           @foreach($customer_device as $cd)  
                                         <div class="py-9">
                                            <div class="d-flex align-items-center justify-content-between mb-2">
                                                <span class="font-weight-bold mr-2">ID:</span>
                                                <span class="font-weight-bold mr-2">{{ $cd->id }}</span>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mb-2">
                                                <span class="font-weight-bold mr-2">Device Id:</span>
                                                <span class="font-weight-bold mr-2">{{ $cd->deviceid }}</span>
                                            </div>
                                            
                                             {{-- <div class="d-flex align-items-center justify-content-between mb-2">
                                                <span class="font-weight-bold mr-2">Device:</span>
                                                <span class="font-weight-bold mr-2">{{ $cd->device_name }}</span>
                                            </div> --}}
                                             <div class="d-flex align-items-center justify-content-between mb-2">
                                                <span class="font-weight-bold mr-2">Company Name:</span>
                                                <span class="font-weight-bold mr-2">{{ $cd->Company['company_name'] }}</span>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mb-2">
                                                <span class="font-weight-bold mr-2">Model:</span>
                                                <span class="font-weight-bold mr-2">{{ $cd->Mode['model_name']}}</span>
                                            </div>
                                            
                                            <hr> 
                                            
                                            
                                        </div>  
                                         @endforeach
                                              
                                            
                                            
                                         
                                        </p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>


  <div class="modal fade" id="exampleModalSizeDefault111" tabindex="-1" role="dialog" aria-labelledby="exampleModalSizeDefault" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Pending Complaints Details</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <i aria-hidden="true" class="ki ki-close"></i>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>
                                          @foreach($pending_complaint as $row)  
                                         <div class="py-9">

                                            <div class="d-flex align-items-center justify-content-between mb-2">
                                                <span class="font-weight-bold mr-2">Days:</span>

                                                @php
                                                    {{

                                                        $final =$row->created_at;

                                                        $final1 =Carbon\Carbon::now();



                                                        $formatted_dt1=Carbon\Carbon::parse($final);
        

                                                       $formatted_dt2=Carbon\Carbon::parse($final1);
        

                                                         $date_diff=$formatted_dt1->diffInDays($formatted_dt2);
                                                  
                                                    }}
                                                @endphp



                                                <span class="font-weight-bold mr-2">{{ $date_diff }}</span>
                                            </div>
                                            
                                            <div class="d-flex align-items-center justify-content-between mb-2">
                                                <span class="font-weight-bold mr-2">Complaint Id:</span>
                                                <span class="font-weight-bold mr-2">{{ $row->complaint_id }}</span>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mb-2">
                                                <span class="font-weight-bold mr-2">Customer Name:</span>
                                                <span class="font-weight-bold mr-2">{{ $row->customer_name }}</span>
                                            </div>
                                            
                                             <div class="d-flex align-items-center justify-content-between mb-2">
                                                <span class="font-weight-bold mr-2">Complaints:</span>

                                                 
                                                 @if($row->complaint == null)
                                            
                                                 @if($row->active_deactive == 1 )
                                                 <button class="btn btn-success badge">Activation</button>
                                                   
                                                 @elseif($row->active_deactive == 2 )
                                                  <button class="btn btn-danger badge">Deactivation</button>
                                                     
                                                 @endif
                                                


                                           
                                            @else
                                           
                                                 
                                                  @foreach($row->complaint as $data)
                                                  <span class="btn"> {{ $data['complainttype'].';' }} </span>
                                                 @endforeach
                                            
                                            @endif






                                               {{--  <span class="font-weight-bold mr-2">{{ $pack->channel_type }}</span> --}}
                                            </div>
                                             <div class="d-flex align-items-center justify-content-between mb-2">
                                                <span class="font-weight-bold mr-2">Other Complaints:</span>
                                                <span class="font-weight-bold mr-2">{{ $row->other_complaint}}</span>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mb-2">
                                                <span class="font-weight-bold mr-2">Assigned Technician:</span>
                                                <span class="font-weight-bold mr-2">{{ $row->staffs['name'] }}</span>
                                            </div>
                                            
                                             {{-- <div class="d-flex align-items-center justify-content-between mb-2">
                                                <span class="font-weight-bold mr-2">Due Amount:</span>
                                                <span class="font-weight-bold mr-2">{{ $pack->due_amount }}</span>
                                            </div> --}}
                                            
                                            
                                            <div class="d-flex align-items-center justify-content-between mb-2">
                                                <span class="font-weight-bold mr-2">Assist By:</span>
                                                <span class="font-weight-bold mr-2">{{ $row->assist['name'] }}</span>
                                            </div>


                                            <div class="d-flex align-items-center justify-content-between mb-2">
                                                <span class="font-weight-bold mr-2">Remarks:</span>
                                                <span class="font-weight-bold mr-2">{{ $row->complaint_description }}</span>
                                            </div>


                                            <div class="d-flex align-items-center justify-content-between mb-2">
                                                <span class="font-weight-bold mr-2">Number Of Visit:</span>
                                                <span class="font-weight-bold mr-2">{{ $row->number_of_visit }}</span>
                                            </div>



                                             <div class="d-flex align-items-center justify-content-between mb-2">
                                                <span class="font-weight-bold mr-2">Technician Staff status:</span>
                                                {{-- <span class="font-weight-bold mr-2">{{ $row->number_of_visit }}</span> --}}



                                                  @if($row->technician_status == 0) 
                                                <button class="badge btn btn-danger">pendind</button>
                                                 @else
                                                  <button class=" badge btn btn-success">{{ $row->tech_status['technician_status'] }}</button>
                                                 @endif


                                            </div>



                                             <div class="d-flex align-items-center justify-content-between mb-2">
                                                <span class="font-weight-bold mr-2">Date:</span>
                                                <span class="font-weight-bold mr-2">{{ $row->created_at }}</span>
                                            </div>



                                            <div class="d-flex align-items-center justify-content-between mb-2">
                                                <span class="font-weight-bold mr-2">Status:</span>
                                                {{-- <span class="font-weight-bold mr-2"><td>{{ $row->created_at }}</td></span> --}}

                                            @if($row->status ==0) 
                                                  <button class="badge btn btn-danger">pendind</button>
                                            @else
                                                <button class=" badge btn btn-success">Completed</button></td>
                                            @endif
                                            </div>








                                         


                                            <hr><hr>
                                           
                                
                                          
                                            
                                        </div>  
                                        @endforeach


                                            
                                            
                                            
                                            
                                          
                                        </p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>                      


        </div>
        <!--end::Container-->
    </div>
<!--end::Entry-->
@endsection


@section('css')

<link href="{{asset('assets/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />




{{-- datetimepicker --}}

<link rel="stylesheet" href="{{asset('css/bootstrap-datetimepicker.min.css')}}">

{{-- end datetimepicker --}}

      
@endsection



@section('script')

 {{-- datetimepicker --}}
<script src="{{asset('js/bootstrap-datetimepicker.min.js')}}"></script>
        <script type="text/javascript">
            $(function () {
                $('#datetimepicker1').datetimepicker();
            });
        </script>
{{--  end datetimepicker --}}


<script src="{{asset('assets/js/pages/crud/forms/widgets/select2.js')}}"></script>
<script src="{{asset('assets/js/pages/widgets.js')}}"></script>
<script src="{{asset('assets/js/pages/custom/profile/profile.js')}}"></script>

<script>
    $("#first_div").show();
    $("#overview_menu").addClass('active');
    $("#history_div").hide();
    $("#payment_history_div").hide();
    $("#channelpayment_history_div").hide();

    $("activation_div").hide();
    

    $("#overview_menu").click(function(){
        $("#first_div").show();
        $("#history_div").hide();
        $("#payment_history_div").hide();
        $("#channelpayment_history_div").hide();
        $("#activation_div").hide();
        $("#overview_menu").addClass('active');
        $("#history_menu").removeClass('active');
        $("#payment_history").removeClass('active');
         $("#channel_payment_history").removeClass('active');


        
        $("#activation_menu").removeClass('active');
    })
    $("#history_menu").click(function(){
        $("#first_div").hide();
        $("#history_div").show();
        $("#payment_history_div").hide();
        $("#channelpayment_history_div").hide();
        $("#activation_div").hide();
        $("#overview_menu").removeClass('active');
        $("#history_menu").addClass('active');
        $("#payment_history").removeClass('active');
        $("#channel_payment_history").removeClass('active');
        $("#activation_menu").removeClass('active');
    })
  

     $("#payment_history").click(function(){
        $("#first_div").hide();
        $("#history_div").hide();
        $("#payment_history_div").show();
        $("#channelpayment_history_div").hide(); 
        $("#activation_div").hide();
        $("#overview_menu").removeClass('active');
        $("#history_menu").removeClass('active');
        $("#payment_history").addClass('active');
        $("#channel_payment_history").removeClass('active');
        $("#activation_menu").removeClass('active');
    })



     $("#channel_payment_history").click(function(){
        $("#first_div").hide();
        $("#history_div").hide();
        $("#payment_history_div").hide();
        $("#channelpayment_history_div").show(); 
        $("#activation_div").hide();
        $("#overview_menu").removeClass('active');
        $("#history_menu").removeClass('active');
        $("#payment_history").removeClass('active');
        $("#channel_payment_history").addClass('active');
        $("#activation_menu").removeClass('active');
    })



    $("#activation_menu").click(function(){
        $("#first_div").hide();
        $("#history_div").hide();
        $("#payment_history_div").hide();
        $("#channelpayment_history_div").hide();
        $("#activation_div").show();
        $("#overview_menu").removeClass('active');
        $("#history_menu").removeClass('active');
        $("#payment_history").removeClass('active');
        $("#channel_payment_history").removeClass('active');
        $("#activation_menu").addClass('active');
    })
   
   

   
$('body').on('click', '#payment_btn', function() {
    var no = $(this).closest('tr').children('td');

    $('#payment_btn').data('action');
    var action = $(this).data('action');
    $('#payment_form').attr('action', action);

})


</script>

@endsection