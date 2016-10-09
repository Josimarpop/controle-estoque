@extends("layout.principal")

@section("conteudo")

@if(empty($produtos))
<div class="alert alert-danger">
    Você não tem nenhum produto cadastrado.
</div>
@else

<h1>Listagem de produtos</h1>
<div class="table-responsive">
    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th>Produto</th>
                <th>Valor</th>
                <th>Descrição</th>
                <th>Quantidade</th>
            </tr>
        </thead>
        @foreach ($produtos as $p)

        <tr class="{{$p->quantidade<=1 ?"danger" : ""}}">
            <td>{{$p->nome }}</td>
            <td>{{$p->valor }}</td>
            <td>{{$p->descricao or 'Sem descrição'}} </td>
            <td>{{$p->quantidade }}</td>
            <td class="col-md-1">
                <a style="width: 100px" class="btn btn-info" href="{{action('ProdutoController@detalhes', $p->id)}}">Detalhes</a>
            </td>
            <td class="col-md-1">
                <a style="width: 100px" class="btn btn-primary" href="{{action('ProdutoController@editarProduto', $p->id)}}">Editar</a>
            </td>
            <td class="col-md-1">
                <a style="width: 100px" class="btn btn-danger" href="{{action('ProdutoController@remove', $p->id )}}">Remover</a>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endif

<h4>
    <div class="text-right">
        Legenda
        <br>
        <span class="label label-danger pull-right">
            Um ou menos itens no estoque
        </span>
    </div>
</h4>

@if(old('nome'))
<div class="alert alert-success">
    <strong>Sucesso!</strong>
    <!--OLD exibindo um valor da requisição anterior -->
    O produto {{ old('nome') }} foi adicionado.
</div>
@endif

@stop