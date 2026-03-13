<?php

namespace App\Repositories;

use App\Models\SiteContato;
use App\Repositories\BaseRepository;
use App\Repositories\Interfaces\SiteContatoRepositoryInterface;

class SiteContatoRepository extends BaseRepository implements SiteContatoRepositoryInterface
{
    public function __construct(SiteContato $model)
    {
        parent::__construct($model);
    }
}