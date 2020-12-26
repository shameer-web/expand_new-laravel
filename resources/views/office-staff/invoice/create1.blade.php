@extends('layouts.office_staff')


@section('content')

				<!--begin::Content-->
				<div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
											<!--begin::Subheader-->
<div class="subheader py-2 py-lg-6  subheader-solid " id="kt_subheader">
    <div class=" container-fluid  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
		<!--begin::Info-->
        <div class="d-flex align-items-center flex-wrap mr-1">

			<!--begin::Page Heading-->
			<div class="d-flex align-items-baseline flex-wrap mr-5">
				<!--begin::Page Title-->
	            <h5 class="text-dark font-weight-bold my-1 mr-5">
	                Invoice 1	                	            </h5>
				<!--end::Page Title-->

	            					<!--begin::Breadcrumb-->
	                <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
	                    							<li class="breadcrumb-item">
	                        	<a href="" class="text-muted">
	                            	Pages	                        	</a>
							</li>
	                    							<li class="breadcrumb-item">
	                        	<a href="" class="text-muted">
	                            	Invoice 1	                        	</a>
							</li>
	                    	                </ul>
					<!--end::Breadcrumb-->
	            			</div>
			<!--end::Page Heading-->
        </div>
		<!--end::Info-->

		<!--begin::Toolbar-->
        <div class="d-flex align-items-center">
							<!--begin::Actions-->
                <a href="#" class="btn btn-light-primary font-weight-bolder btn-sm">
                    Actions
                </a>
				<!--end::Actions-->

			<!--begin::Dropdown-->
            <div class="dropdown dropdown-inline" data-toggle="tooltip" title="Quick actions" data-placement="left">
                <a href="#" class="btn btn-icon"data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="svg-icon svg-icon-success svg-icon-2x"><!--begin::Svg Icon | path:expand-design/assets/media/svg/icons/Files/File-plus.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <polygon points="0 0 24 0 24 24 0 24"/>
        <path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
        <path d="M11,14 L9,14 C8.44771525,14 8,13.5522847 8,13 C8,12.4477153 8.44771525,12 9,12 L11,12 L11,10 C11,9.44771525 11.4477153,9 12,9 C12.5522847,9 13,9.44771525 13,10 L13,12 L15,12 C15.5522847,12 16,12.4477153 16,13 C16,13.5522847 15.5522847,14 15,14 L13,14 L13,16 C13,16.5522847 12.5522847,17 12,17 C11.4477153,17 11,16.5522847 11,16 L11,14 Z" fill="#000000"/>
    </g>
</svg><!--end::Svg Icon--></span>                </a>
                <div class="dropdown-menu dropdown-menu-md dropdown-menu-right p-0 m-0">
                    <!--begin::Navigation-->
<ul class="navi navi-hover">
    <li class="navi-header font-weight-bold py-4">
        <span class="font-size-lg">Choose Label:</span>
        <i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="Click to learn more..."></i>
    </li>
    <li class="navi-separator mb-3 opacity-70"></li>
    <li class="navi-item">
        <a href="#" class="navi-link">
            <span class="navi-text">
                <span class="label label-xl label-inline label-light-success">Customer</span>
            </span>
        </a>
    </li>
    <li class="navi-item">
        <a href="#" class="navi-link">
            <span class="navi-text">
                <span class="label label-xl label-inline label-light-danger">Partner</span>
            </span>
        </a>
    </li>
    <li class="navi-item">
        <a href="#" class="navi-link">
            <span class="navi-text">
                <span class="label label-xl label-inline label-light-warning">Suplier</span>
            </span>
        </a>
    </li>
    <li class="navi-item">
        <a href="#" class="navi-link">
            <span class="navi-text">
                <span class="label label-xl label-inline label-light-primary">Member</span>
            </span>
        </a>
    </li>
    <li class="navi-item">
        <a href="#" class="navi-link">
            <span class="navi-text">
                <span class="label label-xl label-inline label-light-dark">Staff</span>
            </span>
        </a>
    </li>
    <li class="navi-separator mt-3 opacity-70"></li>
    <li class="navi-footer py-4">
        <a class="btn btn-clean font-weight-bold btn-sm" href="#">
            <i class="ki ki-plus icon-sm"></i>
            Add new
        </a>
    </li>
</ul>
<!--end::Navigation-->
                </div>
            </div>
			<!--end::Dropdown-->
        </div>
		<!--end::Toolbar-->
    </div>
</div>
<!--end::Subheader-->
    <!--begin::Entry-->
    
    <div class="d-flex align-items-center" id="kt_subheader_search">
        <span class="text-dark-50 font-weight-bold" id="kt_subheader_total"></span>
        <form class="ml-10 mb-10 bn">
            <div class="input-group input-group-sm input-group-solid" style="max-width: 175px">
                <input type="text" class="form-control" id="kt_subheader_search_form" placeholder="Search...">
                <div class="input-group-append">
                    <span class="input-group-text">
                        <span class="svg-icon">
                            <!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/General/Search.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24"></rect>
                                    <path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                    <path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"></path>
                                </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </span>
                        <!--<i class="flaticon2-search-1 icon-sm"></i>-->
                    </span>
                </div>
            </div>
        </form>
    </div>
	<div class="d-flex flex-column-fluid">
		<!--begin::Container-->
		<div class=" container ">
            
			<!-- begin::Card-->
<div class="card card-custom overflow-hidden">
    <div class="card-body p-0">
        
        <div class="container">
            <div class="flex-top-column">
                <div class="addr-item">
                    <img src="expand-design/goo.jpg" alt="" srcset="">
                    <div class="address">
                        <p> Kings Broadband Pvt Ltd.</p>
                        <p> Address: 209(286) Ananda Bhavan Balaramapuram</p>
                        <p>PIN - 695501 Thiruvananthapuram, Kerala</p>
                        <p>Contact No:919995802348<br>
                            GST. 32AAECK7994C1ZG</p>
                    </div>
                </div>
                <div class="addr-item">
                    <img src="expand-design/goo.jpg" alt="" srcset="">
                    <div class="address">
                        <p> Janakeeyam Cable communication.</p>
                        <p> Rajasree Building, Thirichilangadi, Farook College (PO)</p>
                        <p>PIN - 673632 Kozhikode.</p>
                        <p>Contact No: 0495 2440055</p>
                        
                    </div>
                    
                </div>
            </div>
            <hr>
            <div class="flex-column-my">
                <div class="item">
                   <div class="first">
                       <p class="item-items">Name:<span class="values">john doe</span></p>
                       <p class="item-items">Customer ID:<span class="values">146758</span></p>
                       <p class="item-items">Address:<span class="values">sanfransisco</span></p>
                      
                   </div>
                   <div class="second">
                    <p class="item-items">GST:<span class="values">123345</span></p>
                    <p class="item-items">Phone:<span class="values">852269471</span></p>
                    <p class="item-items">Mobile:<span class="values">5222586421</span></p>
                   </div>

                </div>
                <div class="item">
                    <div class="first">
                        <p class="item-items">Plan:<span class="values">st-300</span></p>
                    <p class="item-items">Plan Rate:<span class="values">700</span></p>
                    </div>
                    <div class="second">
                        <p class="item-items">Bill No:<span class="values">3345678</span></p>
                    <p class="item-items">Bill Date:<span class="values">00976567</span></p>
                    <p class="item-items">Bill Period:<span class="values">yy-mm-dd</span></p>
                    <p class="item-items">Due Date:<span class="values">yyyy-mm-dd</span></p>
                   
                    </div>
 
                 </div>
            </div>
        </div>






























        
       
        <!-- begin: Invoice body-->
        <div class="row justify-content-center py-8 px-8 py-md-10 px-md-0">
            <div class="col-md-9">
                <div class="table-responsive">
                    <h2 class="own">Bill Details</h2>
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="pl-0 font-weight-bold text-muted  text-uppercase">Subscription Charge</th>
                                <th class="text-right font-weight-bold text-muted text-uppercase">CGST -9%</th>
                                <th class="text-right font-weight-bold text-muted text-uppercase">SGST -9%</th>
                                <th class="text-right pr-0 font-weight-bold text-muted text-uppercase">KFC -1%</th>
                                <th class="text-right pr-0 font-weight-bold text-muted text-uppercase">Total Tax</th>
                                <th class="text-right pr-0 font-weight-bold text-muted text-uppercase">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="font-weight-boldest font-size-lg">
                                <td class="pl-0 pt-7">930</td>
                                <td class="text-right pt-7">88.2</td>
                                <td class="text-right pt-7">88.2</td>
                                <td class="text-right pt-7">0</td>
                                <td class="text-right pt-7">176.4</td>
                                <td class="text-right pt-7">1106.4</td>
                               
                            </tr>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- end: Invoice body-->

        <div class="row justify-content-center py-8 px-8 py-md-10 px-md-0">
            <div class="col-md-9">
                <div class="table-responsive">
                    <h2 class="own">Payment Due Details</h2>
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="pl-0 font-weight-bold text-muted  text-uppercase">Previous Balance</th>
                                <th class="text-right font-weight-bold text-muted text-uppercase">Net Amount</th>
                                <th class="text-right font-weight-bold text-muted text-uppercase">Total Amount</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="font-weight-boldest font-size-lg">
                                <td class="pl-0 pt-7">-1067</td>
                                <td class="text-right pt-7">1106.4</td>
                                <td class="text-right pt-7">38.8000000001</td>
                               
                               
                            </tr>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

       
    </div>
</div>
<!-- end::Card-->
		</div>
		<!--end::Container-->
	</div>
<!--end::Entry-->
				</div>
				<!--end::Content-->

									<!--begin::Footer-->

<!--end::Footer-->
							</div>
			<!--end::Wrapper-->
		</div>
		<!--end::Page-->
	</div>
<!--end::Main-->





                    

	
	
	</div>
	<!--end::Content-->
</div>
<!--end::Demo Panel-->
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