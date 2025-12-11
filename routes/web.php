<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GoogleAuthController;
use App\Http\Controllers\StateSubmissionController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::match(['GET', 'HEAD'], '/', [HomeController::class, 'LoadHome'])->name('home');

/* Laravel looks for /login to handle login - we're bypassing that and JUST using google oAuth. */
Route::get('/login', function () {
    return redirect('/auth/google/redirect');
})->name('login');


/* google oAuth */
Route::get('/auth/google/redirect', [GoogleAuthController::class, 'redirect'])
    ->name('google.redirect');

Route::get('/auth/google/callback', [GoogleAuthController::class, 'callback'])
    ->name('google.callback');

Route::get('/logout', [GoogleAuthController::class, 'logout'])
    ->name('logout');


/* State photo handling */

//Load a particular state's upload page
//Code should be two characters: e.g. CA or TX
//create a name as well so we can this in a blade instead of hardcoding the URI 
Route::get('/state/{code}/submit', [StateSubmissionController::class, 'create'])
    ->where(['code' => '[A-Z]{2}'])
    ->name('state.submit')
    ->middleware('auth');

//Post data from the user about a particular state
Route::post('/state/{code}/submit', [StateSubmissionController::class, 'store'])
    ->where(['code' => '[A-Z]{2}'])
    ->name('state.submit.store')
    ->middleware('auth');

