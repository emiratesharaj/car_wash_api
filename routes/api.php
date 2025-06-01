<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('sendData', function (Request $request) {
    // Validate the incoming request data
    $request->validate([
        'ext_wash_count' => 'required|integer|max:255',
        'ext_int_count' => 'required|integer|max:255',
    ]);
    DB::table('test_table')->insert([
        'plate_no' => 'SA 1234',
        'ext_wash_count' => $request->ext_wash_count,
        'ext_int_count' => $request->ext_int_count,
    ]);
    return response()->json(['message' => 'Data received successfully', 'data' => $request->all()]);
});


