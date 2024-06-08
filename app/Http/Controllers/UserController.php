<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Validation\ValidationException;
use App\Http\Requests\UserValidation;

class UserController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'login_id' => 'required',
            'password' => 'required'
        ]);

        $login_id = $request->login_id;
        $enteredPassword = $request->password;

        $user = User::where('mobile', $login_id)->orWhere('email', $login_id)->first();
        $password = $user->makeVisible(['password'])->password;

        if (!$user || !Hash::check($enteredPassword, $password)) {
            // throw ValidationException::withMessages([
            //     'email' => ['The provided credentials are incorrect.'],

            // ]);
            return response()->json(['status' => 'failed', 'message' => 'The provided credentials are incorrect.'], 400);
        }

        $token = $user->createToken('trm-dc');

        return response()->json(['status' => 'success', 'message' => 'logged in successfully!', 'tokenId' => $token->plainTextToken], 200);
    }

    public function signup(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:users,email',
            'password' => 'required'
        ]);

        $user = new User();
        $user->name = 'admin';
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        if ($user->save()) {
            return response()->json(['status' => 'password updated successful!'], 200);
        } else {
            return response()->json(['status' => 'failed', 'message' => 'failed to update password!'], 400);
        }
    }

    public function updatePassword(UserValidation $request)
    {

        $user_id = $request->login_id;
        $user = User::where('mobile', $user_id)->orWhere('email', $user_id)->first();

        if (!$user) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }

        $user->password = Hash::make($request->password);

        if ($user->save()) {
            return response()->json(['status' => 'password updated successful!'], 200);
        } else {
            return response()->json(['status' => 'failed', 'message' => 'failed to update password!'], 400);
        }
    }
}
