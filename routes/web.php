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

    Route::redirect('/dashboard', '/home');

    Route::get('/home', function () {
        redirect('home');
    })->name('dashboard');
    Route::get('companies/user', [CompaniesController::class, 'showCompaniesUser'])->name('company.user');

    // Insert pre-defined reviews
    Route::get('/review/init', [ReviewController::class, 'init'])->name('review.init');


    // Show website
    Route::get('/home', [CompaniesController::class, 'home'])->name('home');


    // Companies Details
    Route::get('details/{companyID}', [CompaniesController::class, 'showDetails'])->name('company.details');

    // Show company for admin view
    Route::get('/companies/admin', [CompaniesController::class, 'showCompaniesAdmin'])->name('company.admin')->middleware('admin');

    // Insert Companies
    Route::get('/companies/form', [CompaniesController::class, 'showForm'])->name('company.form');
    Route::post('/companies/create', [CompaniesController::class, 'insertCompanies'])->name('company.create');

    // Admin - Update Companies
    Route::get('/companies/updateform/{companyID}', [CompaniesController::class, 'showUpdateForm'])->name('company.update.form');
    Route::post('/companies/update/{companyID}', [CompaniesController::class, 'updateCompany'])->name('company.update');


    // Admin - Delete Companies
    Route::get('/companies/delete/{companyID}', [CompaniesController::class, 'delete'])->name('company.delete');

    // User - Add Review
    Route::get('/review/form/{companyID}', [ReviewController::class, 'showUserForm'])->name('review.form');
    Route::post('/review/create', [ReviewController::class, 'store'])->name('review.create');

    // User - Delete Review
    Route::get('/review/delete/{reviewID}', [ReviewController::class, 'delete'])->name('review.delete');


    // Show Reviews filter by company
    Route::get('/review/{companyID}', [ReviewController::class, 'showReview'])->name('review.show');
});





//Misc
// Lab Test
Route::get('/studentRegister', [UserRegistrationController::class, 'showRegistrationForm'])->name('studentRegister');

Route::post('/studentRegister', [UserRegistrationController::class, 'store'])->name('studentRegister.store');

Route::get('/student', [UserRegistrationController::class, 'showStudent'])->name('student.show');
