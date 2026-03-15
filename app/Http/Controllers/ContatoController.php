<?php


namespace App\Http\Controllers;

use App\Services\SiteContatoService;
use App\Http\Requests\StoreContatoRequest;
use App\Http\Resources\ContatoResource;
use App\Services\MotivoContatoService;
class ContatoController extends Controller
{
    protected $service;
    protected $serviceMotivo;

    public function __construct(SiteContatoService $service, MotivoContatoService $serviceMotivo)
    {
        $this->service = $service;
        $this->serviceMotivo = $serviceMotivo;
    }

    /**
     * Listar contatos
     */
    public function index()
    {
        // API (JSON)
        // return ContatoResource::collection($contatos);
            $motivo_contatos = $this->serviceMotivo->listar();
        // Blade
             return view('site.contato.index',['motivo_contatos'=> $motivo_contatos]);
             
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