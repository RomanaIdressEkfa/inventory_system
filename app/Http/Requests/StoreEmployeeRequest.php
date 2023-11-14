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
            'image' => 'nullable|string',
            'position' => 'nullable|string',
            'department' => 'nullable|string',
            'nid_no' => 'nullable|integer|unique:employees',
            'date_of_birth' => 'nullable|date',
            'hire_date' => 'nullable|date',
            'salary' => 'nullable|integer',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'The name field is required.',
            'name.max' => 'The name must not exceed 255 characters.',
            'email.email' => 'The email must be a valid email address.',
            'email.max' => 'The email must not exceed 255 characters.',
            'phone_number.max' => 'The phone number must not exceed 20 characters.',
            'address.string' => 'The address must be a string.',
            'image.string' => 'The image must be a string.',
            'position.string' => 'The position must be a string.',
            'department.string' => 'The department must be a string.',
            'nid_no.integer' => 'The NID number must be an integer.',
            'date_of_birth.date' => 'The date of birth must be a valid date.',
            'hire_date.date' => 'The hire date must be a valid date.',
            'salary.integer' => 'The salary must be an integer.',
        ];
    }
}
