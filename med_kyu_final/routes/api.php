<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/v1/user', function (Request $request) {
    // Check if the header parameter 'j' exists and its value is 'kali'
    if ($request->header('j') === 'kali') {
        // Retrieve the user_id from the query parameters
        $userId = $request->query('user_id');
        // Find and return the user with the provided user_id
        return User::find($userId);
    } else {
        // If 'j' header is not 'kali', return an error response
        return response()->json(['error' => 'Unauthorized'], 401);
    }
});
