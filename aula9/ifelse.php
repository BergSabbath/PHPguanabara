<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
        $ano = isset($_GET["ano"])?$_GET["ano"]:1900;
        $nasc = date("Y") - $ano;
        echo "Voce nasceu no ano $ano  e terá $nasc anos<br>";
        if($nasc>=18){
          echo "você ja pode votar<br>";
          echo "voce ja pode dirigir";

        }else{
          echo "você não pode votar<br>";
          echo "voce não pode dirigir";
        }
        /* elseif no PHP é junto */
    ?>
    <br>
    <a href="ifelse.html">Voltar</a>
</div>
</body>
</html>
 