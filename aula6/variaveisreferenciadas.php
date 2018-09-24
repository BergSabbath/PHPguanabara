<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
    $a = 3;
    $b = &$a; #O "&" faz a referencia, se um muda.. o outro tbm muda
    $b += 5;
    echo "a variavel a vale $a <br>";
    echo "a variavel b vale $b <br>";
        
    ?>
</div>
</body>
</html>