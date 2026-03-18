<?php
// app/Repositories/Interfaces/SiteContatoRepositoryInterface.php
namespace App\Repositories\Interfaces;

interface SiteLogRepositoryInterface
{
    public function getAll();
    public function findById($id);
    public function create(array $data);
    public function findBy(array $conditions);
}