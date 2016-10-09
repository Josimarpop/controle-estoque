<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

/*Rota para listar os produtos cadastrados*/
Route::get("/produtos", "ProdutoController@lista");
/*Rota para obter os detalhes do produtos, url permite somente numeros no get*/
Route::get("/produtos/detalhes/{id}", "ProdutoController@detalhes")->where("id","[0-9]+");
/*Rota para excluir um produto*/
Route::get("/produtos/remove/{id}", "ProdutoController@remove")->where("id","[0-9]+");
/*Exemplo de lista de objeto em JSON*/
Route::get("/produtos/json", "ProdutoController@listaJson");
/*Rota para criar um novo produto*/
Route::get("/produtos/novoProduto","ProdutoController@novoProduto");
/*Rota para adicionar um novo produto, utilizando post, evitando array na URL*/
Route::post("/produtos/adicionaProduto", "ProdutoController@adicionaProduto");
/*Rota para editar um produto*/
Route::get("/produtos/editar/{id}", "ProdutoController@editarProduto");
/*Rota para editar um produto*/
Route::post("/produtos/update/{id?}", "ProdutoController@updateProduto");