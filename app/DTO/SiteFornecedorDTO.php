<?php

namespace App\DTO;

class SiteFornecedorDTO
{
  
    public string $nome;
    public string $email;
    public ?string $uf;
    public ?string $site;

    public function __construct(array $data)
    {
       
        $this->nome = $data['nome'] ?? '';
        $this->email = $data['email'] ?? '';
        $this->uf = $data['uf'] ?? null;
        $this->site = $data['site'] ?? null;
    }

    public function toArray(): array
    {
        return [
    
            'nome' => $this->nome,
            'email' => $this->email,
            'uf' => $this->uf,
            'site' => $this->site,
        ];
    }
}