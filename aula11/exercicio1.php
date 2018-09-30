<!DOCTYPE HTML>
<html>
    <head>
        <title>Aula11Ex1</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="_css/estilo.css">
    </head>
    <body>
        <div>
            <form method='GET' action='parte2.php'>
                <?php
                $c1 =1;
                while($c1<=5){
                echo "<label for='v$c1'>Valor $c1:</label>
                <input type='number' id='v$c1' name='v$c1'><br>";
                $c1++;
                }
                ?>
                <br>
                <input type='submit' value='Enviar'class='botao'>
            </form>
            
        </div>
    </body>
</html>