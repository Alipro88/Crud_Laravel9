<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductsController;

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

Route::get('/home', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/DB', function () {
    return view('dbcheck');
});

// Route::get('/Re', function () {
//     return view('users/createRead');
// });




Route::get('createRead', [ProductsController::class, 'index']);

Route::get('addproduct', [ProductsController::class, 'addProducts']);

Route::post('saveproducts', [ProductsController::class, 'saveProduct']);

Route::get('deleteProduct/{id}', [ProductsController::class, 'deleteProduct']);

Route::post ('updateProducts', [ProductsController::class, 'updateProducts']);

Route::get('editProduct/{id}', [ProductsController::class, 'editProduct']);



// Route::get('testapi', [ProductsController::class, 'test']);


//Route test pour l'authentification 

// Route de connexion
Route::post('/login', 'AuthController@login');

// Route d'inscription
Route::post('/register', 'AuthController@register');

// Route de déconnexion
Route::post('/logout', 'AuthController@logout')->middleware('auth:api');

// Autres routes nécessitant une authentification
















