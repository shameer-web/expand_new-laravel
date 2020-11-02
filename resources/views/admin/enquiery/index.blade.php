@extends('layouts.admin')


@section('content')



                    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                       <div class="card card-custom gutter-b">
							<div class="card-header flex-wrap py-3">
								<div class="card-title">
									<h3 class="card-label">
										View All Enquieries
										<!-- <span class="d-block text-muted pt-2 font-size-sm">sorting & pagination remote datasource</span> -->
									</h3>
								</div>
									<div class="card-toolbar">
			<!--begin::Dropdown-->
								<div class="dropdown dropdown-inline mr-2">
									<button type="button" class="btn btn-light-primary font-weight-bolder dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<span class="svg-icon svg-icon-md"><!--begin::Svg Icon | path:assets/media/svg/icons/Design/PenAndRuller.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
								    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
								        <rect x="0" y="0" width="24" height="24"/>
								        <path d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z" fill="#000000" opacity="0.3"/>
								        <path d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z" fill="#000000"/>
								    </g>
								</svg><!--end::Svg Icon--></span>		Export
									</button>

									<!--begin::Dropdown Menu-->
									<div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
										<!--begin::Navigation-->
										<ul class="navi flex-column navi-hover py-2">
											<li class="navi-header font-weight-bolder text-uppercase font-size-sm text-primary pb-2">
										        Choose an option:
										    </li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-icon"><i class="la la-print"></i></span>
													<span class="navi-text">Print</span>
												</a>
											</li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-icon"><i class="la la-copy"></i></span>
													<span class="navi-text">Copy</span>
												</a>
											</li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-icon"><i class="la la-file-excel-o"></i></span>
													<span class="navi-text">Excel</span>
												</a>
											</li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-icon"><i class="la la-file-text-o"></i></span>
													<span class="navi-text">CSV</span>
												</a>
											</li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-icon"><i class="la la-file-pdf-o"></i></span>
													<span class="navi-text">PDF</span>
												</a>
											</li>
										</ul>
										<!--end::Navigation-->
									</div>
									<!--end::Dropdown Menu-->
								</div>
<!--end::Dropdown-->

<!--begin::Button-->
									<a href="{{ route('enquiry.create') }}" class="btn btn-primary font-weight-bolder">
										<span class="svg-icon svg-icon-md"><!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
									    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
									        <rect x="0" y="0" width="24" height="24"/>
									        <circle fill="#000000" cx="9" cy="15" r="6"/>
									        <path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3"/>
									    </g>
									</svg><!--end::Svg Icon--></span>	New Record
									</a>
									<!--end::Button-->
											</div>
										</div>
										<div class="card-body">
											<!--begin: Datatable-->
											<table class="table table-bordered table-checkable" id="kt_datatable">
											<thead>
									        <tr>
                                             
											<th style="display:none">Order ID</th>
											<th>Enquiry No</th>
											<th>Name</th>
											<th>Address</th>
											<th>Phone</th>
											<th>Phost No</th>
											<th>Assigned By</th>
											<th>Date</th>
                                            <th>Actions</th>
											
					                        </tr>
					                    </thead>
                                      @foreach($data as $row)
									
				                        <tbody>
				                           
                          				 <tr>
											<td style="display:none">{{ $row->id }}</td>
											<td>{{ $row->enqid }}</td>
											<td>{{ $row->full_name }}</td>
											<td>{{ $row->address }}</td>
											<td>{{ $row->contact_number }}</td>
											<td>{{ $row->postcode }}</td>

											@if($row->assign_to ==1) 
									   <td><span class="label label-danger label-inline mr-2">Not Assigned</span></td>
										  @else
										  <td> <span class="label label-success label-inline mr-2"> {{$row->name }}</span></td>
										  @endif


											
											<td>{{ $row->created_at }}</td>
                                            <td>
												<a href="{{ route('enquiry.edit',$row->id) }}" class="btn btn-outline-primary font-weight-bold mr-2"><i class="fa fa-edit"></i></a>


												<button type="button" id="deletebtn"
                                                              data-action="{{ route('enquiry.update',$row->id) }}" data-toggle="modal"
                                                              data-target="#delete_modal" class="btn btn-outline-danger"><i
                                                              class="fa fa-trash" aria-hidden="true"></i>
                                                             </button>
															 <button type="button" id="btnassign" data-action="{{ route('enquiry.update',$row->id) }}" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
													Assign
												</button>	
												
											</td>
											
                                             
                                             
                                  		</tr>
                           
                           
                           
                           
						                     </tbody>
						                @endforeach

						        		</table>

								<!--end: Datatable-->
							</div>


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
                                <input type="hidden" name="enquiery_status" value="0">
                            </div>
                        </div>
                    </form>
                </div>
            </div>


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