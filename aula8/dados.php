<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="_css/estilo.css">
    </head>
    <body>
        <div>
        <?php
            $nome = isset($_GET["nome"])?$_GET["nome"]:"não informado";
            $ano = isset($_GET["ano"])?$_GET["ano"]:0;
            $sexo = isset($_GET["sexo"])?$_GET["sexo"]:"não informado";
            $idade = date ("Y")- $ano;
            echo "Seu nome é $nome, você nasceu em $ano, você é do sexo $sexo e sua idade é $idade";
        ?>
        <a href="Dados.html">voltar</a>
        </div>
    </body>
</html>