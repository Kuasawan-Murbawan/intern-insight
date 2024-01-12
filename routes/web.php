<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CompaniesController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\UserRegistrationController;
use App\Models\Companies;


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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});



// Lab Test
Route::get('/studentRegister', [UserRegistrationController::class, 'showRegistrationForm'])->name('studentRegister');

Route::post('/studentRegister', [UserRegistrationController::class, 'store'])->name('studentRegister.store');

Route::get('/student', [UserRegistrationController::class, 'showStudent'])->name('student.show');


// Show website
Route::get('/home', function () {
    return view('components/company-listing');
})->name('home');

// Insert pre-defined reviews
Route::get('/review/init', [ReviewController::class, 'init'])->name('review.init');

// Show Reviews filter by company
Route::get('/review/{companyID}', [ReviewController::class, 'showReview'])->name('review.show');


// Show listed companies
Route::get('companies/admin', [CompaniesController::class, 'showCompaniesAdmin'])->name('company.admin');

Route::get('companies/user', [CompaniesController::class, 'showCompaniesUser'])->name('company.user');

// Insert Companies
Route::get('/companies/form', [CompaniesController::class, 'showForm'])->name('company.form');

Route::post('/companies/create', [CompaniesController::class, 'insertCompanies'])->name('company.create');


// Choose Type of User
Route::get('/companies', [CompaniesController::class, 'chooseUser'])->name('company.choose');

// Admin - Update Companies (TODO)
Route::get('/companies/update', [CompaniesController::class, 'showUpdateForm'])->name('company.update.form');

Route::post('/companies/update/{companyID}', [CompaniesController::class, 'updateCompany'])->name('company.update');

// Admin - Delete Companies (TODO)

// Companies Details
Route::get('details/maybank', [CompaniesController::class, 'showDetailsMaybank'])->name('company.details.maybank');
Route::get('details/tm', [CompaniesController::class, 'showDetailsTM'])->name('company.details.tm');
Route::get('details/petronas', [CompaniesController::class, 'showDetailsPetronas'])->name('company.details.petronas');
Route::get('details/shell', [CompaniesController::class, 'showDetailsShell'])->name('company.details.shell');
Route::get('details/tnb', [CompaniesController::class, 'showDetailsTNB'])->name('company.details.tnb');


// User - Add Review (TODO)
Route::get('/review/form/{companyID}', [ReviewController::class, 'showUserForm'])->name('review.form');
Route::post('/review/create', [ReviewController::class, 'store'])->name('review.create');

// User - Delete Review (TODO)