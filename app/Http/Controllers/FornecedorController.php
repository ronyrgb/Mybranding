<?php

namespace App\Http\Controllers;

use App\Services\SiteFornecedorService;
use Illuminate\Http\Request;

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
    public function index()
    {
       return view('admin.fornecedor.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.fornecedor.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       return view('admin.fornecedor.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
