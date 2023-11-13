<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEmployeeRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'email' => 'nullable|email|max:255|unique:employees',
            'phone_number' => 'nullable|string|max:20|unique:employees',
            'address' => 'nullable|string',
            'image' => 'nullable|max:200',
            'nid_no' => 'nullable|integer|unique:employees',
            'salary' => 'nullable|integer',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'The name field is required.',
            'name.max' => 'The name field must not exceed 255 characters.',
            'email.email' => 'The email must be a valid email address.',
            'email.max' => 'The email field must not exceed 255 characters.',
            'email.unique' => 'The email address is already in use.',
            'phone_number.max' => 'The phone number field must not exceed 20 characters.',
            'phone_number.unique' => 'The phone number is already in use.',
            'nid_no.integer' => 'The NID number must be an integer.',
            'nid_no.unique' => 'The NID number is already in use.',
            'salary.integer' => 'The salary must be an integer.',
            'image.max' => 'Image should be in 200KB',
        ];
    }
}
