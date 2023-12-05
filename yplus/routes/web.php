<?php

use App\Http\Controllers\MercadoController;
use App\Http\Controllers\FinancasController;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/mail', function () {
    Mail::send('mail.exemplo', ["nome" => "Valdecir"], function ($m) {
        $m->from('yplus@vsmsystem.com');
        $m->to('valdecir.merli@gmail.com');
        $m->subject('Testando o laravel');
    });
})->middleware("auth");


//Route::get('/login/{provider}', 'Auth\LoginController@redirectToProvider')->name('social.login');
//Route::get('/login/{provider}/callback', 'Auth\LoginController@handleProviderCallback')->name('social.callback');



Route::group(['namespace' => 'App\Http\Controllers'], function () {
    Route::get('/', 'HomeController@index')->name('home.index');

    Route::group(['middleware' => ['guest']], function () {
        Route::get('/login/{provider}', 'LoginController@redirectToProvider')->name('social.login');
        Route::get('/login/{provider}/callback', 'LoginController@handleProviderCallback')->name('social.callback');
        Route::get('/register', 'RegisterController@show')->name('register.show');
        Route::post('/register', 'RegisterController@register')->name('register.perform');
        //Route::get('/login', 'LoginController@show')->name('login.show');
        Route::get('/login', 'LoginController@show')->name('login.show');
        Route::post('/login', 'LoginController@login')->name('login.perform');
    });

    Route::group(['middleware' => ['auth']], function () {
        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
        Route::get('/yteste', 'HomeController@yteste')->name('home.yteste');
        Route::get('/dashboard', 'HomeController@dashboard')->name('home.dashboard');
        Route::resource('/produto', 'ProdutoController');
        Route::get('/financas/despesas', 'FinancasController@despesas')->name('financas.despesas');
        Route::get('/carros', function(){return view("home.yteste");} )->name('carros');

        Route::get('/mercado', [MercadoController::class, "index"] )->name('mercado.index');
        Route::get('/mercado/create', [MercadoController::class, "create"] )->name('mercado.create');
        Route::post('/mercado/store', [MercadoController::class, "store"] )->name('mercado.store');
        Route::delete('/mercado/delete/{id}', [MercadoController::class,"delete"] )->name('mercado.delete');
        Route::put('/mercado/edit/{id}', [MercadoController::class,"edit"] )->name('mercado.edit');
        Route::put('/mercado/update/{id}', [MercadoController::class,"update"] )->name('mercado.update');

        Route::get('/financas', [FinancasController::class, "index"] )->name('financas.index');
        Route::get('/financas/create', [FinancasController::class, "create"] )->name('financas.create');
        Route::post('/financas/store', [FinancasController::class, "store"] )->name('financas.store');
        Route::delete('/financas/delete/{id}', [FinancasController::class,"delete"] )->name('financas.delete');
        Route::put('/financas/edit/{id}', [FinancasController::class,"edit"] )->name('financas.edit');
        Route::put('/financas/update/{id}', [FinancasController::class,"update"] )->name('financas.update');
    });
});
