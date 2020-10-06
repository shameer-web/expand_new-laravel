@extends('layouts.admin')


@section('content')

{{-- <div >


        @if ($message = Session::get('message'))
        <div class="alert alert-success">
            <p class="text-center" style="font-size: 24px">{{ $message }}</p>
        </div>
       @endif
</div> --}}




<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Subheader-->
						<div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
							<div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
								<!--begin::Info-->
								
								<!--end::Info-->
								<!--begin::Toolbar-->
																<!--end::Toolbar-->
							</div>
						</div>
						<!--end::Subheader-->
						<!--begin::Entry-->
						<div class="d-flex flex-column-fluid">
							<!--begin::Container-->
							<div class="container">
								<!--begin::Notice-->
								
								<!--end::Notice-->
								<!--begin::Card-->
								<div class="card card-custom">
									<div class="card-header flex-wrap py-5">
										<div class="card-title">
											<h3 class="card-label">User Table
											</h3>
										</div>
										<div class="card-toolbar">
											<!--begin::Dropdown-->
											
											<!--end::Dropdown-->
											<!--begin::Button-->
											<a href="{{ route('user.create') }}" class="btn btn-primary font-weight-bolder">
											<span class="svg-icon svg-icon-md">
												<!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg-->
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<rect x="0" y="0" width="24" height="24" />
														<circle fill="#000000" cx="9" cy="15" r="6" />
														<path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3" />
													</g>
												</svg>
												<!--end::Svg Icon-->
											</span>New Record</a>
											<!--end::Button-->
										</div>
									</div>
									<div class="card-body">
										<!--begin: Datatable-->
										<table class="table table-separate table-head-custom table-checkable" id="kt_datatable">
											<thead>
												<tr>
													{{-- <th>No</th> --}}
													<th>Name</th>
													<th>Email</th>
													<th>address</th>
													<th>phone_no</th>
													<th>User_type</th>

													<th>Actions</th>	
													
												</tr>
											</thead>


											@foreach($user as $row)
											<tbody>
								
												<tr>
													{{-- <td>{{ ++$i }}</td> --}}
													<td>{{ $row->name }}</td>
													<td>{{ $row->email }}</td>
													<td>{{ $row->state }}</td>
													<td>{{ $row->phone }}</td>

												  
													
														@if($row->role == 1)
														<td>admin</td>
													    
													    @elseif($row->role == 2)
                                                        <td>Staff</td>

                                                        @else
                                                        <td>Customers</td>

													

													    @endif


													
													



													<td>




                                                    	

{{-- 
                                                    	<a href=""
                                      
                                                            class="btn btn-outline-info"><i
                                                            class="fa fa-eye" aria-hidden="true"></i>
                                                         </a> --}}
                                                    	
                                                    	

                                                    	<a href="{{ route('user.edit',$row->id) }}"
                                      
                                                            class="btn btn-outline-warning"><i
                                                            class="fa fa-edit" aria-hidden="true"></i>
                                                        </a>






                                                             <button type="button" id="deletebtn"
                                                              data-action="{{ route('user.update',$row->id) }}" data-toggle="modal"
                                                              data-target="#delete_modal" class="btn btn-outline-danger"><i
                                                              class="fa fa-trash" aria-hidden="true"></i>
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
                                <input type="hidden" name="user_delete_status" value="0">
                            </div>
                        </div>
                    </form>
                </div>
            </div>




								</div>
								<!--end::Card-->
							</div>
							<!--end::Container-->
						</div>
						<!--end::Entry-->
					</div>



@endsection


@section('css')

      <link href="{{asset('assets/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />


@endsection



@section('script')

    
		<script src="{{asset('assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>



<script>
$('body').on('click', '#deletebtn', function() {
    var no = $(this).closest('tr').children('td');

    $('#deletebtn').data('action');
    var action = $(this).data('action');
    $('#delete_form').attr('action', action);

})
</script>
		
		<script src="{{asset('assets/js/pages/crud/datatables/basic/paginations.js')}}"></script>
		

@endsection



