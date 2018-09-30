<!DOCTYPE HTML>
<html>
    <head>
        <title>Aula11Ex1</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="_css/estilo.css">
    </head>
    <body>
        <div>
            <?php
                $br1 = isset($_GET["v1"])?$_GET["v1"]:0;
                $br2 = isset($_GET["v2"])?$_GET["v2"]:0;
                $br3 = isset($_GET["v3"])?$_GET["v3"]:0;
                $br4 = isset($_GET["v4"])?$_GET["v4"]:0;
                $br5 = isset($_GET["v5"])?$_GET["v5"]:0;
                echo "valor $br1<br>";
                echo "valor $br2<br>";
                echo "valor $br3<br>";
                echo "valor $br4<br>";
                echo "valor $br5<br>";
            ?>
            <br>
            <a href="exercicio1.php" class="botao">Voltar</a>
        </div>
    </body>
</html>