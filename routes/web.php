<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
/*NAVBAR*/
Route::get('/', 'PublicofertController@ofertas');


Route::get('/contact', function () {
    return view('contact');
});

Route::get('/productos', 'StoreController@index');

Route::get('productos/{slug}',
[
    'as'   => 'product-details',
    'uses' => 'StoreController@show'
]);

/*PRUEBA
Route::resource('/categorias', 'StoreController');*/


Route::get('categorias/{slug}',[
    'uses' => 'StoreController@searchCategory',
])->name('searchCategory');



Route::get('/nosotros', 'ClientesController@clientes');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/* GESTION*/
Route::resource('usuarios','UserController')->middleware('auth')->middleware('auth');
Route::resource('roles','RoleController')->middleware('auth')->middleware('auth');
Route::resource('/clientes/todas', 'ClientesController')->middleware('auth');
Route::resource('/proveedores', 'ProveedoresController')->middleware('auth');
Route::resource('/ofertas/todas', 'PublicofertController')->middleware('auth');

Route::resource('/Categorias', 'CategoriasController')->middleware('auth');
Route::resource('/producto', 'ProductoController')->middleware('auth');



Route::get('/logins', function () {
    return view('login');
});
Route::get('/logout', function () {
    Session::forget('user');
    return redirect('logins');
});
Route::post('/add_to_cart',[App\Http\Controllers\StoreController::class,'cart']);
Route::get('/ordernow',[App\Http\Controllers\StoreController::class,'ordernow']);
Route::post('/orderplace',[App\Http\Controllers\StoreController::class,'orderplace']);


Route::get('/cartlist',[App\Http\Controllers\StoreController::class,'showItem']);
Route::get('removecart/{id}',[App\Http\Controllers\StoreController::class,'remove']);
Route::get('/orderlist',[App\Http\Controllers\StoreController::class,'order_list']);
Route::post("/logins",[App\Http\Controllers\UserController::class,'login']);

Route::post("/register",[App\Http\Controllers\UserController::class,'register']);
Route::view('/register','register');

/*ADMIN*/