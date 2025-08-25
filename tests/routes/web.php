<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResumeController;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/resume/download', [ResumeController::class, 'download'])->name('resume.download');
Route::get('/resume/preview', [ResumeController::class, 'preview'])->name('resume.preview');


Route::get('/resume1/download', [ResumeController::class, 'download1'])->name('resume1.download');
Route::get('/resume1/preview', [ResumeController::class, 'preview1'])->name('resume1.preview');

Route::get('/template1/download', [ResumeController::class, 'download2'])->name('template1.download');
Route::get('/template1/preview', [ResumeController::class, 'preview2'])->name('template1.preview');

Route::get('/template2/download', [ResumeController::class, 'download3'])->name('template2.download');
Route::get('/template2/preview', [ResumeController::class, 'preview3'])->name('template2.preview');

Route::get('/template3/download', [ResumeController::class, 'download4'])->name('template3.download');
Route::get('/template3/preview', [ResumeController::class, 'preview4'])->name('template3.preview');

Route::get('/template4/download', [ResumeController::class, 'download5'])->name('template4.download');
Route::get('/template4/preview', [ResumeController::class, 'preview5'])->name('template4.preview');

Route::get('/templates/download', [ResumeController::class, 'download6'])->name('templates.download');
Route::get('/templates/preview', [ResumeController::class, 'preview6'])->name('templates.preview');