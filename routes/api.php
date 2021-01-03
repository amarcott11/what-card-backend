<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BankController;
use App\Http\Controllers\CardController;
use App\Http\Controllers\RegisterController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/login', function (Request $request) {
    $data = $request->validate([
        'email' => 'required|email',
        'password' => 'required'
    ]);

    $user = User::where('email', $request->email)->first();

    if (!$user || !Hash::check($request->password, $user->password)) {
        return response([
            'message' => ['These credentials do not match our records.']
        ], 404);
    }

    $token = $user->createToken('my-app-token')->plainTextToken;

    $response = [
        'user' => $user,
        'token' => $token
    ];

    return response($response, 201);
});

Route::get('/test', function(){
    $response = [
        'user' => 'TEST',
        'token' => 'PASS'
    ];

    return response($response, 201);
});

Route::get('/user', function(Request $request) {
    $data = $request->validate([
        'email' => 'required|email',
    ]);
    $users = User::where('email', '=', $request->input('email'))->first();
    if ($users === null) {
        return response([
            'message' => ['User does not exist.']
        ], 404);
    } else {
        $response = [
            'user' => $users
        ];

        return response($response, 201);
    }

});

Route::post('/register', [RegisterController::class, 'register']);

Route::get('/bank', [BankController::class, 'all']);

Route::apiResource('/cards', CardController::class);
