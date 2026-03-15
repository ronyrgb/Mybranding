<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContatoRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nome' => 'required|string|max:100',
            'telefone' => 'required|string|max:20',
            'email' => 'required|email|max:100',
            'motivo_contat_id' => 'required|string|max:100',
            'mensagem' => 'required|string'
        ];
    }

    public function messages()
    {
        return [
            'required' => 'O campo :attribute não foi preenchido.',
            'email' => 'O campo :attribute deve ser um email válido.',
            'max' => 'O campo :attribute ultrapassou o tamanho permitido.'
        ];
    }

    public function attributes()
    {
        return [
            'nome' => 'nome',
            'telefone' => 'telefone',
            'email' => 'e-mail',
            'motivo_contato' => 'motivo do contato',
            'mensagem' => 'mensagem'
        ];
    }
}