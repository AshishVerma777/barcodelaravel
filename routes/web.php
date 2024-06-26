<?php

use App\Http\Controllers\Admin\RoleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Product;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserManagementController;
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

//
Route::get('login', [AuthController::class, 'getLogin'])->name('getLogin');
Route::post('/admin/login', [AuthController::class, 'postLogin'])->name('postLogin');
Route::view('superadmin/login', 'admin.auth.adminlogin');
Route::post('superadmin/login', [AuthController::class, 'adminlogin'])->name('adminlogin');

//Route::get('admin/dashboard', [ProfileController::class, 'dashboard'])->name('admindashboard');

//--------------------------------------------------------------------------------------
Route::group(['middleware'=>['admin_auth']],function(){
    
   // Route::get('/admin/dashboard',[ProfileController::class,'dashboard'])->name('dashboard');
   // Route::get('/admin/users',[UserController::class,'index'])->name('users.index');
    Route::resource('admin/users', UserManagementController::class);
    Route::resource('admin/roles',RoleController::class);
    
 
    Route::get('admin/dashboard', [ProfileController::class, 'dashboard'])->name('admindashboard');

 });

 Route::group(['middleware' => 'auth'], function() {
   Route::get('create', [ProductController::class, 'create'])->name('create');
   Route::post('store', [ProductController::class, 'store'])->name('store');
   Route::post('/print/{id}',  [ProductController::class, 'print'])->name('print');
   Route::get('show', [ProductController::class, 'show'])->name('show');
   Route::get('edit/{id}', [ProductController::class, 'Editshow'])->name('Editshow');
   Route::get('update-container-status/{container}', [ProductController::class, 'updateStatus'])->name('update_container_status');
   Route::post('update/{id}', [ProductController::class, 'update'])->name('update');
   Route::get('document', [ProductController::class, 'document'])->name('document');
       
   Route::get('/', [ProductController::class, 'dashboard'])->name('dashboard');
   Route::get('/admin/logout',[ProfileController::class,'logout'])->name('logout');

 });






Route::get('/index', [ProductController::class, 'index']);

// Route::get('create', [ProductController::class, 'create'])->name('create');
// Route::post('store', [ProductController::class, 'store'])->name('store');
// Route::post('/print/{id}',  [ProductController::class, 'print'])->name('print');
// Route::get('show', [ProductController::class, 'show'])->name('show');
// Route::get('edit/{id}', [ProductController::class, 'Editshow'])->name('Editshow');
// Route::get('update-container-status/{container}', [ProductController::class, 'updateStatus'])->name('update_container_status');
// Route::post('update/{id}', [ProductController::class, 'update'])->name('update');
// Route::get('document', [ProductController::class, 'document'])->name('document');
    
// Route::get('/', [ProductController::class, 'dashboard'])->name('dashboard');


// Route::post('/testprint', function() {
//     return 'Form submitted successfully!';
// })->name('testprint');
//-----------------------------------------------------------------------------------------

Route::get('/gridData', [ProductController::class, 'gridData'])->name('gridData');
