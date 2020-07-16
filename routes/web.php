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

// Route::get('/compaapi', function () {
//     return view('welcome');
// });



Route::resource('/car_show', 'car_showController');
Route::resource('/insp-details', 'DetailsController');

Auth::routes();

Route::group(['middleware' => ['auth']], function() {
    Route::resource('/', 'ReportController');
    Route::resource('/report', 'ReportController');
    Route::resource('/service', 'ServiceController')->middleware('auth');
    Route::resource('/edit', 'EditController');
    Route::resource('/appointment', 'AppointmentController');
    Route::resource('/add-inspection-appointment', 'AddInspectionCustoController');
    Route::resource('/technician', 'TechnicianController');
    Route::resource('/pending', 'PendingApproveController');
    Route::resource('/approved-appoint', 'ApprovedController');
    Route::resource('/not-approved-appoint', 'NotapprovedController');
    Route::resource('/addreport', 'AddInspectionCarController');
    Route::get('/upload-img', function () {
        return view('upload-img');
    });
    Route::resource('/upimages', 'BrandController');

    // search
    Route::get('/search','AppointmentController@search');
    Route::get('/search_rep','ReportController@search');


    Route::resource('/users', 'AddInspectionCarController');

    // add data provin-district-subdistrict
    Route::get('get-district-list','AddInspectionCustoController@getdistrictList');
    Route::get('get-subdis-list','AddInspectionCustoController@getCityList');
    // add data provin-model-submodel
    Route::get('get-model-list','AddInspectionCustoController@getmodelList');
    Route::get('get-submodel-list','AddInspectionCustoController@getsubmodelList');


    // edit data provin-district-subdistrict
    Route::get('get-districte-list','AppointmentController@getdistrictList');
    Route::get('get-subdise-list','AppointmentController@getCityList');


    // upload images arry
    Route::get('images-upload', 'AddInspectionCarController@imagesUpload');
    Route::post('images-upload', 'AddInspectionCarController@imagesUploadPost')->name('images.upload');

    // upload images inspection appointment
    Route::get('/ajax_upload', 'AppointmentController@imageUpload');
    Route::post('/add-inspection-appointment/action', 'AppointmentController@action')->name('ajaxupload.action');
    Route::post('/add-inspection-appointment/action1', 'AppointmentController@action1')->name('ajaxuploadnum.action1');


    // upload images full
    Route::get('/upimages', 'BrandController@index');
    Route::post('/upimages/action2', 'BrandController@action2')->name('ajaxupload.action2');
    Route::post('/upimages/action3', 'BrandController@action3')->name('ajaxupload.action3');
    Route::post('/upimages/action4', 'BrandController@action4')->name('ajaxupload.action4');
    Route::post('/upimages/action5', 'BrandController@action5')->name('ajaxupload.action5');
    Route::post('/upimages/action6', 'BrandController@action6')->name('ajaxupload.action6');
    Route::post('/upimages/action7', 'BrandController@action7')->name('ajaxupload.action7');

    Route::post('/upimages/actionA', 'BrandController@actionA')->name('ajaxupload.actionA');
    Route::post('/upimages/actionB', 'BrandController@actionB')->name('ajaxupload.actionB');
    Route::post('/upimages/actionC', 'BrandController@actionC')->name('ajaxupload.actionC');
    Route::post('/upimages/actionD', 'BrandController@actionD')->name('ajaxupload.actionD');


});
