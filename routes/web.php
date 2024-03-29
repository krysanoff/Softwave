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
    $api = new \App\Http\Controllers\Softwave\ApiController();
    $data = $api->getYearData(env('YEAR_DEFAULT'));
    $years = $api->getAllYears();

    return view('welcome', compact(['data', 'years']));
});
