<!doctype html>
<html lang="pt-BR">

    <head>
        <title>HOME</title>
        <meta charset="UTF-8">
        <link href='http://fonts.googleapis.com/css?family=Source+Code+Pro:500,400,600,700,300,900,200&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <link type="text/css" rel="stylesheet" href="{{asset('css/home_teste.css')}}">
    </head>

    <body>
        <header><hr>
            <nav>
                <p><sup>menu</sup> <sub>simples</sub></p>
                <ul>
                    <li>
                        <a href = "<?php echo url('/'); ?>">HOME</a>
                    </li>
                    <li>
                        <a href ="<?php echo url('admin'); ?>">AREA ADM</a>
                    </li>
                    <li>
                        <a href ="<?php echo url('contato'); ?>"><img src="imgs/imagem.jpg" title = "Contato" height = "10%" width = "10%"><strong>CONTATO</strong></a>
                    </li>
                </ul>
            </nav>
        </header><hr>
        <section>
            Lore Ipsum
            <article id="paodebatata">
                <header>Cabeça do post</header>
                <div id="feijao arroz">SEI LA LEK</div>
                <span>Este é meu primeiro post</span>
                <footer>Pézinho do post</footer>
            </article>
        </section>

    <table>
        <tr>
            <th>Nome</th>
            <th>Quantidade</th>
            <th>Preço (R$)</th>
        </tr>
        <tr>
            <td>Pera</td>
            <td>3</td>
            <td>3,5</td>
        </tr>
        <tr>
            <td>Maça</td>
            <td>5</td>
            <td>3,0</td>
        </tr>
        <tr>
            <td>Banana</td>
            <td>6</td>
            <td>1,5</td>
        </tr>
    </table>
    <div id="borda">Batatinha quando nasce</div>
    </body>

</html>