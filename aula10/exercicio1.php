<html>
    <head>
        <title>Aula10Ex1</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="_css/estilo.css">
    </head>
    <body>
        <div>
            <?php
            $n = isset($_GET["num"])?$_GET["num"]:0;
            $o = isset($_GET["op"])?$_GET["op"]:1;
            switch($o){
                case 1:
                $r = $n * 2;
                break;
                case 2:
                $r = pow($n,3);
                break;
                case 3;
                $r = sqrt($n);
            }
            echo "O resultado é <span class='foco'>".number_format($r,2,',','.'). "</span";
            ?>
            <br><br><br>
            <a href="exercicio1.html"><span class ='botao'>Retornar</span></a>
        </div>
    </body>
</html>