@extends('layouts.office_staff')


@section('content')

<!--begin::Card-->

<div class="card card-custom">
	<div class="card-header">
		<div class="card-title">
			<span class="card-icon"><i class="flaticon2-favourite text-primary"></i></span>
			<h3 class="card-label">View All Coustamers</h3>
		</div>
		<div class="card-toolbar">
			<!--begin::Dropdown-->


    {{--   <div style="margin-right: 300px">
	


<a href="{{ route('cus.notifications') }}" class="btn btn-success font-weight-bolder">
	<span class="svg-icon svg-icon-md"><!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <circle fill="#000000" cx="9" cy="15" r="6"/>
        <path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3"/>
    </g>
</svg></span>	Agent Notifications
</a>
</div>		 --}}	

<!--end::Dropdown-->

<!--begin::Button-->
<a href="{{ route('cus.create') }}" class="btn btn-primary font-weight-bolder">
	<i class="la la-plus"></i>
	New Record
</a>
<!--end::Button-->
		</div>
	</div>
	<div class="card-body">
		<!--begin: Datatable-->
		<table class="table table-bordered table-hover table-checkable" id="kt_datatable" style="margin-top: 13px !important">
			                    <thead>
                              <tr>
                                        <th> ID</th>
										<th>Customer ID</th>
										<th>Name</th>
										<th>Mobile</th>
										<th>Customer Type</th>
										<th>Post No</th>
										<th>Area</th>
										<th>Address</th>
										<th>Action</th>

                                  </tr>
                    </thead>

                        <tbody>
                            @foreach($customer as $row)
							<tr>
								<td >{{$row->id}}</td>
								<td>{{$row->area_subcode_id}}</td>
								<td>{{$row->name}}</td>
								<td>{{$row->mobile_number}}</td>
								@if($row->customer_type==1)
								<td><span class="label label-success label-inline mr-2">Regular</span></td>
								@else
								<td><span class="label label-primery label-inline mr-2">Rent</span></td>
								@endif
								<td>{{$row->kseb_post_no}}</td>
								<td>{{$row->Area->area_name}}</td>
								<td>{{$row->installation_address}}</td>
								
								<td>

									<a href="{{ route('cus.profile',$row->id) }}" class="btn btn-sm btn-clean btn-icon" title="View details">
								<i class="la la-eye"></i>
								</a>

									<a href="{{ route('cus.edit',$row->id) }}" class="btn btn-sm btn-clean btn-icon" title="Edit details">
								<i class="la la-edit"></i>
								</a>

							
								{{-- <a type="button" id="deletebtn" data-action="{{ route('cus.update',$row->id) }}" data-toggle="modal" data-target="#delete_modal" class="btn btn-sm btn-clean btn-icon" title="Delete">
								<i class="la la-trash"></i>
								</a> --}}


							
							</td>
								</tr>
							@endforeach
                        </tbody>

        		</table>
		<!--end: Datatable-->
	</div>
</div>
<!--end::Card-->
<!--end::Search Form-->
		<!--end: Search Form-->

		<!--begin: Datatable-->
		
		<!--end: Datatable-->

         <div class="modal fade" tabindex="-1" id="delete_modal" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog " role="document">
                    <form id="delete_form" action="" method="post" class="form-horizontal">
                        @csrf
                        @method('put')
                        <div class="modal-content">
                            <div class="alert alert-danger" role="alert" style="margin-bottom: 0px">
                                <button type="button" class="close" data-dismiss="modal"></button>
                                <br />
                                <h4 class="alert-heading">Warning! Please Confirm Your Action</h4>
                                <br />
                                <p> Are You Sure to Delete this Data ?. All the Associated Data will Lost. </p>
                                <p>
                                    <button class="btn btn-danger " type="submit" name="submit">Confirm &
                                        Delete</button>
                                    <button type="button" class="btn btn-primary modal-dismiss"
                                        data-dismiss="modal">Cancel</button>
                                </p>
                                <input type="hidden" name="customer_status" value="0">
                            </div>
                        </div>
                    </form>
                </div>
            </div>


	</div>
</div>
<!--end::Card-->	



@endsection


@section('css')

       <link href="{{asset('assets/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css"/>

@endsection



@section('script')

<!--begin::Page Vendors(used by this page)-->
                            <script src="{{asset('assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
                        <!--end::Page Vendors-->

                    <!--begin::Page Scripts(used by this page)-->
                            <!-- <script src="{{asset('assets/js/pages/crud/datatables/data-sources/customer_view_scripts.js')}}"></script> -->
							@include('admin.custome_scripts.custome_view_scripts');                      <!--end::Page Scripts-->

<script>
$('body').on('click', '#deletebtn', function() {
    var no = $(this).closest('tr').children('td');

    $('#deletebtn').data('action');
    var action = $(this).data('action');
    $('#delete_form').attr('action', action);

})
</script>


@endsection