@extends('layouts.office_staff')


@section('content')

                <!--begin::Content-->
<div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
											<!--begin::Subheader-->
  
<!--end::Entry-->
<div class="d-flex flex-column-fluid" >
		<!--begin::Container-->
		<div class=" container ">
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
                        <img src="{{asset('assets/media/logos/ExpandLogo.png')}}" class="max-h-70px" alt=""/>                 </a>
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
                                        <th class="pt-1 pb-9 text-right font-weight-bolder text-muted font-size-lg text-uppercase">CESS - 1%</th>
                                        <th class="pt-1 pb-9 text-right pr-0 font-weight-bolder text-muted font-size-lg text-uppercase">Total Tax </th>
                                        <th class="pt-1 pb-9 text-right pr-0 font-weight-bolder text-muted font-size-lg text-uppercase">Total </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    <tr class="font-weight-bolder font-size-lg">
                                        <td class="border-top-0 pl-0 pt-7 d-flex align-items-center">
                                            <span class="navi-icon mr-2">
                                                <i class="fa fa-genderless text-danger font-size-h2"></i>
                                            </span>
                                           {{ $cus_channel->channel['channel_price'] }}
                                        </td>
                                        <td class="text-right pt-7">{{ $cus_channel->channel['cgst'] }}</td>
                                        <td class="text-right pt-7">{{ $cus_channel->channel['sgst'] }}</td>
                                        <td class="text-right pt-7">{{ $cus_channel->channel['cess'] }}</td>
                                        <td class="pr-0 pt-7 font-size-h6 font-weight-boldest text-right">{{ $cus_channel->channel['total_tax'] }}</td>
                                        <td class="pr-0 pt-7 font-size-h6 font-weight-boldest text-right">{{ $cus_channel->channel['total_amount'] }}</td>
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
                                                {{-- <i class="fa fa-genderless text-danger font-size-h2"></i> --}}
                                            </span>
                                            {{ $cus_channel->balance }}
                                        </td>

                                        <<td class="pt-7">{{ $cus_channel->customer_paid_amount }}</td>

                                        <td class="text-right pt-7">{{ $cus_channel->channel['total_amount'] }}</td>
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
                        <div class="font-size-h1 font-weight-boldest">{{ $cus_channel->channel['total_amount'] }}</div>
                        <div class="text-muted font-weight-bold mb-16">Taxes included</div>
                        <!--end::Total Amount-->

                        <div class="border-bottom w-100 mb-16"></div>

                        <!--begin::Invoice To-->
                        <div class="text-dark-50 font-size-lg font-weight-bold mb-3">INVOICE TO.</div>
                        <div class="font-size-lg font-weight-bold mb-10">{{ $cus_channel->cus['name'] }}.<br />{{ $cus_channel->cus['installation_address'] }}.<br />{{ $cus_channel->cus['mobile_number'] }} </div>
                        <!--end::Invoice To-->

                        <!--begin::Invoice No-->
                        <div class="text-dark-50 font-size-lg font-weight-bold mb-3">INVOICE NO.</div>
                        <div class="font-size-lg font-weight-bold mb-10">{{ $cus_channel->cus['id'] }}</div>
                        <!--end::Invoice No-->

                        <!--begin::Invoice Date-->
                        <div class="text-dark-50 font-size-lg font-weight-bold mb-3">DATE</div>
                        <div class="font-size-lg font-weight-bold">{{ $cus_channel->payment_date }}</div>
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
                    
                   
                </div>
            </div>
        </div>

        <!-- end: Invoice action-->
        <!--end::Invoice-->
    </div>
</div>		</div>
		<!--end::Container-->
    </div>
    




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

       

@endsection