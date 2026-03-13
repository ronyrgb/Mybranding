<?php
use App\Http\Controllers\Admin\ContatoController;
use Illuminate\Support\Facades\Route;
use PHPUnit\Metadata\Group;


Route::prefix('admin')->group(function(){

    Route::get('/contatos', [ContatoController::class,'index'])
        ->name('admin.contatos');

    Route::get('/contatos/{id}', [ContatoController::class,'show'])
        ->name('admin.contatos.show');

    Route::delete('/contatos/{id}', [ContatoController::class,'destroy'])
        ->name('admin.contatos.destroy');

});