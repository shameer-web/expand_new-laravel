@extends('layouts.technician_staff')


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

<!--end::Dropdown-->

<!--begin::Button-->
<a href="#" class="btn btn-primary font-weight-bolder">
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

									<a href="{{ route('customers.profile',$row->id) }}" class="btn btn-sm btn-clean btn-icon" title="View details">
								<i class="la la-eye"></i>
								</a>

									{{-- <a href="{{ route('customers.edit',$row->id) }}" class="btn btn-sm btn-clean btn-icon" title="Edit details">
								<i class="la la-edit"></i>
								</a> --}}

							
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