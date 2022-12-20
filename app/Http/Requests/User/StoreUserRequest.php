<?php

namespace App\Http\Requests\User;

use App\Rules\SpanishPhoneNumber;
use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'phone_number' => ['required', 'unique:users', new SpanishPhoneNumber],
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages(): array
    {
        return [
            'phone_number.required' => 'A phone number is required',
            'phone_number.unique' => 'This phone number is already in use',
        ];
    }
}
