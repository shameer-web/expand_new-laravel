@extends('layouts.office_staff')


@section('content')

<!--begin::Card-->

<div class="card card-custom">
	<div class="card-header">
		<div class="card-title">
			<span class="card-icon"><i class="flaticon2-favourite text-primary"></i></span>
			<h3 class="card-label">View All Enquiry</h3>
		</div>
		<div class="card-toolbar">
			<!--begin::Dropdown-->

<!--end::Dropdown-->

<!--begin::Button-->
<a href="{{ route('enquiries.create') }}" class="btn btn-primary font-weight-bolder">
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
                                <th style="display:none">Order ID</th>
                                <th>Enquiry No</th>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Phone</th>
                                <th>Phost No</th>
                                <th>Assigned</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th>Actions</th>

                            </tr>
                    </thead>

                        <tbody>
                            @foreach($data as $row)
                          
							<tr>
                            <td style="display:none">{{ $row->id }}</td>
                            <td>{{ $row->enqid }}</td>
                            <td>{{ $row->full_name }}</td>
                            <td>{{ $row->address }}</td>
                            <td>{{ $row->contact_number }}</td>
                            <td>{{ $row->postcode }}</td> 
                            @if($row->assign_to ==1) 
                            <td><span class="label label-danger label-inline mr-2">Pending</span></td>
                            @else
                            <td> <span class="label label-success label-inline mr-2"> {{$row->name }}</span></td>
                            @endif

                            
						    <td>{{ $row->created_at }}</td>

                            @if($row->status ==0) 
                            <td><span class="label label-pending label-inline mr-2">pending</span></td>
                            @else
                            <td> <span class="label label-success label-inline mr-2"> completed</span></td>
                            @endif

                            <td>

                                <a type="button" id="btnassign" data-action="{{ route('enquiries.update',$row->id) }}" data-toggle="modal" data-target="#exampleModal" class="btn btn-sm btn-clean btn-icon" title="Assign">
								<i class="la la-user"></i>
								</a>

									<a href="{{ route('enquiries.edit',$row->id) }}" class="btn btn-sm btn-clean btn-icon" title="Edit details">
								<i class="la la-edit"></i>
								</a>

							
								{{-- <a type="button" id="deletebtn" data-action="{{ route('enquiries.update',$row->id) }}" data-toggle="modal" data-target="#delete_modal" class="btn btn-sm btn-clean btn-icon" title="Delete">
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
            <!-- assign start  -->

            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
				<form id="assign_form" action="" method="post" class="form-horizontal">
                        @csrf
                        @method('put')
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Modal Title</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<i aria-hidden="true" class="ki ki-close"></i>
							</button>
						</div>
						<div class="modal-body">
						<div class="form-group row">
							<label class="col-lg-3 col-form-label text-right">Assign To:</label>
								<div class=" col-lg-6">
									<select class="form-control " id="kt_select2_1" name="assign_to">
										

										@foreach($user as $row)
													<option value="{{ $row->id }}" >{{ $row->name }}</option>
										@endforeach
										
										
									</select>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-primary font-weight-bold">Save changes</button>
						</div>
					</div>
					</form>
				</div>
			</div>
            <!-- assign end here  -->

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
                        <script src="{{asset('assets/js/pages/crud/forms/widgets/select2.js')}}"></script>
                    <!--begin::Page Scripts(used by this page)-->
                           
							@include('admin.custome_scripts.enquiry_view_scripts');                  

                            <script>
$('body').on('click', '#deletebtn', function() {
    var no = $(this).closest('tr').children('td');

    $('#deletebtn').data('action');
    var action = $(this).data('action');
    $('#delete_form').attr('action', action);

})

$('body').on('click', '#btnassign', function() {
    var no = $(this).closest('tr').children('td');

    $('#btnassign').data('action');
    var action = $(this).data('action');
    $('#assign_form').attr('action', action);

})
setTimeout(function() {
    $('#successMessage').fadeOut('fast');
}, 30000); // <-- time in milliseconds
</script>

		<script src="{{asset('assets/js/pages/crud/forms/widgets/select2.js')}}"></script>



@endsection