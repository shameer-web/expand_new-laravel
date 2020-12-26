@extends('layouts.admin')


@section('content')

                <!--begin::Content-->
<div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
											<!--begin::Subheader-->
    



<!--end::Subheader-->

					<!--begin::Entry-->

<!--end::Entry-->
<div class="d-flex flex-column-fluid" >
		<!--begin::Container-->
		<div class=" container " >
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
                                        <th class="pt-1 pb-9 text-right pr-0 font-weight-bolder text-muted font-size-lg text-uppercase">Total Tax </th>
                                         <th class="pt-1 pb-9 text-right pr-0 font-weight-bolder text-muted font-size-lg text-uppercase">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    <tr class="font-weight-bolder font-size-lg">
                                        <td class="border-top-0 pl-0 pt-7 d-flex align-items-center">
                                            <span class="navi-icon mr-2">
                                                <i class="fa fa-genderless text-danger font-size-h2"></i>
                                            </span>
                                            @if($cust_package == null)
                                              <p></p>
                                            @else
                                            {{ $cust_package->package['package_price'] }}
                                            @endif
                                        </td>
                                         @if($cust_package == null)
                                         <td></td>
                                         @else
                                        <td class="text-right pt-7">{{ $cust_package->package['cgst'] }}</td>
                                        @endif
                                        @if($cust_package == null)
                                         <td></td>
                                         @else
                                        <td class="text-right pt-7">{{ $cust_package->package['sgst'] }}</td>
                                        @endif
                                        @if($cust_package == null)
                                         <td></td>
                                        @else
                                        <td class="text-right pt-7">{{ $cust_package->package['cess'] }}</td>
                                        @endif
                                        @if($cust_package == null)
                                         <td></td>
                                         @else
                                        <td class="pr-0 pt-7 font-size-h6 font-weight-boldest text-right">{{ $cust_package->package['total_tax'] }}</td>
                                        @endif
                                        @if($cust_package == null)
                                         <td></td>
                                         @else
                                        <td class="pr-0 pt-7 font-size-h6 font-weight-boldest text-right">{{ $cust_package->package['total_amount'] }}</td>
                                        @endif
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
                                        <th class="pt-1 pb-9 pl-0 font-weight-bolder text-muted font-size-lg text-uppercase"> Balance</th>
                                        <th class="pt-1 pb-9 pl-0 font-weight-bolder text-muted font-size-lg text-uppercase"> Paid Amount</th>
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
                                            @if($cust_package == null)
                                            <p></p>
                                            @else
                                           {{ $cust_package->balance }}
                                           @endif
                                        </td>

                                        @if($cust_package == null)
                                        <td></td>
                                        @else
                                        <td class=" pt-7">{{ $cust_package->customer_paid_amount }}</td>
                                        @endif


                                        @if($cust_package == null)
                                        <td></td>
                                        @else
                                        <td class="text-right pt-7">{{$cust_package->package['total_amount'] }}</td>
                                        @endif
                                        <td class="text-right pt-7"></td>
                                        <td class="pr-0 pt-7 font-size-h6 font-weight-boldest text-right"></td>
                                    </tr>
                                   
                                </tbody>
                            </table>
                        </div>


                    </div>
                    <div class="col-md-3 border-left-md pl-md-10 py-md-10 text-right">
                        <!--begin::Total Amount-->
                        <div class="font-size-h4 font-weight-bolder text-muted mb-3">TOTAL AMOUNT</div>
                        @if($cust_package == null)
                        <div></div>
                        @else
                        <div class="font-size-h1 font-weight-boldest">{{ $cust_package->package['total_amount'] }}</div>
                        @endif
                        <div class="text-muted font-weight-bold mb-16">Taxes included</div>
                        <!--end::Total Amount-->

                        <div class="border-bottom w-100 mb-16"></div>

                        <!--begin::Invoice To-->
                        <div class="text-dark-50 font-size-lg font-weight-bold mb-3">INVOICE TO.</div>
                        @if($cust_package == null)
                        <div></div>
                        @else
                        <div class="font-size-lg font-weight-bold mb-10">{{ $cust_package->cus['name'] }}.<br />{{ $cust_package->cus['installation_address'] }}.<br />{{ $cust_package->cus['mobile_number'] }} </div>
                        @endif
                        <!--end::Invoice To-->

                        <!--begin::Invoice No-->
                        <div class="text-dark-50 font-size-lg font-weight-bold mb-3">INVOICE NO.</div>
                        @if($cust_package == null)
                        <div></div>
                        @else
                        <div class="font-size-lg font-weight-bold mb-10">{{ $cust_package->cus['id'] }}</div>
                        @endif
                        <!--end::Invoice No-->

                        <!--begin::Invoice Date-->
                        <div class="text-dark-50 font-size-lg font-weight-bold mb-3">DATE</div>
                        @if($cust_package == null)
                        <div></div>
                        @else
                        <div class="font-size-lg font-weight-bold">{{ $cust_package->payment_date }}</div>
                        @endif
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
                    
                   {{--  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Pay</button> --}}

                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#pay" > Pay</button>
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
{{-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                    <form class="form" {{ route('invoice.invoice_package',$cust_package->id) }} method="post" id="kt_form">
                         @csrf
                        <div class="row">
                            <div class="col-xl-2"></div>
                            <div class="col-xl-8">
                                <div class="my-5">
                                    <h3 class=" text-dark font-weight-bold mb-10">Payment Info:</h3>
                                    <div class="form-group row">
                                        <label class="col-5">Due Amount</label>
                                        <div class="col-7">
                                            <input class="form-control form-control-solid" name ="due_amount" value="" type="text" placeholder="0"/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-5">Pay Amount</label>
                                        <div class="col-7">
                                            <input class="form-control form-control-solid" value="" name="paid_amount" type="text" placeholder="0"/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-5">Transaction Type</label>
                                        <div class="col-7">
                                        <select class="form-control form-control-solid" name="transaction_type">
                                                <option value="card">Card</option>
                                                <option value="cheque">Cheque</option>
                                                <option value="cash">Cash</option>
                                               
                                                
                                                
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-5">GST No</label>
                                        <div class="col-7">
                                            <input class="form-control form-control-solid" name="gst_number" type="text" placeholder="32AACFG1099D1ZU"/>
                                        </div>
                                    </div>
                                    
                                </div>
                                
                                <div class="separator separator-dashed my-10"></div>
                                
                            </div>
                            <div class="col-xl-2"></div>
                        </div>
                        <div class="modal-footer">
                <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary font-weight-bold">Save changes</button>
            </div>
                    </form>
                    <!--end::Form-->
                </div>
            </div>
            </div>
            
        </div>
    </div>
</div> --}}

  @if($cust_package == null)
  <div></div>
  @else
 <div class="modal fade" id="pay" tabindex="-1" role="dialog"  aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" >New Package</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('invoice.update_package',$cust_package->id) }}" method="post" >
                        @csrf
                        <div class="form-group">
                            <label  class="form-control-label">Transaction Type:</label>
                            <select class="form-control " id="kt_select2_1" name="transaction_type" style="width: 100%">
                                <option selected="selected">Cash</option>
                                
                                <option value="Cheque">Cheque</option>
                                <option value="Card">Card</option>
                               
                                
                                
                            </select>
                        </div>


                        <div class="form-group">

                            <label  class="form-control-label">Package Amount:</label>
                              <input type="text" class="form-control " name="package_amount" value="{{ $cust_package->package['package_price'] }}">
                         </div>

                         <div class="form-group">

                            <label  class="form-control-label">Package Total Amount:</label>
                              <input type="text" class="form-control " name="package_total_amount" value="{{ $cust_package->package['total_amount'] }}">
                         </div>

                         
                        
                         <div class="form-group">

                            <label  class="form-control-label">Due Amount:</label>
                              <input type="text" class="form-control " name="due_amount" value="{{ $due_amount }}">
                         </div>
                          <div class="form-group">     
                            <label  class="form-control-label">Balance:</label>
                              <input type="text" class="form-control " name="balance" value="{{ $cust_package->balance }}" >
                          </div>

                           <div class="form-group">     
                            <label  class="form-control-label">Total Amount :</label>
                              <input type="text" class="form-control " name="total_package_amount" value="{{ $total_amount }}" >
                          </div>

                          <div class="form-group">     
                            <label  class="form-control-label">Customer paid Amount :</label>
                              <input type="text" class="form-control " name="customer_paid_amount" required >
                          </div>

                              
                           <div class="form-group">
                                <label  class="form-control-label">GST Number:</label>
                              <input type="text" class="form-control " name="gst_number" placeholder="Enter GST Number">
                          </div>
                          
                           <div class="form-group">

                               <label  class="form-control-label">Payment Date:</label>
                               <input type="text" class="form-control " name="payment_date" value="{{Carbon\Carbon::now()}}">
                           </div>

                           <input type="hidden" name="first_payment_date" value="{{ $cust_package->payment_date }}">

                           <input type="hidden" name="cus_id" value="{{ $cust_package->cus_id }}">




                            
                        
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Add</button>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
 </div>
 @endif


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