<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\TechsController;
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

Route::get('/', function () {
    return view('home');
})->name('welcome');

Route::get('/contact', [EmailController::class, 'create'])->name('contact.show');
Route::post('/contact', [EmailController::class, 'sendEmail'])->name('send.email');

Route::get('/projects', function () {
        return view('projects');
})->name('projects');

Route::get('/technologies', [TechsController::class, 'index'])->name('technologies');


/* Admin Section */
Route::get('/admin', [AdminController::class, "connect"])->name('admin.login');
Route::post('/admin/home', [AdminController::class, "showPanel"])->name("show.panel");

Route::get('/admin/techs', [AdminController::class, 'techsPanel'])->name('techsPanel');
Route::post('/admin/techs', [TechsController::class, 'update'])->name('update.techs');

Route::get('/admin/projects', [AdminController::class, 'projectsPanel'])->name('projectsPanel');
Route::post('/admin/projects', [])->name('update.projects');

Route::fallback(function () {
   return view('404');
});
