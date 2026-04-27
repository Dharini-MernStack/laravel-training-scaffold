<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProjectRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        // TODO Day 7: define validation rules
        // Hint:
        //   'name' => 'required|string|max:255',
        //   'description' => 'nullable|string',
        //   'status' => 'required|in:active,archived,completed',
        return [];
    }

    public function messages(): array
    {
        // TODO Day 7 (optional): customize error messages
        return [];
    }
}