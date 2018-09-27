<Html>
    <head>
        <title>Calculo Media</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="_css/estilo.css">
    </head>
    <body>
        <div>
            <?php
            $n1 = isset($_GET["nota1"])?$_GET["nota1"]:0;
            $n2 = isset($_GET["nota2"])?$_GET["nota2"]:0;
            $med = ($n1+$n2)/2;
            echo "<br>A media das notas <span class='foco'>$n1</span> e <span class='foco'>$n2</span> é igual a <span class='foco'>$med</span>";
            if ($med>=7){
                $resul = "Aprovado";
                echo "<br>O aluno está <span class='foco'>$resul</span>";
            }else{
                $resul = "Reprovado";
                echo "<br>O aluno está <span class='foco'>$resul</span>";
            }
            ?>
            <br>
            <a href="calculomedia.html">voltar</a>
        </div>
    </body>
</Html>