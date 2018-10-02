<html>
<head>
    <title>Aula12Ex2</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <?PHP

        // Calculo de fatorial
        $c = isset($_GET["ini"])?$_GET["ini"]:0;
        #$e = isset($_GET["fim"])?$_GET["fim"]:0;
        $e=1;
        $f=$c;
        do {
            $f=$f*$e;
            echo "$f <br>";
            $e++;
        }while($e<$c);
        echo "O fatorial de $c é: $f";
        ?>
        
        <br><br>
        <a href="exercicio2.php" class="botao">Voltar</a>
    </div>
</body>
</html>