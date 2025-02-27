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

Route::get('/', function () {
    return redirect()->route('admin.cliente');
});

// Route::get('/empresa', function () {
//     return view('empresa');
// });

Route::any('/any', function(){
    return "permite todos acessos http";
});

Route::match(['get', 'post'], '/match', function(){
    return "Permite somente acessos definidos";
});

route::get('/produto/{id}', function($id){
    return "O id é: ".$id;
});

// Route::get('/sobre', function(){
//     return redirect('empresa');
// });

// REDIRECIONANDO DIRETAMENTE DE ONDE PARA ONDE
Route::redirect('/sobre', '/empresa');
Route::view('/empresa', 'site/empresa');

// COLOCANDO NOME NA ROTA
Route::get('/news', function(){
    return view('news');
})->name('noticias');

// ENVIANDO PARA A ROTA ATRAVÉS DO NOME
Route::get('/novidades', function(){
    return redirect()->route('noticias');
});

// ENCADEANDO ROTAS EM UM GRUPO ATRAVÉS DO PREFIX
Route::prefix('admin')->group(function(){
    Route::get('/', function(){
        return "dashboards";
    });

    Route::get('/dashboards', function(){
        return "dashboards";
    });
    
    Route::get('/user', function(){
        return "user";
    });

    Route::get('/clientes', function(){
        return "clientes";
    });
});

// ENCADEANDO ROTAS EM UM GRUPO ATRAVÉS DO NOME
Route::name('admin.')->group(function(){

    Route::get('admin/dashboards', function(){
        return "dashboards";
    })->name('dashboard');
    
    Route::get('admin/user', function(){
        return "user";
    })->name('usuario');

    Route::get('admin/clientes', function(){
        return 'clientes';
})->name('cliente');
});