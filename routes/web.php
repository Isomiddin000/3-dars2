<?php
use Illuminate\Support\Facades\Route;
Route::get('/',function(){
    return view("welcome");
});

Route::get('/city/{name}', function ($name) {

    
    return "Welcome to {$name}!";
})->name('city.show');



Route::prefix('admin')->group(function () {
    Route::get('/users/{id}', function ($id) {


        return "User ID: {$id}";
    })->name('admin.users.show');
});




Route::prefix('profile')->group(function () {
    Route::get('/view', function () {

        return "Profile View";
    })->name('profile.view');

    Route::get('/edit', function () {

        return "Profile Edit";
    })->name('profile.edit');

    Route::get('/settings', function () {
        return "Profile Settings";
    })->name('profile.settings');
});




Route::prefix('products')->group(function () {
    Route::get('/', function () {
        return "Products List";
    })->name('products.index');

    Route::get('/{id}', function ($id) {
        return "Product ID: {$id}";
    })->name('products.show');

    Route::get('/{id}/edit', function ($id) {
        return "Edit Product ID: {$id}";
    })->name('products.edit');
});

Route::get('/old-url', function () {
    return redirect('/new-url');
});

Route::get('/new-url',function(){
return "salom";
});