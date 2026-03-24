<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFornecedorRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true; // ajuste se tiver regras de permissão
    }

    public function rules(): array
    {
        return [
            'nome' => 'required|min:3|max:255',
            'site' => 'nullable|url|max:255',
            'uf' => 'required|size:2',
            'email' => 'required|email|max:255',
        ];
    }

    public function messages(): array
    {
        return [
            'nome.required' => 'O nome é obrigatório',
            'nome.min' => 'O nome deve ter no mínimo 3 caracteres',

            'site.url' => 'O site deve ser uma URL válida',

            'uf.required' => 'A UF é obrigatória',
            'uf.size' => 'A UF deve ter exatamente 2 caracteres',

            'email.required' => 'O e-mail é obrigatório',
            'email.email' => 'Informe um e-mail válido',
        ];
    }
}