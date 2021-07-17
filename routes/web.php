<?php

use Illuminate\Support\Facades\Route;

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

//Home
    Route::get('/', function () {
        return view('home.index');
    });

//Auth
    Route::view('seleccionar', 'auth.select');
    Route::view('login', 'auth.login');
    Route::view('registro', 'auth.register-regular');
    Route::view('registro-empresa', 'auth.register-business');
    Route::view('recuperar-contraseña', 'auth.recovery');

//User
    //Profile
        Route::view('carrito', 'user.cart.index');
    //Wallet
        Route::view('pagar-billetera', 'user.wallet.payment-wallet');
        Route::view('pagar-payu', 'user.wallet.payment-payu');

//Modulos
    //Shopping
        Route::view('comprar', 'modules.shoppings.index');
        Route::view('shops', 'modules.shoppings.categories');
    //Histories
        Route::view('historias', 'modules.histories.index');
    //Events
        Route::view('eventos', 'modules.events.index');
    //Comunities
        Route::view('comunidad', 'modules.comunities.index');
    //Collects
        Route::view('recolectar', 'modules.collects.index');
