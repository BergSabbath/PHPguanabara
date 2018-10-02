<!DOCTYPE HTML>
<html>
<head>
    <title>Aula14Ex1</title>
    <meta charset= "UTF-8">
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <?php
        // apenas procedimento, não retorna valores
        function soma($a,$b){
            $r = $a + $b;
            echo "$a +$b = $r<br>";
        }       
        soma(2,8);
        soma (4,3);
        soma (4,7);
        $x=10;
        $y=2;
        soma($x,$y);
        
        ?>
    </div>
</body>
</html>