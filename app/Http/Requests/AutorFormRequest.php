<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class AutorFormRequest extends FormRequest
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
        $rules = [
            'nome'=>'required',
            'apelido'=>'required',
            'cidade'=>'required',
            'bairro'=> 'required',
            'cep'=>'required',
            'email'=>'required',
            'telefone'=>'required'
        ];

        if ($this->method() == 'PUT') {
            $rules['email'] = ['required',
            Rule::unique('autors')->ignore($this->id)

            ];
            
        }
            
        return $rules;
    }

    public function messages(){
        return[

            'nome'=>'O campo :attribute é obrigatório ser informado!',
            'apelido'=>'O campo :attribute é obrigatório ser informado!',
            'cidade'=>'O campo :attribute é obrigatório ser informado!',
            'bairro'=> 'O campo :attribute é obrigatório ser informado!',
            'cep'=>'O campo :attribute é obrigatório ser informado!',
            'email'=>'O campo :attribute é obrigatório ser informado!',
            'telefone'=>'O campo :attribute é obrigatório ser informado!'
        ];
        
    }
}