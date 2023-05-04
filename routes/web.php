<?php

use App\Http\Controllers\DatasurveisController;
use App\Http\Controllers\IndexController;
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

Route::get('/', [IndexController::class, 'index']);
Route::get('/detail/{datasurvei}', [DatasurveisController::class, 'detail'])->name('detail');


// Route::get('/', function () {
//     return view('user.index');
// })->name('kirim');

Route::get('/email', function () {
    return view('email.konfirmasi3');
})->name('kirim');

Route::middleware('auth')->group(function(){
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    Route::get("/tambahdanaturwaktu", [DatasurveisController::class, 'twdantahun'])->name('twdantahun');

});

Route::get('/pdftes', function(){
    return view('pdf.pdf3');
});



Route::get("/pdf/{id}/{nama}", [DatasurveisController::class, 'pdf'])->name('pdf');
Route::get("/{dataid}/{nama}", [DatasurveisController::class, 'pdfuser'])->name('pdfuser');

require __DIR__.'/auth.php';
