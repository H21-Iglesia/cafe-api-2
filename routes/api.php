<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/categoria','App\Http\Controllers\categoriaController@index'); //mostrar categorias
Route::post('/categoria', 'App\Http\Controllers\categoriaController@store'); // cargar categoria
Route::put('/categoria/{id}', 'App\Http\Controllers\categoriaController@update'); // actualizar categoria
Route::delete('/categoria/{id}', 'App\Http\Controllers\categoriaController@destroy'); // Eliminar categoria

Route::get('/categoriaProducto','App\Http\Controllers\CategoriaProductoController@index'); //mostrar categoriaProductos
Route::post('/categoriaProducto', 'App\Http\Controllers\CategoriaProductoController@store'); // cargar categoriaProducto
Route::put('/categoriaProducto/{id}', 'App\Http\Controllers\CategoriaProductoController@update'); // actualizar categoriaProducto
Route::delete('/categoriaProducto/{id}', 'App\Http\Controllers\CategoriaProductoController@destroy'); // Eliminar categoriaProducto

Route::get('/receta', 'App\Http\Controllers\recetaController@index'); // mostrar recetas
Route::post('/receta', 'App\Http\Controllers\recetaController@store'); // cargar receta
Route::put('/receta/{id}', 'App\Http\Controllers\recetaController@update'); // actualizar receta
Route::delete('/receta/{id}', 'App\Http\Controllers\recetaController@destroy'); // Eliminar receta

Route::get('/producto', 'App\Http\Controllers\productoController@index'); // mostrar productos
Route::post('/producto', 'App\Http\Controllers\productoController@store'); // cargar producto
Route::put('/producto/{id}', 'App\Http\Controllers\productoController@update'); // actualizar producto
Route::delete('/producto/{id}', 'App\Http\Controllers\productoController@destroy'); // Eliminar producto

Route::get('/pedido', 'App\Http\Controllers\pedidoController@index'); // mostrar pedidos
Route::post('/pedido', 'App\Http\Controllers\pedidoController@store'); // cargar pedido
Route::put('/pedido/{id}', 'App\Http\Controllers\pedidoController@update'); // actualizar pedido
Route::delete('/pedido/{id}', 'App\Http\Controllers\pedidoController@destroy'); // Eliminar pedido

Route::get('/pedidoProducto', 'App\Http\Controllers\PedidoProductoController@index'); // mostrar PedidoProductos
Route::post('/pedidoProducto', 'App\Http\Controllers\PedidoProductoController@store'); // cargar PedidoProducto
Route::put('/pedidoProducto/{id}', 'App\Http\Controllers\PedidoProductoController@update'); // actualizar PedidoProducto
Route::delete('/pedidoProducto/{id}', 'App\Http\Controllers\PedidoProductoController@destroy'); // Eliminar PedidoProducto

Route::get('/estado', 'App\Http\Controllers\estadoController@index'); // mostrar estados
Route::post('/estado', 'App\Http\Controllers\estadoController@store'); // cargar estado
Route::put('/estado/{id}', 'App\Http\Controllers\estadoController@update'); // actualizar estado
Route::delete('/estado/{id}', 'App\Http\Controllers\estadoController@destroy'); // Eliminar estado

Route::get('/tipopago', 'App\Http\Controllers\TipopagoController@index'); // mostrar Tipopago
Route::post('/tipopago', 'App\Http\Controllers\TipopagoController@store'); // cargar Tipopago
Route::put('/tipopago/{id}', 'App\Http\Controllers\TipopagoController@update'); // actualizar Tipopago
Route::delete('/tipopago/{id}', 'App\Http\Controllers\TipopagoController@destroy'); // Eliminar Tipopago

Route::get('/usuario', 'App\Http\Controllers\UsuarioController@index'); // mostrar usuario
Route::post('/usuario', 'App\Http\Controllers\UsuarioController@store'); // cargar usuario
Route::put('/usuario/{id}', 'App\Http\Controllers\UsuarioController@update'); // actualizar usuario
Route::delete('/usuario/{id}', 'App\Http\Controllers\UsuarioController@destroy'); // Eliminar usuario

Route::get('/etiqueta', 'App\Http\Controllers\EtiquetaController@index'); // mostrar etiqueta
Route::post('/etiqueta', 'App\Http\Controllers\EtiquetaController@store'); // cargar etiqueta
Route::put('/etiqueta/{id}', 'App\Http\Controllers\EtiquetaController@update'); // actualizar etiqueta
Route::delete('/etiqueta/{id}', 'App\Http\Controllers\EtiquetaController@destroy'); // Eliminar etiqueta

Route::get('/etiquetaUsuario', 'App\Http\Controllers\EtiquetaUsuarioController@index'); // mostrar etiqueta usuario
Route::post('/etiquetaUsuario', 'App\Http\Controllers\EtiquetaUsuarioController@store'); // cargar etiqueta usuario
Route::put('/etiquetaUsuario/{id}', 'App\Http\Controllers\EtiquetaUsuarioController@update'); // actualizar etiqueta usuario
Route::delete('/etiquetaUsuario/{id}', 'App\Http\Controllers\EtiquetaUsuarioController@destroy'); // Eliminar etiqueta usuario