<!DOCTYPE HTML>
<html>
<head>
    <title>Aula13ex3</title>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="_css/estilo.css"/>
</head>
<body>
    <div>
    <?php
        $c = isset($_GET["pri"])?$_GET["pri"]:0;
        $j=0;
        for ($w=1;$w<=$c;$w++){
            if ($c%$w==0){
                $j++;   
            }
        }
            if($j==2){
                echo "O número $c é primo";
            }else{
                echo "O número $c não é primo";
            }
        
    ?>
    <a href="Exercicio3.php" class="botao">voltar</a>
    <!-- <a href="javascript:history.go(-1)">voltar</a> -->
    </div>
</body>
</html>