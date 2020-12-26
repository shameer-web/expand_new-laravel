@extends('layouts.technician_staff')


@section('content')


<?php

 $user =$page_data['user'] 

 ?>



     <div class="card card-custom">
	<div class="card-header py-3">
		
		<div class="card-toolbar">
			<!--begin::Dropdown-->

<!--end::Dropdown-->

<!--begin::Button-->
<a href="#" class="btn btn-primary font-weight-bolder">
	<span class="svg-icon svg-icon-md"><!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <circle fill="#000000" cx="9" cy="15" r="6"/>
        <path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3"/>
    </g>
</svg><!--end::Svg Icon--></span>	View All Complaints
</a>
<!--end::Button-->
		</div>
	</div>
	<div class="card-body">
		<!--begin: Datatable-->
		<table class="table table-separate table-head-custom table-checkable" id="kt_datatable1">
			                    <thead>
                              <tr> 
                                              <th>ID</th>
                                              {{-- <th>Complaint ID</th> --}}
                                              <th>Complaint</th>
                                              <th>Date</th>
                                              <th>Assigned Technician</th>
                                              <th>Assist By</th>
                                              <th>Remarks</th>
                                              <th>Number Of Visit</th>
                                              <th>Status</th>
                                              <th>Customer Reference</th>
                                              
                                              <th>Actions</th>
                                  </tr>
                    </thead>

                        @if(isset($page_data['value']))
                                      @foreach($page_data['value'] as $row)
                                    
                                        <tbody>
                                           
                                         <tr>
                                            <td >{{ $row->id }}</td>
                                           {{--  <td>{{ $row->complaint_id}}</td> --}}
                                            <td>
                                                 
                                                  @foreach($row->complaint as $data)
                                                  <span class="btn"> {{ $data['complainttype'].';' }} </span>
                                                   @endforeach
                                            </td>

                                            <td>{{ $row->created_at }}</td>
                                            
                                            <td><button type="submt" class="badge btn  btn-outline-warning">{{ $row->staffs['name'] }}</button></td>

                                            <td><button type="submt" class="badge btn  btn-outline-warning">{{ $row->assist['name'] }}</button></td>

                                             <td>{{ $row->complaint_description }}</td>

                                              <td>{{ $row->number_of_visit }}</td>



                                              @if($row->status ==0) 
                                       <td><button class="badge btn btn-danger">pendind</button></td>
                                          @elseif($row->status ==1)
                                          <td> <button class=" badge btn btn-primary">Complaint Picked</button></td>
                                          @endif
                                              

                                            

                                            

                                            @if($row->technician_status == 0) 
                                         <td><button class="badge btn btn-danger">pendind</button></td>
                                          @else
                                          <td> <button class=" badge btn btn-success">{{ $row->tech_status['technician_status'] }}</button></td>
                                          @endif


                                    



                                            
                                            @if($row->technician_status == 0) 
                                            <td>
                                                

                                                        <a href="{{ route('comp.check',$row->id) }}" class="btn btn-outline-danger font-weight-bold mr-2">un-checked</a>
                                                         
                                                            
                                            </td>


                                            @else
                                             <td>

                                                <a href="{{ route('comp.check',$row->id) }}" class="btn btn-outline-primary font-weight-bold mr-2"><i class="fa fa-eye"></i>checked</a>
                                            
                                             </td>
                                            @endif
                                            
                                             
                                             
                                        </tr>
                           
                           
                           
                           
                                             </tbody>
                                        @endforeach
                                        @endif

        		</table>
		<!--end: Datatable-->
		
		{{-- <div class="modal fade" tabindex="-1" id="delete_modal" role="dialog" aria-labelledby="exampleModalLabel"
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
            </div> --}}
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
                                        
                                       <label class="col-lg-3 col-form-label text-right">Remarks:</label>
                                        <div class="col-lg-5">
                                          

                                            <textarea name="remarks" class="form-control w-100" placeholder="Enter Remarks" rows="3" ></textarea>

                                             <span class="form-text text-muted">Please enter Remarks</span>
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

                    <!--begin::Page Scripts(used by this page)-->
                            <script src="{{asset('assets/js/pages/crud/datatables/extensions/buttons.js')}}"></script>
                        <!--end::Page Scripts-->








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