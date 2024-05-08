<?php

namespace App\Http\Controllers;

use App\Http\Requests\TokenRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TokenController extends Controller
{
    public function getToken(TokenRequest $request)
    {
        $validetedData = $request->validated();
        if (Auth::attempt($validetedData)) {
            return response()->json([
                'message' => 'Token creato',
                'token' => Auth::user()->createToken('lezione6')->plainTextToken
            ], 200);
        } else {
            return response()->json(['error' => 'Unauthorized'], 402);
        }
    }
}
