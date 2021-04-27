<?php

use Dotenv\Util\Str;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*

Rota que retorna uma Callback
Route::get('/', function () {
    return 'Olá, seja bem vindo ao curso';
});

*/

// Passando parametros em rotas
// Route::get(
//     '/contato/{nome}/{categoria}/{assunto}/{mensagem}',
//     function (
//         string $nome,
//         string $categoria,
//         string $assunto,
//         string $mensagem
//     ) {
//         echo "Estamos aqui: .$nome - $categoria - $assunto - $mensagem";
//     }
// );

// Rotas com parametros opçionais
// Route::get(
//     '/contato/{nome?}/{categoria?}/{assunto?}/{mensagem?}',
//     function (
//         string $nome = 'Parametro não preenchido',
//         string $categoria = 'Parametro não preenchido',
//         string $assunto = 'Parametro não preenchido',
//         string $mensagem = 'Parametro não preenchido'
//     ) {
//         echo "Estamos aqui: $nome - $categoria - $assunto - $mensagem";
//     }
// );

// Rotas com expressões regulares
// Route::get(
//     '/contato/{nome}/{categoria_id}',
//     function (
//         string $nome = 'Desconhecido',
//         int $categoria_id = 1 // 1 = 'Informação
//     ) {
//         echo "Estamos aqui: $nome, id = $categoria_id";
//     }
// )->where('categoria_id','[0-9]+')->where('nome','[A-Za-z]+'); // o metodo where() filtra os parametros, aceitando somente o caractere do tipo que nele foi passado

Route::get('/', [\App\Http\Controllers\PrincipalController::class, 'Principal'])->name('site.index');

Route::get('/contato', [\App\Http\Controllers\ContatoController::class, 'Contato'])->name('site.contato');

Route::get('/sobrenos', [\App\Http\Controllers\SobreNosController::class, 'SobreNos'])->name('site.sobrenos');

Route::get('/login', [\App\Http\Controllers\LoginController::class, 'Login'])->name('site.login');


//rotas privadas
Route::prefix('/app')->group(function()
{
    Route::get('/clientes', [\App\Http\Controllers\ClientesController::class, 'Clientes'])->name('app.clientes');

    Route::get('/fornecedores', [\App\Http\Controllers\FornecedorController::class, 'Fornecedor'])->name('app.fornecedores');

    Route::get('/produtos', [\App\Http\Controllers\ProdutosController::class, 'Produtos'])->name('app.produtos');
});

Route::get('/teste/{p1}/{p2}', [\App\Http\Controllers\TesteController::class, 'Teste'])->name('site.teste');

Route::fallback(function() {
    echo 'Rota acessada não existe, clique <a href="'.route('site.index').'">aqui</a> para voltar ao incio';
});