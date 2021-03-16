<?php

use Illuminate\Support\Facades\Route;

use Carbon\Carbon;
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

Route::get('/projects', function () {
    return view('admin.projects');
});
Route::get('/donor', function () {
    return view('donors.donor');
});
Route::get('/donate-form', function () {
    return view('donors.donate-form');
});
Route::get('/admin/project', function () {
    return view('projects.project-form');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// user route

Route::get('/','donorsControllers@index');
Route::get('/donate','donorsControllers@index');

Route::get('/paywithpaypal','paypalcontroller@payWithPaypal');
Route::post('paypal', array('as' => 'paypal','uses' => 'PaypalController@postPaymentWithpaypal',));
Route::get('paypal', array('as' => 'status','uses' => 'PaypalController@getPaymentStatus',));

Route::get('/donor','donorsControllers@donorPage');
Route::get('/admin/projects','projectController@index');
Route::get('/admin/project/{project}/edit','projectController@edit');
Route::get('/donate-form','projectController@projectDonorform');

// admin route 
Route::get('/admin/user','donorsControllers@adminUser');
Route::get('/admin','AdminController@index');
Route::get('/admin/add','projectController@adminproject');
Route::get('admin/{project}/delete','AdminController@destroy');

// skrill payment route 

Route::get('make-payment', 'SkrillPaymentController@makePayment');
Route::get('do-refund', 'SkrillPaymentController@doRefund');
Route::post('ipn', 'SkrillPaymentController@ipn');
Route::post('form', 'SkrillPaymentController@makePayment');

Route::get('payment-completed', function () {
    return view('payment-completed');
});
Route::get('payment-cancelled', function () {
    return view('payment-cancelled');
});


Route::resource('donors','donorsControllers');
Route::resource('project','projectController');
Route::resource('admin','AdminController');
Route::resource('comment','CommentController');
Route::resource('paypal','paypalcontroller');
Route::resource('coinpayment','coinPaymentController');
Route::resource('skrill','SkrillPaymentController');

// paypal payment  route

Route::get('handle-payment', 'PayPalPaymentController@handlePayment')->name('make.payment');
Route::get('cancel-payment', 'PayPalPaymentController@paymentCancel')->name('cancel.payment');
Route::get('payment-success', 'PayPalPaymentController@paymentSuccess')->name('success.payment');

Route::get('/form', function () {
    return view('form');
});
// Route::get('/paypal', function () {
//     return view('products.welcome');
// });

