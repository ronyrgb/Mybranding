<?php

namespace App\Repositories;

use App\Models\LogAcesso;
use App\Repositories\BaseRepository;
use App\Repositories\Interfaces\SiteLogRepositoryInterface;

class SiteLogRepository extends SiteBaseRepository implements SiteLogRepositoryInterface
{
    public function __construct(LogAcesso $model)
    {
        parent::__construct($model);
    }
}