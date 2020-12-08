<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Enquiery;
use App\Device;
use App\Complaint;
use App\Complainttype;
use Carbon;
use DB;
class ReportsController extends Controller
{
    public function enquiry_report()
    {
    	return view('admin.reports.enquiry-report');
    }
    

    public function select()
    {
    	$json_data=array();
        $j=0;

        
        $data=array();
        if($_POST['date']!=''){
            $date=array();
            $date=explode('-',$_POST['date']);
            $start_date=date('Y-m-d', strtotime($date[0]));
            $end_date=date('Y-m-d', strtotime($date[1]));
           
        }
        
        $status = $_POST['status'];
        
       
        $res = DB::table('enquieries')       
         ->select('enquieries.*')
        ->where('enquiery_status', 1)
        ->where(DB::raw("(STR_TO_DATE(created_at,'%Y-%m-%d'))"), "<=", $end_date)
        ->where(DB::raw("(STR_TO_DATE(created_at,'%Y-%m-%d'))"), ">=", $start_date);
        if ($status!='all'){
        $res->where('status', '=', $status);
        }
        $result = $res->get();
        
           
        
        //$result_array=$result->result();

        $json_data['draw']=5;
        $json_data['recordsTotal']=$result->count();
        $json_data['recordsFiltered']=$result->count();
        $array=array();

        foreach($result as $row):
           
          
                         
            if($row->assign_to ==1){
                $assign_to = '<span class="label label-danger label-inline mr-2">Pending</span>';
            }else{
                $assign_to = '<span class="label label-success label-inline mr-2"> Assign </span>';
            }

             if($row->status ==0) 
             {
             	$status = '<span class="label label-pending label-inline mr-2">pending</span>';
             }else{
             	$status = '<span class="label label-success label-inline mr-2"> completed</span>';
             }
                            
            $array[$j][]=$row->id;
            $array[$j][]=$row->enqid;
            $array[$j][]=$row->full_name;
          
            $array[$j][]=$row->address;
            $array[$j][]=$row->contact_number;
            $array[$j][]=$row->postcode;
            $array[$j][]=$assign_to;
            
            $array[$j][]=$row->created_at;
            $array[$j][]=$status;
            $j++;
        endforeach;

        $json_data['data']=$array;
        echo json_encode($json_data);  // send data as json format

         
    }
    public function device()
    {
    	return view('admin.reports.device_report');


    }

    public function select_device()
    {
    	$json_data=array();
        $j=0;

        $data=array();
        if($_POST['date']!=''){
            $date=array();
            $date=explode('-',$_POST['date']);
            $start_date=date('Y-m-d', strtotime($date[0]));
            $end_date=date('Y-m-d', strtotime($date[1]));
           
        }
        $status = $_POST['status'];
        // $result = Enquiery::where('enquiery_status',1)->where('created_at',$data)->get();
        
        $query = DB::table('devices')
        ->join('companies', 'companies.id', '=', 'devices.device')
        ->join('types','types.id', '=', 'devices.type')
        ->join('modes','modes.id', '=', 'devices.model')
        ->join('districts','districts.id', '=', 'devices.district')
        ->join('locs','locs.id', '=', 'devices.lco_id')
        ->join('customers','customers.id', '=', 'devices.assign_to')
        ->select('devices.*','companies.company_name','types.type_name','modes.model_name','districts.district_name','locs.loc_name','customers.name')
        ->where('device_status', 1)
        ->where(DB::raw("(STR_TO_DATE(devices.created_at,'%Y-%m-%d'))"), "<=", $end_date)
        ->where(DB::raw("(STR_TO_DATE(devices.created_at,'%Y-%m-%d'))"), ">=", $start_date);
        if ($status!='all'){
            $query->where('device_check', '=', $status);
        }
        $result=$query->get();   
        
        $json_data['draw']=5;
        $json_data['recordsTotal']=$result->count();
        $json_data['recordsFiltered']=$result->count();
        $array=array();

        foreach($result as $row):
           
           if($row->device_check ==0){
                $status = '<span class="label label-success label-inline mr-2">In Stock</span>';
            }elseif($row->device_check==1){
                $status = '<span class="label label-danger label-inline mr-2">Damage </span>';
            }elseif($row->device_check ==2){
                $status = '<span class="label label-warning label-inline mr-2">Service  </span>';
            }else{
                $status = '<span class="label label-primary label-inline mr-2"> Customer </span>';
            }
            
          
                   
            $array[$j][]=$row->id;
            $array[$j][]=$row->device_name;
            $array[$j][]=$row->company_name;
            $array[$j][]=$row->type_name;
            $array[$j][]=$row->device_id;
            $array[$j][]=$row->serial_number;        
            $array[$j][]=$row->model_name;
            $array[$j][]=$row->district_name;
            $array[$j][]=$row->loc_name;
            $array[$j][]=$status;
            $j++;
        endforeach;

        $json_data['data']=$array;
        echo json_encode($json_data);  // send data as json format

         
    }



     public function customer()
    {
        return view('admin.reports.customer-report');
    }
    

    public function select_customer()
    {
        $json_data=array();
        $j=0;

        
        $data=array();
        if($_POST['date']!=''){
            $date=array();
            $date=explode('-',$_POST['date']);
            $start_date=date('Y-m-d', strtotime($date[0]));
            $end_date=date('Y-m-d', strtotime($date[1]));
           
        }
        
        $status = $_POST['status'];

        //    $res = DB::table('customers')
        // ->join('areas', 'areas.id', '=', 'customers.area')
        // ->select('customers.*','areas.area_name')
        // ->where('customer_status', 1)
      $res = DB::table('customers')       
         ->select('customers.*')
        ->where('customer_status', 1)
        ->where(DB::raw("(STR_TO_DATE(created_at,'%Y-%m-%d'))"), "<=", $end_date)
        ->where(DB::raw("(STR_TO_DATE(created_at,'%Y-%m-%d'))"), ">=", $start_date);
        if ($status!='all'){
       // $res->where('status', '=', $status);
        $res->where('customer_activation_status', '=', $status);
        }
        $result = $res->get();
        
           
        
        //$result_array=$result->result();

        $json_data['draw']=5;
        $json_data['recordsTotal']=$result->count();
        $json_data['recordsFiltered']=$result->count();
        $array=array();

        foreach($result as $row):
           
          
                         
             if($row->customer_activation_status ==1){
                $status = '<span class="label label-success label-inline mr-2">Active </span>';
               
            }else{
               
                $status = '<span class="label label-danger label-inline mr-2">Deactive  </span>'; 
            }

            if($row->customer_type == 1)
            {

                 $customer_type = '<span class="label label-success label-inline mr-2">Regular  </span>';
            }
            else{

                $customer_type = '<span class="label label-primary label-inline mr-2">Rent  </span>';
            }
            
                            
            $array[$j][]=$row->id;
            $array[$j][]=$row->name;
           
           
            $array[$j][]= $customer_type;
            $array[$j][]=$row->mobile_number;
            $array[$j][]=$row->kseb_post_no;
            // $array[$j][]=$row->area;
            $array[$j][]=$row->installation_address;
            
            $array[$j][]=$row->created_at;
            $array[$j][]=$status;
            $j++;
        endforeach;

        $json_data['data']=$array;
        echo json_encode($json_data);   // send data as json format

         
    }



     public function complaint()
    {   


   //        $page_data = [];

   //       //may be 

   // $complaint =Complaint::where('complaint_status', 1)->get();

  
   //   foreach ($complaint as $data) {
   //       $data['complaint'] = Complainttype::select('complainttype')->whereIn('id',$data->complaint)->get();
   //       //dd($data['complaint']);
   //       $value[] = $data;
        
   //   }

   //   // echo json_encode($value);
   //   if(isset($value)){

   //    foreach($value as $data){
   //      foreach($data['complaint'] as $row){
   //          $complaint[] = $row['complainttype']; 
   //      }
   //      // echo json_encode($complaint);
   //      // echo '----------<br><br>';
   //      // $data['complaint'] = implode(',', $complaint);
   //      // echo json_encode($data);
   //      // echo '<br><hr/><br>';
   //    }

   //   }

     

          

         



         return view('admin.reports.complaint-report');
    }
    

    public function select_complaint()
    {
        $json_data=array();
        $j=0;

        
        $data=array();
        if($_POST['date']!=''){
            $date=array();
            $date=explode('-',$_POST['date']);
            $start_date=date('Y-m-d', strtotime($date[0]));
            $end_date=date('Y-m-d', strtotime($date[1]));
           
        }
        
        $status = $_POST['status'];

      
      $res = DB::table('complaints')       
         ->select('complaints.*')
        ->where('complaint_status', 1)
        ->where(DB::raw("(STR_TO_DATE(created_at,'%Y-%m-%d'))"), "<=", $end_date)
        ->where(DB::raw("(STR_TO_DATE(created_at,'%Y-%m-%d'))"), ">=", $start_date);
        if ($status!='all'){
       // $res->where('status', '=', $status);
        $res->where('status', '=', $status);
        }
        $result = $res->get();
        
           
        
        //$result_array=$result->result();

        $json_data['draw']=5;
        $json_data['recordsTotal']=$result->count();
        $json_data['recordsFiltered']=$result->count();
        $array=array();











        foreach($result as $row){



            // $complaint = Complainttype::whereIn('id',json_decode($row->complaint))->pluck('complainttype');

             if($row->status ==1){
                $status = '<span class="label label-success label-inline mr-2">Completed </span>';

               
            }else{
               
                $status = '<span class="label label-danger label-inline mr-2">Pending </span>';
           
            }



             if($row->active_deactive == 1 ){

            $complaint = '<span class="label label-success label-inline mr-2">Activation </span>';
             }
                           
                                                   
            elseif($row->active_deactive == 2 ){

             $complaint = '<span class="label label-danger label-inline mr-2">Deactivation </span>';   
            }
            else{
               $complaint = Complainttype::whereIn('id',json_decode($row->complaint))->pluck('complainttype');
            }

                             
                                                     
                              
                            
                           
                         
         





               
          
                            
            $array[$j][]=$row->id;
            $array[$j][]=$row->complaint_id;
           
           
            $array[$j][]=$row->customer_name;
             // $array[$j][]=$abc;
            $array[$j][]=$complaint;
            $array[$j][]=$row->other_complaint;
            // $array[$j][]=$row->area;
            $array[$j][]=$row->remarks;
           
            
            $array[$j][]=$row->created_at;
            $array[$j][]=$status;
            $j++;
        }
    // }
// }
// }


        $json_data['data']=$array;
        echo json_encode($json_data);   // send data as json format

         
    }



    
}
