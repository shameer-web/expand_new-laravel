<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/admin', 'AdminController@index')->name('admin')->middleware('admin');


// Route::group(['middleware' =>['auth','admin']],function(){

Route::group(array('middleware' => 'auth','middleware' => 'is_admin','prefix'=>'admin','namespace'=>'Admin'), function()
{  

    Route::get('/', 'AdminController@index')->name('admin.index');
    // Route::get('/enquiery/create', 'EnquiryController@create');
    // Route::get('/enquiery/index', 'EnquiryController@index')->name('index');
    
    Route::resource('user','UserController');
    // Route::resource('enquiery','EnquieryController');
    
    Route::resource('package','PackageController');
    Route::resource('channel','channelController');
    Route::resource('device','DeviceController');
    // Route::resource('customer','CustomerController');

//enquiry 
    Route::get('/enquiry','EnquiryController@index')->name('enquiry.index');
    Route::get('/enquiry/create','EnquiryController@create')->name('enquiry.create');
    Route::post('/enquiry/create','EnquiryController@store')->name('enquiry.store');
    Route::get('/enquiry/{id}/edit','EnquiryController@edit')->name('enquiry.edit');
    Route::put('/enquiry/{id}/update','EnquiryController@update')->name('enquiry.update');
//end enquiry 

//customer route start here
    Route::get('/customer', 'CustomerController@index')->name('customer.index');
    Route::get('/customer-enquiry/{enq_id}', 'CustomerController@enquiry')->name('customer.enquiry');  /// get enquiry data 
    Route::get('/customer/create', 'CustomerController@create')->name('customer.create');
    Route::post('/customer/store','CustomerController@store')->name('customer.store');

    Route::get('/customer/{id}/edit','CustomerController@edit')->name('customer.edit');
    Route::put('/customer/{id}/update','CustomerController@update')->name('customer.update');
     Route::get('/customer/profile/{id}', 'CustomerController@profile')->name('customer.profile');
    Route::post('/customer/device','CustomerController@device')->name('customer.device');
    Route::put('/customer/{id}/device-status','CustomerController@device_status')->name('customer.device_status');

    Route::post('/customer/package','CustomerController@package')->name('customer.package');
    Route::post('/customer/update_package/{id}','CustomerController@update_package')->name('customer.update_package');

   



     Route::post('/customer/chanel','CustomerController@chanel')->name('customer.chanel');
      Route::post('/customer/update_channel/{id}','CustomerController@update_channel')->name('customer.update_channel');

    

    Route::post('/customer/{id}/notification','CustomerController@notification')->name('customer.notification');
    Route::get('/customer/notifications', 'CustomerController@notifications')->name('customer.notifications');

    Route::get('/customer/{id}/approve','CustomerController@approve')->name('customer.approve');

     Route::put('/customer/{id}/notification_update','CustomerController@notification_update')->name('customer.notification_update');
//customer route end here

// data mange route start here 
    // Route::get('/data-manage/district','DistrictsController@district_show')->name('data-manage.district');
    Route::resource('type','TypeController');
    Route::resource('model','ModelController');
    Route::resource('company','CompanyController');
    Route::resource('loc','LocController');
    Route::resource('district','DistrictController');
    Route::resource('area','AreaController');
    Route::resource('subcode','SubcodeController');
    Route::resource('complainttype','ComplainttypeController');

    Route::resource('gst','GstController');
    Route::resource('technician_status','TechnicianstatusController');

    Route::resource('invoice_image','InvoiceImageController');



// data manage route end here



//complaints 
 Route::get('/complaint','ComplaintController@index')->name('complaint.index');
 Route::get('/complainty/create','ComplaintController@create')->name('complaint.create');
 Route::post('/complaint/create','ComplaintController@store')->name('complaint.store');

 Route::post('/complaint/activation-deactivation-create','ComplaintController@activation_store')->name('complaint.activation_store');



 // Route::post('/complaint/createed','ComplaintController@store_data')->name('complaint.store_data');


 
  Route::post('/complaint/complaint_reg','ComplaintController@complaint_reg')->name('complaint.complaint_reg');
 Route::get('/complaint/{id}/edit','ComplaintController@edit')->name('complaint.edit');
 Route::put('/complaint/{id}/update','ComplaintController@update')->name('complaint.update');
//end complaints



 //start invoice

  Route::get('/invoice','InvoiceController@index')->name('invoice.index');
 Route::get('/invoice/create','InvoiceController@create')->name('invoice.create');
  Route::post('/invoice/invoice_reg','InvoiceController@invoice_reg')->name('invoice.invoice_reg');

   Route::post('/invoice/update_package/{id}','InvoiceController@update_package')->name('invoice.update_package');

   //end invoice


   
   //start report 
   
Route::get('/reports/enquiry_report', 'ReportsController@enquiry_report')->name('reports.enquiry_report');
Route::post('/reports/select', 'ReportsController@select')->name('reports.select');

Route::get('/reports/device', 'ReportsController@device')->name('reports.device');
Route::post('/reports/device', 'ReportsController@select_device')->name('reports.select_device');

Route::get('/reports/customer', 'ReportsController@customer')->name('reports.customer');
Route::post('/reports/customer', 'ReportsController@select_customer')->name('reports.select_customer');

Route::get('/reports/complaint', 'ReportsController@complaint')->name('reports.complaint');
Route::post('/reports/complaint', 'ReportsController@select_complaint')->name('reports.select_complaint');

   
   //end report
   
   

});






 


Route::group(array('middleware' => 'auth','middleware' => 'is_office','prefix'=>'office-staff','namespace'=>'OfficeStaff'), function()
{  


   

    Route::get('/', 'StaffController@index')->name('officestaff.index');

     Route::resource('packages','PackageController');
     Route::resource('devices','DeviceController');



    //enquiry 
    Route::get('/enquiry','EnquiryController@index')->name('enquiries.index');
    Route::get('/enquiry/create','EnquiryController@create')->name('enquiries.create');
    Route::post('/enquiry/create','EnquiryController@store')->name('enquiries.store');
    Route::get('/enquiry/{id}/edit','EnquiryController@edit')->name('enquiries.edit');
    Route::put('/enquiry/{id}/update','EnquiryController@update')->name('enquiries.update');
   //end enquiry 



    //customer route start here
    Route::get('/customer', 'CustomerController@index')->name('cus.index');
    Route::get('/customer-enquiry/{enq_id}', 'CustomerController@enquiry')->name('cus.enquiry');  /// get enquiry data 
    Route::get('/customer/create', 'CustomerController@create')->name('cus.create');
    Route::post('/customer/store','CustomerController@store')->name('cus.store');

    Route::get('/customer/{id}/edit','CustomerController@edit')->name('cus.edit');
    Route::put('/customer/{id}/update','CustomerController@update')->name('cus.update');


    Route::get('/customer/profile/{id}', 'CustomerController@profile')->name('cus.profile');
    Route::post('/customer/device','CustomerController@device')->name('cus.device');
    Route::put('/customer/{id}/device-status','CustomerController@device_status')->name('cus.device_status');



    Route::post('/customer/package','CustomerController@package')->name('cus.package');
    Route::get('/customer/update_package/{id}','CustomerController@update_package')->name('cus.update_package');

//customer route end here



    //complaints 
 Route::get('/complaint','ComplaintController@index')->name('complaints.index');
 Route::get('/complainty/create','ComplaintController@create')->name('complaints.create');
 Route::post('/complaint/create','ComplaintController@store')->name('complaints.store');

  Route::post('/complaint/complaint_reg','ComplaintController@complaint_reg')->name('complaints.complaint_reg');

 Route::get('/complaint/{id}/edit','ComplaintController@edit')->name('complaints.edit');
 Route::put('/complaint/{id}/update','ComplaintController@update')->name('complaints.update');
//end complaints



    

    

    

     
     
});



Route::group(array('middleware' => 'auth','middleware' => 'is_technician','prefix'=>'technician-staff','namespace'=>'TechnicianStaff'), function()
{  


   

    Route::get('/', 'StaffController@index')->name('technicianstaff.index');




    //customer route start here
    Route::get('/customer', 'CustomerController@index')->name('customers.index');

    Route::get('/customer/profile/{id}', 'CustomerController@profile')->name('customers.profile');

    Route::post('/customer/device','CustomerController@device')->name('customers.device');
    Route::post('/customer/package','CustomerController@package')->name('customers.package');


    //customer route end here



 //enquiry 
    Route::get('/enquiry','EnquiryController@index')->name('enq.index');
    Route::get('/enquiry/create','EnquiryController@create')->name('enq.create');
    Route::post('/enquiry/create','EnquiryController@store')->name('enq.store');
    Route::get('/enquiry/{id}/edit','EnquiryController@edit')->name('enq.edit');
    Route::put('/enquiry/{id}/update','EnquiryController@update')->name('enq.update');
//end enquiry    

    



    //complaints 
 Route::get('/complaint','ComplaintController@index')->name('comp.index');
 Route::get('/complainty/create','ComplaintController@create')->name('comp.create');
 Route::post('/complaint/create','ComplaintController@store')->name('comp.store');
 Route::get('/complaint/{id}/edit','ComplaintController@edit')->name('comp.edit');
 Route::put('/complaint/{id}/update','ComplaintController@update')->name('comp.update');
  Route::get('/complaint/{id}/check','ComplaintController@check')->name('comp.check');
//end complaints

});   



Route::group(array('middleware' => 'auth','middleware' => 'is_collection','prefix'=>'collection-agent','namespace'=>'CollectionAgent'), function()
{  


   

    Route::get('/', 'StaffController@index')->name('collectionagent.index');



    //customer route start here
    Route::get('/customer', 'CustomerController@index')->name('cust.index');
    Route::get('/customer-enquiry/{enq_id}', 'CustomerController@enquiry')->name('cust.enquiry');  /// get enquiry data 
    Route::get('/customer/create', 'CustomerController@create')->name('cust.create');
    Route::post('/customer/store','CustomerController@store')->name('cust.store');

    Route::get('/customer/{id}/edit','CustomerController@edit')->name('cust.edit');
    Route::put('/customer/{id}/update','CustomerController@update')->name('cust.update');


    Route::get('/customer/profile/{id}', 'CustomerController@profile')->name('cust.profile');
    Route::post('/customer/device','CustomerController@device')->name('cust.device');
    Route::post('/customer/package','CustomerController@package')->name('cust.package');



     Route::post('/customer/{id}/notification','CustomerController@notification')->name('cust.notification');
    
//customer route end here

  //start invoice
    Route::get('/invoice','InvoiceController@index')->name('invo.index');
 Route::get('/invoice/create','InvoiceController@create')->name('invo.create');
  Route::post('/invoice/invoice_reg','InvoiceController@invoice_reg')->name('invo.invoice_reg');

   Route::post('/invoice/update_package/{id}','InvoiceController@update_package')->name('invo.update_package');

   //end invoice



});  






















#### images routes


Route::get('assets/image/invoice_image/{filename}', function ($filename)
{
    $path = storage_path('app/invoice_image/' . $filename);
    if (!File::exists($path)) {
        abort(404);
    }
    $file = File::get($path);
    $type = File::mimeType($path);
    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);
    return $response;
});




Route::get('assets/images/customer/proof/{filename}', function ($filename)
{
    $path = storage_path('app/customer/proof/' . $filename);
    if (!File::exists($path)) {
        abort(404);
    }
    $file = File::get($path);
    $type = File::mimeType($path);
    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);
    return $response;
});

