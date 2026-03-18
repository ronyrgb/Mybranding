<?php
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use PHPUnit\Metadata\Group;
use App\Http\Middleware\LogAcessoMiddleware;


Route::prefix('contato')->group(function(){
    Route::get('/', [ContatoController::class,'index'])->name('site.contato');
    Route::post('/', [ContatoController::class,'store'])->name('site.contato.store');

});


Route::get('/', [PrincipalController::class, 'principal'])->name('site.principal')->middleware('log.acesso');
//->middleware(LogAcessoMiddleware::class);
Route::get('/sobre-nos', [SobreNosController::class, 'sobrenos'])->name('site.sobrenos');
Route::get('/login/{erro?}', [LoginController::class, 'index'])->name('site.login');
Route::post('/login', [LoginController::class,'store'])->name('site.login.store');










/*
//Route::get('/contato', [ContatoController::class, 'index'])->name('site.contato');
//Route::post('/contato', [ContatoController::class, 'store'])->name('site.contato.store');

Route::get('/contato/{id}', [ContatoController::class, 'show'])->name('site.contato.show');
Route::get('/contato/{id}/edit', [ContatoController::class, 'edit'])->name('site.contato.edit');
Route::get('/contato/list', [ContatoController::class, 'list'])->name('site.contato.list');




Route::get('/teste/{p1}/{p2}',[TesteControler::class,'teste'])->name('site.teste');

Route::prefix('app')->group(function(){

        Route::get('/login', [LonginController::class, 'principal'])->name('site.login');
        Route::get('/clientes', [ClientesController::class, 'principal'])->('app.cliente');
        Route::get('/produtos', [ProdutosController::class, 'principal'])('app.produtos');
        

/*Route::get('/fornecedores', [FornecedoresController::class, 'index'])->name('fornecedores');
});

Route::get('/contato/{nome}/{cagegoria_id}',function(
               string $nome = 'Decconheci',
               int $cagegoria_id = 1
){
        echo "Estamos aqui: $nome - $cagegoria_id";
             
})->where('cagegoria_id','[0-9]+')->where('nome','[A-Za-z]+');



Route::get('/rota1',function(){
       echo 'Rota 1';
             
})->name('site.rota1');

Route::get('/rota2',function(){
        echo 'Rota 2'; 
        return redirect()->route('site.rota1');     
})->name('site.rota2');
    

//Route::redirect('/rota2', '/rota1');

Route::fallback(function(){
        echo 'erro';
        });*/