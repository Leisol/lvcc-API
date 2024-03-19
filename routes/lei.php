<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/bilina', function() {
    return 'kwek kwek 3 petot each !';
});

Route::patch('/user', [UserController::class, 'index']);

Route::post('/greeting', function() {
    return 'The universe contained in your eyes.';
});

//PUT - more on updating the whole data.
//PATCH - updating a specific data.

Route::match(['put', 'patch', 'post','get'], '/updateUserInfo', function() {
    return 'this route is for put, patch, and post http verb only.';
});

Route::any('/updateUserInfoTwo', function() {
    return 'This route accepts any http verb.';
});

Route::get('/requestEmail', function(Request $request) {
    return $request->name . ' - ' . $request->email; 
});

Route::any('/updateUserInfoTwo', function() {
    return 'This route accepts any http verb.';
});

Route::patch('/patch', function(Request $request) {
    return 'This is made using the PATCH method.';
});

Route::post('/post', function(Request $request) {
    return 'This is made using the DELETE method.';
});

Route::put('/put', function(Request $request) {
    return 'This is made usinG the PUT method.';
});

Route::options('/options', function(Request $request) {
    return 'This is made usign the OPTIONS method.';
});

Route::delete('/delete', function(Request $request) {
    return 'This is made usign the DELETE method.';
});

?>