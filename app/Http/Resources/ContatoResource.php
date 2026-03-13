<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ContatoResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'nome' => $this->nome,
            'telefone' => $this->telefone,
            'email' => $this->email,
            'motivo_contato' => $this->motivo_contato,
            'mensagem' => $this->mensagem,
            'criado_em' => $this->created_at
        ];
    }
}