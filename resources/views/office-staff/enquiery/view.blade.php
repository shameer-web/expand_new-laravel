@extends('layouts.office_staff')


@section('content')



     <div class="card card-custom">
    <div class="card-header py-3">
        
        <div class="card-toolbar">
            <!--begin::Dropdown-->

<!--end::Dropdown-->

<!--begin::Button-->
<a href="{{ route('enquiries.index') }}" class="btn btn-primary font-weight-bolder">
    <span class="svg-icon svg-icon-md"><!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <circle fill="#000000" cx="9" cy="15" r="6"/>
        <path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3"/>
    </g>
</svg><!--end::Svg Icon--></span>   Back
</a>
<!--end::Button-->
        </div>
    </div>
    <div class="card-body">
        <!--begin: Datatable-->
        <table class="table table-separate table-head-custom table-checkable" id="kt_datatable1">
                                <thead>
                              <tr> <th>Order ID</th>
                                <th>Enquiry No</th>
                                <th>Customer Name</th>
                                <th>Staff</th>
                                <th>Remarks</th>
                              
                                <th>Date</th>
                            
                                  </tr>
                    </thead>

                        <tbody>
                           @foreach($history as $row)
                          
                            <tr>
                            <td >{{ $row->id }}</td>
                            <td>{{ $row->enq_id }}</td>
                            <td>{{ $row->customer_name }}</td>
                            <td>{{ $row->User['name'] }}</td>
                           
                            <td>{{ $row->remarks }}</td>
                            

                            
                            <td>{{ $row->created_at }}</td>

                        

                           
                                </tr>
                            @endforeach
                        </tbody>

                </table>
        <!--end: Datatable-->
        
       
           
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