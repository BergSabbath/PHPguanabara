<html>
<head>
    <title>Aula12Ex3</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
    <?php
        $c = isset($_GET["roda"])?$_GET["roda"]:0;
        $s=1;
        echo "<h2>Mostrando a tabuada de $c</h2>";
        do{
            $tot = $c * $s;
            echo "$c x $s = $tot <br>";
            $s++;
        }while($s<=10);

    ?>
    <br><br>
    <a href="exercicio3.php" class="botao">Voltar</a>
    </div>
</body>
</html>