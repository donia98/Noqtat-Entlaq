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

// Route::get('/companyinfo', function () {
//     return view('welcome');
// });

Route::group(['prefix' => 'admin'], function()
{
    Route::resource('/test','TestController');
    Route::resource('/companyinfo','CompanyInfoController');
    Route::resource('/companyopt','CompanyOptController');
    Route::resource('/addopt','CompanyAddOptController');
    Route::resource('/cositting','CompanySittingController');
    Route::resource('/companies','CompaniesController');
    Route::resource('/trainees','TraineesController');
    Route::resource('/trainingreq','TrainingRequestsController');
    Route::resource('/trainingopts','TrainingOptsController');
});

Route::group(['prefix' => 'website'], function()
{
    Route::resource('/login','LoginController');
});