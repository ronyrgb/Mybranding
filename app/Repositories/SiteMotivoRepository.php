<?php

namespace App\Repositories;

use App\Models\MotivoContato;
use App\Repositories\BaseRepository;
use App\Repositories\Interfaces\SiteMotivoRepositoryInterface;

class SiteMotivoRepository extends SiteBaseRepository implements SiteMotivoRepositoryInterface
{
    public function __construct(MotivoContato $model)
    {
        parent::__construct($model);
    }
}