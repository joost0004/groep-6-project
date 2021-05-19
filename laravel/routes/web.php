<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Verf\FunctionController;
use GuzzleHttp\Middleware;


$user = Auth::user();


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

// Route::get('/', [IndexController::class, 'show']);
Route::resource('/registration', RegistrationController::class);
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');
// Route::get('dashboard', function () {
//     redirect('/');
// });

// Route::get('/', FunctionController::class);

Route::get('/', function () {
    if (Auth::user()->function == 'admin') {
         return view('functions.admin.index');
    } else if (Auth::user()->function == 'werknemer') {
        return view('functions.werknemer.index');
    } else if (Auth::user()->function == 'customer') {
        return view('functions.customer.index');
    }
})->middleware(['auth'])->name('index');



// if ($user->function = 'admin') {
//     Route::get('/', function () {
//         return view('functions.admin.index');
//     })->middleware(['auth'])->name('index');
// }

require __DIR__.'/auth.php';
