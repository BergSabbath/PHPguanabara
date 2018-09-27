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
    $n1 = $_GET["a"];
    $n2 = $_GET["b"];
    $m = ($n1 + $n2)/2;
    echo "A media entre $n1 e $n2 é $m";
    //$situ=$m>=7?"Aprovado":"reprovado";
    echo "<br>o aluno está " . ($m>=6?"Aprovado":"reprovado");
    //aqui á uma concatenação e a $situ não aparece... 

        
    ?>
</div>
</body>
</html>
 