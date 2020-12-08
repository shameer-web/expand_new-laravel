@extends('layouts.admin')


@section('content')



<?php
 $channel =$page_data['channel'] 
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
										<h5 class="text-dark font-weight-bold my-1 mr-5">Channel | Edit Channel</h5>

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
							<form class="form" action="{{ route('channel.update',$channel->id) }}" method="post">
								@csrf
								@method('put')
								<div class="card-body">
									<div class="form-group row">
										<label class="col-lg-2 col-form-label text-right">Channel Name:</label>
										<div class="col-lg-3">
											<input type="text" name="channel_name"
											value="{{ $channel->channel_name }}"  class="form-control" placeholder="Enter full name"/>

											
										</div>
										<label class="col-lg-2 col-form-label text-right">Channel Type:</label>
										<div class="col-lg-3 radio-inline">
											 
						                            <label class="radio radio-lg">
						                                <input type="radio" value="Postaid"  name="channel_type"/>
						                                <span></span>
						                                Postaid
						                            </label>
						                            <label class="radio radio-lg">
						                                <input type="radio" name="channel_type" value="Prepaid" />
						                                <span></span>
						                               	Prepaid
						                            </label>
						                            
						                       
										</div>
									</div>
									<div class="form-group row">
										<label class="col-lg-2 col-form-label text-right">Channel Price:</label>
										<div class="col-lg-3">
											<div class="input-group">
												  <input type="text" id="channel_price" name='channel_price' value="{{ $channel->channel_price }}" placeholder='0.00' class="form-control" id="channel_price" />
											</div>
											
										</div>
										<label class="col-lg-2 col-form-label text-right">Channel GST:</label>
										<div class="col-lg-3">
											<div class="input-group">
												 <input type="text" name="gst"
												 value="{{ $channel->gst }}" class="form-control" id="gst" placeholder="0">
												
											</div>
											
										</div>
									</div>
									<div class="form-group row">
										<label class="col-lg-2 col-form-label text-right">Channel Amount:</label>
										<div class=" col-lg-3">
											<div class="input-group">
												<input type="text" name='channel_amount' value="{{ $channel->channel_amount }}" id="gst_amount" placeholder='0.00' class="form-control" />
												
											</div>
										</div>


										<label class="col-lg-2 col-form-label text-right">Total Amount:</label>
										<div class=" col-lg-3">
											<div class="input-group">
												 <input type="text" name='total_amount' value="{{ $channel->total_amount }}" id="total_amount1" placeholder='0.00' class="form-control" />
												
											</div>
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
	$(document).ready(function(){
    
	$('#gst').on('keyup change',function(){
		calc_total();
	});
	

});



function calc_total()
{
	var channel_price = $('#channel_price').val();
	//alert(channel_price)
	tax_sum=channel_price/100*$('#gst').val();
	$('#gst_amount').val(tax_sum.toFixed(1));
	var result = parseInt(tax_sum) + parseInt(channel_price);
	$("#total_amount1").val(result);
}
</script>

@endsection