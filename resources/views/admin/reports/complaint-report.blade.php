@extends('layouts.admin')


@section('content')



    <div class=" container">
            <!--begin::Notice-->

<!--end::Notice-->

<!--begin::Card-->
<!--begin::Card-->
<div class="card card-custom card-custom  gutter-t">
    <div class="card-header py-3">
        <div class="card-title">
            <h3 class="card-label">Complaint Report</h3>
        </div>
        
    </div>
    <div class="card-body">
        <!--begin: Datatable-->
        <div class="m-form m-form--label-align-right m--margin-bottom-10">
                            <div class="row align-items-center">
                                <div class="col-xl-12 order-2 order-xl-1">
                                    <div class="form-group m-form__group row align-items-center">
                                        <div class="col-md-4">
                                            <div class="m-form__group m-form__group--inline">
                                                <div class="m-form__label">
                                                    <label>
                                                        Date:
                                                    </label>
                                                </div>
                                                <div class="m-form__control">
                                                    <input style="width: 100%" class="form-control m-input m-input--solid table_filter" id="date_range" type="text"/>
                                                </div>
                                            </div>
                                            <div class="d-md-none m--margin-bottom-10"></div>
                                        </div>

                                         <div class="col-md-4">
                                            <div class="m-form__group m-form__group--inline">
                                                <div class="m-form__label">
                                                    <label>
                                                        Complaint Staus:
                                                    </label>
                                                </div>
                                                <div class="m-form__control">
                                                    <select class="form-control m-bootstrap-select m-bootstrap-select--solid table_filter" id="table_filter_status">
                                                         <option value="all">All</option>
                                                        
                                                         
                                                            <option value="0" >Pending</option>
                                                           {{--  <option value='1'>Active</option> --}}
                                                            <option value='1'>Completed</option>

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="d-md-none m--margin-bottom-10"></div>
                                        </div>
                                        
                                        
                                    </div>
                                </div>
                            </div>
                        </div>

        <table class="table table-separate table-head-custom table-checkable" id="complaint_view_table">
                                <thead>
                              <tr>
                                <th>Order ID</th>
                                <th>Complaint Id</th>
                                <th>Customer Name</th>
                                <th>Complaint</th>
                                <th>Other Complaint</th>
                               {{--  <th>Area</th> --}}
                                <th>Remarks</th>
                                <th>Date</th>
                                <th>Status</th>
                                
                                  </tr>
                    </thead>


                </table>
        <!--end: Datatable-->
    </div>
</div>
<!--end::Card-->
        </div>



@endsection







@section('css')

       <link href="{{asset('assets/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css"/>

@endsection


@section('script')

       
  <!--begin::Page Vendors(used by this page)-->
                            <script src="{{asset('assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
                        <!--end::Page Vendors-->

                    <!--begin::Page Scripts(used by this page)-->
                         
                        <!--end::Page Scripts-->


@include('admin.custome_scripts.complaint_report_scripts');    





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