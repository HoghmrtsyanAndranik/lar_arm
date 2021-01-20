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

// 1-iny hascen. 2-rdy methody
Route::get('/', "UserController@home");

Route::get('/signup', "UserController@signup");

Route::get('/HelloUser', "UserController@f2");

Route::post('/saveuser', "UserController@addUser");

Route::get('/login', "UserController@login");

Route::post('/loginuser', "UserController@loginuser");

Route::get('/updatePass', "UserController@updatePass");

Route::get('/updatePassUser', "UserController@updatePassUser");

Route::get('/product', "ProductController@product");

Route::get('/addproduct', "ProductController@addProduct");

Route::get('/myproduct', "ProductController@myProduct");

Route::get('/user/activate/{id}/{hash}', "UserController@activateUser");

//Forgot password
Route::get('/forgotpassword', "UserController@forgotPassword");
Route::post('/forgotpassword-mail', "UserController@forgotPasswordCheckMail");
Route::get('/forgotpassword/{id}/{hash}', "UserController@forgotPasswordUpdatePass");
Route::post('/forgotpassword/set-new-pass', "UserController@forgotPasswordSetPass");



// Route::middleware(['IsLogin'])->group(function () {
//     Route::get('/cart', "cartController@viewCart");
//     Route::get('/myproduct/item/{id}', "ProductController@myitem");
//     Route::get('/product/item/{id}', "ProductController@item"); //dzevovir pakagtsov asum enq vor geti parametr a
//     Route::get('/myproduct/edit/item/{id}', "ProductController@editmyitem");
//     Route::get('/profile', "UserController@profile")->middleware('IsLogin');
//     Route::get('/logout', "UserController@logout");
//     Route::get('/myproduct/delete/itemphoto/{id}', "ProductController@deleteItemPhoto");
//     Route::post('/addNewProduct', "ProductController@addNewProduct");
//     Route::post('/editmyitemdata', "ProductController@editmyitemdata");
//     Route::post('/addToCart', "cartController@addToCart");
//     Route::get('/deleteCartProduct/{id}', "cartController@deleteCartProduct");
//     Route::post('/addToWishlist', "WishlistController@addToWishlist");

//     //Order related
//     Route::get('/order', "OrderController@order");
//     Route::get('/orderHistory', "OrderController@orderHistory");
//     Route::get('/orderDetails/{id}', "OrderController@viewOrderDetails");

//     //Writing feedback and evaluation by stars
//     Route::post('/writeFeedback',"OrderController@writeFeedback");
//     Route::post('/evStars','OrderController@evStars');

//     //Admin
//     Route::get('/admin', 'AdminController@adminHome');
//     Route::get('/admin/{any}', 'AdminController@adminHome')->where("any",".*");
// });


Route::get('stripe', 'OrderController@stripe');
Route::post('stripe', 'OrderController@stripePost')->name('stripe.post');
