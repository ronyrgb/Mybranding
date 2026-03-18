<?php

namespace App\Services;

use App\Repositories\Interfaces\SiteLogRepositoryInterface;

class SiteLogService
{
    protected $repository;

    public function __construct(SiteLogRepositoryInterface $repository)
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

   
}
