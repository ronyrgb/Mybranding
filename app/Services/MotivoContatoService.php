<?php

namespace App\Services;

use App\Repositories\Interfaces\SiteMotivoRepositoryInterface;

class MotivoContatoService
{
    protected $repository;

    public function __construct(SiteMotivoRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function listar()
    {
        return $this->repository->getAll();
    }

    public function buscar($id)
    {
        return $this->repository->findById($id);
    }

    public function criar(array $dados)
    {
        return $this->repository->create($dados);
    }

    public function atualizar($id, array $dados)
    {
        return $this->repository->update($id, $dados);
    }

    public function deletar($id)
    {
        return $this->repository->delete($id);
    }
}
