<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

//Routes For Frontend pages-User
Route::get('/','PageController@index');
Route::get('/index','PageController@index');
Route::get('/ProductCategoriesPage','PageController@ProductCategoriesPage');
Route::get('/ProductDetailsPage','PageController@ProductDetailsPage');
Route::get('/CheckoutPage','PageController@CheckoutPage');
Route::get('/OrderConfirmationPage','PageController@OrderConfirmationPage');


//Routes For Backend pages-Admin
Route::get('/Admin','PageController@Dashboard');
Route::get('/Dashboard','PageController@Dashboard');
Route::get('/OrderListingPage','PageController@OrderListingPage');
Route::get('/CategoryPage','PageController@CategoryPage');
Route::get('/CategoryPageAddCategory','PageController@CategoryPageAddCategory');
Route::get('/CategoryPageEditCategory','PageController@CategoryPageEditCategory');
Route::get('/CategoryPageListattributes','PageController@CategoryPageListattributes');
Route::get('/CategoryPageProductListing','PageController@CategoryPageProductListing');
Route::get('/BannersPage','PageController@BannersPage');
Route::get('/StaticPages','PageController@StaticPages');


//for Product Routes
Route::get('ProductsPageAddProduct','ProductController@create');
Route::post('store','ProductController@store');
Route::post('storeImg_pro','ProductController@storeImg_pro');
Route::get('ProductsPage','ProductController@index');
Route::get("delete/{id}","ProductController@destroy");
Route::get('edit/{id}','ProductController@edit');
Route::patch('edit/update/{id}','ProductController@update');
Route::patch('edit/update_next/{id}','ProductController@update_next');
Route::post('edit/update_next/updateImg_pro/{id}','ProductController@updateImg_pro');

//Category Product List
Route::get('/CategoryPageProductListing','ProductController@indexList');
Route::get("deletelist/{id}","ProductController@destroyList");
Route::get('editlist/{id}','ProductController@edit');
Route::patch('editlist/update/{id}','ProductController@updateList');

//for category Routes
Route::get('CategoryPageAddCategory','CategoryController@createcat');
Route::post('storecat','CategoryController@storecat');
Route::get('CategoryPage','CategoryController@indexcat');
Route::get("deletecat/{id}","CategoryController@destroycat");
Route::get('editcat/{id}','CategoryController@editcat');
Route::patch('editcat/updatecat/{id}','CategoryController@updatecat');

//For Attributes


Route::post('CategoryPageListattributes','AttributeController@indexattr');
Route::post('AddAttributes','AttributeController@createattr');
Route::post('storeattr','AttributeController@storeattr');
Route::get("deleteattr/{id}","AttributeController@destroyattr");
Route::post('editattr/{id}','AttributeController@editattr');
Route::patch('editattr/updateattr/{id}','AttributeController@updateattr');


Route::get('ProductAttributeValue','ProductController@getAttributes');

//end Attributes

Route::group(['middlewareGroups' => ['web']], function () 
{
  //Authentication Routes
  Route::get('/SignInPage',['as'=>'login','uses'=>'Auth\AuthController@getLogin']);
  Route::post('/SignInPage','Auth\AuthController@postLogin');//Checking from database
  Route::get('/logout',['as'=>'logout','uses'=>'Auth\AuthController@getLogout']);  

   //Registration Route
   Route::get('/SignUpPage',['as'=>'register','uses'=>'Auth\AuthController@getRegister']);
   Route::post('/SignUpPage','Auth\AuthController@postRegister');//Saving to database

   //Password Reset Routes
   Route::get('reset/{token?}', 'Auth\PasswordController@showResetForm');
   Route::post('password/email', 'Auth\PasswordController@sendResetLinkEmail');
   Route::post('reset', 'Auth\PasswordController@reset');

   //After Login Profile Editing Routes 
   Route::get('/UserOrderHistoryPage','PageController@UserOrderHistoryPage');
   Route::get('/UserMyProfilePage','PageController@UserMyProfilePage');

   //New Routes For updating info of user
   Route::get('UserMyProfilePageEdit', 'UserController@create');
   Route::get('UserMyProfilePageEdit/{id}','UserController@update');//passing the current loggedin userid
});