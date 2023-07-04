<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\suruburi;
use App\Models\uzcasnic;
use App\Models\electrica;
use App\Models\santehnica;
use App\Models\instrumente;
use App\Models\Order;
use App\Http\Controllers\UserController;
use App\Http\Controllers\suruburiController;
use App\Http\Controllers\uzcasnicController;
use App\Http\Controllers\electricaController;
use App\Http\Controllers\santehnicaController;
use App\Http\Controllers\instrumenteController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ShoppingCartController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/dashboard', function () {
    return view('dashboard');
});

//Login and Register routes
Route::post('/register', [UserController::class, 'userregister']);

Route::post('/login', [UserController::class, 'userlogin']);

Route::post('/logout', [UserController::class, 'logout']);


//Create produs routes
Route::post('/electrica/create_electrica_produs', [electricaController::class, 'createElectrica']);

Route::post('/uzcasnic/create_uzcasnic_produs', [uzcasnicController::class, 'createUzcasnic']);

Route::post('/instrumente/create_instrumente_produs', [instrumenteController::class, 'createInstrumente']);

Route::post('/suruburi/create_suruburi_produs', [suruburiController::class, 'createSuruburi']);

Route::post('/santehnica/create_santehnica_produs', [santehnicaController::class, 'createSantehnica']);

//Edit and Delete produs routes
Route::put('/electrica/edit-electrica/{electrica}', [electricaController::class, 'produsEdit']);
Route::delete('/electrica/delete-electrica/{electrica}', [electricaController::class, 'deleteProdus']);

Route::put('/uzcasnic/edit-uzcasnic/{uzcasnic}', [uzcasnicController::class, 'produsEdit']);
Route::delete('/uzcasnic/delete-uzcasnic/{uzcasnic}', [uzcasnicController::class, 'deleteProdus']);

Route::put('/instrumente/edit-instrumente/{instrumente}', [instrumenteController::class, 'produsEdit']);
Route::delete('/instrumente/delete-instrumente/{instrumente}', [instrumenteController::class, 'deleteProdus']);

Route::put('/suruburi/edit-suruburi/{suruburi}', [suruburiController::class, 'produsEdit']);
Route::delete('/suruburi/delete-suruburi/{suruburi}', [suruburiController::class, 'deleteProdus']);

Route::put('/santehnica/edit-santehnica/{santehnica}', [santehnicaController::class, 'produsEdit']);
Route::delete('/santehnica/delete-santehnica/{santehnica}', [santehnicaController::class, 'deleteProdus']);


Route::post('/add-to-cart/electrica', [ShoppingCartController::class, 'addToCartElectrica']);
Route::post('/add-to-cart/uzcasnic', [ShoppingCartController::class, 'addToCartuzcasnic']);
Route::post('/add-to-cart/instrumente', [ShoppingCartController::class, 'addToCartinstrumente']);
Route::post('/add-to-cart/suruburi', [ShoppingCartController::class, 'addToCartsuruburi']);
Route::post('/add-to-cart/santehnica', [ShoppingCartController::class, 'addToCartsantehnica']);

Route::delete('/shopping-cart/{item}', [ShoppingCartController::class, 'removeItem'])->name('shopping-cart/remove');
Route::post('/shopping-cart/submit', [ShoppingCartController::class, 'submitCart'])->name('shopping-cart/submit');

Route::delete('/order/complete/{order}', [OrderController::class, 'complete']);

