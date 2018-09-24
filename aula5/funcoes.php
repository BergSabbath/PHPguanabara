<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>funcoes</title>
    <link rel="stylesheet" href="_css/estilo.css" />
</head>
<style>
    h2{
        font: 15pt arial bold;
        color:  blue;
    }
</style>
<body>
<div>
    <?php
    $n1 = $_GET["x"];
    $n2 = $_GET["y"];
    echo "<h2>Valores recebidos $n1 e $n2</h2>";
    echo "<br>O valor absoluto de $n2 é ". abs($n2);
    echo "<br>O valor de $n1<sup>$n2</sup> é igual a ". pow($n1,$n2);
    echo "<br>A raiz quadrada de $n1 é igual a ". sqrt($n1);
    echo "<br>O valor arredendado de $n2 é igual a ". round($n2); //ceil arredonda pra cima e floor arredonda para baixo
    echo "<br>a parte inteira de $n2 é ". intval($n2);// aki pega somente a parte inteira do numero.
    echo "<br>O valor de $n1 em moeda é R$". number_format($n1,2,",",".");
    ?>
</div>
</body>
</html>