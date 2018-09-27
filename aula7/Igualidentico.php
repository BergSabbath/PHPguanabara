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
    $n1 = 3;
    $n2 = "3";
    $r = ($n1 == $n2)? "sim": "não";
    echo "\$n1 = 3 e \$n2 = \"3\"";
    echo "<br>(operador ternário)<br>";
    echo "\$r = \$n1 == \$n2? \"sim\": \"não\";";
    echo "<br>As variaveis são iguais? \"$r\"";
    $r = ($n1 === $n2)? "sim": "não";
    echo "<br>\$r = (\$n1 === \$n2)? \"sim\": \"não\"";
    echo "<br> As variáveis são identicas? \"$r\"";

        
    ?>
</div>
</body>
</html>
 