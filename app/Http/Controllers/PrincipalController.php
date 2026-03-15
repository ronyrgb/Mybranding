<?php

namespace App\Http\Controllers;


use App\Services\SiteContatoService;
use App\Http\Requests\StoreContatoRequest;
use App\Http\Resources\ContatoResource;
use App\Services\MotivoContatoService;

class PrincipalController extends Controller
{
   protected $service;
   protected $serviceMotivo;

    public function __construct(SiteContatoService $service, MotivoContatoService $serviceMotivo)
    {
        $this->service = $service;
        $this->serviceMotivo = $serviceMotivo;
    }



    public function principal(){

        $motivo_contatos = $this->serviceMotivo->listar();

         return view('site.principal',['motivo_contatos'=> $motivo_contatos]);
    }
}
