<?php

use App\Models\suruburi;
use App\Models\uzcasnic;
use App\Models\electrica;
use App\Models\santehnica;
use App\Models\instrumente;
use App\Models\Order;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\suruburiController;
use App\Http\Controllers\uzcasnicController;
use App\Http\Controllers\electricaController;
use App\Http\Controllers\santehnicaController;
use App\Http\Controllers\instrumenteController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ShoppingCartController;



//Main home route
Route::get('/', function () {
    return view('home');
});


//Dashboard route
Route::get('/dashboard', function () {
    return view('dashboard');
});

//Login and Register routes
Route::get('/register', [UserController::class, 'showregister']);
Route::post('/register', [UserController::class, 'userregister']);

Route::get('/login', [UserController::class, 'showlogin']);
Route::post('/login', [UserController::class, 'userlogin']);

Route::post('/logout', [UserController::class, 'logout']);

//View routes
Route::get('/electrica', function () {
    $electrica = electrica::all();
    return view('electrica', ['electrica' => $electrica]);
});
Route::get('/uzcasnic', function () {
    $uzcasnic = uzcasnic::all();
    return view('uzcasnic', ['uzcasnic' => $uzcasnic]);
});

Route::get('/instrumente', function () {
    $instrumente = instrumente::all();
    return view('instrumente', ['instrumente' => $instrumente]);
});

Route::get('/suruburi', function () {
    $suruburi = suruburi::all();
    return view('suruburi', ['suruburi' => $suruburi]);
});

Route::get('/santehnica', function () {
    $santehnica = santehnica::all();
    return view('santehnica', ['santehnica' => $santehnica]);
});


//Create produs routes
Route::get('/electrica/create_electrica_produs', [electricaController::class, 'showcreate']);
Route::post('/electrica/create_electrica_produs', [electricaController::class, 'createElectrica']);

Route::get('/uzcasnic/create_uzcasnic_produs', [uzcasnicController::class, 'showcreate']);
Route::post('/uzcasnic/create_uzcasnic_produs', [uzcasnicController::class, 'createUzcasnic']);

Route::get('/instrumente/create_instrumente_produs', [instrumenteController::class, 'showcreate']);
Route::post('/instrumente/create_instrumente_produs', [instrumenteController::class, 'createInstrumente']);

Route::get('/suruburi/create_suruburi_produs', [suruburiController::class, 'showcreate']);
Route::post('/suruburi/create_suruburi_produs', [suruburiController::class, 'createSuruburi']);

Route::get('/santehnica/create_electric4_produs', [santehnicaController::class, 'showcreate']);
Route::post('/santehnica/create_santehnica_produs', [santehnicaController::class, 'createSantehnica']);

//Edit and Delete produs routes
Route::get('/electrica/edit-electrica/{electrica}', [electricaController::class, 'showEdit']);
Route::put('/electrica/edit-electrica/{electrica}', [electricaController::class, 'produsEdit']);
Route::delete('/electrica/delete-electrica/{electrica}', [electricaController::class, 'deleteProdus']);

Route::get('/uzcasnic/edit-uzcasnic/{uzcasnic}', [uzcasnicController::class, 'showEdit']);
Route::put('/uzcasnic/edit-uzcasnic/{uzcasnic}', [uzcasnicController::class, 'produsEdit']);
Route::delete('/uzcasnic/delete-uzcasnic/{uzcasnic}', [uzcasnicController::class, 'deleteProdus']);

Route::get('/instrumente/edit-instrumente/{instrumente}', [instrumenteController::class, 'showEdit']);
Route::put('/instrumente/edit-instrumente/{instrumente}', [instrumenteController::class, 'produsEdit']);
Route::delete('/instrumente/delete-instrumente/{instrumente}', [instrumenteController::class, 'deleteProdus']);

Route::get('/suruburi/edit-suruburi/{suruburi}', [suruburiController::class, 'showEdit']);
Route::put('/suruburi/edit-suruburi/{suruburi}', [suruburiController::class, 'produsEdit']);
Route::delete('/suruburi/delete-suruburi/{suruburi}', [suruburiController::class, 'deleteProdus']);

Route::get('/santehnica/edit-santehnica/{santehnica}', [santehnicaController::class, 'showEdit']);
Route::put('/santehnica/edit-santehnica/{santehnica}', [santehnicaController::class, 'produsEdit']);
Route::delete('/santehnica/delete-santehnica/{santehnica}', [santehnicaController::class, 'deleteProdus']);


Route::post('/add-to-cart/electrica', [ShoppingCartController::class, 'addToCartElectrica']);
Route::post('/add-to-cart/uzcasnic', [ShoppingCartController::class, 'addToCartuzcasnic']);
Route::post('/add-to-cart/instrumente', [ShoppingCartController::class, 'addToCartinstrumente']);
Route::post('/add-to-cart/suruburi', [ShoppingCartController::class, 'addToCartsuruburi']);
Route::post('/add-to-cart/santehnica', [ShoppingCartController::class, 'addToCartsantehnica']);

Route::get('/shopping-cart', [ShoppingCartController::class, 'showCart'])->name('shopping-cart');
Route::delete('/shopping-cart/{item}', [ShoppingCartController::class, 'removeItem'])->name('shopping-cart/remove');
Route::post('/shopping-cart/submit', [ShoppingCartController::class, 'submitCart'])->name('shopping-cart/submit');

Route::get('/order', [OrderController::class, 'show']);
Route::delete('/order/complete/{order}', [OrderController::class, 'complete']);