@extends('layouts.admin')


@section('content')

<!--begin::Subheader-->
    <div class="subheader py-2 py-lg-6 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">

            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-1">

                <!--begin::Page Heading-->
                <div class="d-flex align-items-baseline flex-wrap mr-5">

                    <!--begin::Page Title-->
                    <h5 class="text-dark font-weight-bold my-1 mr-5">Collection Agent | Edit Customer Details</h5>

                    <a href="{{ route('customer.notifications') }}"><button class="btn btn-primary" style="margin-left: 580px"> <i class="fas fa-undo"></i>Back</button></a>

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
               Edit Customer Details

            </h3>
            <div class="card-toolbar">
                <div class="example-tools justify-content-center">
                    <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                    <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                </div>
            </div>
        </div>
			<!--begin::Form-->
			<form class="form" action="{{ route('customer.notification_update',$approve->cust_id) }}" method="POST" enctype="multipart/form-data" >
			@csrf
			@method('put')
				<div class="card-body">
				    	
					<div class="form-group row">
					
						<div class="col-lg-6">
							<label class="font-weight-bold mr-2">Full Name:</label>
							<input type="text" class="form-control "
							value="{{ $approve->name }}" name="name" id="name" placeholder="Enter full name" required/>
							
						</div>
						
						<div class="col-lg-6">
							<label class="font-weight-bold mr-2">Sub Code:</label>
							<input type="text" class="form-control "
							value="{{ $approve->sub_code }}" name="sub_code" id="name" placeholder="Enter full name" required/>
							
						</div>


						
					</div>
					<div class="form-group row">



						<div class="col-lg-4">
							<label class="font-weight-bold mr-2">Area:</label>
							<input type="text" class="form-control "
							value="{{ $approve->area }}" name="area" id="name" placeholder="Enter full name" required/>
							
						</div>

						
						
						<div class="col-lg-4">
							<label class="font-weight-bold mr-2">CRF No:</label>
							<input type="text" name="crf_no" value="{{ $approve->crf_no }}" class="form-control" placeholder=""/>
							
						</div>
						<div class="col-lg-4">
							<label class="font-weight-bold mr-2">KSEB Post No:</label>
							<div class="input-group">
								<div class="input-group-prepend"><span class="input-group-text"><i class="la la-info-circle"></i></span></div>
								<input type="text" name="kseb_post_no" value="{{ $approve->kseb_post_no }}" id="ksebno" class="form-control" placeholder="Post Number"/>
							</div>
							
						</div>
						
					</div>
					<div class="form-group row">

                        <div class="col-lg-4">
							<label class="font-weight-bold mr-2">Installation Address:</label>
							<div class="input-group">
								<input type="text" name="installation_address" value="{{ $approve->installation_address }}" id="iaddress" class="form-control" placeholder="Enter your address"/>
								<div class="input-group-append"><span class="input-group-text"><i class="la la-map-marker"></i></span></div>
							</div>
							
						</div>

						<div class="col-lg-4">
							<label class="font-weight-bold mr-2">District:</label>
							<input type="text" class="form-control "
							value="{{ $approve->district }}" name="district" id="name" placeholder="Enter full name" required/>
							
						</div>
						


						<div class="col-lg-4">
							<label class="font-weight-bold mr-2">Pincode:</label>
							<div class="input-group">
								<div class="input-group-append"></div>
								<input type="text" name="pin_code" value="{{ $approve->pin_code }}"  id="pincode" class="form-control" placeholder="Enter your pincode"/>
							</div>
							
						</div>


						
						
						
					</div>


					

					<div class="form-group row">


						<div class="col-lg-4">
							<label class="font-weight-bold mr-2">Communication Address:</label>
							<div class="input-group">
								<input type="text" name="communication_address" value="{{ $approve->communication_address }}" id="caddress" class="form-control" placeholder="Enter your address"/>
								<div class="input-group-append"><span class="input-group-text"><i class="la la-map-marker"></i></span></div>
							</div>
							
						</div>


						<div class="col-lg-4">
							<label class="font-weight-bold mr-2">District:</label>
							<input type="text" class="form-control "
							value="{{ $approve->district1 }}" name="district1" id="name" placeholder="Enter full name" required/>
							
						</div>
						


						<div class="col-lg-4">
							<label class="font-weight-bold mr-2">Pincode:</label>
							<div class="input-group">
								<div class="input-group-append"></div>
								<input type="text" name="pincode1" value="{{ $approve->pin_code1 }}"  id="pincode" class="form-control" placeholder="Enter your pincode"/>
							</div>
							
						</div>




				    </div>		
                     



					<div class="form-group row">
						<div class="col-lg-4">
							<label class="font-weight-bold mr-2">Customer Type:</label>
							<div class="radio-inline">
                              
                               

								<label class="radio radio-solid">
									<input type="radio" name="ctype" {{ $approve->customer_type == '1' ? 'checked' : '' }} value="1"/>
									<span></span>
									Regular
								</label>
								<label class="radio radio-solid">
									<input type="radio" name="ctype" {{ $approve->customer_type == '2' ? 'checked' : '' }} value="2"/>
									<span></span>
									Rent
								</label>
							</div>
							<span class="form-text text-muted">Please select user Type</span>
						</div>
						<div class="col-lg-4">
							<label class="font-weight-bold mr-2">Id Proof Type:</label>
							<input type="text" class="form-control "
							value="{{ $approve->id_proof_type }}" name="id_proof_type" id="name" placeholder="Enter full name" required/>
							
						</div>
						
                        <div class="col-lg-4">
							<label class="font-weight-bold mr-2">ID Proof Number:</label>
							<input type="text" class="form-control" name="id_proof_number" value="{{ $approve->id_proof_number }}" placeholder="Enter ID Proof Number " required/>
							
						</div>

						
					</div>
					<div class="form-group row">
						
						<div class="col-lg-4">
							<label class="font-weight-bold mr-2">Phone:</label>
							<div class="input-group">
								<div class="input-group-append"></div>
								<input type="text" class="form-control" name="phone" value="{{ $approve->phone }}" id="phone" placeholder="Enter your Phone"/>
							</div>
							
						</div>
						<div class="col-lg-4">
							<label class="font-weight-bold mr-2">Mobile:</label>
							<div class="input-group">
								<div class="input-group-append"></div>
								<input type="text" class="form-control" name="mobile_number" value="{{ $approve->mobile_number }}" id="mobile" placeholder="Enter your Mobile"/>
							</div>
							
						</div>


						<div class="col-lg-4">
							<label class="font-weight-bold mr-2">Email:</label>
							<input type="email" class="form-control" name="email" value="{{ $approve->email }}" placeholder="Enter email" required/>
							
						</div>

                       

                        <div class="col-lg-6">
							<label class="font-weight-bold mr-2">Join Date :</label>
							<div class="input-group" >
								<input type="text" name="date" value="{{ $approve->date }}" id="datetimepicker1" class="form-control" placeholder="date"/>
								<div class="input-group-append"><span class="input-group-text"><i class="fa fa-calendar"></i></span></div>
							</div>
							
						</div>



						<div class="col-lg-6">
							<label class="font-weight-bold mr-2">Remarks:</label>
							<div class="input-group">
								<div class="input-group-append"></div>
								<input type="text" class="form-control" name="remark" value="{{ $approve->remark }}" placeholder="Enter your Remarks"/>
							</div>
							
						</div>


					


						<input type="hidden" class="form-control" name="notification_id" value="{{ $approve->id }}" />
						<input type="hidden" class="form-control" name="agent_name" value="{{ $approve->agent_name }}" />


						
						
					</div>

					
				</div>
				<div class="card-footer">
					<div class="row">
						<div class="col-lg-4"></div>
						<div class="col-lg-8">
							<button type="submit" class="btn btn-success mr-2 w-50">approved</button>
							
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
        url: '{{url('admin')}}/customer-enquiry/' + enq,
        type: 'get',
        dataType: 'json',
        success: function(response){
            if(response != null){
                $('#name').val(response.full_name);
                $('#mobile').val(response.contact_number);
                $('#ksebno').val(response.postcode);
                // $('#iaddress').val(response.address);
                // $('#caddress').val(response.address);
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


 
function addressFunction() 
{ 
if (document.getElementById('same').checked) 
{ 
	document.getElementById('caddress').value=document. 
			getElementById('iaddress').value; 
	
} 
	
else
{ 
	document.getElementById('caddress').value=""; 
	 
} 
} 

</script>

@endsection