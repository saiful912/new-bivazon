<?php

use App\Http\Controllers\Backend\Shop\MerchantRegisterController;
use Illuminate\Support\Facades\Route;
Route::group(['namespace' => 'frontend'], function () {
    Route::get('/', 'HomeController@home')->name('home');
    Route::get('/categories-wholesales', 'CategoriesController@wholesaleCategory')->name('categories_wholesale');
    Route::get('/wholesale-shops/{id?}', 'CategoriesController@wholesaleShop')->name('wholesale_shop');
    Route::get('/subcategories-wholesale/{id}/{shop_id}', 'CategoriesController@subcategoriesWholesale')->name('subcategories_wholesale');
    Route::get('/categories-retails', 'CategoriesController@retailCategory')->name('categories_retail');
    Route::get('/retails-shops/{id?}', 'CategoriesController@retailShop')->name('retail_shop');
    Route::get('/subcategory-retails/{id}/{shop_id}', 'CategoriesController@subcategoriesRetail')->name('subcategories_retail');

    //product routes
    Route::get('/wholesale-products/{id}/{shop_id}', 'ProductsController@wholesaleProducts')->name('wholesale_products');
    Route::get('/retail-products/{id}/{shop_id}', 'ProductsController@retailProducts')->name('retail_products');

    Route::get('/merchant-subcategory/{id}', 'CategoriesController@merchantSubCat')->name('merchant.subcategory');
    //checkout routes
    Route::get('add-to-cart/{id}', 'CartController@addToCart')->name('addToCart');
    Route::get('/checkouts', 'CheckoutController@checkout')->name('checkouts');
    Route::post('/process-orders', 'OrderController@process')->name('order.process');
});

//admin routes
Route::group(['namespace' => 'Backend', 'prefix' => 'app'], function () {

    Route::group(['middleware' => 'guest'], function () {
        Route::get('/', 'Auth\AuthController@index')->name('admin.login');
        Route::post('/', 'Auth\AuthController@login')->name('admin.process');
    });

    Route::group(['middleware' => 'auth'], function () {
        Route::get('/logout', 'Auth\AuthController@logout')->name('admin.logout');
        Route::get('admin/dashboard', 'DashboardController')->name('dashboard');
        Route::get('/admin/profile', 'DashboardController@profile')->name('admin.profile');
        Route::post('/admin/update', 'DashboardController@updateProfile')->name('admin.update');
        Route::get('/orders/status/{id}/{status}', 'DashboardController@status')->name('orders.status');

        //order route
        Route::get('admin/orders', 'DashboardController@orders')->name('orders');
        Route::get('admin/orders/invoice/{id}', 'DashboardController@generateInvoice')->name('orders.invoice');
        Route::get('admin/payment-request', 'DashboardController@paymentRequest')->name('admin.payment.request');
        //wholesale route
        Route::group(['prefix' => 'admin/wholes'], function () {
            Route::get('/order', 'WholesController@orders')->name('wholesale.orders');
            Route::get('/categories', 'WholesController@category')->name('wholesale.categories');
            Route::get('/category/edit', 'WholesController@categoryEdit')->name('wholesale.category.edit');
            Route::get('/products', 'WholesController@products')->name('wholesale.products');
            Route::get('/product/edit', 'WholesController@edit')->name('wholesale.product.edit');
            Route::get('/merchant/request', 'WholesController@merchantRequest')->name('wholesale.merchant.request');
            Route::get('/all-merchant', 'WholesController@allMerchant')->name('wholesale.all_merchant');
            Route::get('/edit-merchant/{id}', 'WholesController@editMerchant')->name('wholesale.edit_merchant');
            Route::post('/edit-merchant/{id}', 'WholesController@merchantUpdate');
            Route::get('/payment-history', 'WholesController@paymentHistory')->name('wholesale.payment_history');
            Route::post('/add-payment/', 'WholesController@addPayment')->name('wholesale.add_payment');
            Route::post('/edit-payment/{id}', 'WholesController@editPayment')->name('wholesale.edit_payment');
            Route::post('/delete-payment/{id}', 'WholesController@deletePayment')->name('wholesale.delete_payment');
            Route::get('/view/payment-history', 'WholesController@paymentHistoryView')->name('wholesale.view.payment_history');
            Route::get('/returns', 'WholesController@returns')->name('wholesale.returns');
        });
        //Retail route
        Route::group(['prefix' => 'admin/retails'], function () {
            Route::get('/order', 'RetailsController@orders')->name('retail.orders');
            Route::get('/categories', 'RetailsController@category')->name('retail.categories');
            Route::get('/category/edit', 'RetailsController@categoryEdit')->name('retail.category.edit');
            Route::get('/products', 'RetailsController@products')->name('retail.products');
            Route::get('/product/edit', 'RetailsController@edit')->name('retail.product.edit');
            Route::get('/merchant/request', 'RetailsController@merchantRequest')->name('retail.merchant.request');
            Route::get('/all-merchant', 'RetailsController@allMerchant')->name('retail.all_merchant');
            Route::get('/edit-merchant', 'RetailsController@editMerchant')->name('retail.edit_merchant');
            Route::post('/add-payment/', 'RetailsController@addPayment')->name('retail.add_payment');
            Route::post('/edit-payment/{id}', 'RetailsController@editPayment')->name('retail.edit_payment');
            Route::post('/delete-payment/{id}', 'RetailsController@deletePayment')->name('retail.delete_payment');
            Route::get('/payment-history', 'RetailsController@paymentHistory')->name('retail.payment_history');
            Route::get('/returns', 'RetailsController@returns')->name('retail.returns');
        });
        //Products route
        Route::group(['prefix' => 'admin/products'], function () {
            Route::get('/', 'ProductsController@index')->name('products');
            Route::get('/create', 'ProductsController@create')->name('product.create');
            Route::post('/store', 'ProductsController@store')->name('admin.product.store');
            Route::get('/edit_page/{id}', 'ProductsController@edit')->name('admin.product.edit');
            Route::post('/edit/{id}', 'ProductsController@update')->name('admin.product.update');
            Route::post('/delete/{id}', 'ProductsController@delete')->name('admin.product.delete');
        });
        //Categories route
        Route::group(['prefix' => 'admin/categories'], function () {
            Route::get('/', 'CategoriesController@index')->name('categories');
            Route::get('/create', 'CategoriesController@create')->name('category.create');
            Route::post('/store', 'CategoriesController@store')->name('admin.category.store');
            Route::get('/edit_page/{id}', 'CategoriesController@edit')->name('admin.category.edit');
            Route::post('/edit/{id}', 'CategoriesController@update')->name('admin.category.update');
            Route::post('/delete/{id}', 'CategoriesController@delete')->name('admin.category.delete');
        });
        //sliders route
        Route::group(['prefix' => 'admin/sliders'], function () {
            Route::get('/', 'SlidersController@index')->name('sliders');
            Route::post('/store', 'SlidersController@store')->name('admin.slider.store');
            Route::post('/edit/{id}', 'SlidersController@edit')->name('admin.sliders.edit');
            Route::post('/delete/{id}', 'SlidersController@delete')->name('admin.slider.delete');
        });
        //districts route
        Route::group(['prefix' => 'admin/districts'], function () {
            Route::get('/', 'DistrictsController@index')->name('districts');
            Route::get('/create', 'DistrictsController@create')->name('district.create');
            Route::post('/store', 'DistrictsController@store')->name('admin.district.store');
            Route::get('/edit_page/{id}', 'DistrictsController@edit')->name('admin.district.edit');
            Route::post('/edit/{id}', 'DistrictsController@update')->name('admin.district.update');
            Route::post('/delete/{id}', 'DistrictsController@delete')->name('admin.district.delete');
        });

        //Couriers route
        Route::group(['prefix' => 'admin/couriers'], function () {
            Route::get('/', 'CouriersController@index')->name('couriers');
            Route::get('/create', 'CouriersController@create')->name('courier.create');
            Route::post('/store', 'CouriersController@store')->name('admin.courier.store');
            Route::get('/edit_page/{id}', 'CouriersController@edit')->name('admin.courier.edit');
            Route::post('/edit/{id}', 'CouriersController@update')->name('admin.courier.update');
            Route::post('/delete/{id}', 'CouriersController@delete')->name('admin.courier.delete');
        });
        Route::group(['namespace' => 'Auth'], function () {
            Route::get('/login', 'AuthController@index')->name('app.login');
        });
        //Couriers route
        Route::group(['prefix' => 'admin/feedback'], function () {
            Route::get('/', 'FeedbackController@index')->name('feedback');
            Route::post('/store', 'FeedbackController@store')->name('admin.feedback.store');
            Route::post('/edit/{id}', 'FeedbackController@edit')->name('admin.feedback.edit');
            Route::post('/delete/{id}', 'FeedbackController@delete')->name('admin.feedback.delete');
        });
        Route::group(['prefix' => 'settings'], function () {
            Route::get('/application', 'SettingController@index')->name('settings.index');
            Route::put('/application', 'SettingController@updateApplication')->name('settings.update');
            Route::get('/mail', 'SettingController@mail')->name('settings.mail');
        });
    });
    Route::get('/admin/feedback', 'FeedbackController@index')->name('feedback');
    Route::post('admin/feedback/store', 'FeedbackController@store')->name('admin.feedback.store');
});

//merchant routes
Route::get('/shop/register', [MerchantRegisterController::class, 'showRegisterForm',])->name('shop.register');
Route::post('shop/register', [MerchantRegisterController::class, 'store'])->name('shop.create');
Route::group(['middleware' => 'guest'], function () {
    Route::get('shop/login', [MerchantRegisterController::class, 'showLoginForm'])->name('shop.login');
    Route::post('shop/login', [MerchantRegisterController::class, 'shopLogin'])->name('shop.login.process');
});

Route::group(['namespace' => 'Merchant', 'prefix' => 'merchant'], function () {
    Route::get('logout', function () {
        Auth::logout();
        return redirect()->route('shop.login');
    })->name('merchant.logout');
    Route::get('/dashboard', 'DashboardController@index')->name('merchant.dashboard');
    Route::get('/settings', 'DashboardController@setting')->name('merchant.settings');
    Route::post('/merchant/update/', 'DashboardController@merchantUpdate')->name('merchant.update');
    Route::post('/merchant/update/password', 'DashboardController@updatePassword')->name('update.password');
    Route::get('/orders', 'DashboardController@order')->name('merchant.orders');
    Route::get('/payment-request', 'DashboardController@paymentRequest')->name('merchant.payment.request');
    Route::post('/add-payment-request', 'DashboardController@Addpayment')->name('merchant.add.payment');
    Route::get('/payments', 'DashboardController@payment')->name('merchant.payments');
    Route::get('/products', 'DashboardController@product')->name('merchant.products');
    Route::get('/edit-product', 'DashboardController@edit')->name('merchant.edit.product');
    Route::get('/returns', 'DashboardController@return')->name('merchant.returns');
});

//affiliate routes
Route::group(['namespace' => 'Affiliate', 'prefix' => 'affiliate'], function () {
    Route::get('/register', 'AffiliateRegisterController@create')->name('affiliate.register');
    Route::post('/register', 'AffiliateRegisterController@register');
    Route::get('/login', 'AffiliateRegisterController@login')->name('affiliate.login');
    Route::post('/login', 'AffiliateRegisterController@process_login');
    Route::get('/dashboard', 'DashboardController@index')->name('affiliate.dashboard');
    Route::get('/settings', 'DashboardController@setting')->name('affiliate.settings');
    Route::get('/payment-request', 'DashboardController@paymentRequest')->name('affiliate.payment.request');
    Route::get('/payments', 'DashboardController@payment')->name('affiliate.payments');
});


Route::get('get-couriers/{id}', function ($id) {
    return json_encode(App\Models\Courier::where('district_id', $id)->get());
});
