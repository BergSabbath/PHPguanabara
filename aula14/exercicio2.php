<!DOCTYPE HTML>
<html>
<head>
    <title>Aula14Ex2</title>
    <meta charset= "UTF-8">
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <?php
        // função: retorna valores e tem que ser colocada dentro de uma variável
        function soma($a,$b){
            $r = $a + $b;
            return $r;//$r é uma variável local 
        }       
        $w=soma(2,8);
        $e= soma (4,3);
        $p= soma (4,7);
        $x=10;
        $y=2;
        $q=soma($x,$y);
        echo "A soma de $x + $y = $q <br>";
        echo "$w ; $e ; $p ; $q ";
        ?>
    </div>
</body>
</html>