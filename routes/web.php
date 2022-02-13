<?php

use App\Http\Controllers\Covid19Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyProfileController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderProductController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VehicleController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get("/blog/{id}", function ($id) {
    return "<h1>This is blog page : {$id} </h1>";
});
Route::get("/blog/{id}/edit", function ($id) {
    return "<h1>This is blog page : {$id} for edit</h1>";
});
Route::get("/product/{a}/{b}/{c}", function ($a, $b, $c) {
    return "<h1>This is product page </h1><div>{$a} , {$b}, {$c}</div>";
});
Route::get("/category/{a?}", function ($a = "mobile") {
    return "<h1>This is category page : {$a} </h1>";
});
Route::get("/myorder/create", function () {
    return "<h1>This is order form page : " . request("username") . "</h1>";
});
//routes/web.php
Route::get("/hello", function () {
    return view("hello");
});
// routes/web.php 
Route::get('/greeting', function () {

    $name = 'James';
    $last_name = 'Mars';

    return view('greeting', compact('name', 'last_name'));
});

Route::get("/gallery", function () {
    $ant = "https://cdn3.movieweb.com/i/article/Oi0Q2edcVVhs4p1UivwyyseezFkHsq/1107:50/Ant-Man-3-Talks-Michael-Douglas-Update.jpg";
    $bird = "https://www.hebergementwebs.com/image/cc/cc8811773d2cdbeb4d46e5550fc455fe.jpg/falcon-and-the-winter-soldier-falcon-minifigure-captain-america.jpg";
    $cat = "http://www.onyxtruth.com/wp-content/uploads/2017/06/black-panther-movie-onyx-truth.jpg";


    return view("test/index", compact("ant", "bird", "cat"));
});

Route::get("/ant", function () {
    $ant = "https://cdn3.movieweb.com/i/article/Oi0Q2edcVVhs4p1UivwyyseezFkHsq/1107:50/Ant-Man-3-Talks-Michael-Douglas-Update.jpg";

    return view("test/ant", compact("ant"));
});
Route::get("/bird", function () {
    $bird = "https://www.hebergementwebs.com/image/cc/cc8811773d2cdbeb4d46e5550fc455fe.jpg/falcon-and-the-winter-soldier-falcon-minifigure-captain-america.jpg";

    return view("test/bird", compact("bird"));
});
Route::get('/cat', function () {
    $cat = "http://www.onyxtruth.com/wp-content/uploads/2017/06/black-panther-movie-onyx-truth.jpg";

    return view("test/cat", compact("cat"));
});
//  Week3
Route::middleware(['auth', 'role:admin,teacher,manager'])->group(function () {
    Route::get("/teacher", function () {
        return view("teacher");
    });
});
Route::get("/teacher/inheritance", function () {
    return view("teacher-inheritance");
});
Route::get("/student/inheritance", function () {
    return view("student-inheritance");
});
Route::get("/theme", function () {
    return view("theme");
});

// Route Template conponent
Route::get("/teacher/component", function () {
    return view("teacher-component");
});
Route::get("/student/component", function () {
    return view("student-component");
});


Route::get('/tables', function () {
    return view('tables');
});


Route::get("/Qtable/component", function () {
    return view("Qtable-component");
});


//WK4
Route::get("/myprofile/create", [MyProfileController::class, "create"]);
Route::get("/myprofile/{id}/edit", [MyProfileController::class, "edit"]);
Route::get("/myprofile/{id}", [MyProfileController::class, "show"]);

Route::get("/newgallery", [MyProfileController::class, "gallery"]);
Route::get("/newgallery/ant", [MyProfileController::class, "ant"]);
Route::get("/newgallery/cat", [MyProfileController::class, "cat"]);


// WK5
Route::get("/coronavirus", [MyProfileController::class, "coronavirus"]);
// Route::get('/covid19', [ Covid19Controller::class,"index" ]);

//Wk6 Covis19
Route::get("/covid19/create", [Covid19Controller::class, "create"]);
Route::get("/covid19/{id}/edit", [Covid19Controller::class, "edit"]);
Route::get('/covid19', [Covid19Controller::class, 'index']);
Route::get('/covid19/{id}', [Covid19Controller::class, 'show']);
Route::post("/covid19", [Covid19Controller::class, "store"]);
Route::patch("/covid19/{id}", [Covid19Controller::class, "update"]);
Route::delete('/covid19/{id}', [Covid19Controller::class, 'destroy']);

//WK 7
Route::resource('/staff', StaffController::class);
Route::resource('post', PostController::class);
//WK 8
//WK 9
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';


//WK 10

// Route::resource('profile', 'ProfileController');
// Route::resource('user', 'UserController');
// Route::resource('vehicle', 'VehicleController');

Route::resource('profile', ProfileController::class);
Route::resource('user', UserController::class);
Route::resource('vehicle', VehicleController::class);

//WK11 Case study
Route::resource('product', ProductController::class);

Route::middleware(['auth'])->group(function () {
    Route::resource('order', OrderController::class);
    Route::resource('order-product', OrderProductController::class);
    Route::resource('payment', PaymentController::class);
});
