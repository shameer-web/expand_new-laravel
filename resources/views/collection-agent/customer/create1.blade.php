@extends('layouts.collection_agent')


@section('content')

<!--begin::Subheader-->
    <div class="subheader py-2 py-lg-6 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">

            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-1">

                <!--begin::Page Heading-->
                <div class="d-flex align-items-baseline flex-wrap mr-5">

                    <!--begin::Page Title-->
                    <h5 class="text-dark font-weight-bold my-1 mr-5">Customers | Create New Customer</h5>

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
               New Customer
            </h3>
            <div class="card-toolbar">
                <div class="example-tools justify-content-center">
                    <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                    <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                </div>
            </div>
        </div>
			<!--begin::Form-->
			<form class="form" action="{{ route('cust.store') }}" method="POST" enctype="multipart/form-data" >
			@csrf
				<div class="card-body">
				    	
					<div class="form-group row">
						<div class="col-lg-3">
							<label>Enq No:</label>
							<input type="text" class="form-control enqid-quirey"  style="text-transform:uppercase" name="enqid" value="" id="enqid" placeholder="Eg : ENQ-N0001" required/>
							<span class="form-text text-muted" id="alert-box">Please enter your Enqiry Number</span>
							
						</div>
						<div class="col-lg-3">
							<label>Full Name:</label>
							<input type="text" class="form-control " name="name" id="name" placeholder="Enter full name" required/>
							<span class="form-text text-muted">Please enter your full name</span>
						</div>
						<div class="col-lg-3">
							<label>Email:</label>
							<input type="email" class="form-control" name="email" placeholder="Enter email" required/>
							<span class="form-text text-muted">Please enter your email</span>
						</div>
						<div class="col-lg-3">
							<label>Subcode:</label>
							<div class="input-group">
								<div class="input-group-prepend"><span class="input-group-text"></div>
								<select class="form-control " id="kt_select2_1" name="subcode">
									<option selected="selected">Select Subcode</option>
									@foreach($subcode as $row)
									<option value="{{$row->id}}">{{$row->subcode}}</option>
									@endforeach
									
								</select>
							</div>
							<span class="form-text text-muted">Please enter your Subcode</span>
						</div>
					</div>
					<div class="form-group row">
						<div class="col-lg-3">
							<label>Area:</label>
							<div class="input-group">
								<select class="form-control " id="kt_select2_1" name="area">
									<option selected="selected">Select Area</option>
									@foreach($area as $row)
									<option value="{{$row->id}}">{{$row->area_name}}</option>
									@endforeach
									
								</select>
								<div class="input-group-append"><span class="input-group-text"><i class="la la-map-marker"></i></span></div>
							</div>
							<span class="form-text text-muted">Please enter your area</span>
						</div>
						<div class="col-lg-3">
							<label>CRF No:</label>
							<input type="text" name="crfno" class="form-control" placeholder=""/>
							<span class="form-text text-muted">Please enter your crf no</span>
						</div>
						<div class="col-lg-3">
							<label>KSEB Post No:</label>
							<div class="input-group">
								<div class="input-group-prepend"><span class="input-group-text"><i class="la la-info-circle"></i></span></div>
								<input type="text" name="ksebno" id="ksebno" class="form-control" placeholder="Post Number"/>
							</div>
							<span class="form-text text-muted">Please enter Kseb Post Number</span>
						</div>
						<div class="col-lg-3">
							<label>Installation Address:</label>
							<div class="input-group">
								<input type="text" name="address" id="iaddress" class="form-control" placeholder="Enter your address"/>
								<div class="input-group-append"><span class="input-group-text"><i class="la la-map-marker"></i></span></div>
							</div>
							<span class="form-text text-muted">Please enter your address</span>
						</div>
					</div>
					<div class="form-group row">
						<div class="col-lg-4">
							<label>District:</label>
							<div class="input-group">
								<div class="input-group-append"></div>
								<select class="form-control " id="kt_select2_1" name="district">
									<option selected="selected">Select District</option>
									@foreach($district as $row)
									<option value="{{$row->id}}">{{$row->district_name}}</option>
									@endforeach
									
								</select>
							</div>
							<span class="form-text text-muted">Please enter your District</span>
						</div>
						


						<div class="col-lg-4">
							<label>Pincode:</label>
							<div class="input-group">
								<div class="input-group-append"></div>
								<input type="text" name="pincode"  id="pincode" class="form-control" placeholder="Enter your pincode"/>
							</div>
							<span class="form-text text-muted">Please enter your Pincode</span>
						</div>
						<div class="col-lg-4">
							<label>Communication Address:</label>
							<div class="input-group">
								<input type="text" name="caddress" id="caddress" class="form-control" placeholder="Enter your address"/>
								<div class="input-group-append"><span class="input-group-text"><i class="la la-map-marker"></i></span></div>
							</div>
							<span class="form-text text-muted">Please enter your address</span>
						</div>
						
					</div>
					<div class="form-group row">
						<div class="col-lg-4">
							<label>Customer Type:</label>
							<div class="radio-inline">
								<label class="radio radio-solid">
									<input type="radio" name="ctype" checked="checked" value="1"/>
									<span></span>
									Regular
								</label>
								<label class="radio radio-solid">
									<input type="radio" name="ctype" value="2"/>
									<span></span>
									Rent
								</label>
							</div>
							<span class="form-text text-muted">Please select user Type</span>
						</div>
						<div class="col-lg-4">
							<label>ID Proof Type:</label>
							<div class="input-group">
								<div class="input-group-append"></div>
								<select class="form-control " id="kt_select2_1" name="prooftype">
									<option selected="selected">Select Id</option>
									<option value="1">Adhar</option>
									<option value="2">Voter ID</option>
									<option value="3">Pan</option>
									<option value="4">Driwing Licence</option>
									
									
								</select>
							</div>
							<span class="form-text text-muted">Please select your id typeDistrict</span>
						</div>
						


						<div class="col-lg-4">
                            <input type="file" name="proof">
							<span class="form-text text-muted">Max file size is 1MB and max number of files is 5.</span>
						</div>	
					</div>
					<div class="form-group row">
						
						<div class="col-lg-4">
							<label>Phone:</label>
							<div class="input-group">
								<div class="input-group-append"></div>
								<input type="text" class="form-control" name="phone" id="phone" placeholder="Enter your Phone"/>
							</div>
							<span class="form-text text-muted">Please enter your Phone Number</span>
						</div>
						<div class="col-lg-4">
							<label>Mobile:</label>
							<div class="input-group">
								<div class="input-group-append"></div>
								<input type="text" class="form-control" name="mobile" id="mobile" placeholder="Enter your Mobile"/>
							</div>
							<span class="form-text text-muted">Please enter your Mobile Number</span>
						</div>
						<div class="col-lg-4">
							<label>Remarks:</label>
							<div class="input-group">
								<div class="input-group-append"></div>
								<input type="text" class="form-control" name="remark" placeholder="Enter your Remarks"/>
							</div>
							<span class="form-text text-muted">Please enter Remarks</span>
						</div>



						 


						


			            <div class="col-lg-4">
							<label>Date :</label>
							<div class="input-group" >
								<input type="text" name="date" id="datetimepicker1" class="form-control" placeholder="date"/>
								<div class="input-group-append"><span class="input-group-text"><i class="fa fa-calendar"></i></span></div>
							</div>
							{{-- <span class="form-text text-muted">Please enter your address</span> --}}
						</div>


					

                         
						
						
					</div>

					
				</div>
				<div class="card-footer">
					<div class="row">
						<div class="col-lg-4"></div>
						<div class="col-lg-8">
							<button type="submit" class="btn btn-primary mr-2">Submit</button>
							<button type="reset" class="btn btn-secondary">Cancel</button>
						</div>
					</div>
				</div>
			</form>
			<!--end::Form-->
		</div>


@endsection


@section('css')

<link href="{{asset('assets/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />




{{-- datetimepicker --}}

<link rel="stylesheet" href="{{asset('css/bootstrap-datetimepicker.min.css')}}">

{{-- end datetimepicker --}}











@endsection

@section('script')

<!--begin::Page Vendors(used by this page)-->



{{-- datetimepicker --}}
<script src="{{asset('js/bootstrap-datetimepicker.min.js')}}"></script>
        <script type="text/javascript">
            $(function () {
                $('#datetimepicker1').datetimepicker();
            });
        </script>
{{--  end datetimepicker --}}












<script src="{{asset('assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
<!--end::Page Vendors-->
<!--begin::Page Scripts(used by this page)-->
<script src="{{asset('assets/js/pages/crud/datatables/basic/paginations.js')}}"></script>
<script src="{{asset('assets/js/pages/crud/forms/widgets/select2.js')}}"></script>

<script src="{{asset('assets/js/pages/crud/forms/widgets/select2.js')}}"></script>
<script src="{{asset('assets/js/pages/crud/file-upload/dropzonejs.js')}}"></script>


<script>


$(document).on('keyup', '.enqid-quirey', function() {
    console.log('success');
    var enq = $(this).val();
    if(enq != null){
    $.ajax({
        url: '{{url('admin')}}/cust-enquiry/' + enq,
        type: 'get',
        dataType: 'json',
        success: function(response){
            if(response != null){
                $('#name').val(response.full_name);
                $('#mobile').val(response.contact_number);
                $('#ksebno').val(response.postcode);
                $('#iaddress').val(response.address);
                $('#caddress').val(response.address);
                 $('#alert-box').text('');
            }
        else{
                 $('#alert-box').text('No data available');
                 $('#alert-box').removeClass('text-muted');
                  $('#alert-box').addClass('text-danger');
            }
        }
        
    });
    }
    else{
        $('#alert-box').text('Enter Enquiry Id ');
        $('#alert-box').addClass('text-muted');
        $('#alert-box').removeClass('text-danger');
    }
}
);
</script>

@endsection