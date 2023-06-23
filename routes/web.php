<?php

use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', \App\Http\Livewire\Frontend\Home::class)->name('home.index');
//Route::get('/buy-ticket', \App\Http\Livewire\Frontend\Home::class)->name('home.index');
Route::get('/sign-in', [\App\Http\Controllers\Controller::class, 'login']);
Route::get('/ticket-info/{id}', \App\Http\Livewire\Frontend\TicketInfo::class);
//Route::get('Home', Dashboard::class)->name('dashboard.index');
//Route::get('/home', \App\Http\Livewire\Backend\Admin\Dashboard::class);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {

    Route::get('redirects', [\App\Http\Controllers\Controller::class, 'index']);
    Route::get('/dashboard', \App\Http\Livewire\Backend\Admin\Dashboard::class)->name('dashboard.index');
    Route::get('/ticket', \App\Http\Livewire\Backend\Admin\Ticket::class)->name('ticket.index');
////    Route::get('/dashboard', function () {
////        return view('dashboard');
////    })->name('dashboard');


//    Route::get('/dashboard', \App\Http\Livewire\Backend\Admin\Dashboard::class);


});
//Route::middleware(['auth:sanctum', 'verified'], function () {
Route::group(['auth:sanctum', 'verified'], function () {
//    return view('dashboard');
    Route::get('dashboard', \App\Http\Livewire\Backend\Admin\Dashboard::class)->name('dashboard.index');
});
Route::get('Home', \App\Http\Livewire\Backend\Admin\Dashboard::class)->name('dashboard.index');
