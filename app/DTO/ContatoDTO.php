<?php

namespace App\DTO;

class ContatoDTO
{
    public $nome;
    public $telefone;
    public $email;
    public $motivo_contato;
    public $mensagem;

    public function __construct(array $data)
    {
        $this->nome = $data['nome'];
        $this->telefone = $data['telefone'];
        $this->email = $data['email'];
        $this->motivo_contato = $data['motivo_contato'];
        $this->mensagem = $data['mensagem'];
    }

    public function toArray()
    {
        return [
            'nome' => $this->nome,
            'telefone' => $this->telefone,
            'email' => $this->email,
            'motivo_contato' => $this->motivo_contato,
            'mensagem' => $this->mensagem
        ];
    }
}