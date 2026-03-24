<?php

namespace App\Repositories;

use App\Models\Fornecedor;
use App\Repositories\BaseRepository;
use App\Repositories\Interfaces\SiteFornecedorRepositoryInterface;

class SiteFornecedorRepository extends SiteBaseRepository implements SiteFornecedorRepositoryInterface
{
    public function __construct(Fornecedor $model)
    {
        parent::__construct($model);
    }
    
    
    public function filter(array $filters)
    {
        return $this->model
            ->filter($filters) // usa o scope do model
            ->orderBy(
                $filters['sort'] ?? 'nome',
                $filters['direction'] ?? 'asc'
            )
            ->paginate($filters['per_page'] ?? 10);
    }



}