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
        $t = "Damasco foi capturada quando o Corpo Montado do Deserto (Desert Mounted Corps) britânico e o exército xarifal do Hejaz do príncipe Faiçal cercaram a cidade, depois de uma perseguição a cavalo em direção a norte ao longo das duas estradas principais para Damasco. Durante essa perseguição, foram atacados e capturados ";
        //wordwrap--- quebra o valor dentro do código gerado
        $r = wordwrap($t,5,"<br>\n", false);
        //false- quebra a palavra que tem até 5 letras, mais de 5 letras ela não quebra
        //true - quebra a palavra independente de quantas letras possui
        echo "$r";
        ?>
    </div>
</body>
</html>