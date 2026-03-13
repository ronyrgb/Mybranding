<?php

namespace App\Services;

use App\DTO\ContatoDTO;
use App\Repositories\Interfaces\SiteContatoRepositoryInterface;

class SiteContatoService
{
    protected $repository;

    public function __construct(SiteContatoRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Listar todos os contatos
     */
    public function listarTodos()
    {
        return $this->repository->getAll();
    }

    /**
     * Buscar contato por ID
     */
    public function buscarPorId($id)
    {
        return $this->repository->findById($id);
    }

    /**
     * Criar novo contato
     */
    public function criar(array $data)
    {
        $dto = new ContatoDTO($data);

        return $this->repository->create($dto->toArray());
    }

    /**
     * Atualizar contato
     */
    public function atualizar($id, array $data)
    {
        $dto = new ContatoDTO($data);

        return $this->repository->update($id, $dto->toArray());
    }

    /**
     * Remover contato
     */
    public function remover($id)
    {
        return $this->repository->delete($id);
    }

    /**
     * Buscar por condições
     */
    public function buscarPor(array $conditions)
    {
        return $this->repository->findBy($conditions);
    }
}