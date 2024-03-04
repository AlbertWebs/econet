<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;


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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('homes');

Auth::routes();
/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:user'])->group(function () {
    Route::get('/home', [HomeController::class, 'home'])->name('home');
    Route::post('/transfer-funds', [HomeController::class, 'transfer'])->name('Transfer');

});

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('/admin/home', [AdminController::class, 'index'])->name('admin.home');
    Route::get('/admin/addUpdate', [AdminController::class, 'addUpdate'])->name('admin.addUpdate');
    Route::post('/admin/add_Update', [AdminController::class, 'add_Update'])->name('admin.add_Update');
    Route::get('/admin/updates', [AdminController::class, 'updates'])->name('admin.updates');
    Route::get('/admin/users', [AdminController::class, 'users'])->name('admin.users');
    Route::get('/admin/transfers', [AdminController::class, 'transfers'])->name('admin.transfers');
    Route::get('/admin/transactions', [AdminController::class, 'transactions'])->name('admin.transactions');
    Route::get('/admin/delateUpdate/{id}', [AdminController::class, 'delateUpdate'])->name('admin.delateUpdate');
    Route::get('/admin/delateTransaction/{id}', [AdminController::class, 'delateTransaction'])->name('admin.delateTransaction');

    Route::get('/admin/addDeposit', [AdminController::class, 'addDeposit'])->name('admin.addDeposit');
    Route::post('/admin/add_Deposit', [AdminController::class, 'add_Deposit'])->name('admin.Deposit');
    Route::get('/admin/deposits', [AdminController::class, 'updates'])->name('admin.Deposit');

    Route::post('/transfer-funds', [HomeController::class, 'transfer'])->name('Transfer');



});

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:manager'])->group(function () {
    Route::get('/manager/home', [HomeController::class, 'managerHome'])->name('manager.home');
});
