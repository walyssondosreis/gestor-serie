<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SeriesFormRequest extends FormRequest
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
            //
            'nome'=>['required','min:3']
        ];
    }
    // /*Cria mensagens personalizadas de erro para request */
    // public function messages()
    // {
    //     return [
    //         'nome.*'=>'O campo nome esta preenchido incorretamente; mínimo 3 caracteres',
    //         // 'nome.required' => 'O campo nome é obrigatório',
    //         // 'nome.min'=>'O campo nome precisa de pelo menos :min caracteres'
    //     ];
    // }
}
