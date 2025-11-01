<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\StudentController;

Route::get("/", [PageController::class, "home"])->name("home");
Route::get("/about", [PageController::class, "about"])->name("about");
Route::get("/contacts", [PageController::class, "contacts"])->name("contacts");
Route::get("/students", [StudentController::class, "index"])->name(
    "students.index",
);
