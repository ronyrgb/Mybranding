<?php

namespace App\Http\Controllers;

use App\Services\SiteContatoService;
use App\Http\Requests\StoreContatoRequest;
use App\Http\Resources\ContatoResource;

class ContatoController extends Controller
{
    protected $service;

    public function __construct(SiteContatoService $service)
    {
        $this->service = $service;
    }

    /**
     * Listar contatos
     */
    public function index()
    {
                // API (JSON)
        // return ContatoResource::collection($contatos);

        // Blade
        return view('site.contato.index');
    }
    
    /**
     * Salvar contato
     */
    public function store(StoreContatoRequest $request)
    {
        $contato = $this->service->criar(
            $request->validated()
        );

        // API
        // return new ContatoResource($contato);

        // Blade
        return redirect()
            ->route('site.contato')
            ->with('success', 'Mensagem enviada com sucesso!');
    }

}