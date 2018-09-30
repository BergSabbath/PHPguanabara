<!DOCTYPE HTML>
<html>
    <head>
        <title>Aula11Ex2</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="_css/estilo.css">
    </head>
    <body>
        <div>
            <?php
            $i = 1;
            while ($i<=5){
                $v = "num".$si;
                $url = "v".$i;
                $$v = isset($_GET[$url])?$_GET[$url]:0;
                $i++;
            }
            while($i=1){
                $v="num".$i;
                echo "valor$i:". $$v."<br>";
                $i++;
            }
            ?>
        </div>
    </body>
</html>