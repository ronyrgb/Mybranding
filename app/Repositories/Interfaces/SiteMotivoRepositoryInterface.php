<?php
// app/Repositories/Interfaces/SiteContatoRepositoryInterface.php
namespace App\Repositories\Interfaces;

interface SiteMotivoRepositoryInterface
{
    public function getAll();
    public function findById($id);
    public function create(array $data);
    public function update($id, array $data);
    public function delete($id);
    public function findBy(array $conditions);
}