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
        // validation rules
        'title' => 'required|string',
        'description' => 'required|string',
        'img' => 'required|string',
        'types' => 'required|string',
        'link' => 'required|string',
        'cover_image' => 'nullable|max:255'
    ];
}

public function messages(): array
{
    return [
        'title.required' => 'Title is required',
        'title.unique' => 'The title already exists',
        'description.required' => 'Description is required',
        'img.required' => 'Image is required',
        'types.required' => 'Type is required',
        'link.required' => 'Link is required',
        'cover_image.max' => 'Cover image must not exceed 255 characters'
    ];
}

}
