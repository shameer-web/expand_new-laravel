@extends('layouts.admin')


@section('content')



     <div class="card card-custom">
	<div class="card-header py-3">
		
		<div class="card-toolbar">
			<!--begin::Dropdown-->

<!--end::Dropdown-->

<!--begin::Button-->

<a href="{{ route('device.create') }}" class="btn btn-primary font-weight-bolder">
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
        
          @if ($message = Session::get('message'))
                <div>
                   <p class="text-center text-danger" style="font-size: 18px">{{ $message }}</p>
                </div>
                                              


         @elseif ($datas = Session::get('datas'))
                <div>
                    <p class="text-center text-danger" style="font-size: 18px">{{ $datas }}</p>
                </div>
        @endif



		<table class="table table-separate table-head-custom table-checkable" id="kt_datatable1">


                                                <thead>
                                                                  <tr>
                                             
                                              <th>Device ID</th>
                                              {{-- <th>Device</th> --}}
                                              {{-- <th>Device Name</th> --}}
                                              <th>Company</th>
                                              <th>Type</th>
                                              <th>Device ID</th>
                                              {{-- <th>Serial Number</th> --}}
                                              <th>Model</th>
                                              <th>District</th>
                                             {{--  <th>LCO ID</th> --}}
                                              <th>Assigned Customer</th>
                                              <th>Status</th>

                                              <th>Actions</th>
                                              
                                                      </tr>
                                        </thead>
                                      @foreach($data as $row)
                                     
                                        <tbody>
                                           
                                         <tr>
                                              {{-- <td>{{ $row->id }}</td> --}}
                                              <td>{{ $row->deviceid }}</td>
                                             {{--  <td>{{ $row->device_name }}</td> --}}
                                              <td>{{ $row->Company['company_name'] }}</td>
                                              <td>{{ $row->Type['type_name'] }}</td>
                                              <td>{{ $row->device_id}}</td>
                                             {{--  <td>{{ $row->serial_number }}</td> --}}
                                              <td>{{ $row->Mode['model_name']}}</td>
                                              <td>{{ $row->District['district_name'] }}</td>
                                             {{--  <td>{{ $row->Loc['loc_name'] }}</td> --}}
                                              @if($row->status ==0) 
                                       <td>{{-- <span class="label label-warning label-inline mr-2">Not Assigned</span> --}}
                                       <button class="btn btn-info badge">Not Assigned</button>
                                       </td>


                                          @else 
                                          <td> {{-- <span class="label label-primary label-inline mr-2">{{ $row->Customer['name'] }}</span> --}}
                                           <button class="btn btn-warning badge">{{ $row->Customer['name'] }}</button>

                                          </td>
                                         
                                          @endif

                                          @if($row->device_check ==0)

                                            <td>
                                                 <button class="btn btn-primary badge">In Stock</button>
                                       
                                            </td> 

                                          @elseif($row->device_check ==1) 

                                       {{-- <span class="label label-warning label-inline mr-2">Not Assigned</span> --}}
                                        <td>
                                       <button class="btn btn-danger badge">Damaged</button>
                                       </td>
                                       

                                       @elseif($row->device_check ==2)
                                         
                                           <td>
                                       <button class="btn btn-warning badge">Service Center</button>
                                       </td>
                                       

                                       @elseif($row->device_check ==3)

                                          <td>
                                       <button class="btn btn-warning badge">Customer</button>
                                       </td>
                                      
                                       @endif



                                             
                                            <td>
                                               {{--  <a href="{{ route('device.edit',$row->id) }}" class="btn btn-outline-primary font-weight-bold mr-2"><i class="fa fa-edit"></i></a> --}}


                                               {{--  <button type="button" id="deletebtn"
                                                              data-action="{{ route('device.update',$row->id) }}" data-toggle="modal"
                                                              data-target="#delete_modal" class="btn btn-outline-danger"><i
                                                              class="fa fa-trash" aria-hidden="true"></i>
                                                             </button> --}}



                                                    <a href="{{ route('device.edit',$row->id) }}" class="btn btn-sm btn-clean btn-icon" title="Edit details">
                                <i class="la la-edit"></i>
                                </a>

                            
                                <a type="button" id="deletebtn" data-action="{{ route('device.update',$row->id) }}" data-toggle="modal" data-target="#delete_modal" class="btn btn-sm btn-clean btn-icon" title="Delete">
                                <i class="la la-trash"></i>
                                </a>             


                                                 <button type="button" id="btnstatus" data-action="{{ route('device.update',$row->id) }}" class="btn btn-primary badge " data-toggle="modal" data-target="#exampleModal">
                                                    Status
                                                </button>                
                                                
                                            </td>
                                            
                                             
                                             
                                        </tr>
                           
                           
                           
                           
                                             </tbody>
                                        @endforeach

                                        </table>

                               
			                 
		<!--end: Datatable-->


            {{-- start delete modal --}}


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
                                <input type="hidden" name="device_status" value="0">
                            </div>
                        </div>
                    </form>
                </div>
            </div>




            {{-- end delete modal --}}
		
		
            <!--  start status moda  -->


                   <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                <form id="status_form" action="" method="post" class="form-horizontal">
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
                            <label class="col-lg-3 col-form-label text-right">Status:</label>
                                <div class=" col-lg-6">
                                    <select class="form-control " id="kt_select2_1" name="device_check">
                                        

                                        
                                                    <option value="1" >Damage</option>
                                                    <option value="2" >Service</option>
                                        
                                        
                                        
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

          
            <!-- end status modal  -->
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