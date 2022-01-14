<?php

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


// Recebendo parametros atravez da URL
// Route::get('/contato/{nome}', function(string $nome) {
//     echo 'Certo Sr. '.$nome;
// });

// Tratando parametros como opcionais
// Route::get(
//     '/contato/{nome?}/{categoria?}/{assunto?}/{mensagem?}', 
//     function(
//         string $nome = 'Desconhecido',
//         string $categoria = 'Informação',
//         string $assunto = 'Contato',
//         string $mensagem = 'Mensagem não informada'
//         ) {
//             echo "Certo Sr. $nome - $categoria - $assunto - $mensagem";
// });

// Tratando parâmetros de rotas com expressões regulares
// Route::get(
//     '/contato/{nome}/{cadegoria_id}', 
//     function(
//         string $nome = 'Desconhecido',
//         int $categoria_id = 1
//     ) {
//         echo "Estamos aqui: $nome - $categoria_id";
//     }
// )->where('categoria_id', '[0-9]+')->where('nome', '[A-Za-z]+');

//Rotas públicas 
Route::get('/', 'App\Http\Controllers\PrincipalController@principal')->name('site.index');

Route::get('/contato', 'App\Http\Controllers\ContatoController@contato')->name('site.contato');

Route::get('/sobrenos', 'App\Http\Controllers\SobreNosController@sobrenos')->name('site.sobrenos');

Route::get('/login', 'App\Http\Controllers\LoginController@login')->name('site.login');

//Rotas privadas, essas rotas precisam de autenticação para acessa-lás
Route::prefix('/app')->group(function () {

    Route::get('/clientes', 'App\Http\Controllers\ClientesControllers@clientes')->name('app.clientes');

    Route::get('/fornecedores', 'App\Http\Controllers\FornecedorController@index')->name('app.fornecedores');

    Route::get('/produtos', 'App\Http\Controllers\ProdutosController@produtos')->name('app.produtos');
});

Route::fallback(function() {
    echo 'A rota acessada não existe. <a href="'.route('site.index').'">clique aqui</a> para voltar para o menu iniciar.';
});
