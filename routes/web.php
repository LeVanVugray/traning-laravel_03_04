<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudUserController;

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

Route::get('dashboard', [CrudUserController::class, 'dashboard']);

Route::get('login', [CrudUserController::class, 'login'])->name('login');
Route::post('login', [CrudUserController::class, 'authUser'])->name('user.authUser');

Route::get('create', [CrudUserController::class, 'createUser'])->name('user.createUser');
Route::post('create', [CrudUserController::class, 'postUser'])->name('user.postUser');

Route::get('read', [CrudUserController::class, 'readUser'])->name('user.readUser');

Route::get('delete', [CrudUserController::class, 'deleteUser'])->name('user.deleteUser');

Route::get('update', [CrudUserController::class, 'updateUser'])->name('user.updateUser');
Route::post('update', [CrudUserController::class, 'postUpdateUser'])->name('user.postUpdateUser');

Route::get('list', [CrudUserController::class, 'listUser'])->name('user.list');

Route::get('signout', [CrudUserController::class, 'signOut'])->name('signout');

Route::get('index', [CrudUserController::class, 'index'])->name('index');

Route::get('shop', [CrudUserController::class, 'shop'])->name('shop');

Route::get('detail', [CrudUserController::class, 'detail'])->name('detail');

Route::get('cart', [CrudUserController::class, 'cart'])->name('cart');

Route::get('checkout', [CrudUserController::class, 'checkout'])->name('checkout');

Route::get('contact', [CrudUserController::class, 'contact'])->name('contact');
//
Route::get('indexexe', [CrudUserController::class, 'indexexe'])->name('indexexe');

Route::get('loginexe', [CrudUserController::class, 'loginexe'])->name('loginexe');

Route::get('listexe', [CrudUserController::class, 'listexe'])->name('listexe');

Route::get('registerexe', [CrudUserController::class, 'registerexe'])->name('registerexe');

Route::get('updateexe', [CrudUserController::class, 'updateexe'])->name('updateexe');

Route::get('viewexe', [CrudUserController::class, 'viewexe'])->name('viewexe');




Route::get('/', function () {
    return view('welcome');
});
