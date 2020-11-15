<?php

//merchant routes
Route::group(['namespace' => 'Merchant', 'prefix' => 'merchant'], function () {
    Route::get('/dashboard', 'DashboardController@index')->name('merchant.dashboard');
    Route::get('/settings', 'DashboardController@setting')->name('merchant.settings');
    Route::get('/orders', 'DashboardController@order')->name('merchant.orders');
    Route::get('/payment-request', 'DashboardController@paymentRequest')->name('merchant.payment.request');
    Route::get('/payments', 'DashboardController@payment')->name('merchant.payments');
    Route::get('/products', 'DashboardController@product')->name('merchant.products');
    Route::get('/edit-product', 'DashboardController@edit')->name('merchant.edit.product');
    Route::get('/returns', 'DashboardController@return')->name('merchant.returns');
});
