<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('Welcome');
});
Route::view('/home','home'
);
Route::view('/about','about'
);


Route::get('user-home', [UserController::class,'userHome' ]);
Route::get('user-about/{name}', [UserController::class,'userAbout' ]);
Route::get('admin-login', [UserController::class,'adminLogin' ]);

Route::get('/user', [UserController::class, 'getUser']);
Route::get('/aboutUser', [UserController::class, 'getAboutUser']);
Route::get('user/{name}', [UserController::class, 'getUserNameid']);
