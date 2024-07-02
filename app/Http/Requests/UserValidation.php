<?php

namespace App\Http\Requests;

use App\Helpers\Helper;
use Illuminate\Foundation\Http\FormRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class UserValidation extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'action' => 'required|in:login,signup,update',

            //login
            'login_id' => function ($attribute, $login_id) {
                $this->validate_login_id($login_id);
            },
            'password' => 'required_if:action,login',

            //signup or register
            'email' => 'sometimes|email|unique:users,email',
            'first_name' => 'required_if:action,signup|max:30',
            'middle_name' => 'sometimes|required|string|max:30',
            'last_name' => 'required_if:action,signup|string|max:30',
            'firm_name' => 'sometimes|required|string|max:255',

            'mobile' => 'required_if:action,signup|prohibited_if:action,update|numeric|unique:users,mobile|max_digits:10',
            'alt_mobile' => 'sometimes|required|numeric|max_digits:10',
            'office_number' => 'sometimes|required|numeric|max_digits:10',

            'property_number_or_name' => 'sometimes|required|string|max:255',
            'additional_address_details' => 'sometimes|required|string|max:255',
            'landmark' => 'sometimes|required|string|max:255',
            'building_name' => 'sometimes|required|string|max:255',
            'area_name' => 'sometimes|required|string|max:255',
            'pincode' => 'sometimes|required|string|max:255',
            'city_or_village' => 'sometimes|required|string|max:255',
            'city_region' => 'sometimes|required|string|max:255',
            'geography_region' => 'sometimes|required|string|max:255',
            'state' => 'required_if:action,signup|string|max:255',
            'map_cordinates' => 'sometimes|required|string|max:255',

            //update
            'user_type' => function ($attribute, $user_type) {
                $this->validate_user_type($user_type);
            },
            'refer_by' => 'required_if:action,signup|string|max:255|exclude_if:action,update',
            'kyc_id' => 'exclude',
            'status' => 'exclude',
            'subcription' => 'exclude',
            'distributor_or_rm' => 'exclude'
        ];
    }

    /**
     * Validate login_id with users.login_id,mobile,email
     *
     * @param [type] $attribute
     * @param [type] $user_id
     * @return array
     */
    public function validate_login_id($user_id)
    {
        $user = User::where('login_id', $user_id)
            ->orWhere('mobile', $user_id)
            ->orWhere('email', $user_id)
            ->first();

        if (!$user) {
            throw ValidationException::withMessages([
                'login_id' => ['The provided credentials are incorrect.'],
            ]);
        }
    }

    /**
     * retailer can be created
     * Only admin can create new or update existing user to Admin or Distributor
     * @param [type] $user_type
     * @return void
     */
    private function validate_user_type($user_type)
    {
        if (Auth::check()) {
            $existing_type = Auth::user()->user_type;
        } else {
            $existing_type = 'guest';
        }

        if ($user_type == 'R' || $user_type == $existing_type) {
            return true;
        }
        // todo UserType: need common function to get all user types
        if (in_array($user_type, ['A', 'D'])) {
            if (!Helper::user_is_admin()) {
                throw ValidationException::withMessages([
                    'user_type' => ['not valid value'],
                ]);
            }
        }
    }
}
