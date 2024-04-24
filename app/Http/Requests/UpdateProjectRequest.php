<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProjectRequest extends FormRequest
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
            // vlaidation rules

            'title' => 'required|string',
            'description' => 'required|string',
            'img' => 'required|string',
            'tecnologies' => 'required|string',
            'link' => 'required|string',
        ];
    }

    public function message(): array
    {
        return [
            'title.required' => 'Title is required',
            'description.required' => 'Description is required',
            'img.required' => 'Image is required',
            'type.required' => 'Type is required',
            'link.required' => 'Link is required',
        ];
    }
}
