<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GameRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'game'=>'required|max:255',
            'thumb'=>'nullable|url',
            'game_link'=>'nullable|url',
            'release_date'=>'required|date',
            'genre'=>'required|max:50|string',
            'dev'=>'required|max:50|string',
            'publisher'=> 'required|max:255|string',
            'platform'=>'required|max:30|string',
            'description'=>'nullable|string',
            'score'=>'nullable|numeric',
            'review'=>'nullable|string',
            'pegi'=>'required|numeric',

        ];
    }
    public function messages()
    {
        $obbligatorio=':attribute è obbligatorio';
        $numerico = ':attribute deve essere un numero';
        $stringa = ':attribute deve avere un valore testuale';
        $url = ':attribute deve essere in formato url';

        return [
            'required'=> $obbligatorio,
            'numeric'=>$numerico,
            'string'=>$stringa,
            'url'=>$url,
            'date'=>'deve essere una data valida',
            'max'=> ':attribute può essere lungo :value caratteri',
        ];
    }
}
