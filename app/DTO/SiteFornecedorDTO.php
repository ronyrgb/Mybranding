<?php

namespace App\DTO;

class SiteFornecedorDTO
{
    public ?int $id;
    public string $nome;
    public string $email;
    public ?string $telefone;
    public ?string $site;

    public function __construct(array $data)
    {
        $this->id = $data['id'] ?? null;
        $this->nome = $data['nome'] ?? '';
        $this->email = $data['email'] ?? '';
        $this->telefone = $data['telefone'] ?? null;
        $this->site = $data['site'] ?? null;
    }

    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'nome' => $this->nome,
            'email' => $this->email,
            'telefone' => $this->telefone,
            'site' => $this->site,
        ];
    }
}