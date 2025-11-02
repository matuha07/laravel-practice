<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\StudentController;

Route::get("/", [PageController::class, "home"])->name("home");
Route::get("/about", [PageController::class, "about"])->name("about");
Route::get("/contacts", [PageController::class, "contacts"])->name("contacts");
Route::prefix("students")
    ->name("students.")
    ->group(function () {
        Route::get("/", [StudentController::class, "index"])->name("index");
        Route::get("/create", [StudentController::class, "create"])->name(
            "create",
        );
        Route::post("/", [StudentController::class, "store"])->name("store");
        Route::get("/{student}/edit", [StudentController::class, "edit"])->name(
            "edit",
        );
        Route::put("/{student}", [StudentController::class, "update"])->name(
            "update",
        );
        Route::get("/{student}/delete", [
            StudentController::class,
            "confirmDelete",
        ])->name("confirmDelete");
        Route::delete("/{student}", [
            StudentController::class,
            "destroy",
        ])->name("destroy");
    });
