<html>
    <head>
        <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}"/>
        <link rel="stylesheet" type="text/css" href="{{asset('css/custom.css')}}"/>
        <title>Controle de estoque</title>
    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{action('ProdutoController@lista')}}">
                        Estoque Laravel
                    </a>
                </div>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{ action('ProdutoController@lista')}}">Listagem</a></li>
                    <li><a href="{{ action('ProdutoController@novoProduto')}}">Novo</a></li>
                </ul>
            </div>
        </nav>
        <div class="container">
            @yield("conteudo")
        </div>

        <footer class="footer">
            <div class="container">
                <p>© Desenvolvido por Jonatas Dutka.</p>
            </div>
        </footer>
    </body>
</html>