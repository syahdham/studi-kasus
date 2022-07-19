<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\ExampleResource;
use App\Http\Resources\LoginResource;
use Illuminate\Http\Request;

class LoginApiController extends Controller
{
    public function doLogin(Request $request)
    {
        $input = $request->all();

        if (auth()->attempt(['email' => $input['email'], 'password' => $input['password']])) {
            return response()->json([
                'data' => new ExampleResource(auth()->user()),
                'message' => 'Berhasil Login',
                'token' => auth()->user()->createToken('LaravelSanctumAuth')->plainTextToken,
            ]);
        } else {
            return response()->json([
                'data' => null,
                'message' => 'Gagal Login'
            ]);
        }
    }
}
