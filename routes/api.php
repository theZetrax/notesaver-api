<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/notes', function (Request $request) {
    return json_encode([
        'notes' => [
            [
                'id' => '1',
                'note_title' => 'This is title',
                'note_body' => 'This is note description'
            ]
        ]
    ]);
});
