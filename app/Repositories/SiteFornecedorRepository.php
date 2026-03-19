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
}