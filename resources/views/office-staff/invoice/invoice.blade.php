@extends('layouts.office_staff')


@section('content')

<body>
 
<div class="container bg-white">
  <div class="row">
<div class="col-md-12  ">

<table class="table-bordered" style="width: 100%">
    <tbody>

      <tr>
        <td class="center">
          <img src="{{ url('assets/image/invoice_image/'.$invoice_img1->invoice_image)}}" style="padding:80px" width="100%"> 
        {{-- <h4>Company Name</h4> --}}
        <h4 class="font-italic font-weight-bold">{{ $invoice_img1->header }}</h4>
                {{--  <p>Email: info@totoronto.ca</p>
 <p>Phone:+1-647-354-1222, +1-437-772-3191</p> --}}
        </td>   
        <td class="center" >
          <img src="{{ url('assets/image/invoice_image/'.$invoice_img2->invoice_image)}}" class="brand-logo" style="padding:80px" width="100%"> 
        {{--  <h4>Company Name</h4> --}}
        <h4 class="font-italic font-weight-bold">{{ $invoice_img2->header }}</h4>
       {{--   <p>Email: info@totoronto.ca</p>
 <p>Phone:+1-647-354-1222, +1-437-772-3191</p> --}}
        </td>  
       </tr>

        
          <tr>

              @if($cust_package == null)
              <td class="center" width="50%"> 
               <h6>Name: </h6>
              </td> 
              @else
              <td class="center" width="50%"> 
               <h6>Name: {{ $cust_package->cus['name'] }}</h6>
              </td> 
              @endif 
              
               @if($cust_package == null)
              <td class="center" width="50%"> 
               <h6>Plan: </h6>
              </td> 
              @else
              <td class="center" width="50%"> 
               <h6>Plan:  {{ $cust_package->package['package_name'] }}</h6>
              </td>
              @endif                           
          </tr>


          <tr>
               @if($cust_package == null)
              <td class="center" width="50%"> 
               <h6>Customer ID: </h6>
              </td> 
              @else
              <td class="center" width="50%"> 
               <h6>Customer ID: {{ $cust_package->cus['area_subcode_id'] }}</h6>
              </td>
              @endif  

              @if($cust_package == null)
              <td class="center" width="50%"> 
               <h6>Plan Rate: </h6>
              </td> 
              @else
              <td class="center" width="50%"> 
               <h6>Plan Rate:  {{ $cust_package->package_amount }}</h6>
              </td> 
              @endif                          
          </tr>



          <tr>
                @if($cust_package == null)
              <td class="center" width="50%"> 
               <h6>Address: </h6>
              </td> 
              @else
              <td class="center" width="50%"> 
               <h6>Address: {{ $cust_package->cus['installation_address'] }}</h6>
              </td> 
              @endif 

              <td class="center" width="50%"> 
               <h6>Bill Date: {{ $billdate }}</h6>
              </td>

                                        
          </tr>

         {{--  <tr>

              <td class="center" width="50%"> 
               <h6>Bill No: KER/KZH/1175/2018-1</h6>
              </td> 
                

              <td class="center" width="50%"> 
               <h6>Bill Period: Jan-2020</h6>
              </td>                           
          </tr> --}}

         {{--   <tr>
              <td class="center" width="50%"> 
                
              </td>  

              <td class="center" width="50%"> 
               <h6>Due Date: 10-02-2020</h6>
              </td>                           
          </tr> --}}

         


          <tr>
              <td class="center" width="100%" colspan="2"> <h4>Bill Details</h4></td>                      
          </tr>


          <tr>
             {{--  <td class="center" width="50%"> 
               <h6> Subscription Charge: 930</h6>
              </td>  --}}

              @if($cust_package == null)
              <td>
                   <h6> CGST -9%: </h6>
              </td> 
              @else
              <td class="center" width="50%"> 
               <h6> CGST -9%: {{ $cust_package->package['cgst'] }}</h6>
              </td>
              @endif 


               @if($cust_package == null)
              <td>
                  <h6> SGST - 9%: </h6>
              </td> 
              @else
              <td class="center" width="50%"> 
               <h6> SGST - 9%: {{ $cust_package->package['sgst'] }}</h6>
              </td> 
              @endif                   
          </tr>



          <tr>
              

               @if($cust_package == null)
              <td>
                  <h6> CESS - 1%: </h6>
              </td> 
              @else

              <td class="center" width="50%"> 
               <h6> CESS - 1%: {{ $cust_package->package['cess'] }}</h6>
              </td> 
              @endif 


                @if($cust_package == null)
              <td>
                   <h6> Total Tax:  </h6>
              </td> 
              @else
              <td class="center" width="50%"> 
               <h6> Total Tax: {{ $cust_package->package['total_tax'] }} </h6>
              </td> 
              @endif                          
          </tr>
         

          <tr>
             

               @if($cust_package == null)
              <td>
                  <h6> Total: </h6>
              </td> 
              @else

              <td class="center" width="50%"> 
               <h6> Total: {{ $cust_package->package['total_amount'] }}</h6>
              </td>  

              @endif                         
          </tr>


      

            <tr>
              <td class="center" width="100%" colspan="2"> <h4>Payment Due Details</h4></td>                      
          </tr>


          <tr>
               @if($cust_package == null)
              <td>
                  <h6> Previous Balance: </h6>
              </td> 
              @else
              <td class="center" width="50%"> 
               <h6> Previous Balance: {{ $cust_package->balance }}</h6>
              </td> 
              @endif 



                @if($cust_package == null)
              <td>
                  <h6> Discount: </h6>
              </td> 
              @else

              <td class="center" width="50%"> 
               <h6> Discount: {{ $cust_package->discount }} </h6>
              </td>  
              @endif 

                                       
          </tr>

          

         

          <tr>
               
                @if($cust_package == null)
              <td>
                  <h6> Net Amount: </h6>
              </td> 
              @else
              <td class="center" width="50%"> 
               <h6> Net Amount: {{ $total_amount }} </h6>
              </td>
              @endif  




               @if($cust_package == null)
              <td>
                  <h6> Total Amount Due: </h6>
              </td> 
              @else
              <td class="center" width="50%"> 
               <h6> Total Amount Due: {{ $total_amount }}</h6>
              </td> 
              @endif 
                      
          </tr>
          



          <tr>
              <td class="center" colspan="2" width="100%"> 
                <div class="row">
                   <div class="col-md-6">
                      <button type="button" class="btn btn-primary font-weight-bolder py-4 mr-3 mr-sm-14 my-1" onclick="window.print();">Print Invoice</button>
                   </div>
                   <div class="col-md-3">
                       <button type="button" class="btn btn-primary font-weight-bolder py-4 mr-3 mr-sm-14 my-1" data-toggle="modal" data-target="#pay" > Add Discount</button>
                   </div>

                    <div class="col-md-3">
                       <button type="button" class="btn btn-primary font-weight-bolder py-4 mr-3 mr-sm-14 my-1" data-toggle="modal" data-target="#onlinepayment" > OnLine Payment</button>
                   </div>
                  {{--  <div class="col-md-4">
                     <h6> Total Amount Due: 38.800000000001</h6>
                   </div> --}}
                  

                </div>
              
              </td>  
        
          </tr>
         
 
         

          <!-- <tr>
            <td class="center" width="50%" > <textarea type="text" class="form-control" name="address" id="website" placeholder="Address" data-rule="website" data-msg="Please Address" spellcheck="false"></textarea></td>  
            <td class="center" width="50%"> 
              <label style="margin-top: 0px;"><span style="display: inline-block;">English </span>
                  <input class="form-control" type="checkbox" style="height: 20px;">
              </label>
              </td>      
                                     
          </tr>



        <tr>
              <td class="center" width="50%"> <input type="text" name="name" class="form-control" id="name" placeholder="GST NO" data-rule="minlen:4" data-msg="Please enter at least 4 chars"></td>  
              <td class="center" width="50%"> 
                <input type="text" name="name" class="form-control" id="name" placeholder="Bill NO" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                </td>      
                                      
          </tr>





        <tr>
              <td class="center" width="50%"> <input type="text" name="name" class="form-control" id="name" placeholder="Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars"></td>  
              <td class="center" width="50%"> 
                <input type="text" name="name" class="form-control" id="name" placeholder="Bill Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                </td>      
                                      
          </tr>


     <tr>
              <td class="center" width="50%"> <input type="text" name="name" class="form-control" id="name" placeholder="Mobile" data-rule="minlen:4" data-msg="Please enter at least 4 chars"></td>  
              <td class="center" width="50%"> 
                <input type="text" name="name" class="form-control" id="name" placeholder="Bill Period" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                </td>      
                                      
          </tr>


     <tr>
      <td class="center" width="50%"> 
          <input type="text" name="name" class="form-control" id="name" placeholder="Mobile" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
      </td>  
      <td class="center" width="50%"> 
          <input type="text" name="name" class="form-control" id="name" placeholder="Due Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
      </td>      
                                      
          </tr>
 

          <tr>
            <td class="center" width="100%" colspan="2"> Bill Details</td>  

                                         
          </tr>
            <tr>
              <td class="center" width="100%" colspan="2"> 
               <input type="text" name="name" class="form-control" id="name" placeholder="Subscription Charge" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                <input type="text" name="name" class="form-control" id="name" placeholder="CGST-9%" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                <input type="text" name="name" class="form-control" id="name" placeholder="SCGST-9%" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                <input type="text" name="name" class="form-control" id="name" placeholder="KFC-1%" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                <input type="text" name="name" class="form-control" id="name" placeholder="Total Tax" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                <input type="text" name="name" class="form-control" id="name" placeholder="Total " data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              </td>   
 </tr>
  
  
  <tr>
            <td class="center" width="100%" colspan="2"> Payment Due Details</td>  

                                         
          </tr>
            <tr>
              <td class="center" width="100%" colspan="2"> 
               <input type="text" name="name" class="form-control" id="name" placeholder="Previous Balance Charge" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                
                <input type="text" name="name" class="form-control" id="name" placeholder="Net Amount" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                <input type="text" name="name" class="form-control" id="name" placeholder="Total Amount Due" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              </td>   
 </tr>

            <tr>
              <td colspan="2" char="center">
              <button name="submit" style="background:black; color: #fff;" type="submit">Submit Now</button> 
               </td>
            </tr> -->

                      </tbody>
                    </table>
               
                </div>

  {{--  start modal --}}
  @if($cust_package == null)
  <div></div>
  @else
 <div class="modal fade" id="pay" tabindex="-1" role="dialog"  aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" >New Package</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('invoices.update_package',$cust_package->id) }}" method="post" >
                        @csrf
                       {{--  <div class="form-group">
                            <label  class="form-control-label">Transaction Type:</label>
                            <select class="form-control " id="kt_select2_1" name="transaction_type" style="width: 100%">
                                <option selected="selected">Cash</option>
                                
                                <option value="Cheque">Cheque</option>
                                <option value="Card">Card</option>
                               
                                
                                
                            </select>
                        </div> --}}


                        <div class="form-group">

                            <label  class="form-control-label">Package Amount:</label>
                              <input type="text" class="form-control " name="package_amount" value="{{ $cust_package->package['package_price'] }}" readonly>
                         </div>

                         <div class="form-group">

                            <label  class="form-control-label">Package Amount with GST:</label>
                              <input type="text" class="form-control " name="package_total_amount" value="{{ $cust_package->package['total_amount'] }}" readonly>
                         </div>

                         
                        
                       {{--   <div class="form-group">

                            <label  class="form-control-label">Due Amount:</label>
                              <input type="text" class="form-control " name="due_amount" value="{{ $due_amount }}">
                         </div> --}}
                          <div class="form-group">     
                            <label  class="form-control-label">Balance:</label>
                              <input type="text" class="form-control " name="balance" value="{{ $cust_package->balance }}" readonly >
                          </div>

                           <div class="form-group">     
                            <label  class="form-control-label">Total Amount :</label>
                              <input type="text" class="form-control " name="total_package_amount" value="{{ $total_amount }}" readonly >
                          </div>

                          <div class="form-group">     
                            <label  class="form-control-label">Enter Discount Amount  :</label>
                              <input type="text" class="form-control " name="discount" required >
                          </div>

                              
                           {{-- <div class="form-group">
                                <label  class="form-control-label">GST Number:</label>
                              <input type="text" class="form-control " name="gst_number" placeholder="Enter GST Number">
                          </div> --}}
                          
                           {{-- <div class="form-group">

                               <label  class="form-control-label">Payment Date:</label>
                               <input type="text" class="form-control " name="payment_date" value="{{Carbon\Carbon::now()}}">
                           </div> --}}

                           <input type="hidden" name="first_payment_date" value="{{ $cust_package->payment_date }}">

                           <input type="hidden" name="cus_id" value="{{ $cust_package->cus_id }}">

                            <input type="hidden" name="staff_name" value="{{ $staff }}">




                            
                        
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Add</button>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
 </div>
 @endif

 {{-- end modal --}}


 {{--  start modal --}}
  @if($cust_package == null)
  <div></div>
  @else
 <div class="modal fade" id="onlinepayment" tabindex="-1" role="dialog"  aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" >Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('gateway.pay',$cust_package->id) }}" method="post" >
                        @csrf
                       


                        

                        

                         
                        
                        
                        

                           <div class="form-group">     
                            <label  class="form-control-label">Amount :</label>
                              <input type="text" class="form-control " name="amount" value="{{ $total_amount }}" >
                          </div>

                          <div class="form-group">     
                            <label  class="form-control-label">Name :</label>
                              <input type="text" class="form-control " name="firstname" required >
                              <span>enter your name</span>
                          </div>

                          <div class="form-group">     
                            <label  class="form-control-label">Email :</label>
                              <input type="text" class="form-control " name="email" required >
                              <span>enter your Email</span>
                          </div>


                          <div class="form-group">     
                            <label  class="form-control-label">Phone Number :</label>
                              <input type="text" class="form-control " name="phone" required >
                              <span>enter your Phone Number</span>
                          </div>

                         

                         
                        
                         

                           <input type="hidden" name="first_payment_date" value="{{ $cust_package->payment_date }}">

                           <input type="hidden" name="cus_id" value="{{ $cust_package->cus_id }}">

                           <input type="hidden" name="package_total_amount" value="{{ $cust_package->package['total_amount'] }}">




                            
                        
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
 </div>
 @endif

 {{-- end modal --}}




                </div>
              </div>

              <style type="text/css">
                td{padding: 10px; }

              </style>
            </body>
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

        <script src="{{asset('assets/js/pages/crud/forms/widgets/select2.js')}}"></script>

        <script>
            $('#kt_select2_1').change(function(){
            $("#invoice_div").show();
            })
        </script>

@endsection