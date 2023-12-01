<?php

use App\Http\Controllers\AttendenceController;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SalaryController;
use App\Http\Controllers\SalesReportController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\SupplierController;
use Illuminate\Support\Facades\Route;


//admin panel route
Route::get('/', [BackendController::class, 'admin'])->name('admin');

// Route::prefix('admin')->group(function () {
//     Route::get('/', [BackendController::class, 'admin'])->name('admin');
// });


//attendence_details start
Route::get('/attendence_details_index', [AttendenceController::class, 'index'])->name('attendence_details_index');
Route::get('/attendence_details_create', [AttendenceController::class, 'create'])->name('attendence_details_create');
Route::post('/attendence_details_store', [AttendenceController::class, 'store'])->name('attendence_details_store');
Route::get('/attendence_details_view/{id}', [AttendenceController::class, 'view'])->name('attendence_details_view');
Route::get('/attendence_details_edit/{id}', [AttendenceController::class, 'edit'])->name('attendence_details_edit');
Route::post('/attendence_details_update/{id}', [AttendenceController::class, 'update'])->name('attendence_details_update');
Route::get('/attendence_details_delete/{id}', [AttendenceController::class, 'delete'])->name('attendence_details_delete');
//attendence_details start

//category_details start
Route::get('/category_details_index', [CategoryController::class, 'index'])->name('category_details_index');
Route::get('/category_details_create', [CategoryController::class, 'create'])->name('category_details_create');
Route::post('/category_details_store', [CategoryController::class, 'store'])->name('category_details_store');
Route::get('/category_details_view/{id}', [CategoryController::class, 'view'])->name('category_details_view');
Route::get('/category_details_edit/{id}', [CategoryController::class, 'edit'])->name('category_details_edit');
Route::post('/category_details_update/{id}', [CategoryController::class, 'update'])->name('category_details_update');
Route::get('/category_details_delete/{id}', [CategoryController::class, 'delete'])->name('category_details_delete');
//category_details start

//customer_details start
Route::get('/customer_details_index', [CustomerController::class, 'index'])->name('customer_details_index');
Route::get('/customer_details_create', [CustomerController::class, 'create'])->name('customer_details_create');
Route::post('/customer_details_store', [CustomerController::class, 'store'])->name('customer_details_store');
Route::get('/customer_details_view/{id}', [CustomerController::class, 'view'])->name('customer_details_view');
Route::get('/customer_details_edit/{id}', [CustomerController::class, 'edit'])->name('customer_details_edit');
Route::post('/customer_details_update/{id}', [CustomerController::class, 'update'])->name('customer_details_update');
Route::get('/customer_details_delete/{id}', [CustomerController::class, 'delete'])->name('customer_details_delete');
//customer_details start

//employee_details start
Route::get('/employee_details_index', [EmployeeController::class, 'index'])->name('employee_details_index');
Route::get('/employee_details_create', [EmployeeController::class, 'create'])->name('employee_details_create');
Route::post('/employee_details_store', [EmployeeController::class, 'store'])->name('employee_details_store');
Route::get('/employee_details_view/{id}', [EmployeeController::class, 'view'])->name('employee_details_view');
Route::get('/employee_details_edit/{id}', [EmployeeController::class, 'edit'])->name('employee_details_edit');
Route::post('/employee_details_update/{id}', [EmployeeController::class, 'update'])->name('employee_details_update');
Route::get('/employee_details_delete/{id}', [EmployeeController::class, 'delete'])->name('employee_details_delete');
//employee_details end

//expense_details start
Route::get('/expense_details_index', [ExpenseController::class, 'index'])->name('expense_details_index');
Route::get('/expense_details_create', [ExpenseController::class, 'create'])->name('expense_details_create');
Route::post('/expense_details_store', [ExpenseController::class, 'store'])->name('expense_details_store');
Route::get('/expense_details_view/{id}', [ExpenseController::class, 'view'])->name('expense_details_view');
Route::get('/expense_details_edit/{id}', [ExpenseController::class, 'edit'])->name('expense_details_edit');
Route::post('/expense_details_update/{id}', [ExpenseController::class, 'update'])->name('expense_details_update');
Route::get('/expense_details_delete/{id}', [ExpenseController::class, 'delete'])->name('expense_details_delete');
//expense_details start

//order_details start
Route::get('/order_details_index', [OrderController::class, 'index'])->name('order_details_index');
Route::get('/order_details_create', [OrderController::class, 'create'])->name('order_details_create');
Route::post('/order_details_store', [OrderController::class, 'store'])->name('order_details_store');
Route::get('/order_details_view/{id}', [OrderController::class, 'view'])->name('order_details_view');
Route::get('/order_details_edit/{id}', [OrderController::class, 'edit'])->name('order_details_edit');
Route::post('/order_details_update/{id}', [OrderController::class, 'update'])->name('order_details_update');
Route::get('/order_details_delete/{id}', [OrderController::class, 'delete'])->name('order_details_delete');
//order_details end

//product_details start
Route::get('/product_details_index', [ProductsController::class, 'index'])->name('product_details_index');
Route::get('/product_details_create', [ProductsController::class, 'create'])->name('product_details_create');
Route::post('/product_details_store', [ProductsController::class, 'store'])->name('product_details_store');
Route::get('/product_details_view/{id}', [ProductsController::class, 'view'])->name('product_details_view');
Route::get('/product_details_edit/{id}', [ProductsController::class, 'edit'])->name('product_details_edit');
Route::post('/product_details_update/{id}', [ProductsController::class, 'update'])->name('product_details_update');
Route::get('/product_details_delete/{id}', [ProductsController::class, 'delete'])->name('product_details_delete');
//product_details end

//salary_details start
Route::get('/salary_details_index', [SalaryController::class, 'index'])->name('salary_details_index');
Route::get('/salary_details_create', [SalaryController::class, 'create'])->name('salary_details_create');
Route::post('/salary_details_store', [SalaryController::class, 'store'])->name('salary_details_store');
Route::get('/salary_details_view/{id}', [SalaryController::class, 'view'])->name('salary_details_view');
Route::get('/salary_details_edit/{id}', [SalaryController::class, 'edit'])->name('salary_details_edit');
Route::post('/salary_details_update/{id}', [SalaryController::class, 'update'])->name('salary_details_update');
Route::get('/salary_details_delete/{id}', [SalaryController::class, 'delete'])->name('salary_details_delete');
//salary_details end

//sales_report_details start
Route::get('/sales_report_details_index', [SalesReportController::class, 'index'])->name('sales_report_details_index');
Route::get('/sales_report_details_create', [SalesReportController::class, 'create'])->name('sales_report_details_create');
Route::post('/sales_report_details_store', [SalesReportController::class, 'store'])->name('sales_report_details_store');
Route::get('/sales_report_details_view/{id}', [SalesReportController::class, 'view'])->name('sales_report_details_view');
Route::get('/sales_report_details_edit/{id}', [SalesReportController::class, 'edit'])->name('sales_report_details_edit');
Route::post('/sales_report_details_update/{id}', [SalesReportController::class, 'update'])->name('sales_report_details_update');
Route::get('/sales_report_details_delete/{id}', [SalesReportController::class, 'delete'])->name('sales_report_details_delete');
//sales_report_details end

//supplier_details start
Route::get('/supplier_details_index', [SupplierController::class, 'index'])->name('supplier_details_index');
Route::get('/supplier_details_create', [SupplierController::class, 'create'])->name('supplier_details_create');
Route::post('/supplier_details_store', [SupplierController::class, 'store'])->name('supplier_details_store');
Route::get('/supplier_details_view/{id}', [SupplierController::class, 'view'])->name('supplier_details_view');
Route::get('/supplier_details_edit/{id}', [SupplierController::class, 'edit'])->name('supplier_details_edit');
Route::post('/supplier_details_update/{id}', [SupplierController::class, 'update'])->name('supplier_details_update');
Route::get('/supplier_details_delete/{id}', [SupplierController::class, 'delete'])->name('supplier_details_delete');
//supplier_detailcategory

//settings_details start
Route::get('/settings_details_index', [SettingsController::class, 'index'])->name('settings_details_index');
Route::get('/settings_details_create', [SettingsController::class, 'create'])->name('settings_details_create');
Route::post('/settings_details_store', [SettingsController::class, 'store'])->name('settings_details_store');
Route::get('/settings_details_view/{id}', [SettingsController::class, 'view'])->name('settings_details_view');
Route::get('/settings_details_edit/{id}', [SettingsController::class, 'edit'])->name('settings_details_edit');
Route::post('/settings_details_update/{id}', [SettingsController::class, 'update'])->name('settings_details_update');
Route::get('/settings_details_delete/{id}', [SettingsController::class, 'delete'])->name('settings_details_delete');
//settings_detailcategory



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
