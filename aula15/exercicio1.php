<!DOCTYPE HTML>
<html>
<head>
    <title>Aula14Ex3</title>
    <meta charset= "UTF-8">
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <?php
        #passagem de parametro por referencia.
        function teste($x){
            $x+=2;
            echo "o valor é $x<br>";
        }
        $a = 8;
        teste ($a);
        echo "Na passagem de paramentro por refencia \"\$a\" vale  $a<br><br>"
        ?>
        <?php
        //passagem de parametro por valor.
        //qualquer alteração em $x altera o $b
            function teste2(&$x){
                $x+=2;
                echo "o valor é $x<br>";
            }
        $b = 8;
        teste2($b);
        echo "Na passagem de parametro por valor \"\$b\" vale $b";
        ?>
    </div>
</body>
</html>