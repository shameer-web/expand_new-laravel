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
        <div class="d-flex align-items-center">
            <!-- <div class="symbol symbol-60 symbol-xxl-100 mr-5 align-self-start align-self-xxl-center">
                <div class="symbol-label" style="background-image:url('assets/media/users/300_21.jpg')"></div>
                <i class="symbol-badge bg-success"></i>
            </div> -->
            <div>
                <a href="#" class="font-weight-bolder font-size-h5 text-dark-75 text-hover-primary">
                  {{ $cust->name }}
                </a>
                
            </div>
        </div>
        <!--end::User-->

        <!--begin::Contact-->
        <div class="py-9">
            <div class="d-flex align-items-center justify-content-between mb-2">
                <span class="font-weight-bold mr-2">Customer ID:</span>
                <a href="#" class="text-muted text-hover-primary">{{$cust->cust_id}}</a>
            </div>
            <div class="d-flex align-items-center justify-content-between mb-2">
                <span class="font-weight-bold mr-2">KSEB No:</span>
                <span class="text-muted">{{$cust->kseb_post_no}}</span>
            </div>
            <div class="d-flex align-items-center justify-content-between mb-2">
                <span class="font-weight-bold mr-2">Instalayion Adress:</span>
                <span class="text-muted">{{$cust->installation_address}}</span>
            </div>

             <div class="d-flex align-items-center justify-content-between mb-2">
                <span class="font-weight-bold mr-2">CRF NO:</span>
                <span class="text-muted">{{$cust->crf_no}}</span>
            </div>
            <div class="d-flex align-items-center justify-content-between mb-2">
                <span class="font-weight-bold mr-2">Email:</span>
                <span class="text-muted">{{$cust->email}}</span>
            </div>
            <div class="d-flex align-items-center justify-content-between mb-2">
                <span class="font-weight-bold mr-2">Phone No:</span>
                <span class="text-muted">{{$cust->phone}}</span>
            </div>
            <div class="d-flex align-items-center justify-content-between mb-2">
                <span class="font-weight-bold mr-2">Mobile No:</span>
                <span class="text-muted">{{$cust->mobile_number}}</span>
            </div>
            <div class="d-flex align-items-center justify-content-between mb-2">
                <span class="font-weight-bold mr-2">Remarks:</span>
                <span class="text-muted">{{$cust->remark}}</span>
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
                
                <a href="#" id="history_menu" class="btn btn-hover-light-primary font-weight-bold py-3 px-6 mb-2 text-center btn-block">
                    Complaint History
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
            <!--begin::Item-->
            <div class="d-flex align-items-center flex-lg-fill mr-5 mb-2">
               {{--  <span class="mr-4">
                    <i class="flaticon-piggy-bank display-4 text-muted font-weight-bold"></i>
                </span> --}}
                @if($cust_package == null)
                 <div class="d-flex flex-column text-dark-75">
                    <span class="font-weight-bolder font-size-sm">Package Name</span>
                    <p class="text-primary font-weight-bolder font-size-h5">package not selected</p>
                   
                </div>
                @else
                <div class="d-flex flex-column text-dark-75">
                    <span class="font-weight-bolder font-size-sm">Package Name</span>
                    <span class="font-weight-bolder font-size-h5"><span class="text-dark-50 font-weight-bold"></span>{{ $cust_package->package['package_name'] }}</span>
                </div>
                @endif
            </div>
            <!--end::Item-->

            <!--begin::Item-->
            <div class="d-flex align-items-center flex-lg-fill mr-5 mb-2">
               {{--  <span class="mr-3">
                    <i class="flaticon-confetti display-4 text-muted font-weight-bold"></i>
                </span> --}}

                 @if($cust_package == null)

                 <div class="d-flex flex-column text-dark-75">
                    <span class="font-weight-bolder font-size-sm">Package Amount</span>
                   
                </div>

                @else
                <div class="d-flex flex-column text-dark-75">
                    <span class="font-weight-bolder font-size-sm">Package Amount</span>
                    <span class="font-weight-bolder font-size-h5"><span class="text-dark-50 font-weight-bold"></span>{{ $cust_package->package['package_price'] }}</span>
                </div>
                @endif
            </div>
            <!--end::Item-->

            <!--begin::Item-->
            <div class="d-flex align-items-center flex-lg-fill mr-5 mb-2">
               {{--  <span class="mr-3">
                    <i class="flaticon-pie-chart display-4 text-muted font-weight-bold"></i>
                </span> --}}
                 @if($cust_package == null)

                  <div class="d-flex flex-column text-dark-75">
                    <span class="font-weight-bolder font-size-sm">Package Type</span>
                    
                </div>

                @else
                <div class="d-flex flex-column text-dark-75">
                    <span class="font-weight-bolder font-size-sm">Package Type</span>
                    <span class="font-weight-bolder font-size-h5"><span class="text-dark-50 font-weight-bold"></span>{{ $cust_package->package['package_type'] }}</span>
                </div>

                @endif
            </div>
            <!--end::Item-->

            <!--begin::Item-->
            <div class="d-flex align-items-center flex-lg-fill mr-5 mb-2">
                {{-- <span class="mr-3">
                    <i class="flaticon-pie-chart display-4 text-muted font-weight-bold"></i>
                </span> --}}
                @if($cust_package == null)

                 <div class="d-flex flex-column text-dark-75">
                    <span class="font-weight-bolder font-size-sm"> Status</span>
                    <span class="font-weight-bolder font-size-h5"><span class="text-dark-50 font-weight-bold"></span>

                              
                </span>
                </div>
                @else

                <div class="d-flex flex-column text-dark-75">
                    <span class="font-weight-bolder font-size-sm"> Status</span>
                    <span class="font-weight-bolder font-size-h5"><span class="text-dark-50 font-weight-bold"></span>

                               @if($cust_package->package_status == 0) 
                                    <td><button class="badge btn btn-danger" type="submit">De-active</button></td>
                                @else
                                     <td><button class="badge btn btn-success" type="submit">active</button></td>
                                @endif
                </span>
                </div>
                @endif
            </div>
            <!--end::Item-->

            <!--begin::Item-->
            
            <!--end::Item-->

            <!--begin::Item-->
            
            <!--end::Item-->
        </div>

        <div class="d-flex align-items-center flex-wrap mt-8">
            <!--begin::Item-->
            <div class="d-flex align-items-center flex-lg-fill mr-5 mb-2">
                {{-- <span class="mr-4">
                    <i class="flaticon-piggy-bank display-4 text-muted font-weight-bold"></i>
                </span> --}}

                @if($cust_package == null)

                 <div class="d-flex flex-column text-dark-75">
                    <span class="font-weight-bolder font-size-sm">Payment Status</span>
                    <span class="font-weight-bolder font-size-h5"><span class="text-dark-50 font-weight-bold"></span>

                </span>
                </div>
 
                @else
                <div class="d-flex flex-column text-dark-75">
                    <span class="font-weight-bolder font-size-sm">Payment Status</span>
                    <span class="font-weight-bolder font-size-h5"><span class="text-dark-50 font-weight-bold"></span>

                    @if($cust_package->payment_status == 0) 
                                   <td><button class="badge btn btn-danger" type="submit">pending</button></td>
                                @else
                                   <td><button class="badge btn btn-success" type="submit">success</button></td>
                    @endif

                </span>
                </div>
                @endif
            </div>
            <!--end::Item-->

            <!--begin::Item-->
            <div class="d-flex align-items-center flex-lg-fill mr-5 mb-2">
               {{--  <span class="mr-3">
                    <i class="flaticon-confetti display-4 text-muted font-weight-bold"></i>
                </span> --}}
                @if($cust_device == null)
                 <div class="d-flex flex-column text-dark-75" style="display: none;">
                    <span class="font-weight-bolder font-size-sm">Device ID</span>
                    <span class="font-weight-bolder font-size-h5"><span class="text-dark-50 font-weight-bold"></span></span>
                </div>
                @else
                <div class="d-flex flex-column text-dark-75">
                    <span class="font-weight-bolder font-size-sm">Device ID</span>
                    <span class="font-weight-bolder font-size-h5"><span class="text-dark-50 font-weight-bold"></span>{{ $cust_device->device_id }}</span>
                </div>
                @endif
            </div>
            <!--end::Item-->

            <!--begin::Item-->
           {{--  <div class="d-flex align-items-center flex-lg-fill mr-5 mb-2">
              
                <div class="d-flex flex-column text-dark-75">
                    <span class="font-weight-bolder font-size-sm">CRF No</span>
                    <span class="font-weight-bolder font-size-h5"><span class="text-dark-50 font-weight-bold"></span>{{$cust->crf_no}}</span>
                </div>
            </div> --}}
            <!--end::Item-->

            <!--begin::Item-->
           {{--  <div class="d-flex align-items-center flex-lg-fill mr-5 mb-2">
               
                <div class="d-flex flex-column text-dark-75">
                    <span class="font-weight-bolder font-size-sm"> Status</span>
                    <span class="font-weight-bolder font-size-h5"><span class="text-dark-50 font-weight-bold"></span>
                
                @if($cust_package->package_status == 0) 
                                    <td><button class="badge btn btn-danger" type="submit">in-active</button></td>
                @else
                                     <td><button class="badge btn btn-success" type="submit">active</button></td>
                @endif


                </span>
                </div>
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
                                     Create Complaint
                                </h3>
                                
                            </div>
                            <!--begin::Form-->
                            <br>
                            
                            <form class="form" action="{{ route('complaint.store') }}" method="post"  id="form-complaint">
                                @csrf
                                <div class="card-body" >
                                    <div class="form-group row">
                                        

                                       



                                        
                                    </div>
                                    <div class="form-group row">


                                     



                                        <label class="col-lg-2 col-form-label text-right">Staff:</label>
                                        <div class="col-lg-10">
                                            <div class="input-group">
                                                



                                                <select class="form-control  "  name="staff">
                                                            @foreach($user as $row)
                                                            <option value="{{ $row->id }}">{{ $row->name }}</option>
                                                            
                                                             @endforeach
                                                    
                                                    
                                                   
                                                </select>
                                                
                                            </div>
                                            <span class="form-text text-muted">Please enter Staff name</span>
                                        </div>



                                       
                                        
                                    </div>



                                    <div class="form-group row">
                                        
                                       <label class="col-lg-2 col-form-label text-right">KSEB Post No:</label>
                                        <div class="col-lg-4">
                                            <input type="text" name="post_no"  class="form-control" placeholder="Enter KSEB Post No" required/>
                                            <span class="form-text text-muted">Please enter KSEB Post No</span>
                                        </div>


                                         <label class="col-lg-1 col-form-label text-right">Type :</label>
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
                                       



                                        
                                    </div>


                                    <div class="form-group row">



                                        <label class="col-lg-2 col-form-label text-right">Complaint's:</label>
                                        <div class="col-lg-10">
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
                                          


                                    <div class="form-group row">

                                         <label class="col-lg-2 col-form-label text-right">Other complaint:</label>
                                        <div class="col-lg-10">
                                           {{--  <input type="text" name="other_complaint"  class="form-control" placeholder="Enter other_complaint"/>
                                            <span class="form-text text-muted">Please enter other complaint</span> --}}
                                            <textarea name="other_complaint" class="form-control" placeholder="Enter other_complaint" rows="3" required></textarea>
                                        </div>

                                        

                                    </div>
                                   <div class="form-group row">


                                    <label class="col-lg-2 col-form-label text-right">Active Or De-active:</label>
                                        <div class="radio-inline col-lg-5 ">
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

                                   <div class="col-lg-5">
                            <label>Active Or De-active  :</label>
                            <div class="input-group" >
                                <input type="text" name="active_deactive_date" id="datetimepicker1" class="form-control" placeholder="date"/ required>
                                <div class="input-group-append"><span class="input-group-text"><i class="fa fa-calendar"></i></span></div>
                            </div>
                            <span class="form-text text-muted">Please enter Active Or De-active</span>
                        </div>
                                        


                                   
                                      
                                   </div>    
                          
                        </div>


                                     <input type="hidden" name="customer_name" value="{{ $cust->id }}">
                                      <input type="hidden" name="phone_no" value="{{ $cust->phone }}">
                                    <input type="hidden" name="email" value="{{ $cust->email }}">
                                     
                                    

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


    </div>



    <!-- end first nav  -->






   
    <div class="flex-row-fluid ml-lg-6 first_div" id="history_div" style="display: none;">
    
   
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
                                                  <td></td> 
                                               </tr>
                                               @else

                                              <tr>
                                                <td>{{ $complaint->id }}</td>
                                                <td>{{ $complaint->complaint_id }}</td>
                                                <td>
                                                    @foreach($single_com as$com )
                                                      {{ $com->complainttype }},<br>
                                                    @endforeach
                                                </td>
                                                <td>{{ $cust->name }}</td>
                                                <td>{{ $complaint->phone_no }}</td>
                                                <td>{{ $complaint->created_at }}</td>
                                                @if($complaint->status ==0) 
                                                   <td><button class="badge btn btn-danger">pendind</button></td>
                                                @else
                                                <td> <button class=" badge btn btn-success">Completed</button></td>
                                                @endif
                                                {{-- <td>{{ $complaint-> }}</td> --}}
                                              </tr>
                                              @endif
                                            </tbody>
                                  
                                        </table>

                                
                                </div> 
                            </div>



</div>


    
</div>
<!--end::Profile Overview-->


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
    
    

    $("#overview_menu").click(function(){
        $("#first_div").show();
        $("#history_div").hide();
        
    
        $("#overview_menu").addClass('active');
        $("#history_menu").removeClass('active');
       
    })
    $("#history_menu").click(function(){
        $("#first_div").hide();
        $("#history_div").show();
        $("#overview_menu").removeClass('active');
        $("#history_menu").addClass('active');
         
    })
   
   

   
$('body').on('click', '#payment_btn', function() {
    var no = $(this).closest('tr').children('td');

    $('#payment_btn').data('action');
    var action = $(this).data('action');
    $('#payment_form').attr('action', action);

})


</script>

@endsection