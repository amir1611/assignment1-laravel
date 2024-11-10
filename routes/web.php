<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;


// Redirect root URL to /our-team for better user experience
Route::get('/', function () {
    return redirect('/our-team');
});

// Main team display route - shows all team members
Route::get('/our-team', [ProfileController::class, 'home'])->name('home');

// Individual persona routes with validation for specific team members
// Only allows valid team member names: amir, ahmed, maged, moin
Route::get('/our-team/{persona}', [ProfileController::class, 'home'])
    ->where('persona', 'amir|ahmed|maged|moin')
    ->name('persona.home');

// About page route for each team member
Route::get('/our-team/{persona}/about', [ProfileController::class, 'about'])
    ->where('persona', 'amir|ahmed|maged|moin')
    ->name('about');

// Contact page route for each team member
Route::get('/our-team/{persona}/contact', [ProfileController::class, 'contact'])
    ->where('persona', 'amir|ahmed|maged|moin')
    ->name('contact');

 Route::match(['GET', 'POST'], '/our-team/{persona}/contact', [ProfileController::class, 'contact']);
    