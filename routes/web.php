<?php

use App\Http\Controllers\ProfileController;
use App\Models\Project;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProjectController;

Route::get("/", function () {
    $project = Project::all();
    return view("welcome", compact("project"));
});


Route::middleware(["auth", "verified"])
    ->name("admin.")
    ->prefix("admin")
    ->group(function () {
        // Route::get("/dashboard", [DashboardController::class, "index"])->name("dashboard"); 
        Route::resource("projects", ProjectController::class)->parameters([
            "posts" => "post:slug" 
        ]);

        Route::resource("types", TypeController::class)->parameters([
            "types" => "type:slug"
        ])->only(["index"]);


        Route::resource("technologies", TechnologyController::class)->parameters([
            "technologies" => "Technology:slug"
        ])->only(["index"]);






    });

Route::get("/dashboard", function () {
    return view("dashboard");
})->middleware(["auth", "verified"])->name("dashboard");

Route::middleware("auth")->group(function () {
    Route::get("/profile", [ProfileController::class, "edit"])->name("profile.edit");
    Route::patch("/profile", [ProfileController::class, "update"])->name("profile.update");
    Route::delete("/profile", [ProfileController::class, "destroy"])->name("profile.destroy");
});

require __DIR__."/auth.php";
