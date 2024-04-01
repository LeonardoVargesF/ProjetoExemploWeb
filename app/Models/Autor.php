<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    use HasFactory;

    protected $table = "autors";

    protected $fillable = [
        'nome',
        'apelido',
        'cidade',
        'bairro',
        'cep',
        'email',
        'telefone'
    ];

    public function rules(){
        return[
            'nome'=>'required',
            'apelido'=>'required',
            'cidade'=>'required',
            'bairro'=> 'required',
            'cep'=>'required',
            'telefone'=>'required'
        ];
    }

    public function feedback(){
        return[
            'nome'=>'O campo :attribute é obrigatório ser informado!',
            'apelido'=>'O campo :attribute é obrigatório ser informado!',
            'cidade'=>'O campo :attribute é obrigatório ser informado!',
            'bairro'=> 'O campo :attribute é obrigatório ser informado!',
            'cep'=>'O campo :attribute é obrigatório ser informado!',
            'telefone'=>'O campo :attribute é obrigatório ser informado!'
        ];

    }

        
}
