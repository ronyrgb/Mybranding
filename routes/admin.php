<?php
use App\Http\Controllers\Admin\ContatoController;
use Illuminate\Support\Facades\Route;
use PHPUnit\Metadata\Group;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\LoginController;

Route::prefix('admin')->group(function(){
        Route::get('/index', [HomeController::class, 'index'])->name('admin.home');
        Route::get('/sair', [HomeController::class, 'destroy'])->name('admin.sair');
        Route::get('/clientes', [ClienteController::class, 'index'])->name('admin.cliente');
        Route::get('/produtos', [ProdutoController::class, 'index'])->name('admin.produto');
        Route::get('/fornecedores', [FornecedorController::class, 'index'])->name('admin.fornecedor');
        Route::get('/fornecedores/adicionar/{msg?}', [FornecedorController::class, 'create'])->name('admin.fornecedor.create');
        Route::get('/fornecedores/editar/{id?}', [FornecedorController::class, 'edit'])->name('admin.fornecedor.editar');

        Route::post('/fornecedores/listar', [FornecedorController::class, 'show'])->name('admin.fornecedor.show');
        Route::post('/fornecedores/add', [FornecedorController::class, 'store'])->name('admin.fornecedor.store');

        Route::put('/fornecedores/update', [FornecedorController::class, 'update'])->name('admin.fornecedor.update');

});