<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\User;
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
        // $user_id = $request->user_id;
        return [

            //login
            'login_id' => function ($attribute, $login_id) {
                $this->validate_login_id($login_id);
            },
            'password' => 'required_without:first_name,mobile,state',

            //signup or register
            'email' => 'email|unique:users,email',
            'first_name' => 'required_with_all:mobile,state|max:30',
            'middle_name' => 'nullable|string|max:30',
            'last_name' => 'nullable|string|max:30',
            'firm_name' => 'nullable|string|max:255',
            'mobile' => 'nullable|numeric|unique:users,mobile|max_digits:10',
            'alt_mobile' => 'nullable|numeric|max_digits:10',
            'office_number' => 'nullable|numeric|max_digits:10',

            'property_number_or_name' => 'nullable|string|max:255',
            'additional_address_details' => 'nullable|string|max:255',
            'landmark' => 'nullable|string|max:255',
            'building_name' => 'nullable|string|max:255',
            'area_name' => 'nullable|string|max:255',
            'pincode' => 'nullable|string|max:255',
            'city_or_village' => 'nullable|string|max:255',
            'city_region' => 'nullable|string|max:255',
            'geography_region' => 'nullable|string|max:255',
            'state' => 'nullable|string|max:255',
            'map_cordinates' => 'nullable|string|max:255',

            'kyc_id' => 'nullable|numeric|max:11',
            'user_type' => 'nullable|numeric|max:11',
            'refer_by' => 'nullable|string|max:255',
            'status' => 'nullable|numeric|max:11',
            'subcription' => 'nullable|numeric|max:11',
            'distributor_or_rm' => 'nullable|string|max:255'

            //updatePassword

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
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }
    }
}
