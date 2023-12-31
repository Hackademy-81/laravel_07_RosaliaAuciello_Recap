<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ModifyRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'title'=>'required|min:5',
            'description'=>'required|min:5',
        ];
    }

    public function messages(){
        return[
            'title.required'=>'il titolo è richiesto',
            'title.min'=>'il titolo è troppo corto',
            'description.required'=>'la descrizione è richiesta',
            'description.min'=>'la descrizione è troppo corta'
        ]; 
    }
}
