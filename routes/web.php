<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
    // return "Welcome to the contact page";
});

// GET route examples
Route::get('/contact', function () {
    return view('contact');
});

// parameters using routes
// Route::get('/portfolio/{name}/{age}', function ($name, $age) {
//     echo "Welcome to the portfolio of " . $name . " who is " . $age . " years old.";
//     return view('portfolio');
// });

// Named route
Route::get('/namedRoute', function () {
    // return view('home');
    return "This is a named route";
})->name("testpage");

// Grouped routes
Route::prefix("portfolio")->group(function () {
    Route::get('/company', function () {
        return view('company');
    });

    // parameters using routes
    Route::get('/{name}/{age}', function ($name, $age) {
        echo "Welcome to the portfolio of " . $name . " who is " . $age . " years old.";
        return view('portfolio');
    });
});

// POST route examples
Route::post('/formsubmit', function (Request $request) {
    $request->validate([
        'name' => 'required|min:3|max:50',
        'email' => 'required|email',
    ]);

    $name = $request->input('name');
    $email = $request->input('email');

    echo "Form submitted successfully! <br> Name: " . $name . ", Email: " . $email;
})->name("formsubmit");

// route that points to a resource controller
Route::resource('posts', PostController::class);