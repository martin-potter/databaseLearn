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

use Illuminate\Support\Facades\Route;
// 首页
Route::get('/', function () {
    return view('hw1');
})->name('index');

// 作业一
Route::get('/hw1', function () {
    return view('hw1');
})->name('hw1');

// 作业二
Route::get('/hw2', 'HomeWorkController@hw2')->name('hw2');

Route::group(['prefix' => 'hw2'], function () {
    Route::resource('employee','EmployeeController',['except' => 'show']);
    Route::resource('supplier','SupplierController',['except' => 'show']);
    Route::resource('product','ProductController',['except' => 'show']);
    Route::resource('customer','CustomerController',['except' => 'show']);
    Route::resource('purchase','PurchaseController',['except' => 'show']);
});

// 作业三
Route::get('/hw3', 'HomeWorkController@hw3')->name('hw3');

Route::get('/test', function () {
    return view('test');
});
