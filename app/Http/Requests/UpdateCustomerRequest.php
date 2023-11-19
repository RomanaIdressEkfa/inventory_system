<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCustomerRequest extends FormRequest
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
        'name' => 'required|max:100',
        'email' => 'nullable|email',
        'phone_number' => 'nullable|string|max:20',
        'address' => 'nullable',
        'loyalty_points' => 'nullable|numeric',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Please provide a name.',
            'name.max' => 'Name cannot exceed 100 characters.',
            'email.email' => 'Please provide a valid email address.',
            'phone_number.max' => 'The phone number must not exceed 20 characters.',
            'loyalty_points.numeric' => 'Loyalty points should be a number.',
        ];
    }
}
