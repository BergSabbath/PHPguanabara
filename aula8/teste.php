<html>
    <head>
        <title>Teste php</title>
        <meta charset="UTF-8"> 
        <link rel="stylesheet" href="_css/estilo.css">
    </head>
    <body>
        <div>
            <?php
                $b1=$_GET["n"];
                $p2 = pow($b1,3);
                echo "O valor $b1 elevado ao cubo é igual a $p2 <br>";
            ?>
            <a href="teste.html">voltar</a>
        </div>
    </body>
</html>