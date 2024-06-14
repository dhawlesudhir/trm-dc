<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Validation\ValidationException;
use App\Http\Requests\UserValidation;
use App\Helpers\Helper;
use Exception;

class UserController extends Controller
{
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
            return response()->json(['status' => 'failed', 'message' => 'something went wrong, try again later!'], 400);
        }

        return response()->json(['status' => 'success', 'message' => 'logged in successfully!', 'tokenId' => $token->plainTextToken], 200);
    }

    public function signup(UserValidation $request)
    {
        try {
            if ($this->store($request)) {
                return response()->json(['status' => 'success', 'message' => 'Registration completed successful!'], 200);
            } else {
                return response()->json(['status' => 'failed', 'message' => 'failed to register, try again!'], 400);
            }
        } catch (Exception $th) {
            return response()->json(['status' => 'failed', 'message' => 'something went wrong, try again later!'], 400);
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

    /**
     * Undocumented function
     *
     * @param [type] $fields
     * @return integer
     */
    private function store($fields): int
    {
        $user = new User();
        $user->login_id = '';
        $password = Helper::password_generate();
        $user->password = $password;
        $user->first_name = $fields->first_name;
        $user->middle_name = $fields->middle_name ?? '';
        $user->last_name = $fields->last_name ?? '';
        $user->firm_name =  $fields->firm_name ?? '';
        $user->mobile =  $fields->mobile ?? '';
        $user->alt_mobile =  $fields->alt_mobile ?? '';
        $user->office_number =  $fields->office_number ?? '';
        $user->email =  $fields->email ?? '';
        $user->email_verified_at =  $fields->email_verified_at ?? '01-01-2024';

        $user->property_number_or_name =  $fields->property_number_or_name ?? '';
        $user->additional_address_details =  $fields->additional_address_details ?? '';
        $user->landmark =  $fields->landmark ?? '';
        $user->building_name =  $fields->building_name ?? '';
        $user->area_name =  $fields->area_name ?? '';
        $user->pincode =  $fields->pincode ?? '';
        $user->city_or_village =  $fields->city_or_village ?? '';
        $user->city_region =  $fields->city_region ?? '';
        $user->geography_region =  $fields->geography_region ?? '';
        $user->state =  $fields->state ?? '';
        //todo spellingcheck
        $user->map_cordinates =  $fields->map_cordinates ?? '';
        $user->kyc_id =  $fields->kyc_id ?? 0;

        $user->user_type =  $fields->user_type ?? '';
        $user->refer_by =  $fields->refer_by ?? '';
        $user->status =  $fields->status ?? '';
        //todo spellingcheck
        $user->subcription =  $fields->subscription ?? '';
        $user->distributor_or_rm =  $fields->distributor_or_rm ?? '';
        $user->remember_token =  $fields->remember_token ?? '';

        $createdFlag = null;
        $createdFlag = $user->save();

        $user->login_id = $user->id;
        $user->save();
        return $createdFlag;
    }
}
