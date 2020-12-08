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
										<h5 class="text-dark font-weight-bold my-1 mr-5">Channel | Create New Chaneel</h5>

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
									 Create Form
								</h3>
								
							</div>
							<!--begin::Form-->
							<form class="form" action="{{ route('channel.store') }}" method="post">
								@csrf
								<div class="card-body">
									<div class="form-group row">
										<label class="col-lg-2 col-form-label text-right">Channel Name:</label>
										<div class="col-lg-3">
											<input type="text" name="channel_name"  class="form-control" placeholder="Enter channel Name" required/>

											
										</div>
										<label class="col-lg-2 col-form-label text-right">Channel Type:</label>
										<div class="col-lg-3 radio-inline">
											 
						                            <label class="radio radio-lg">
						                                <input type="radio" value="Postaid"  name="channel_type" required/>
						                                <span></span>
						                                Postaid
						                            </label>
						                            <label class="radio radio-lg">
						                                <input type="radio" name="channel_type" id="prepade"
						                                {{-- onclick="myFunction()" --}} value="Prepaid"  />
						                                <span></span>
						                               	Prepaid
						                            </label>
						                            
						                       
										</div>
									</div>
									<div class="form-group row">
										<label class="col-lg-2 col-form-label text-right">Channel Price:</label>
										<div class="col-lg-3">
											<div class="input-group">
												  <input type="text" name='channel_price' placeholder='0.00' class="form-control" id="channel_price" required />
											</div>
											
										</div>

										<label class="col-lg-2 col-form-label text-right">Chose tax:</label>
										<div class="checkbox-inline" id="tax1">
									        <label class="checkbox">
									            <input type="checkbox" class="gst" id="cgst" value="{{$gst->cgst}}" name="gst[]"/>
									            <span></span>
									           CGST {{$gst->cgst}} %
									        </label>
									        <label class="checkbox">
									            <input type="checkbox" class="gst" id="sgst" value="{{$gst->sgst}}" name="gst[]"/>
									            <span></span>
									            SGST {{$gst->sgst}} %
									        </label>
									        <label class="checkbox">
									            <input type="checkbox" class="gst" id="cess" value="{{$gst->cess}}" name="gst[]"/>
									            <span></span>
									            CESS {{$gst->cess}} %
									        </label>
									    </div>
										
									</div>
									<div class="form-group row">
										<label class="col-lg-2 col-form-label text-right">Gst Amount:</label>
										<div class=" col-lg-3">
											<div class="input-group">
												<input type="text" name='channel_amount' id="gst_amount" placeholder='0.00' class="form-control" required/>
												
											</div>
										</div>

                                        
										<label class="col-lg-2 col-form-label text-right">Total Amount incl all taxes:</label>
										<div class=" col-lg-3">
											<div class="input-group">
												 <input type="text" readonly name='total_amount' id="total_amount1" placeholder='0.00' class="form-control" />
												
											</div>
										</div>
                                       
                                       <div class="col-lg-3" id="durations" style="display:none">
                                       
										<label class=" col-form-label text-right">Channel Durations:</label>
										<div  >
											<input type="number" name="channel_duration"  class="form-control" placeholder="Enter channel Durations:"/>

											
										</div>
									   </div>



										


										<input type="hidden" name="tax" id="tax">
										<input type="hidden" name="tax5" id="tax5">
										<input type="hidden" name="tax6" id="tax6">
										<input type="hidden" name="tax7" id="tax7">
									</div>

									<!-- begin: Example Code-->
									
									<!-- end: Example Code-->
								</div>
								<div class="card-footer">
									<div class="row">
										<div class="col-lg-2"></div>
										<div class="col-lg-10">
											<button type="submit" id="submit" class="btn btn-success mr-2">Submit</button>
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

		
<script>
  
        

        function myFunction() {
       var checkBox = document.getElementById("prepade");
       var text = document.getElementById("durations");
       if (checkBox.checked == true){
           text.style.display = "block";
          } else {
             text.style.display = "none";
           }
        }
    



	$(document).ready(function(){
    
	$('#cgst').on("click",function(){
		calc_total();
		
	});
	$('#sgst').on("click",function(){
		calc_total1();
		
	});
	$('#cess').on("click",function(){
		calc_total2();
		
		
	});
	

});



function calc_total()
{
	var channel_price = $('#channel_price').val();
	//alert(channel_price)
	var cgst = parseInt($("#cgst").val());
	$('#tax').val(cgst);
	// $('#tax5').val(cgst);



	tax_sum=channel_price/100*$('#cgst').val();
	$('#tax5').val(tax_sum);
	$('#gst_amount').val(tax_sum.toFixed(2));

	var result = parseInt(tax_sum) + parseInt(channel_price);
	$("#total_amount1").val(result.toFixed(2));
	// $('#tax5').val(result.toFixed(2));
}
function calc_total1()
{
	var channel_price = $('#channel_price').val();


	var cgst = parseInt($("#cgst").val());
	var sgst = parseInt($("#sgst").val());
    

    tax_sum=channel_price/100*$('#sgst').val();
    $('#tax6').val(tax_sum);
	




	var cgstsgst = cgst+sgst;
	$('#tax').val(cgstsgst);
	// $('#tax6').val(sgst);
	tax_sum=channel_price/100*cgstsgst;
	$('#gst_amount').val(tax_sum.toFixed(2));
	var result = parseInt(tax_sum) + parseInt(channel_price);
	$("#total_amount1").val(result.toFixed(2));
}
function calc_total2()
{
	var channel_price = $('#channel_price').val();
	var cgst = parseInt($("#cgst").val());
	var sgst = parseInt($("#sgst").val());
	var cess = parseInt($("#cess").val());



    tax_sum=channel_price/100*$('#cess').val();
    $('#tax7').val(tax_sum);

    
	
	var cgstsgstcess = cgst+sgst+cess;
	$('#tax').val(cgstsgstcess);
	// $('#tax7').val(cess);
	
	tax_sum=channel_price/100*cgstsgstcess;
	$('#gst_amount').val(tax_sum.toFixed(2));
	var result = parseInt(tax_sum) + parseInt(channel_price);
	$("#total_amount1").val(result.toFixed(2));
}






</script>

@endsection