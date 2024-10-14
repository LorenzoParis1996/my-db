<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAnimeRequest extends FormRequest
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
            'title'=>'required|string|min:2|max:255',
            'original_title'=>'nullable|string|min:2|max:255',
            'audience_id'=>'nullable|integer|exists:audiences,id',
            'release_year'=>'required|date_format:Y',
            'cover_image'=>'nullable|url',
            'description'=>  'required|min:10|max:1000'
        ];
    }
}
