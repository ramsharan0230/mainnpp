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


//home display products
Route::get('/test', function(){
    return "Hello there";
});
Route::get('first-home-display', 'Api\HomeController@homeCategoryDisplayOne');
Route::get('second-home-display', 'Api\HomeController@homeCategoryDisplayTwo');
Route::get('third-home-display', 'Api\HomeController@homeCategoryDisplayThree');
Route::get('display/{id}', 'ApiController@displayProducts');

// Get Home Data
Route::get('get-home-data', [\App\Http\Controllers\Api\HomeController::class,'getHomeData']);
// product details ..
Route::get('get-product-detail/{id}', [\App\Http\Controllers\Api\ProductsController::class,'productDetails']);
// product details ..
Route::get('get-category-products/{slug}', 'Api\ProductsController@displayCategoriesProducts');

//current deal
Route::get('/current-deal', 'ApiController@currentDeals');
Route::get('/current-deal-product/{id}', 'ApiController@currentDealProducts');

//feature products
Route::get('/feature-products', 'Api\ProductsController@featureProducts');

// banner every 3 items home page
Route::get('/first-three-banner', 'Api\BannerController@getOneBanner');
Route::get('/second-three-banner', 'Api\BannerController@getTwoBanner');
Route::get('/third-three-banner', 'Api\BannerController@getThreeBanner');

//manufacture/brands
Route::get('/brands', 'ApiController@getBrands');

//sliders main
Route::get('/sliders', 'Api\BannerController@getSliders');
Route::get('/sliders/{type}', 'Api\BannerController@getSlider');
Route::get('/slider/{type}', 'Api\BannerController@getSliderOne');

//cms
Route::get('/cms', 'Api\CmsController@getCms');
Route::get('/cms/{id}', 'Api\CmsController@getCmsDetails');

//category
Route::get('/categories-menu', [\App\Http\Controllers\Api\MenuController::class,'getCategoriesMenu']);
Route::get('/categories-sub-menu/{id}', 'Api\MenuController@getSubCategoriesMenu');
Route::get('/hot-menu', 'Api\MenuController@getHotMenu');

Route::get('/sub-category/{id}', [\App\Http\Controllers\Api\MenuController::class,'getMenuSub']);
Route::get('/child-category/{id}', 'Api\MenuController@getMenuChild');

//blogs
Route::get('/blog', 'Api\CmsController@getBlogs');
Route::get('/blog/{id}', 'Api\CmsController@blogDetails');

//Pages
Route::get('/page', 'Api\CmsController@getPages');
Route::get('/page/{id}', 'Api\CmsController@pageDetails');

//carts
Route::get('/cart/{deviceId}', 'ApiController@cart');
Route::post('/`cart-delete`', 'ApiController@cartDelete');
// Route::get('/cart-update', 'ApiController@cartUpdate');
Route::post('cart-update', 'ApiController@cartUpdate');

// about page
Route::get('/about', 'Api\CmsController@about');
//faq pages
Route::get('/faq', 'Api\CmsController@faq');

//contact us
Route::get('/contact', 'Api\CmsController@contact');

//subscribe email
Route::post('subscribe', 'Api\CmsController@subscribe');

/**
 * WTD
 */
// Route::post('/profile/email', 'ApiController@usermail');
Route::post('/contact/email', 'ApiController@contactMail');
Route::get('/profile/{id}/{name}', 'ApiController@viewprofile');

//category wise products
Route::get('category/{slug}', 'Api\ProductsController@categoryProducts');

// Get Products by Tags
Route::get('tags/{tag}', 'Api\ProductsController@tagProduct');

// search products
Route::get('/search-product', [\App\Http\Controllers\Api\ProductsController::class,'searchProduct']);

// search products
Route::get('/search-tags', [\App\Http\Controllers\Api\ProductsController::class,'getSearchData']);

// review products
Route::post('user/review', [\App\Http\Controllers\Api\ApiController::class,'reviewSubmit']);

/**
 * WTD
 */
Route::post('/user/login', [\App\Http\Controllers\Api\AuthController::class,'login']);
Route::post('/user/registration', [\App\Http\Controllers\Api\AuthController::class,'register']);
Route::post('/user/forgot', [\App\Http\Controllers\Api\ApiProfileResetPassController::class,'resetPass']);

Route::post('/user/get-otp', [\App\Http\Controllers\Api\AuthController::class,'getOTP']);
Route::post('/user/reset-password', [\App\Http\Controllers\Api\AuthController::class,'resetPassword']);

Route::post('/user/password-reset-to-new', [\App\Http\Controllers\Api\AuthController::class,'passwordResetToNew']);

Route::post('social-login', [\App\Http\Controllers\ApiUserProfileController::class,'social']);

Route::post('order/cash-on-delivery', 'ApiController@cashOnDelivery');

Route::post('order-product-guest', 'Api\OrderController@orderProductGuest');

Route::get('get-delivery-charges', [\App\Http\Controllers\Api\OrderController::class,'getDeliveryCharges']);

Route::group(['middleware' => ['auth:api']], function () {

    // checkout products
    Route::get('/user/logout', [\App\Http\Controllers\Api\AuthController::class,'logout']);
    Route::get('/checkout', [\App\Http\Controllers\ApiUserProfileController::class,'checkout']);
    Route::get('user/orders', [\App\Http\Controllers\Api\OrderController::class,'userOrders']);
    Route::get('user/order/{orderid}', [\App\Http\Controllers\Api\OrderController::class,'userOrderDetails']);
    Route::post('user/update-profile', [\App\Http\Controllers\Api\UserProfileController::class,'userProfileUpdate']);
    Route::post('user/save-device-token', 'Api\UserProfileController@saveDeviceToken');
    Route::post('user/password-change', [\App\Http\Controllers\Api\UserProfileController::class,'userPasswordChange']);
    Route::post('order-product', [\App\Http\Controllers\Api\OrderController::class,'orderProduct']);

    Route::post('check-coupon', [\App\Http\Controllers\Api\OrderController::class,'checkCoupon']);
    Route::get('get-notifications', [\App\Http\Controllers\Api\NotificationController::class,'getNotification']);
    // user part
    Route::get('user/account-information', [\App\Http\Controllers\Api\UserProfileController::class,'userInfo']);
    Route::get('user/get-cart', [\App\Http\Controllers\Api\UserProfileController::class,'getCart']);
    Route::get('user/get-cart-count', [\App\Http\Controllers\Api\UserProfileController::class,'getCartCount']);
    Route::post('user/add-to-cart', [\App\Http\Controllers\Api\UserProfileController::class,'addToCart']);
    Route::post('user/cart-delete', [\App\Http\Controllers\Api\UserProfileController::class,'cartDelete']);
    Route::post('user/cart-update', [\App\Http\Controllers\Api\UserProfileController::class,'cartUpdate']);
});


//new routes
Route::get('/members', [\App\Http\Controllers\Api\MemberController::class, 'index']);
Route::post('/members', [\App\Http\Controllers\Api\MemberController::class, 'store']);
Route::get('/galleries', [\App\Http\Controllers\Api\GalleryController::class, 'index']);
Route::get('/gallery/{slug}', [\App\Http\Controllers\Api\GalleryController::class, 'getSpacificGalleryBySlug']);
Route::get('/news-events', [\App\Http\Controllers\Api\NewsEventController::class, 'index']);
Route::get('/news-events/{slug}', [\App\Http\Controllers\Api\NewsEventController::class, 'getSpacificNewsEventBySlug']);

