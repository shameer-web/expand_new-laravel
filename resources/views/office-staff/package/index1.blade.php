@extends('layouts.office_staff')


@section('content')



     <div class="card card-custom">
  <div class="card-header py-3">
    
    <div class="card-toolbar">
      <!--begin::Dropdown-->

<!--end::Dropdown-->

<!--begin::Button-->

{{-- <a href="{{ route('package.create') }}" class="btn btn-primary font-weight-bolder">
  <span class="svg-icon svg-icon-md"><!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <circle fill="#000000" cx="9" cy="15" r="6"/>
        <path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3"/>
    </g>
</svg><!--end::Svg Icon--></span> New Record
</a> --}}
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
                                             
                                              <th>Order ID</th>
                                              <th>Package Name</th>
                                              <th>Package type</th>
                                              <th>Package Price</th>
                                              <th> Gst Amount</th>
                                             {{--  <th>Package Amount</th> --}}
                                              <th>Total Amount</th>
                                              
                                              <th>Actions</th>
                                            </tr>
                                         </thead>

                                          @foreach($package as $row)
                    
                                <tbody>
                                   
                                   <tr>
                                              <td>{{ $row->id }}</td>
                        <td>{{ $row->package_name }}</td>
                       
                        
                         @if($row->package_type =='Postaid') 
                     <td><span class="label label-primary label-inline mr-2">Postpaid</span></td>
                      @else
                      <td> <span class="label label-success label-inline mr-2"> Prepaid</span></td>
                      @endif
                                              <td>{{ $row->package_price}}</td>
                                              <td>{{ $row->total_tax }}</td>
                                              {{-- <td>{{ $row->package_amount }}</td> --}}
                                              <td>{{ $row->total_amount }}</td>
                                               
                                             
                     


                        {{--  <a href="{{ route('package.edit',$row->id) }}" class="btn btn-sm btn-clean btn-icon" title="Edit details">
                                <i class="la la-edit"></i>
                                </a> --}}

                            
                               {{--  <a type="button" id="deletebtn" data-action="{{ route('package.update',$row->id) }}" data-toggle="modal" data-target="#delete_modal" class="btn btn-sm btn-clean btn-icon" title="Delete">
                                <i class="la la-trash"></i>
                                </a> --}}                                                  
                        
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
                                <input type="hidden" name="package_status" value="0">
                            </div>
                        </div>
                    </form>
                </div>
            </div>



            {{-- end delete modal --}}
    
    
          
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