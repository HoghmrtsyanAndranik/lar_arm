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
Route::get('/login', "UserController@login");
   

Route::get('/', "UserController@home");

Route::get('/signup', "UserController@signup");
// Route::get('/signup', function () {
//   return 'Hello World';
// });
Route::get('/HelloUser', "UserController@f2");

Route::post('/saveuser', "UserController@addUser");

Route::get('/login', "UserController@login");

Route::post('/loginuser', "UserController@loginuser");



Route::get('/products', "ProductController@products");



//Route::get('/user/activate/{id}/{hash}', "UserController@activateUser");

//Forgot password
Route::get('/forgotpassword', "UserController@forgotPassword");
Route::post('/forgotpassword-mail', "UserController@forgotPasswordCheckMail");
Route::get('/forgotpassword/{id}', "UserController@forgotPasswordUpdatePass");
Route::post('/forgotpassword/set-new-pass', "UserController@forgotPasswordSetPass");



 Route::middleware(['IsLogin'])->group(function () {
    Route::get('/addproduct', "ProductController@addProduct");
    Route::post('/addNewProduct', "ProductController@addNewProduct");
    Route::get('/profile', "UserController@profile");
    Route::get('/myproducts', "ProductController@myProducts");
    Route::get('/deleteProduct/{id}', "ProductController@deleteProduct");
       
    
    Route::get('/updatePass', "UserController@updatePass");
    Route::get('/updatePassUser', "UserController@updatePassUser");
    Route::get('/cart', "cartController@viewCart");
    Route::get('/myproduct/item/{id}', "ProductController@myitem");
    Route::get('/product/item/{id}', "ProductController@item"); //dzevovir pakagtsov asum enq vor geti parametr a
    Route::get('/myproduct/edit/item/{id}', "ProductController@editmyitem");
    
    Route::get('/logout', "UserController@logout");
    Route::get('/myproduct/delete/itemphoto/{id}', "ProductController@deleteItemPhoto");
    
    Route::post('/editmyitemdata', "ProductController@editmyitemdata");
    Route::post('/addToCart', "cartController@addToCart");
    Route::post('/update_cart', "cartController@updateCart");
    Route::get('/delete_cart', "cartController@deleteCart");
    Route::get('/deleteCartProduct/{id}', "cartController@deleteCartProduct");
    Route::post('/addToWishlist', "WishlistController@addToWishlist");
    Route::get('/showWishlist', "WishlistController@showWishlist");
    Route::get('/deleteWishListProduct/{id}', "WishlistController@deleteWishListProduct"); 
    Route::get('/deleteWishList', "WishlistController@deleteWishList"); 
                  
    //Order related
    Route::get('/order', "OrderController@order");
    Route::get('/orderHistory', "OrderController@orderHistory");
    Route::get('/orderDetails/{id}', "OrderController@viewOrderDetails");

    //Writing feedback and evaluation by stars
    Route::post('/writeFeedback',"OrderController@writeFeedback");
    Route::post('/evStars','OrderController@evStars');

    //Admin
    Route::get('/admin', 'AdminController@adminHome');
    Route::get('/admin/{any}', 'AdminController@adminHome')->where("any",".*");
});


//Route::get('stripe', 'OrderController@stripe');
//Route::post('stripePost', 'OrderController@stripePost');
