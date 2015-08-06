<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Contato</title>
    <style type="text/css">
        nav{
            background_color:orange;
            width:500px;
        }
    </style>
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
<img src="imgs/imagem1.jpg">
<section>
    <p>ALLAHU AKBAR</p>

    <form action = "" method ="get">
        <label for = "login">Username</label>
        <input type = "text" name = "login" id = "login">

        <label for = "senha">Senha</label>
        <input type = "password" name= "senha" id= "senha">

        <input type ="submit" value = "Foda-se">

        <br>

        <label for ="sexoM">Sexo</label>
        <input type="radio" name="sexo" id = "sexoM">
        <label for ="sexoM">Masculino</label>
        <input type="radio" name="sexo" id = "sexoF">
        <label for ="sexoF">Feminino</label>
        <br>

        <label for ="descricao">Descricao</label>
        <textarea name="descricao" id = "descricao" cols="30" rows="10"></textarea>
        <br>
        <br>

    </form>
    <form action = "http://google.com/search" method = "get" target="blank">
        <input type = "text" name="q">
        <input type = "submit" value = "search">
    </form>

</section>
</body>
</html>