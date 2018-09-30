<!DOCTYPE HTML>
<html>
    <head>
        <title>Aula11Ex3</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="_css/estilo.css">
    </head>
    <body>
        <div>
            <form method="GET"action="parte3.php">
                <?php
                echo "<label for='v1'>Inicio</label>
                <input type='number' id='v1' name='ini' min='0' size='4'> <br>
                <label for='v2'>Fim</label>
                <input type'number' id='v2' name='fim' min='0'> <br>
                <label for='v3'>incremento</label>
                <select name='inc' id='v3'>
                    <option value='1'>1</option>
                    <option value='2'>2</option>
                    <option value='3'>3</option>
                    <option value='4'>4</option>
                </select>
                <br><br>
                <input type='submit' value='Mostrar contagem' class='botao'>"
                ?>
            </form>
        </div>
    </body>
</html>