<?php

Route::get('/', function () {
    return view('backend.home');
})->name('home');

Route::get('lang/{lang}', 'MainController@change_lang')->name('lang');
// TODO typeahead.js
Route::get('autocomplete', 'MainController@autocomplete')->name('autocomplete');
Route::get('test', 'MainController@test')->name('test');



Route::get('/settings', 'SettingController@index')->name('settings');
Route::post('/settings', 'SettingController@update')->name('settings.update');

// Staff Routes --------------------
Route::resource('staff', 'StaffController');
Route::get('datatable/staff', 'StaffController@datatable')->name('staff.datatable');
Route::post('staff/updateAll', 'StaffController@updateAll')->name('staff.updateAll');

// Role Routes --------------------
Route::resource('roles', 'RoleController');
Route::get('datatable/roles', 'RoleController@datatable')->name('roles.datatable');
Route::post('roles/updateAll', 'RoleController@updateAll')->name('roles.updateAll');
// Merchant Routes --------------------
Route::resource('merchants', 'MerchantController');
Route::get('datatable/merchants', 'MerchantController@datatable')->name('merchants.datatable');
Route::post('merchants/updateAll', 'MerchantController@updateAll')->name('merchants.updateAll');
// MerchantCategory Routes --------------------
Route::resource('merchant_categories', 'MerchantCategoryController');
Route::get('datatable/merchant_categories', 'MerchantCategoryController@datatable')->name('merchant_categories.datatable');
Route::post('merchant_categories/updateAll', 'MerchantCategoryController@updateAll')->name('merchant_categories.updateAll');
// MerchantContract Routes --------------------
Route::resource('merchant_contracts', 'MerchantContractController');
Route::get('datatable/merchant_contracts', 'MerchantContractController@datatable')->name('merchant_contracts.datatable');
Route::post('merchant_contracts/updateAll', 'MerchantContractController@updateAll')->name('merchant_contracts.updateAll');
// Wallet Routes --------------------
Route::resource('wallets', 'WalletController');
Route::get('datatable/wallets', 'WalletController@datatable')->name('wallets.datatable');
Route::post('wallets/updateAll', 'WalletController@updateAll')->name('wallets.updateAll');
// Area Routes --------------------
Route::resource('areas', 'AreaController');
Route::get('datatable/areas', 'AreaController@datatable')->name('areas.datatable');
Route::post('areas/updateAll', 'AreaController@updateAll')->name('areas.updateAll');
// SDK Routes --------------------
Route::resource('sdks', 'SDKController');
Route::get('datatable/sdks', 'SDKController@datatable')->name('sdks.datatable');
Route::post('sdks/updateAll', 'SDKController@updateAll')->name('sdks.updateAll');
// Service Routes --------------------
Route::resource('services', 'ServiceController');
Route::get('datatable/services', 'ServiceController@datatable')->name('services.datatable');
Route::post('services/updateAll', 'ServiceController@updateAll')->name('services.updateAll');
// ServiceApiParameters Routes --------------------
Route::resource('service_api_parameters', 'ServiceApiParametersController');
Route::get('datatable/service_api_parameters', 'ServiceApiParametersController@datatable')->name('service_api_parameters.datatable');
Route::post('service_api_parameters/updateAll', 'ServiceApiParametersController@updateAll')->name('service_api_parameters.updateAll');
// ServiceProvider Routes --------------------
Route::resource('service_providers', 'ServiceProviderController');
Route::get('datatable/service_providers', 'ServiceProviderController@datatable')->name('service_providers.datatable');
Route::post('service_providers/updateAll', 'ServiceProviderController@updateAll')->name('service_providers.updateAll');
// ServiceProviderCategory Routes --------------------
Route::resource('service_provider_categories', 'ServiceProviderCategoryController');
Route::get('datatable/service_provider_categories', 'ServiceProviderCategoryController@datatable')->name('service_provider_categories.datatable');
Route::post('service_provider_categories/updateAll', 'ServiceProviderCategoryController@updateAll')->name('service_provider_categories.updateAll');
// Settlement Routes --------------------
Route::resource('settlements', 'SettlementController');
Route::get('datatable/settlements', 'SettlementController@datatable')->name('settlements.datatable');
Route::post('settlements/updateAll', 'SettlementController@updateAll')->name('settlements.updateAll');
// Transaction Routes --------------------
Route::resource('transactions', 'TransactionController');
Route::get('datatable/transactions', 'TransactionController@datatable')->name('transactions.datatable');
Route::post('transactions/updateAll', 'TransactionController@updateAll')->name('transactions.updateAll');
// Commission Routes --------------------
Route::resource('commissions', 'CommissionController');
Route::get('datatable/commissions', 'CommissionController@datatable')->name('commissions.datatable');
Route::post('commissions/updateAll', 'CommissionController@updateAll')->name('commissions.updateAll');
// Ticket Routes --------------------
Route::resource('tickets', 'TicketController');
Route::get('datatable/tickets', 'TicketController@datatable')->name('tickets.datatable');
Route::post('tickets/updateAll', 'TicketController@updateAll')->name('tickets.updateAll');
// TicketCategory Routes --------------------
Route::resource('ticket_categories', 'TicketCategoryController');
Route::get('datatable/ticket_categories', 'TicketCategoryController@datatable')->name('ticket_categories.datatable');
Route::post('ticket_categories/updateAll', 'TicketCategoryController@updateAll')->name('ticket_categories.updateAll');
// Log Routes --------------------
Route::resource('logs', 'LogController');
Route::get('datatable/logs', 'LogController@datatable')->name('logs.datatable');
Route::post('logs/updateAll', 'LogController@updateAll')->name('logs.updateAll');
// ServiceApi Routes --------------------
Route::resource('service_apis', 'ServiceApiController');
Route::get('datatable/service_apis', 'ServiceApiController@datatable')->name('service_apis.datatable');
Route::post('service_apis/updateAll', 'ServiceApiController@updateAll')->name('service_apis.updateAll');
// Device Routes --------------------
Route::resource('devices', 'DeviceController');
Route::get('datatable/devices', 'DeviceController@datatable')->name('devices.datatable');
Route::post('devices/updateAll', 'DeviceController@updateAll')->name('devices.updateAll');
// Output Routes --------------------
Route::resource('outputs', 'OutputController');
Route::get('datatable/outputs', 'OutputController@datatable')->name('outputs.datatable');
Route::post('outputs/updateAll', 'OutputController@updateAll')->name('outputs.updateAll');
// Output Routes --------------------
Route::resource('outputs', 'OutputController');
Route::get('datatable/outputs', 'OutputController@datatable')->name('outputs.datatable');
Route::post('outputs/updateAll', 'OutputController@updateAll')->name('outputs.updateAll');