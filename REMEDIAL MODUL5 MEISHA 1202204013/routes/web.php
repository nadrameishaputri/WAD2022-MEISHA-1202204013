<?php

use App\Http\Controllers\VaccineController;
use App\Http\Controllers\PatientController;
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
});

// Route::get('/vaccine', function () {
//     return view('vaccine', [
//         "title" => "Vaccine Page"
//     ]);
// });

// Route::get('/patient', function () {
//     return view('patient', [
//         "title" => "Patient Page"
//     ]);
// });

// Route::get('/addVaccine', function () {
//     return view('addVaccine', [
//         "title" => "Vaccine Page"
//     ]);
// });

// Route::get('/updateVaccine', function () {
//     return view('updateVaccine', [
//         "title" => "Update Page"
//     ]);
// });

// Route::get('/addPatient', function () {
//     return view('addPatient', [
//         "title" => "Patient Page"
//     ]);
// });

// Route::get('/updatePatient', function () {
//     return view('updatePatient', [
//         "title" => "Patient Page"
//     ]);
// });

// Route::get('/addVacc', [VaccineController::class, 'addIndex'])->name('vaccine.add.index');

// Route::post('/addVacc', [VaccineController::class, 'add'])->name('vaccine.add');

Route::resource('/vaccine', VaccineController::class);
Route::resource('/patient', PatientController::class);