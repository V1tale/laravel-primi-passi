<?php

use Illuminate\Support\Facades\Route;

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
    $intro = "We all are just in the third planet from sun, but it's the best one";
    $nav = [
        "title" => "Navigation Bar",
        "navbar" => [
            "page2",
            "page3",
            "page4",
            "page5",
        ]

    ];
    return view('home', $nav, compact("intro"));
})->name("main");

Route::get('/page2', function () {
    $welcome = "Welcome to the second page. Here is a list of colors";
    $colors = ["colors" => ["red", "blue", "green", "yellow"]];
    return view('page2', $colors, compact("welcome"));
})->name("second-page");

Route::get('/page3', function () {
    $welcome = "This is the third page";
    return view('page3', compact("welcome"));
})->name("third-page");

Route::get('/page4', function () {
    $welcome = "This is the fourth page";
    return view('page4', compact("welcome"));
})->name("fourth-page");

Route::get('/page5', function () {
    $welcome = "This is the fifth page";
    return view('page5', compact("welcome"));
})->name("fifth-page");
