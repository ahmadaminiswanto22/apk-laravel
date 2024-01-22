<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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
//     return view('home', [
//         'title' => 'Home'
//     ]);
// });
// Route::get('/about', function () {
//     return view('about');
// });
// Route::get('/contact', function () {
//     return view('contact', [
//         'title' => 'Contact',
//         'tlp' => '0881111222'
//     ]);
// });

// Route::get('/bio', function () {
//     return view('bio.biodata',[
//         'title' => 'Profile'
//     ]);
// });

Route::get('/', function () {
    return view('template.index',[
        'title' => 'Beranda'
    ]);
});
Route::get('/about', function () {
    return view('template.about',[
        'title' => 'About'
    ]);
});
// Route::get('/contact', function () {
//     return view('template.contact',[
//         'title' => 'Contact'
//     ]);
// });
Route::get('/contact', [ContactController::class, 'index']);
Route::post('/contact', [ContactController::class, 'store']);


