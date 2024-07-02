<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserValidation;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    /**
     * Undocumented function
     *
     * @param UserValidation $request
     * @return void
     */
    public function login(UserValidation $request)
    {

        $login_id = $request->login_id;
        $enteredPassword = $request->password;

        try {

            $user = User::where('login_id', $login_id)
                ->orWhere('mobile', $login_id)
                ->orWhere('email', $login_id)
                ->first();

            $password = $user->makeVisible(['password'])->password;

            if (!$user || !Hash::check($enteredPassword, $password)) {
                return response()->json(['status' => 'failed', 'message' => 'The provided credentials are incorrect.'], 400);
            }

            $token = $user->createToken('trm-dc');
        } catch (Exception $object) {
            Log::error("Exception in login User {login_id}, {errorMessage} ", ['login_id' => $login_id, 'errorMessage' => $object->getMessage()]);
            return response()->json(['status' => 'failed', 'message' => 'something went wrong, try again later!'], 400);
        }
        Log::info("User {login_id} logged in successfully!", ['login_id' => $login_id]);
        return response()->json(['status' => 'success', 'message' => 'logged in successfully!', 'tokenId' => $token->plainTextToken], 200);
    }

    /**
     * Undocumented function
     *
     * @param UserValidation $request
     * @return void
     */
    public function updatePassword(UserValidation $request)
    {

        $login_id = $request->login_id;
        $user = User::where('login_id', $login_id)
            ->orWhere('mobile', $login_id)
            ->orWhere('email', $login_id)
            ->first();

        if (!$user) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }

        $user->password = Hash::make($request->password);

        if ($user->save()) {
            Log::info("User {login_id} updated password successful!", ['login_id' => $login_id]);
            return response()->json(['status' => 'password updated successful!'], 200);
        } else {
            Log::warning("User failed to update password!, LoginId {login_id}", ['login_id' => $login_id]);
            return response()->json(['status' => 'failed', 'message' => 'failed to update password!'], 400);
        }
    }

    public function logout(Request $request)
    {
        $request->user()->tokens()->delete();
        return response()->json(['status' => 'success', 'message' => 'logout successfully!'], 200);
    }
}
