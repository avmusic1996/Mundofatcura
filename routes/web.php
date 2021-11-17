<?php

use Illuminate\Support\Facades\Route;
use RealRashid\SweetAlert\Facades\Alert;

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
    Alert::success('Success Title', 'Success Message');
    return view('welcome');
});

Auth::routes();


// RUTAS DE LOS USUARIOS
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/users/create', [App\Http\Controllers\UserController::class, 'create'])->name('users.create');

Route::post('/users', [App\Http\Controllers\UserController::class, 'store'])->name('users.store');

Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name('users.index');

Route::get('/users/{users}', [App\Http\Controllers\UserController::class, 'show'])->name('users.show');

Route::get('/users/{user}/edit', [App\Http\Controllers\UserController::class, 'edit'])->name('users.edit');

Route::put('/users/{user}', [App\Http\Controllers\UserController::class, 'update'])->name('users.update');

Route::delete('/users/{user}', [App\Http\Controllers\UserController::class, 'destroy'])->name('users.delete');

// FIN DE LAS RUTAS DE LOS USUARIOS
////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////



// RUTAS DE LOS CLIENTES
Route::get('/clientes', [App\Http\Controllers\ClienteController::class, 'index'])->name('clientes.index');

Route::get('/clientes/create', [App\Http\Controllers\ClienteController::class, 'create'])->name('clientes.create');

Route::post('/clientes', [App\Http\Controllers\ClienteController::class, 'store'])->name('clientes.store');

Route::get('/clientes/{users}', [App\Http\Controllers\ClienteController::class, 'show'])->name('clientes.show');

Route::get('/clientes/{user}/edit', [App\Http\Controllers\ClienteController::class, 'edit'])->name('clientes.edit');

Route::delete('/clientes/{user}', [App\Http\Controllers\ClienteController::class, 'destroy'])->name('clientes.delete');

Route::put('/clientes/{user}', [App\Http\Controllers\ClienteController::class, 'update'])->name('clientes.update');

//FIN RUTAS DE LOS CLIENTES
////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////


// RUTAS DE PRODUCTOS
Route::get('/productos', [App\Http\Controllers\ProductosController::class, 'index'])->name('productos.index');

Route::get('/productos/create', [App\Http\Controllers\ProductosController::class, 'create'])->name('productos.create');

Route::post('/productos', [App\Http\Controllers\ProductosController::class, 'store'])->name('productos.store');

Route::get('/productos/{users}', [App\Http\Controllers\ProductosController::class, 'show'])->name('productos.show');

Route::get('/productos/{user}/edit', [App\Http\Controllers\ProductosController::class, 'edit'])->name('productos.edit');

Route::delete('/productos/{user}', [App\Http\Controllers\ProductosController::class, 'destroy'])->name('productos.delete');

Route::put('/productos/{user}', [App\Http\Controllers\ProductosController::class, 'update'])->name('productos.update');

// FIN DE LAS RUTAS DE PRODUCTOS
////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////



// RUTAS DE PROVEEDORES

Route::get('/proveedor', [App\Http\Controllers\ProveedorController::class, 'index'])->name('proveedor.index');

Route::get('/proveedor/create', [App\Http\Controllers\ProveedorController::class, 'create'])->name('proveedor.create');

Route::post('/proveedor', [App\Http\Controllers\ProveedorController::class, 'store'])->name('proveedor.store');

Route::get('/proveedor/{users}', [App\Http\Controllers\ProveedorController::class, 'show'])->name('proveedor.show');

Route::get('/proveedor/{user}/edit', [App\Http\Controllers\ProveedorController::class, 'edit'])->name('proveedor.edit');

Route::delete('/proveedor/{user}', [App\Http\Controllers\ProveedorController::class, 'destroy'])->name('proveedor.delete');

Route::put('/proveedor/{user}', [App\Http\Controllers\ProveedorController::class, 'update'])->name('proveedor.update');

// FIN DE LAS RUTAS DE PROVEEDORES
////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////



// RUTAS DE CATEGORIAS
Route::get('/categoria', [App\Http\Controllers\CategoriaController::class, 'index'])->name('categoria.index');

Route::get('/categoria/create', [App\Http\Controllers\CategoriaController::class, 'create'])->name('categoria.create');

Route::post('/categoria', [App\Http\Controllers\CategoriaController::class, 'store'])->name('categoria.store');

Route::get('/categoria/{users}', [App\Http\Controllers\CategoriaController::class, 'show'])->name('categoria.show');

Route::get('/categoria/{user}/edit', [App\Http\Controllers\CategoriaController::class, 'edit'])->name('categoria.edit');

Route::delete('/categoria/{user}', [App\Http\Controllers\CategoriaController::class, 'destroy'])->name('categoria.delete');

Route::put('/categoria/{user}', [App\Http\Controllers\CategoriaController::class, 'update'])->name('categoria.update');
// FIN DE LAS RUTAS DE CATEGORIAS

// Route::get('/proveedor', [App\Http\Controllers\ProveedorController::class, 'index'])->name('proveedor.index');

Route::get('/register/verify/{code}', [App\Http\Controllers\Auth\RegisterController::class, 'verify']);