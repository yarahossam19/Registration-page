<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\LanguagesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route::get('lang/{lang}', [LanguagesController::class , 'switchLang' ]);

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');


@Route::get('/form/{lang}' , function ($lang)
{
    App::setlocale($lang);
     return view('Form');
});

@Route::get('/sign_form/{lang}' , function ($lang)
{
    App::setlocale($lang);
    return view('readyForm');
});

//Route::get('/form/{lang}.json', function ($lang) {
//    return response()->json(require resource_path("Form/{$lang}.json"));
//});
