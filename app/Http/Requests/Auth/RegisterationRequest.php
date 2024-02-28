<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class RegisterationRequest extends FormRequest
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
            'first_name' => 'required|max:50',
            'last_name' => 'required|max:50',
            'mobile' => 'sometimes|unique:users,mobile|digits_between:11,20',
            'email' => 'required|unique:users,email',
            'password' => 'required|min:6',
            'role_id' => 'required|exists:roles,id', // Assuming roles table exists
            'country_id' => 'required|exists:countries,id', // Assuming countries table exists

        ];
    }
}
