<style>
    /*    Datatable Hide Columns*/
    .hide_column {
        display : none;
    }
</style>
<script>
    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
</script>
<script>
    //  User List Data Table
    var Datatable=function() {


        var t=function() {

             function GetSearchDate(){
                return $('#date_range').val();
            }
            function GetSearchStatus(){
                return $('#table_filter_status').val();
            }
            //  function GetSearchCategory(){
            //     return $('#table_filter_category').val();
            // }
            //  function GetSearchBrand(){
            //     return $('#table_filter_brand').val();

            // }
            var table = $('#enquiry_view_table').DataTable({
                "ajax":{

                    url :"{{ route('reports.select') }}", // json datasource
                    type: "post", // type of method  , by default would be get
                    data: function(d){
                       d.status = GetSearchStatus();
                       // d.category = GetSearchCategory();
                       // d.brand = GetSearchBrand();
                       d.date = GetSearchDate();
                    }
                },
                "bProcessing": true,
                "deferRender": true,
                "bDeferRender": true,
                "scrollX" : true,
                buttons: [
                    { extend: 'print', className: 'btn dark btn-outline' },
                    { extend: 'csv', className: 'btn purple btn-outline ' },
                    { extend: 'colvis', className: 'btn dark btn-outline', text: 'Columns'}
                ],
                "dom": "<'row' <'col-md-12'B>><'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r><'table-scrollable't><'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>", // horizobtal scrollable datatable
                "lengthMenu": [
                    [5, 10, 15, 20, -1],
                    [5, 10, 15, 20, "All"] // change per page values here
                ],
                // set the initial value
                "pageLength": 10,
                "columnDefs": [
                    // {
                    //     "targets": [ 0 ],
                    //     "className": "hide_column"
                    // }
                ],
                'order': [[0, 'desc']]
            });
            $(".table_filter").on("change", function() {
                table.ajax.reload();
            });
            $(".hide_column").hide();


            // Date Range Picker
            var start = moment();
            var end = moment();

            function cb(start, end) {
                $('#date_range').val(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
                table.ajax.reload();
            }

            $('#date_range').daterangepicker({
                buttonClasses: "m-btn btn",
                applyClass: "btn-primary",
                cancelClass: "btn-secondary",
                startDate: start,
                endDate: end,
                locale: {
                    format: 'MMMM D, YYYY'
                },
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                }
            }, cb);

            cb(start, end);

        };
        return {
            init:function() {
                t()
            }
        }
    }

    ();
    jQuery(document).ready(function() {
            Datatable.init();
            $(".hidden").hide();
//            $('#service_view_table').wrap("");
        }

    );
</script>
