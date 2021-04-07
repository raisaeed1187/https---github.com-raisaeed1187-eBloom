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

Route::get('/map', function () {
    return view('map');
});
Route::get('/success', function () {
    // dd(Session::get('shipping_fee'));
    return view('payment_success');
});
// Route::get('/viva', function () {
//     return view('viva');
// });
Route::get('/viva','IndexController@vivaWallet');

Route::get('/checkout/{slug}','IndexController@checkout');

// Route::get('/match_store', function () {
//     return view('search_store');
// });

Route::get('/match_store','IndexController@matchStore');

Route::get('/getDistance','IndexController@getDistance');

Route::post('/addToCart','IndexController@addToCart');
Route::post('/add-address','IndexController@addAddress');
// cart/remove-product
Route::get('/cart/remove-product/{name}','IndexController@removeFromCart');


Route::get('/auto', function () {
    return view('autoComplete');
});
Route::post('/get-cities','IndexController@getCities');
Route::get('/welcome','IndexController@efood');
Route::get('/store/{slug}','IndexController@store');


Route::match(['get','post'],'/','IndexController@efood');
Route::match(['get','post'],'/results','IndexController@results');


Route::get('/products/{slug}','ProductsController@products');
Route::get('/occasions/{slug}','IndexController@categories');
Route::get('/types/{slug}','IndexController@types');

Route::get('/get-product-price','ProductsController@getprice');
//Route for login-register      
Route::get('/login-register','UsersController@userLoginRegister');
//Route for login-User
Route::post('/user-login','UsersController@login');
//Route for add users registration
Route::post('/user-register','UsersController@register');
//Route for add users registration
Route::get('/user-logout','UsersController@logout');
// Route for add to cart
Route::match(['get','post'],'add-cart','ProductsController@addtoCart');
// Route for cart
//Route For Delete Cart Product
Route::get('/cart/delete-product/{id}','ProductsController@deleteCartProduct');
//Route For update Quantity
Route::get('/cart/update-quantity/{id}/{quantity}','ProductsController@updateCartQuantity');
//Apply Coupon Code
Route::post('/cart/apply-coupon','ProductsController@applyCoupon');
Route::match(['get','post'],'/admin','AdminController@login');
Route::match(['get','post'],'/florist','FloristController@login');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::match(['get','post'],'/cart','ProductsController@cart');
//Route for middleware after front login
Route::group(['middleware' => ['frontlogin']],function(){
//Route for users account
Route::match(['get','post'],'/account','UsersController@account');
Route::match(['get','post'],'/add-to-wish-list/{slug}','UsersController@addToWishList');
Route::match(['get','post'],'/delete-wish-list/{slug}','UsersController@deleteWishList');

Route::match(['get','post'],'/wish-list','UsersController@wishList');
Route::match(['get','post'],'/change-password','UsersController@changePassword');
Route::match(['get','post'],'/change-address','UsersController@changeAddress');
// Route::match(['get','post'],'/checkout','ProductsController@checkout');
Route::match(['get','post'],'/order_review','ProductsController@orderReview');
Route::match(['get','post'],'/place-order','ProductsController@placeOrder');
Route::match(['get','post'],'/thanks','ProductsController@thanks');
Route::match(['get','post'],'/orders','ProductsController@userOrders');
Route::match(['get','post'],'/order/{id}','ProductsController@userOrderDetails');

});

Route::group(['middleware' =>['AdminLogin']],function(){
Route::match(['get','post'],'/admin/dashboard','AdminController@dashboard');
Route::match(['get','post'],'/admin/admin-profile','AdminController@adminProfile');
//florist Route
Route::match(['get','post'],'/florist/dashboard','AdminController@dashboard');
Route::match(['get','post'],'/admin/add-florist','FloristController@addFlorist');
Route::match(['get','post'],'/admin/view-florists','FloristController@viewFlorists');
Route::match(['get','post'],'/admin/florist-profile','FloristController@floristProfile');
Route::match(['get','post'],'/admin/change-password','FloristController@changePassword');
Route::match(['get','post'],'/admin/delete-florist/{id}','FloristController@deleteFlorist');
Route::match(['get','post'],'/admin/view-florist-flowers/{id}','FloristController@viewFloristFlowers');

Route::post('/admin/update-florist-status','FloristController@updateStatus');

//City Route
Route::match(['get','post'],'/admin/add-city','CitiesController@addCity');
Route::match(['get','post'],'/admin/view-cities','CitiesController@viewCities');
Route::match(['get','post'],'/admin/edit-city/{id}','CitiesController@editCity');
Route::match(['get','post'],'/admin/delete-city/{id}','CitiesController@deleteCity');


//Category Route
Route::match(['get','post'],'/admin/add-category','CategoryController@addCategory');
Route::match(['get','post'],'/admin/add-parent-category','CategoryController@addParentCategory');
Route::match(['get','post'],'/admin/view-categories','CategoryController@viewCategories');
Route::match(['get','post'],'/admin/edit-category/{id}','CategoryController@editCategory');
Route::match(['get','post'],'/admin/edit-parent-category/{id}','CategoryController@editParentCategory');
Route::match(['get','post'],'/admin/delete-category/{id}','CategoryController@deleteCategory');
Route::post('/admin/update-category-status','CategoryController@updateStatus');
//Occasions Route
Route::match(['get','post'],'/admin/add-occasion','OccasionsController@addOccasion');
Route::match(['get','post'],'/admin/view-occasions','OccasionsController@viewOccasions');
Route::match(['get','post'],'/admin/edit-occasion/{slug}','OccasionsController@editOccasion');
Route::match(['get','post'],'/admin/delete-occasion/{id}','OccasionsController@deleteOccasion');
Route::post('/admin/update-occasion-status','OccasionsController@updateStatus');
//Flower type Route 
Route::match(['get','post'],'/admin/add-type','TypesController@addType');
Route::match(['get','post'],'/admin/view-types','TypesController@viewTypes');
Route::match(['get','post'],'/admin/edit-type/{slug}','TypesController@editType');
Route::match(['get','post'],'/admin/delete-type/{id}','TypesController@deleteType');
Route::post('/admin/update-type-status','TypesController@updateStatus');

//Product Route
Route::match(['get','post'],'/admin/add-product','ProductsController@addProduct');
Route::match(['get','post'],'/admin/view-products','ProductsController@viewProducts');
Route::match(['get','post'],'/admin/edit-product/{id}','ProductsController@editProduct');
Route::match(['get','post'],'/admin/delete-product/{id}','ProductsController@DeleteProduct');
Route::post('/admin/update-product-status','ProductsController@updateStatus');
Route::post('/admin/update-featured-product-status','ProductsController@updateFeatured');
//discount routes
Route::match(['get','post'],'/admin/add-discount/{id}','ProductsController@addDiscount');
Route::get('/admin/delete-discount/{id}','ProductsController@deleteDiscount');
Route::post('/admin/update-discount-status','ProductsController@updateDiscountStatus');

//Products Attributes
Route::match(['get','post'],'/admin/add-attributes/{id}','ProductsController@addAttributes');
Route::get('/admin/delete-attribute/{id}', 'ProductsController@deleteAttribute');
Route::match(['get','post'],'/admin/edit-attributes/{id}','ProductsController@editAttributes');
Route::match(['get','post'],'/admin/add-images/{id}','ProductsController@addImages');
Route::get('/admin/delete-alt-image/{id}','ProductsController@deleteAltImage');

//Banners Route
Route::match(['get','post'],'/admin/banners','BannersController@banners');
Route::match(['get','post'],'/admin/add-banner','BannersController@addBanner');
Route::match(['get','post'],'/admin/edit-banner/{id}','BannersController@editBanner');
Route::match(['get','post'],'/admin/delete-banner/{id}','BannersController@deleteBanner');
Route::post('/admin/update-banner-status','BannersController@updateStatus');

//Coupons Route
Route::match(['get','post'],'/admin/add-coupon','CouponsController@addCoupon');
Route::match(['get','post'],'/admin/view-coupons','CouponsController@viewCoupons');
Route::match(['get','post'],'/admin/edit-coupon/{id}','CouponsController@editCoupon');
Route::get('/admin/delete-coupon/{id}','CouponsController@deleteCoupon');
Route::post('/admin/update-coupon-status','CouponsController@updateStatus');

//Orders Route
Route::get('/admin/orders','ProductsController@viewOrders');
Route::get('/admin/order/{id}','ProductsController@viewOrderDetails');
Route::post('/admin/update-order-status','ProductsController@updateOrderStatus');


});
Route::get('/logout','AdminController@logout');
Route::get('/florist-logout','FloristController@florist_logout');

