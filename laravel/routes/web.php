<?php


use App\Http\Controllers\Calender2Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Auth;
use GuzzleHttp\Middleware;
use App\Http\Controllers\CalenderController;
use App\Http\Controllers\AdminPageController;
use App\Http\Controllers\EmailMessageController;



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


// General routing
// Route::get('/', function () {
//     switch (Auth::user()->function) {
//         case 'admin':
//             return view('functions.admin.index');
//             break;
//         case 'werknemer':
//             return view('functions.werknemer.index');
//             break;
//         case 'customer':
//             return view('functions.customer.index');
//             break;
//     }
// })->middleware(['auth'])->name('index');
Route::resource('/', IndexController::class)->middleware(['verified']);

require __DIR__.'/auth.php';

//Route::get('calender', [CalenderController::class, 'index'])->middleware(['auth'])->name('index');
Route::resource('/calender', Calender2Controller::class);

Route::post('calender/action', [CalenderController::class, 'action']);


Route::get('/admin', function() {
    return view('functions/admin/show');
});

route::get('/contact', [EmailMessageController::class, 'show']);
route::post('/registration/email', [EmailMessageController::class, 'store']);

// Admin routes
Route::resource('admin', AdminPageController::class)->middleware(['auth']);
