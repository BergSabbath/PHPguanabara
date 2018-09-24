<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Page Title</title>
    <link rel="stylesheet" href="_css/estilo.css" />
</head>
<body>
<div>
<?php
    $t1=$_GET["p"];
    $juros=$_GET["q"];
    echo "adicionar $juros% ao valor $t1 <br>";
    //$t1*=$juros;
    //$final = $t1 *(1 + $juros);
    //$t1 = $t1 + ($t1*$juros/100);//tem varias formas de calcular porcentagem
    $t1+= ($t1*$juros/100);
    echo "o valor é R$". number_format($t1,2,',','.');
    

?>
</div>
</body>
</html>