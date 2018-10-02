<html>
<head>
    <title>Aula12Ex1</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <?PHP
        $c = isset($_GET["ini"])?$_GET["ini"]:0;
        $e = isset($_GET["fim"])?$_GET["fim"]:0;

        do {
            echo "numero $c <br>";
            $c++;
        }while($c<=$e);
        ?>
        <br><br>
        <a href="exercicio1.php" class="botao">Voltar</a>
    </div>
</body>
</html>