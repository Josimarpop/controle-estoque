@extends("layout.principal")
@section("conteudo")
<h1>Editar produto:</h1>
    <form action="{{action('ProdutoController@updateProduto', $item->id)}}" method="post" class="form-group">
        <!-- O token evida falsificação de solicitação entre sites -->
        <input type="hidden"
               name="_token" value="{{{ csrf_token() }}}" />
        <div class='row'>
            <div class="form-group">
                <label>Nome</label>
                <input name="nome" class="form-control" value="{{$item->nome}}" />
            </div>
            <div class="form-group">
                <label>Descricao</label>
                <input name="descricao" class="form-control" value="{{$item->descricao}}"/>
            </div>
            <div class="form-group">
                <label>Valor</label>
                <input name="valor" class="form-control" value="{{$item->valor}}"/>
            </div>
            <div class="form-group">
                <label>Quantidade</label>
                <input type="number" name="quantidade" class="form-control" value="{{$item->quantidade}}"/>
            </div>
            <button type="submit"
                    class="btn btn-primary btn-block">Alterar</button>
        </div>
    </form>
@stop