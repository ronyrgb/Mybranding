<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    protected $fillable = ['id','nome','site','uf','email'];

    protected function scopeFilter($query, $filters)
    {
        //campos com like
        $likeFields = ['nome', 'email', 'site'];

        foreach ($likeFields as $field) {
            if (!empty($filters[$field])) {
                $query->where($field, 'LIKE', '%' . $filters[$field] . '%');
            }
        }
        // uf nao entra like
        if (!empty($filters['uf'])) {
            $query->where('uf', $filters['uf']);
        }

        return $query;
    }

}
