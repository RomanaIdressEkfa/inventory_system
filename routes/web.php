<?php

use App\Http\Controllers\BackendController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SupplierController;
use Illuminate\Support\Facades\Route;


//admin panel route
Route::get('/', [BackendController::class, 'admin'])->name('admin');

// Route::prefix('admin')->group(function () {
//     Route::get('/', [BackendController::class, 'admin'])->name('admin');
// });


//employee_details start
Route::get('/employee_details_index', [EmployeeController::class, 'index'])->name('employee_details_index');
Route::get('/employee_details_create', [EmployeeController::class, 'create'])->name('employee_details_create');
Route::post('/employee_details_store', [EmployeeController::class, 'store'])->name('employee_details_store');
Route::get('/employee_details_view/{id}', [EmployeeController::class, 'view'])->name('employee_details_view');
Route::get('/employee_details_edit/{id}', [EmployeeController::class, 'edit'])->name('employee_details_edit');
Route::post('/employee_details_update/{id}', [EmployeeController::class, 'update'])->name('employee_details_update');
Route::get('/employee_details_delete/{id}', [EmployeeController::class, 'delete'])->name('employee_details_delete');
//employee_details end

//customer_details start
Route::get('/customer_details_index', [CustomerController::class, 'index'])->name('customer_details_index');
Route::get('/customer_details_create', [CustomerController::class, 'create'])->name('customer_details_create');
Route::post('/customer_details_store', [CustomerController::class, 'store'])->name('customer_details_store');
Route::get('/customer_details_view/{id}', [CustomerController::class, 'view'])->name('customer_details_view');
Route::get('/customer_details_edit/{id}', [CustomerController::class, 'edit'])->name('customer_details_edit');
Route::post('/customer_details_update/{id}', [CustomerController::class, 'update'])->name('customer_details_update');
Route::get('/customer_details_delete/{id}', [CustomerController::class, 'delete'])->name('customer_details_delete');
//customer_details start

//customer_details start
Route::get('/supplier_details_index', [SupplierController::class, 'index'])->name('supplier_details_index');
Route::get('/supplier_details_create', [SupplierController::class, 'create'])->name('supplier_details_create');
Route::post('/supplier_details_store', [SupplierController::class, 'store'])->name('supplier_details_store');
Route::get('/supplier_details_view/{id}', [SupplierController::class, 'view'])->name('supplier_details_view');
Route::get('/supplier_details_edit/{id}', [SupplierController::class, 'edit'])->name('supplier_details_edit');
Route::post('/supplier_details_update/{id}', [SupplierController::class, 'update'])->name('supplier_details_update');
Route::get('/supplier_details_delete/{id}', [SupplierController::class, 'delete'])->name('supplier_details_delete');
//customer_details start

//for pdf
Route::get('/employees_details_pdf/{id}', [PdfController::class, 'employees_details_pdf'])->name('employees_details_pdf');


//authentication route
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//profile route breeze
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
