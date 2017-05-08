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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'invoice'], function () {
    Route::get('/', function () {
        return 'Lista de Nf-e';
    });

    Route::get('new', function () {
        return 'incluir Nf-e';
    });

    Route::get('{invoiceId}', function ($invoiceId) {
        return "Visualizar/editar Nfe $invoiceId";
    });
});
