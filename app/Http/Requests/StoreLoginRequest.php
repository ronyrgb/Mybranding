<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreLoginRequest extends FormRequest
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
        return [
            'usuario' => ['required', 'string', 'min:3', 'max:50'],
            'senha'   => ['required', 'string', 'min:6', 'max:100'],
        ];
    }

    public function messages(): array
    {
        return [
            'usuario.required' => 'O campo usuário é obrigatório.',
            'usuario.string'   => 'O usuário deve ser um texto válido.',
            'usuario.min'      => 'O usuário deve ter pelo menos :min caracteres.',
            'usuario.max'      => 'O usuário deve ter no máximo :max caracteres.',

            'senha.required' => 'O campo senha é obrigatório.',
            'senha.string'   => 'A senha deve ser um texto válido.',
            'senha.min'      => 'A senha deve ter pelo menos :min caracteres.',
            'senha.max'      => 'A senha deve ter no máximo :max caracteres.',
        ];
    }

    public function attributes(): array
    {
        return [
            'usuario' => 'usuário',
            'senha'   => 'senha',
        ];
    }
}