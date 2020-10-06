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
    Route::get('/customer/profile/{id}', 'CustomerController@profile')->name('customer.profile');
    Route::post('/customer/device','CustomerController@device')->name('customer.device');
    Route::post('/customer/package','CustomerController@package')->name('customer.package');
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



    Route::resource('gst','GstController');


// data manage route end here



//complaints 
 Route::get('/complaint','ComplaintController@index')->name('complaint.index');
 Route::get('/complainty/create','ComplaintController@create')->name('complaint.create');
 Route::post('/complaint/create','ComplaintController@store')->name('complaint.store');
 Route::get('/complaint/{id}/edit','ComplaintController@edit')->name('complaint.edit');
 Route::put('/complaint/{id}/update','ComplaintController@update')->name('complaint.update');
//end complaints
});

 


Route::group(array('middleware' => 'auth','middleware' => 'admin','prefix'=>'staff','namespace'=>'Staff'), function()
{  


   

    Route::get('/', 'StaffController@index');

    

    

    

     
     
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
