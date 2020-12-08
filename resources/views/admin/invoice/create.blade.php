@extends('layouts.admin')


@section('content')

                <!--begin::Content-->
<div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
											<!--begin::Subheader-->
    

<div class="card card-custom gutter-b example example-compact">
	
	<!--begin::Form-->
	<form class="form" action="{{ route('invoice.invoice_reg') }}" method="post">
        @csrf
		<div class="card-body">
			
			<div class="form-group row">
				<label class="col-form-label text-right col-lg-3 col-sm-12">Customer Name</label>
				<div class=" col-lg-4 col-md-9 col-sm-12">
					<select class="form-control " id="" name="cust_id">
                         @foreach($customer as $row)
						<option value="{{ $row->id }}">{{ $row->name }}</option>
						
                        @endforeach
						
					</select>


				</div>

                <div class="col-lg-3">
                    <button type="submit" class="btn btn-success mr-2">Go</button>
                                            
                </div>
			</div>
			
		</div>
		
	</form>
	<!--end::Form-->
</div>

<!--end::Subheader-->

					<!--begin::Entry-->

<!--end::Entry-->
<div class="d-flex flex-column-fluid" >
		<!--begin::Container-->
		<div class=" container " style="display: none;" id="invoice_div">
			<div class="card card-custom">
    <div class="card-body p-0">
        <!--begin::Invoice-->
        <div class="row justify-content-center pt-8 px-8 pt-md-27 px-md-0">
            <div class="col-md-9">
                <!-- begin: Invoice header-->
                <div class="d-flex justify-content-between pb-10 pb-md-20 flex-column flex-md-row">
                    <h1 class="display-4 font-weight-boldest mb-10">INVOICE</h1>
                    <div class="d-flex flex-column align-items-md-end px-0">
                        <!--begin::Logo-->
                        <img src="{{asset('assets/media/logos/ExpandLogo.png')}}" class="max-h-70px" alt=""/>                          </a>
                        <!--end::Logo-->
                        <span class="d-flex flex-column align-items-md-end font-size-h5 font-weight-bold text-muted">
                            <span>Cecilia Chapman, 711-2880 Nulla St, Mankato</span>
                            <span>Mississippi 96522</span>
                        </span>
                    </div>
                </div>
               
                <!--end: Invoice header-->

                <!--begin: Invoice body-->
                <div class="row border-bottom pb-10">
                    <div class="col-md-9 py-md-10 pr-md-10">
                        <div class="table-responsive">
                            <h6>Bill Details</h6>
                                

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="pt-1 pb-9 pl-0 font-weight-bolder text-muted font-size-lg text-uppercase">Subscription Charge</th>
                                        <th class="pt-1 pb-9 text-right font-weight-bolder text-muted font-size-lg text-uppercase">CGST -9%</th>
                                        <th class="pt-1 pb-9 text-right font-weight-bolder text-muted font-size-lg text-uppercase">SGST - 9%</th>
                                        <th class="pt-1 pb-9 text-right font-weight-bolder text-muted font-size-lg text-uppercase">KFC - 1%</th>
                                        <th class="pt-1 pb-9 text-right pr-0 font-weight-bolder text-muted font-size-lg text-uppercase">Total Tax Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    <tr class="font-weight-bolder font-size-lg">
                                        <td class="border-top-0 pl-0 pt-7 d-flex align-items-center">
                                            <span class="navi-icon mr-2">
                                                <i class="fa fa-genderless text-danger font-size-h2"></i>
                                            </span>
                                            930
                                        </td>
                                        <td class="text-right pt-7">88.2</td>
                                        <td class="text-right pt-7">88.2</td>
                                        <td class="text-right pt-7">0 176.4</td>
                                        <td class="pr-0 pt-7 font-size-h6 font-weight-boldest text-right">1106.4</td>
                                    </tr>
                                   
                                </tbody>
                            </table>
                        </div>



                        <div class="border-bottom w-100 mt-7 mb-13"></div>

                        <div class="table-responsive">
                            <h6>Payment Due Details</h6>
                                
                              
                                                  
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="pt-1 pb-9 pl-0 font-weight-bolder text-muted font-size-lg text-uppercase">Previous Balance</th>
                                        <th class="pt-1 pb-9 text-right font-weight-bolder text-muted font-size-lg text-uppercase">Net Amount</th>
                                        
                                        <th class="pt-1 pb-9 text-right pr-0 font-weight-bolder text-muted font-size-lg text-uppercase">Total Amount Due</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    <tr class="font-weight-bolder font-size-lg">
                                        <td class="border-top-0 pl-0 pt-7 d-flex align-items-center">
                                            <span class="navi-icon mr-2">
                                                <i class="fa fa-genderless text-danger font-size-h2"></i>
                                            </span>
                                            930
                                        </td>
                                        <td class="text-right pt-7">-1067.6</td>
                                        <td class="text-right pt-7">1106.4</td>
                                        <td class="pr-0 pt-7 font-size-h6 font-weight-boldest text-right">38.800000000001</td>
                                    </tr>
                                   
                                </tbody>
                            </table>
                        </div>


                    </div>
                    <div class="col-md-3 border-left-md pl-md-10 py-md-10 text-right">
                        <!--begin::Total Amount-->
                        <div class="font-size-h4 font-weight-bolder text-muted mb-3">TOTAL AMOUNT</div>
                        <div class="font-size-h1 font-weight-boldest">$20,600.00</div>
                        <div class="text-muted font-weight-bold mb-16">Taxes included</div>
                        <!--end::Total Amount-->

                        <div class="border-bottom w-100 mb-16"></div>

                        <!--begin::Invoice To-->
                        <div class="text-dark-50 font-size-lg font-weight-bold mb-3">INVOICE TO.</div>
                        <div class="font-size-lg font-weight-bold mb-10">Iris Watson.<br />Fredrick Nebraska 20620 </div>
                        <!--end::Invoice To-->

                        <!--begin::Invoice No-->
                        <div class="text-dark-50 font-size-lg font-weight-bold mb-3">INVOICE NO.</div>
                        <div class="font-size-lg font-weight-bold mb-10">56758</div>
                        <!--end::Invoice No-->

                        <!--begin::Invoice Date-->
                        <div class="text-dark-50 font-size-lg font-weight-bold mb-3">DATE</div>
                        <div class="font-size-lg font-weight-bold">12 May, 2020</div>
                        <!--end::Invoice Date-->
                    </div>
                </div>
                <!--end: Invoice body-->
            </div>
        </div>
        <!-- begin: Invoice action-->
        <div class="row justify-content-center py-8 px-8 py-md-28 px-md-0">
            <div class="col-md-9">
                <div class="d-flex font-size-sm flex-wrap">
                    <button type="button" class="btn btn-primary font-weight-bolder py-4 mr-3 mr-sm-14 my-1" onclick="window.print();">Print Invoice</button>
                    
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Create Invoice</button>
                </div>
            </div>
        </div>

        <!-- end: Invoice action-->
        <!--end::Invoice-->
    </div>
</div>		</div>
		<!--end::Container-->
    </div>
    
    <!-- Modal-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Payment</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">
            <div class="card card-custom card-sticky" id="kt_page_sticky_card">
                
                <div class="card-body">
                    <!--begin::Form-->
                    <form class="form" id="kt_form">
                        <div class="row">
                            <div class="col-xl-2"></div>
                            <div class="col-xl-8">
                                <div class="my-5">
                                    <h3 class=" text-dark font-weight-bold mb-10">Payment Info:</h3>
                                    <div class="form-group row">
                                        <label class="col-5">Due Amount</label>
                                        <div class="col-7">
                                            <input class="form-control form-control-solid" type="text" placeholder="0"/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-5">Pay Amount</label>
                                        <div class="col-7">
                                            <input class="form-control form-control-solid" type="text" placeholder="0"/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-5">Transaction Type</label>
                                        <div class="col-7">
                                        <select class="form-control form-control-solid">
                                                <option value="card">Card</option>
                                                <option value="cheque">Cheque</option>
                                                <option value="cash">Cash</option>
                                               
                                                
                                                
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-5">GST No</label>
                                        <div class="col-7">
                                            <input class="form-control form-control-solid" type="text" placeholder="32AACFG1099D1ZU"/>
                                        </div>
                                    </div>
                                    
                                </div>
                                
                                <div class="separator separator-dashed my-10"></div>
                                
                            </div>
                            <div class="col-xl-2"></div>
                        </div>
                    </form>
                    <!--end::Form-->
                </div>
            </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary font-weight-bold">Save changes</button>
            </div>
        </div>
    </div>
</div>

<!-- end modal  -->



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
            $('#kt_select2_1').change(function(){
            $("#invoice_div").show();
            })
        </script>

@endsection