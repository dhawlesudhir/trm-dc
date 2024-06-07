<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }

        $token = $user->createToken('webLogin1');

        return ['token' => $token->plainTextToken];
    }

    public function signup(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user = new User();
        $user->name = 'admin';
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        return ['status' => 'success', 'id' => $user->id];
    }

    public function validateToken(Request $request)
    {
        return ['status' => 'Valid request'];
    }
}
