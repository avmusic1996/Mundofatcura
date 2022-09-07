<?php
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\Categoriasontroller;
use App\Models\Productos;
use App\Models\Categorias;

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
Route::get('/app', function () {
    Alert::success('Success Title', 'Success Message');
    return view('app');
});

Auth::routes();


// RUTAS DE LOS USUARIOS

Route::post('dropzone/store', [App\Http\Controllers\ProductosController::class, 'upload_image'])->name('dropzone.store');
Route::get('/post/fetch_image_show', [App\Http\Controllers\ProductosController::class, 'fetch_image_show'])->name('post.fetch_image_show');

Route::get('/post/fetch_image_modal', [App\Http\Controllers\ImageController::class, 'fetch_image_modal'])->name('post.fetch_image_modal');


Route::get('/post', [App\Http\Controllers\ImageController::class, 'index'])->name('post.index');
Route::get('/crearproductos', [App\Http\Controllers\ImageController::class, 'index'])->name('crearproducto.index');
Route::get('/post/upload_image', [App\Http\Controllers\ImageController::class, 'upload_image'])->name('post.upload_image');
Route::get('/post/fetch_image', [App\Http\Controllers\ProductosController::class, 'fetch_image'])->name('post.fetch_image');






Route::get('/post/set_image', [App\Http\Controllers\ImageController::class, 'set_image'])->name('post.set_image');
Route::get('/post/set_image2', [App\Http\Controllers\ImageController::class, 'set_image2'])->name('post.set_image2');







Route::get('/ejemplo', [App\Http\Controllers\ProductosController::class, 'ejemplo'])->name('ejemplo');
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

Route::delete('/clientes/{cliente}', [App\Http\Controllers\ClienteController::class, 'destroy'])->name('clientes.delete');

Route::put('/clientes/{cliente}', [App\Http\Controllers\ClienteController::class, 'update'])->name('clientes.update');


Route::get('/Clientes', [App\Http\Controllers\ClienteController::class, 'byCliente'])->name('cliente');



//FIN RUTAS DE LOS CLIENTES
////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////


// RUTAS DE PRODUCTOS

Route::get('/post/delete_image', [App\Http\Controllers\ProductosController::class, 'delete_image'])->name('post.delete_image');
Route::get('/post', [App\Http\Controllers\ProductosController::class, 'index'])->name('post.index');

Route::get('/post/create', [App\Http\Controllers\ProductosController::class, 'create'])->name('post.create');

Route::post('/producto/create', [App\Http\Controllers\ProductosController::class, 'store'])->name('producto.store');

Route::get('/post/{id}', [App\Http\Controllers\ProductosController::class, 'show'])->name('post.show');

Route::get('/post/{user}/edit', [App\Http\Controllers\ProductosController::class, 'edit'])->name('post.edit');

Route::delete('/post/{user}', [App\Http\Controllers\ProductosController::class, 'destroy'])->name('post.delete');

Route::put('/post/{user}', [App\Http\Controllers\ProductosController::class, 'update'])->name('post.update');












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

Route::get('/Categorias', [App\Http\Controllers\CategoriaController::class, 'bycategorias'])->name('categorias');

// Route::get('/categorias', [App\Http\Controllers\CategoriaController::class, 'byconteo'])->name('categorias');

// FIN DE LAS RUTAS DE CATEGORIAS

// Route::get('/proveedor', [App\Http\Controllers\ProveedorController::class, 'index'])->name('proveedor.index');

Route::get('/register/verify/{code}', [App\Http\Controllers\Auth\RegisterController::class, 'verify']);