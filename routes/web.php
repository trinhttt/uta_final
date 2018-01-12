<?php

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
Route::get('/test', function () {
    return view('welcome');
});
//others
Route::get('/my-form','HomeController@myform');
Route::post('/my-form','HomeController@myformPost');
//ajax: insert new employee
Route::post('/add', 'EmployeeController@add');

Route::get('/', function () {
    return view('home');
});
Route::get('/employee_list', function () {
    return view('employee_list');
});

Route::get('/list', function () {
    return view('show_list');
});
Route::get('/signin', function () {
    return view('login');
});

//
Route::get('/register', function () {
    return view('register.register');
});
Route::post('/register_action','TAIKHOANController@store');
//
Route::post('/login_check','TAIKHOANController@login');
Route::get('/logout','TAIKHOANController@logout');
//Route::get('/logout', function () {
//    return view('/login');
//});

Route::get('/product_list','ProductController@show');

//Employee
Route::get('/employee_list','NHANVIENController@show');
Route::post('/insert_employee','NHANVIENController@Insert');
Route::get('/insert_employee', function () {
    return view('insert_employee');
});
Route::post('/delete_employee','NHANVIENController@Delete');
Route::get('edit_employee/{id}', 'NHANVIENController@getData');
Route::post('edit_employee/{id}', 'NHANVIENController@Action');
Route::post('/Delete/{id}', 'NHANVIENController@Delete');

//bill
Route::get('/bill_list','HOADONController@show');
Route::post('/insert_bill','HOADONController@Insert');
Route::get('/insert_bill', function () {
    return view('insert_bill');
});
Route::post('/delete_bill','HOADONController@Delete');
Route::get('edit_bill/{SoHoaDon}', 'HOADONController@getData');
Route::post('edit_bill/{SoHoaDon}', 'HOADONController@Action');
Route::post('/Delete_bill/{SoHoaDon}', 'HOADONController@Delete');


//test chart
Route::get('/chart', 'ChartsController@index');


//product
Route::get('/product_list','SANPHAMDIENTHOAIController@show');
Route::post('/insert_product','SANPHAMDIENTHOAIController@Insert');
Route::get('/insert_product', function () {
    return view('insert_product');
});
Route::post('/delete_product','SANPHAMDIENTHOAIController@Delete');
Route::get('edit_product/{MaSP}', 'SANPHAMDIENTHOAIController@getData');
Route::post('edit_product/{MaSP}', 'SANPHAMDIENTHOAIController@Action');
Route::post('/Delete_product/{MaSP}', 'SANPHAMDIENTHOAIController@Delete');


//customer
Route::get('/customer_list','KHACHHANGController@show');
Route::post('/insert_customer','KHACHHANGController@Insert');
Route::get('/insert_customer', function () {
    return view('insert_customer');
});
Route::post('/delete_customer','KHACHHANGController@Delete');
Route::get('edit_customer/{MaKhachHang}', 'KHACHHANGController@getData');
Route::post('edit_customer/{MaKhachHang}', 'KHACHHANGController@Action');
Route::post('/Delete_customer/{MaKhachHang}', 'KHACHHANGController@Delete');


Route::get('/doitac','DOITACController@show');





