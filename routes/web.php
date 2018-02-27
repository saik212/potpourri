<?php

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

// // Basic Routing example
// Route::get('/hello', function () {
//     return 'Hello World!';
// });

// // Return JSON example
// Route::get('/jsonEx', function () {
//     return response()->json([
//         'hello' => 'world',
//         'good' => 'blurg'
//     ]);
// });

