<?php

use App\Http\Controllers\InstructorController;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;
use \App\Http\Controllers\UserController;
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

Route::get('/', function () {return view('welcome');});


//Role based login routes
Route::get('/dashboard/leerling', function () {
    return view( 'student.dashboard');
})->middleware(['has_role:student']);
Route::get('/dashboard/instructeur', function () {
    return view( 'instructor.dashboard');
})->middleware(['has_role:instructor']);
Route::get('/dashboard/eigenaar', function () {
    return view( 'owner.dashboard');
})->middleware(['has_role:owner']);


//Owner dashboard routes
Route::middleware('has_role:owner')->group( function(){
    Route::get('/dashboard/eigenaar', [OwnerController::class, 'index']);
    Route::get('/dashboard/eigenaar/mededeling', function () {return view( 'owner.car');});
    Route::post('/dashboard/eigenaar/wagenpark', [OwnerController::class, 'store'])->name('store_car');
    Route::get('/dashboard/eigenaar/wagenpark', [OwnerController::class, 'get'])->name('get');
    Route::get('/dashboard/eigenaar/mededelingen', function () {return view( 'owner.messages');});
    Route::post('/dashboard/eigenaar/mededelingen', [OwnerController::class, 'store_messages'])->name('store_messages');
    Route::get('/dashboard/eigenaar/mededelingen', [OwnerController::class, 'return_messages']);
    Route::get('/dashboard/eigenaar/mededelingen/{id}', [OwnerController::class, 'delete'])->name('delete_message');
    Route::get('/dashboard/eigenaar/{id}', [UserController::class, 'delete'])->name('delete_user');
});

//Instructor dashboard routes
Route::middleware('has_role:instructor')->group(function (){
    Route::get('/dashboard/instructeur', [InstructorController::class, 'get']);
    Route::get('/dashboard/instructeur/profiel', [InstructorController::class, 'show'])->name('show');
    Route::get('/dashboard/instructeur/plan',  function () {return view( 'instructor.appointment');});
    Route::get('/dashboard/instructeur/plan', [InstructorController::class, 'students']);
    Route::post('/dashboard/instructeur/plan', [InstructorController::class, 'store'])->name('appointment');
    Route::get('/dashboard/instructeur/ziekmelding', function () {return view( 'instructor.report');});
    Route::post('/dashboard/instructeur/ziekmelding', [InstructorController::class, 'report'])->name('update_report');
    Route::get('/dashboard/instructeur/{id}', [InstructorController::class, 'delete'])->name('delete_appointment');
});

//Student dashboard routes
Route::get('/dashboard/leerling', [StudentController::class, 'show'])->middleware('has_role:student')->name('student');

//homepage routes
Route::get('/', [HomeController::class, 'index']);
Route::get('/lespakketen', function () {return view( 'home.lessons');});
Route::get('/lespakketen', [HomeController::class, 'index_lesson']);
Route::get('/contact', function () {return view( 'home.contact');});
Route::get('/contact', [HomeController::class, 'index_owner']);
Route::get('/algemene-voorwaarden', function () {return view( 'home.conditions');});

require __DIR__.'/auth.php';
