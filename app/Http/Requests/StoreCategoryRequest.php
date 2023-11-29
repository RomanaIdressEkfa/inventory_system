<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategoryRequest extends FormRequest
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
            'description' => 'nullable|string',
            'image_url' => 'nullable|url', // Example: Check if it's a valid URL
        ];
    }
    public function messages()
{
    return [
        'name.required' => 'The name field is required.',
        'name.max' => 'The name may not be greater than 255 characters.',
        'description.string' => 'The description must be a string.',
        'image_url.url' => 'The image URL must be a valid URL.',
    ];
}
}
