<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

});

require __DIR__.'/auth.php';

// git add .
// git commit -m "Description claire de la modification"
// git push


// Database
    // USERNAME : if0_41203655
    // MySQL Password : Okd4V7AZM3hu
    // MySQL Database Name : if0_41203655_XXX
    // MySQL Hostname  : sql306.infinityfree.com
    // MySQL Port (optional) : 3306
    // Database Name	: if0_41203655_portfolio



// TP Details for if0_41203655
    // FTP Username  : if0_41203655
    // FTP Password   : Okd4V7AZM3hu
    // FTP Hostname    : ftpupload.net

//  Accounts details
    //Username :   if0_41203655
    // Password :  Okd4V7AZM3hu
    // Label   : Website for marcelinfosso.wuaze.com
    // Website IP  : 185.27.134.202
    // Home Directory  : /home/vol3_3/infinityfree.com/if0_41203655
