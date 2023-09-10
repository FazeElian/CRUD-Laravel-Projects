<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FactureController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SaleController;
use Illuminate\Support\Facades\Route;

// Imporación de controlador para generar PDF de ventas
use App\Http\Controllers\SalePDFController;

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

// Ruta Página Principal Empresa
Route::get('/', function () {
    return view('company');
});

Auth::routes();

// Ruta Página Principal Dashboard - Administrador
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Ruta Productos
Route::resource('products', ProductController::class)->middleware("auth");

// Ruta Categorías Productos
Route::resource('categories', CategoryController::class)->middleware("auth");

// Ruta Ventas
Route::resource('sales', SaleController::class)->middleware("auth");

// Ruta Facturas
Route::resource('factures', FactureController::class)->middleware("auth");

// Ruta generación de PDF de Ventas
Route::get('/sales/pdf', [SalePDFController::class, 'generatePDF'])->name('records-sales.pdf');
