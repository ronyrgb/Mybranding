<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFornecedorRequest;
use App\Http\Resources\FornecedorResource;
use App\Services\SiteFornecedorService;
use Illuminate\Http\Request;
use ResourceBundle;
use Symfony\Component\Routing\Route;

class FornecedorController extends Controller
{

   protected $service;

    public function __construct(SiteFornecedorService $service)
    {
        $this->service = $service;
       
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $fornecedores = $this->service->listarTodos();


       return view('admin.fornecedor.index',['fornecedores' => $fornecedores]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create( ) 
    {   
        return view('admin.fornecedor.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFornecedorRequest $request)
    {
        //dd($_POST);

    $this->service->criar($request->validated());

    return redirect()
        ->route('admin.fornecedor.create')
        ->with('success', 'Fornecedor cadastrado com sucesso!');

    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $filters = $request->all();

        $fornecedores = $this->service->filtrar($filters);
        return view('admin.fornecedor.show',['fornecedores' => $fornecedores]);
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $fornecedor = $this->service->buscarPorId($id);
        return view('admin.fornecedor.edit',['fornecedor' => $fornecedor]);


    }

    /**
     * Update the specified resource in storage.
     */
public function update(StoreFornecedorRequest $request)
{
    // Pega o ID do hidden input
    $id = $request->input('id');

    // Valida os dados
    $data = $request->validated();

    // Atualiza o fornecedor via service
    $this->service->atualizar($id, $data);

    // Redireciona para a listagem ou outra página
    return redirect()
        ->route('admin.fornecedor.editar',['id' => $id])
        ->with('success', 'Fornecedor atualizado com sucesso!');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
