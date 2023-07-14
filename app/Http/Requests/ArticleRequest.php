<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
            'title'=> 'required|max:100',
            'description'=>'required|min:10',
            'img'=> 'required', 
        ];
    }

    public function messages(){
        return [
            'title.required'=>'Il titolo è richiesto',
            'title.max'=>'Il titolo è troppo lungo',
            'description.required'=>'La descrizione è richiesta',
            'description.min'=>'La descrizione è troppo corta',
            'img.required'=> "L'immagine è richiesta", 
        ]; 
    }
}
