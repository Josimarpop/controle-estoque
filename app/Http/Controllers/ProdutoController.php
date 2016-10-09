<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\ProdutosRequest;
use App\Produto;
use Request;

class ProdutoController extends Controller {
    /* Listagem de produtos */

    public function lista() {
        $produtos = Produto::all();

        //Verificar se existe a view
        if (view()->exists("produto.listagem")) {
            return view("produto.listagem")->with("produtos", $produtos);
        } else
            return "Falha ao encontrar o arquivo de view";
    }

    /* Método responsável por carregar os detalhes do produto */

    public function detalhes($id) {
        $produto = Produto::find($id);
        if (empty($produto)) {
            return "Esse produto não existe";
        }
        return view("produto.detalhes")->with("p", $produto);
    }

    /* Método responsavel por controlar a chamada do formulário de novo produto */

    public function novoProduto() {
        return view("produto.formulario");
    }

    /* Método chamado ao clicar no botão adicionar no formulário de novo produto */

    public function adicionaProduto(ProdutosRequest $request){

        Produto::create($request->all());

        //Redirecionar para listagem de produtos passando o parametro via request
        return redirect()
                        ->action('ProdutoController@lista')
                        ->withInput(Request::only('nome'));
    }

    public function editarProduto($id) {
        $item = Produto::find($id);
        return view('produto.editar', compact('item'));
    }

    public function updateProduto($id) {
        
        Produto::find($id)->update(Request::all());
        
        return redirect()
                ->action('ProdutoController@lista');
    }

    /* Método para realizar a exclusão de um produto */

    public function remove($id) {
        $produto = Produto::find($id);
        $produto->delete();
        return redirect()
                        ->action("ProdutoController@lista");
    }

     /* Exemplo de método para realizar download de arquivo */

    public function downloadArquivo() {
        return response()
                        ->download($caminhoParaUmArquivo);
    }
     /* Exemplo de método utilizando JSON */

    public function listaJson() {
        $produtos = Produto::all();
        return response()->json($produtos);
    }

}
