<html>
<head>
    <title>Treinamento</title>
    <meta charset='utf-8'>
    {{--<link type="text/css" rel="stylesheet" href="{{asset("libs/bootstrap-3.3.5-dist/css/bootstrap.css")}}">--}}
    <link type="text/css" rel='stylesheet' href="{{asset("css/estilo.css")}}">
</head>
<body>
<h1>Titulo</h1>
<h2>Subtitulo</h2>
<p>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
    reprehenderit in voluptate velit esse cillum dolore eu fugiat
    nulla pariatur.
</p>
<ul>
    <li>1</li>
    <li>2</li>
    <li>3</li>
    <li>4</li>
</ul>
<div id="caixas">
    <ul>
        <li class='caixa' data-nome="Caixa 1">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.
            </p> <br>
            <a class='botao' href='#'>Clique aqui</a>
        </li>
        <li class='caixa' data-nome="Caixa 2">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.
            </p> <br>
            <a class='botao' href='#'>Clique aqui</a>
        </li>
        <li class='caixa' data-nome="Caixa 3">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.
            </p> <br>
            <a class='botao' href='#'>Clique aqui</a>
        </li>
    </ul>
    <div class='clear'></div>

    <div class="caixaAviso">
        <a class="sim" href="#">JA E</a>
        <a class="nao" href="#">JA ERA</a>

    </div>

</div>
<footer>rodapé</footer>
<script src="{{asset("libs/jquery/jquery-1.11.3.min.js")}}"></script>
{{--<script src={{asset("libs/bootstrap-3.3.5-dist/js/bootstrap.js")}}></script>--}}
<script charset="utf-8" src="{{asset('treinamento.js')}}"></script>
</body>
</html>
