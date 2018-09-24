<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>operações</title>
    <link rel="stylesheet" href="_css/estilo.css" />
</head>
<body>
    <div>
    <?php

    $n1 = 10;
    $n2 = 14;
    $med = ($n1+$n2)/2;
    // $soma = $n1 + $n2;

    echo "A soma entre $n1 e $n2 é igual a ". ($n1+$n2);
    echo "<br>A subtração entre os numeros é ". ($n1-$n2);
    echo "<br>A multiplicação entres os numeros é ". ($n1*$n2);
    echo "<br>A divisão entre os numeros é ". ($n1/$n2);
    echo "<br>O resto da divisão é ". ($n1%$n2);
    echo "<br>A media dos valores é $med";
    $v1 = $_GET["a"];
    $v2 = $_GET ["b"];
    $media = ($v1 + $v2)/2;
    echo "<h2>Valores recebidos $v1 e $v2</h2>";
    echo "<br>A soma entre $v1 e $v2 é igual a ". ($v1+$v2);
    echo "<br>A subtração entre os numeros é ". ($v1-$v2);
    echo "<br>A multiplicação entres os numeros é ". ($v1*$v2);
    echo "<br>A divisão entre os numeros é ". ($v1/$v2);
    echo "<br>O resto da divisão é ". ($v1%$v2);
    echo "<br>A media dos valores é $media";

    

    ?>
    </div>
</body>
</html>