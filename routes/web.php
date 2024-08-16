<?php

use App\Http\Controllers\CropsController;
use App\Http\Controllers\RecommendationsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\HtmlMinifier;
use App\Models\Crops;

Route::middleware([HtmlMinifier::class])->group(function () {
    Route::get('/', function () {
        return redirect()->route('dashboard');
        // return view('welcome');
    });

    Route::get('/dashboard', function () {
        $results = Crops::latest()->limit(4)->get();
        $crops = $results->unique(['botanicalName']);

        return view('dashboard')->with(['crops' => $crops]);
    })->middleware(['auth', 'verified'])->name('dashboard');

    Route::middleware(['auth', 'verified'])->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
        //
        // Route::get('recommendations', [RecommendationsController::class, 'adminAttendance'])->name('categories');
        // Route::get('users', [AttendanceController::class, 'viewStudents'])->name('students.view');
        // Route::resource('customers', CustomersController::class);
        // Route::resource('products', ProductsController::class);
        // Route::resource('invoices', InvoicesController::class);
        Route::resource('crops', CropsController::class);
        Route::resource('recommendations', RecommendationsController::class);

        //
        Route::controller(RecommendationsController::class)->group(function () {
            Route::post('/recommendationslist/Store', 'create')->name('recommendationslist.store');
        });
    });


    require __DIR__ . '/auth.php';
});
