<?php

use App\Http\Controllers\AreaController;
use App\Http\Controllers\MedicineController;
use Illuminate\Support\Facades\Route;

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
    return view('admin.dashboard');
});

Route::prefix('/areas')->group(function () {
    Route::get('/', [AreaController::class, 'index'])->name('areas.index');
    Route::get('/create', [AreaController::class, 'create'])->name('areas.create');
    Route::post('/', [AreaController::class, 'store'])->name('areas.store');
    Route::get('/{area}', [AreaController::class, 'destroy'])->name('areas.destroy');

});
Route::prefix('/medicines')->group(function () {
    Route::get('/', [MedicineController::class, 'index'])->name('medicines.index');
    Route::get('/create', [MedicineController::class, 'create'])->name('medicines.create');
    Route::post('/', [MedicineController::class, 'store'])->name('medicines.store');
    Route::delete('/{id}', [MedicineController::class, 'destroy'])->name('medicines.destroy');
    Route::get('/{id}/edit', [MedicineController::class, 'edit'])->name('medicines.edit');
    Route::put('/{id}', [MedicineController::class, 'update'])->name('medicines.update');
    Route::get('/{id}', [MedicineController::class, 'show'])->name('medicines.show');
});



