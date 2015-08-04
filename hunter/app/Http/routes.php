<?php

use Illuminate\Http\Request;
use App\User;
use App\Company;
use App\Creative;
use App\Country;
use App\City;
use App\Language;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::controllers([
//	'auth' => 'Auth\AuthController',
//	'password' => 'Auth\PasswordController',
//]);

/*------- FRONT-END ROUTING ---------*/

// routing home page
Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);

// Authentication routing
Route::get('users/register', function(){
    return view('users.register');
});
Route::post('/users/login', ['as' => '/users/login', 'uses' => 'UserController@postLogin']);
Route::get('users/logout', ['uses' => 'UserController@getLogout']);
Route::get('users/activate/{code}', ['uses' => 'UserController@activate']);
//Route::get('users/verify-email', function($email){
//    return view('users.verify-email', compact('email'));
//});


// Resource routes for User, Company, Creative, Job
Route::resource('coupons', 'CouponController');
Route::resource('users', 'UserController');
Route::resource('companies', 'CompanyController');
Route::resource('creatives', 'CreativeController');
Route::resource('companies.jobs', 'JobController');
Route::get('companies/{company}/jobs/{job}/publish', ['uses' => 'JobController@publish']);

// Company routing
Route::get('companies/{id}/account-setting', function($id){
    $company = Company::find($id);
    //$user = $company->getUser();
    return view('companies.account-setting', compact('company'));
});
Route::get('companies/{id}/dashboard', function($id){
    $company = Company::find($id);
    return view('companies.dashboard', compact('company'));
});


// Creative routing
Route::get('creatives/{id}/dashboard', function($id){
    $creative = Creative::find($id);
    return view('creatives.dashboard', compact('creative'));
});
Route::get('creatives/{id}/account-setting', function($id){
    $creative = Creative::find($id);
    //$user = $creative->getUser();
    return view('creatives.account-setting', compact('creative'));
});



/* Routing footer pages */
Route::get('pricing-plan',function(){
    return view('pricing-plan');
});
Route::get('about-us', function(){
    return view('about-us');
});
Route::get('contact-us', function(){
    return view('contact-us');
});
Route::get('faq', function(){
    return view('faq');
});
Route::get('terms-condition', function(){
    return view('terms-condition');
});
Route::get('privacy-policy', function(){
    return view('privacy-policy');
});


/* Back-end routing */
//Route::resource('admin/users', 'AdminUserController');
