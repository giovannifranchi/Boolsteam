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
            'thumb'=>'url',
            'game_link'=>'url',
            'release_date'=>'required|date',
            'gerne'=>'required|max:50|string',
            'dev'=>'required|max:50|string',
            'publisher'=> 'required|max:255|string',
            'platform'=>'required|max:30|string',
            'desription'=>'stirng',
            'score'=>'numeric',
            'review'=>'string',
            'pegi'=>'numeric',

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
