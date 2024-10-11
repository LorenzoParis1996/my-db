<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAuthorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; //Permette la richiesta a tutti gli utenti.
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name'=>'required|string|min:2|max:50',
            'lastname'=>'required|string|min:2|max:50',
            'nationality'=>'nullable|string|min:10|max:50',
            'date_of_birth'=>'nullable|date',
            'place_of_birth'=>'nullable|string|min:10|max:50',
            'author_pic'=>'nullable|string',
            'brief_biography'=>'required|min:10|max:1000', //non esiste validare il dato text.
        ];
    }
}
