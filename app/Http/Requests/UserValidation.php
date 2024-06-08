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
            'login_id' => function ($attribute, $user_id) {
                $this->validateUserId($attribute, $user_id);
            },
            // -todo 'required' replace with regular expression
            'password' => 'required',

            //signup or register
            'email' => 'email|unique:users,email',

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
    public function validateUserId($attribute, $user_id)
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
