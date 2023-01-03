<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
//AdminPage
Route::get('/admin/projects/create', [App\Http\Controllers\AdminProjectController::class, 'create'])->name('admin.projects.create');
Route::post('/admin/projects/store', [App\Http\Controllers\AdminProjectController::class, 'store'])->name('admin.projects.store');

Route::get('/admin/projects/index', [App\Http\Controllers\AdminProjectController::class, 'index'])->name('admin.projects.index');

Route::get('/admin/projects/edit/{id}', [App\Http\Controllers\AdminProjectController::class, 'edit'])->name('admin.projects.edit');
Route::post('/admin/projects/update/{id}', [App\Http\Controllers\AdminProjectController::class, 'update'])->name('admin.projects.update');
Route::delete('/admin/projects/delete/{id}', [App\Http\Controllers\AdminProjectController::class, 'destroy'])->name('admin.projects.destroy');

//UserPage
Route::get('/projects/index', [App\Http\Controllers\HomaPageController::class, 'index'])->name('projects.index');
Route::get('/projects/index/{id}', [App\Http\Controllers\HomaPageController::class, 'detail'])->name('projects.detail');

//search functionally
Route::get('/search', [App\Http\Controllers\HomaPageController::class, 'search'])->name('projects.search');


//routes for skill admin
Route::get('/admin/skills/create', [App\Http\Controllers\AdminSkillsController::class, 'create'])->name('admin.skills.create');
Route::post('/admin/skills/store', [App\Http\Controllers\AdminSkillsController::class, 'store'])->name('admin.skills.store');
Route::get('/admin/skills/index', [App\Http\Controllers\AdminSkillsController::class, 'index'])->name('admin.skills.index');
Route::delete('/admin/skills/delete/{id}', [App\Http\Controllers\AdminSkillsController::class, 'destroy'])->name('admin.skills.destroy');

//routes for skill chart show 
Route::get('/skills/index', [App\Http\Controllers\HomaPageController::class, 'showSkillsChart'])->name('skills.index');

//routes for PDF view 
Route::get('/pdf/view', [App\Http\Controllers\pdfController::class, 'pdfView'])->name('pdf.view');

//routes for PDF 
Route::get('/pdf/convert', [App\Http\Controllers\pdfController::class, 'pdfgeneration'])->name('pdf.convert');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
