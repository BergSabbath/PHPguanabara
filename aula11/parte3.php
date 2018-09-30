<!DOCTYPE HTML>
<html>
    <head>
        <title>Aula11Ex3</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="_css/estilo.css">
    </head>
    <body>
        <div>
            <?php
            $c = isset($_GET["ini"])?$_GET["ini"]:0;
            $d = isset($_GET["fim"])?$_GET["fim"]:0;
            $e = isset($_GET["inc"])?$_GET["inc"]:0;

            //echo "inicio $c e fim $d e passo $e";
            if ($c < $d){
                while ($c<=$d){
                    echo "$c  ";
                    $c+=$e;
                }
            }else{
                while ($d<=$c){
                    echo "$c  ";
                    $c-=$e;
                }
            }
            ?>
            <a href="exercicio3.php" class="botao" >Voltar</a>
        </div>
    </body>
</html>