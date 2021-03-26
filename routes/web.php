<?php
use App\Http\Controllers\ClassController;
use App\Http\Controllers\hsController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\HomeController;
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
    return view('welcome');
});

Route::get('/test', function(){
    return 'abc';
});


Route::resource('/lophoc', ClassController::class);

Route::resource('/student', StudentController::class);

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('deleteClass/{id}', [ClassController::class, 'deleteClass' ] );

Route::get('deleteStudent/{id}', [StudentController::class, '@deleteStudent']);

Route::post('updateClass/{id}', [ClassController::class, 'updateClass'])->name('updateClass');

Route::post('updateStudent/{id}', [StudentController::class, 'updateStudent'] )->name('updateStudent');
