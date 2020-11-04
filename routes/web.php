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

Route::group(array('middleware' => 'auth','middleware' => 'admin','prefix'=>'admin','namespace'=>'Admin'), function()
{  

    Route::get('/', 'AdminController@index');
    // Route::get('/enquiery/create', 'EnquiryController@create');
    // Route::get('/enquiery/index', 'EnquiryController@index')->name('index');
    
    Route::resource('user','UserController');
    // Route::resource('enquiery','EnquieryController');
    
    Route::resource('package','PackageController');
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
    Route::get('/customer/update_package/{id}','CustomerController@update_package')->name('customer.update_package');

    

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


// data manage route end here



//complaints 
 Route::get('/complaint','ComplaintController@index')->name('complaint.index');
 Route::get('/complainty/create','ComplaintController@create')->name('complaint.create');
 Route::post('/complaint/create','ComplaintController@store')->name('complaint.store');
  // Route::post('/complaint/creat','ComplaintController@creations')->name('complaint.creations');
  Route::post('/complaint/complaint_reg','ComplaintController@complaint_reg')->name('complaint.complaint_reg');
 Route::get('/complaint/{id}/edit','ComplaintController@edit')->name('complaint.edit');
 Route::put('/complaint/{id}/update','ComplaintController@update')->name('complaint.update');
//end complaints



 //start invoice

  Route::get('/invoice','InvoiceController@index')->name('invoice.index');
 Route::get('/invoice/create','InvoiceController@create')->name('invoice.create');

});

 


Route::group(array('middleware' => 'auth','middleware' => 'admin','prefix'=>'office-staff','namespace'=>'OfficeStaff'), function()
{  


   

    Route::get('/', 'StaffController@index');

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
    Route::post('/customer/package','CustomerController@package')->name('cus.package');

//customer route end here



    //complaints 
 Route::get('/complaint','ComplaintController@index')->name('complaints.index');
 Route::get('/complainty/create','ComplaintController@create')->name('complaints.create');
 Route::post('/complaint/create','ComplaintController@store')->name('complaints.store');
 Route::get('/complaint/{id}/edit','ComplaintController@edit')->name('complaints.edit');
 Route::put('/complaint/{id}/update','ComplaintController@update')->name('complaints.update');
//end complaints



    

    

    

     
     
});



Route::group(array('middleware' => 'auth','middleware' => 'admin','prefix'=>'technician-staff','namespace'=>'TechnicianStaff'), function()
{  


   

    Route::get('/', 'StaffController@index');




    //customer route start here
    Route::get('/customer', 'CustomerController@index')->name('customers.index');

     Route::get('/customer/profile/{id}', 'CustomerController@profile')->name('customers.profile');

    Route::post('/customer/device','CustomerController@device')->name('customers.device');
    Route::post('/customer/package','CustomerController@package')->name('customers.package');


    //customer route end here



    //complaints 
 Route::get('/complaint','ComplaintController@index')->name('comp.index');
 Route::get('/complainty/create','ComplaintController@create')->name('comp.create');
 Route::post('/complaint/create','ComplaintController@store')->name('comp.store');
 Route::get('/complaint/{id}/edit','ComplaintController@edit')->name('comp.edit');
 Route::put('/complaint/{id}/update','ComplaintController@update')->name('comp.update');
  Route::get('/complaint/{id}/check','ComplaintController@check')->name('comp.check');
//end complaints

});   



Route::group(array('middleware' => 'auth','middleware' => 'admin','prefix'=>'collection-agent','namespace'=>'CollectionAgent'), function()
{  


   

    Route::get('/', 'StaffController@index');



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
//customer route end here

});    


















#### images routes




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

