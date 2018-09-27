<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="_css/estilo.css">
    </head>
    <body>
        <div>
            <?PHP
            $n= isset($_GET["num"])?$_GET["num"]:0;
            switch($n){
                case 1:
                case 7:
                echo "É fim de semana, aproveite!!";
                break;
                case 2:
                case 3:
                case 4:
                case 5:
                case 6:
                echo "Dia de aula, vá para faculdade!!";
                break;
                default:
                echo "você digitou um número errado";
            }
            echo "&nbsp &nbsp &nbsp &nbsp &nbsp<a href=\"exercicio2.html\" class='botao'> Retornar</a>";
            ?>
            <br><br>
            
        </div>
    </body>
</html>
