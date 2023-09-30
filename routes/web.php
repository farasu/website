<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\LocalizationController;

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
    return view('pages.index');
});

Route::get("/{locale}", function(string $locale){
    if(! in_array($locale, ['en', 'fa', 'ps'])){
        abort(400);
    }
    Session::put('lang', $locale);
    App::setLocale($locale);
    return view('pages.index');
});
