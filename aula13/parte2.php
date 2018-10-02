<!DOCTYPE HTML>
<html>
<head>
    <title>Aula13ex3</title>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="_css/estilo.css"/>
</head>
<body>
    <div>
    <?php
        $t = isset($_GET["sel"])?$_GET["sel"]:0;
        echo "A tabuada de $t é:";
        for ($e = 1; $e<=10;$e++){
            $r = $t * $e;
            echo "<br>";
            echo "$t x $e = $r";
        }
        ?>
        <a href="javascript:history.go(-1)">voltar</a>
    </div>
</body>
</html>