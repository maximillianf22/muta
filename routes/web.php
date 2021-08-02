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
    Route::view('/', 'home.index')->name('home');;

//Auth
    Route::view('seleccionar', 'auth.select');
    Route::view('login', 'auth.login');
    Route::view('registro', 'auth.register-regular');
    Route::view('registro-empresa', 'auth.register-business');
    Route::view('recuperar', 'auth.recovery');
    Route::view('recuperar-codigo', 'auth.recovery-code');
    Route::view('recuperar-contraseña', 'auth.recovery-password');

//User
    //Cart
        Route::view('carrito', 'user.cart.index');
    //Profile
         Route::view('perfil', 'user.profile.index');
         Route::view('perfil-detalle', 'user.profile.view');
    //Wallet
        Route::view('billetera', 'user.profile.index');
        Route::view('pagar-billetera', 'user.wallet.payment-wallet');
        Route::view('pagar-payu', 'user.wallet.payment-payu');
    //Draw
        Route::view('retirar-certificado', 'user.draw.bank-certificate');
        Route::view('retirar-informacion', 'user.draw.bank-information');
    //History
        Route::view('historial', 'user.history.index');
        Route::view('historial-detalle', 'user.history.view');
    //History-chats
        Route::view('historial-chats', 'user.history-chats.index');
    //History-shoppings
        Route::view('historial-compras', 'user.history-shoppings.index');
        Route::view('historial-compras-detalle', 'user.history-shoppings.view');
    //History-services
        Route::view('historial-servicios', 'user.history-services.index');
        Route::view('historial-compras-detalle', 'user.history-shoppings.view');
    //Stats
        Route::view('estadisticas', 'user.stats.index');
    //Chat
        Route::view('chat', 'user.chat.index');

//Modulos
    //Shopping
        Route::view('comprar', 'modules.shoppings.index');
        Route::view('shops', 'modules.shoppings.categories');
    //Histories
        Route::view('historias', 'modules.histories.index');
    //Events
        Route::view('eventos', 'modules.events.index');
        Route::view('eventos-crear', 'modules.events.create');
    //Comunities
        Route::view('comunidad', 'modules.comunities.index');
    //Collects
        Route::view('recolectar', 'modules.collects.index');
        Route::view('recolectar-ver', 'modules.collects.view');
        Route::view('recolectar-registro', 'modules.collects.register');
