<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\MriController;
use App\Models\Test;
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

Route::get('/', [HomeController::class, 'alzheimer']);

Route::get('/home', [HomeController::class, 'home']);
Route::resource('/register', 'App\Http\Controllers\ClientController')->only(['index','store'])->middleware('Myguest');
Route::get('/login', [ClientController::class, 'showLogin'])->middleware('Myguest');
Route::post('/login',[ClientController::class, 'login'] )->name('login.store')->middleware('Myguest');
Route::delete('/logout',[ClientController::class, 'logout'])->name('logout.destroy')->middleware('MyClient');
Route::resource('/contact', 'App\Http\Controllers\ContactController')->only(['index','store'])->middleware('MyClient');

// ----------------Admin---------------

Route::get('/admin-home', [HomeController::class, 'adminHome'])->middleware('MyAdmin');
Route::resource('/admin', 'App\Http\Controllers\AdminController')->except('index');
Route::resource('/admin', 'App\Http\Controllers\AdminController')->only('index')->middleware('Myguest');
Route::delete('/log-out', [AdminController::class, 'logout'])->name('Admin.destroy')->middleware('MyAdmin'); 
Route::get('show-users', [AdminController::class, 'showUsers'])->middleware('MyAdmin');
Route::get('show-messages', [AdminController::class, 'showMessages'])->middleware('MyAdmin');
Route::delete('/delete-user/{id}', [AdminController::class, 'deleteUser'])->name('user.destroy')->middleware('MyAdmin');
Route::delete('/delete-message/{id}', [AdminController::class, 'deleteMessage'])->name('message.destroy')->middleware('MyAdmin');
// Route::get('/test1', function(){
//     return view('instruction');
//     }  
// );
// Route::get('/test2', function()
//     {
//         return view('Admin.addinstruction');
//     }
// );
// Route::get('/test3', function()
//     {
//         return view('Admin.editInstruction');
//     }
// );
// ---------------- Instructions ---------------------------------------
Route::resource('/instruction', 'App\Http\Controllers\InstructionController')->except('show', 'index')->middleware('MyAdmin');
Route::resource('/instruction', 'App\Http\Controllers\InstructionController')->only('index');

// -------------- Languages ------------------------------------------
Route::get('/language/{locale}', function($locale)
  {
    if(in_array($locale, ['ar', 'en']))
    {
        session()->put('locale', $locale);
    }
    return redirect()->back();
  }  
)->name('lang');

// ------------------- Memory TEST -----------------------
Route::get('/test-results', [TestController::class, 'showResults']);
Route::resource('/memory-test', 'App\Http\Controllers\TestController')->only('index', 'store', 'destroy')->middleware('MyClient');
// Route::get('/test1', function()
// {
//   return view('Admin.addAdmin');
// });
// Route::get('/test2',function()
// {
//   return view('Client.result');
// });
Route::resource('/mri', 'App\Http\Controllers\MriController')->only(['index','store'])->middleware('MyClient');
Route::resource('/mri', 'App\Http\Controllers\MriController')->only(['create'])->middleware('MyClient')->middleware('mri');
Route::get('/show-mri-results', [MriController::class, 'showResults'])->middleware('MyClient');
Route::get('/create-admin',[AdminController::class, 'AdminRegister'])->middleware('MyAdmin');
Route::post('/create-admin',[AdminController::class, 'register'])->middleware('MyAdmin')->name('create-admin.store');