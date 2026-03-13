<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\SiteContatoService;

class ContatoController extends Controller
{
    protected $service;

    public function __construct(SiteContatoService $service)
    {
        $this->service = $service;
    }

    // listar contatos
    public function index()
    {
        $contatos = $this->service->listarTodos();

        return view('admin.contato.index', compact('contatos'));
    }

    // visualizar
    public function show($id)
    {
        $contato = $this->service->buscarPorId($id);

        return view('admin.contato.show', compact('contato'));
    }

    // excluir
    public function destroy($id)
    {
        $this->service->remover($id);

        return redirect()
            ->route('admin.contatos')
            ->with('success','Contato removido');
    }
}