<!DOCTYPE HTML>
<html>
<head>
        <title>Aula16</title>
        <meta charset= "UTF-8">
        <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <?php
        //funcao strtolower - coloca todas as letras em minisculo
        $nome = "Ludenberg Marques";
        $n ="ludeNberg reIs Brito";
        $nome2 = strtolower($nome);
        echo "o nome é $nome2";
        echo "<br>";
        //funcao strtoupper - coloca todas as letras e maiusculo
        $nome3=strtoupper($nome);
        echo "o nome é $nome3";
        //funçao ucfirst - coloca somente a primeira letra em maiusculo
        echo "<br>";
        echo (ucfirst($n));
        //funcao ucwords - colocar a primeira letra de cada nome em maiuscula e não mexe nas outras 
        echo "<br>";
        echo (ucwords($n));

        //funcao strrev - escreve a String ao contrário
        echo "<br>";
        echo (strrev($n));

        //funcao strpos - encontra o a posição em que está localizada a String *a posição sempre começa com ZERO
        //funcao stripos - a letra "i" ignora a caixa alta, (Casesensitive)
        echo "<br>";
        echo (strpos($n, "Brito"));

        //função substr_count - quantas vezes a palavra apareceu na string
        echo "<br>";
        $frase = "A Wikipédia é um projeto de enciclopédia colaborativa, universal projeto e multilíngue estabelecido na internet projeto sob o princípio wiki. Tem como propósito fornecer projeto um conteúdo livre, objetivo e verificável​​, que todos possam editar e melhorar. O projeto é definido pelo";
        $y = substr_count($frase, "projeto");
        echo " A palavra \"projeto\" aparece $y vezes";

        //funcao substr - mostra os caracteres do inicio substr($site,0,4) "0" até a posição indicada "4"
        //outro exemplo: substr($site,7) => dessa forma a mostra as String a partir da pos 7
        //outro exemplo: substr($site,-3,2) => dessa forma pega das ultimas 05 letras apenas as 02 primeiras

        echo "<br>";
        $site = "Google ponto com";
        $sub = substr($site,0,4);
        echo "$sub";
        echo "<br>";
        echo  (substr($site,7));
        echo "<br>";
        echo (substr($site,-3,2));
        echo "<br>";
        
        //funcao str_pad - faz uma string caber dentro do espaço
        echo "<br>";
        $texto = "Paralelepipedo";
        $bola = str_pad($texto,100," ",STR_PAD_LEFT);
        print ("O Manchester $bola é campeão");
        //funcao str_repeat - mostra a string repetidamente (texto, 5"numero de repetição)
        echo "<br>";
        echo (str_repeat($texto,5));
        echo "<br>";
        echo (str_repeat("-",30));

        //funcao str_replace - faz a mudança na string definida anteriormente, toda vez que aparecer a palavra definida
        //adicionar o "i" para que nao faça diferença entre maiscula e minuscula str_ireplace

        $pra = "As eleições estão chegando";
        $novopra = str_replace("eleições","Olimpiadas", $pra);
        echo "<br>";
        echo $novopra;
        ?>
    </div>
</body>
</html>