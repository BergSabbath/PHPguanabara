<!DOCTYPE HTML>
<html>
<head>
    <title>Aula14Ex3</title>
    <meta charset= "UTF-8">
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <?php
        /* o comando "require" faz o mesmo.. porem trava o script se não achar o arquivo
        * o comando "include" se não achar o arquivo ele continua o resto do script
        * include_once e require_once inclui e avalia o arquivo informado durante a
        * execução do script. a única diferença que, se o código do arquivo já foi incluído, 
        não o fará novamente, e o include_once retornará TRUE.*/
        include "funcoes.php";
        ola();
        echo "<br>";
        bom();
        echo "<br>";
        mostraValores(5);
    
        echo "testando funções"
        ?>
    </div>
</body>
</html>