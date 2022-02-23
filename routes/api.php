<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('products', 'Api\ProductController@index')->name('product.index');

Route::get('categories', 'Api\CategoryController@index')->name('category.index');

Route::post('feedbacks', 'Api\FeedbackController@store')->name('feedback.store');

Route::post('invoices', 'Api\InvoiceController@store')->name('invoice.store');
