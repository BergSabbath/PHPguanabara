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
        //Função com multiplos valores:
        function soma(){//deixa aberta para colocar indefinidos parametros.
            $p = func_get_args();// para pegar os valores digitados dentro da funcão ex: soma(2,3,4)
            $t = func_num_args();// para pegar a quantidade de valores existentes.
            $s = 0; //para receber a soma dos valores.

            for ($i=0; $i<$t; $i++){
                $s+=$p[$i];
            }
            return $s;
        }
        $r = soma (4,5,1,5,10);
        echo "a soma dos valores é igual a $r";
        ?>
    </div>
</body>
</html>