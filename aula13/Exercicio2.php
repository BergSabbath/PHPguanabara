<!DOCTYPE HTML>
<html>
<head>
    <title>Aula13ex3</title>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="_css/estilo.css"/>
</head>
<body>
    <div>
        <form method="GET" action="parte2.php">
        Número:<select name="sel">
            <?php
            for ($c=1;$c<=10;$c++){
            echo "<option>$c</option>";
            }
            ?>
        </select>
            <input type="submit"value="tabuada">        
        </form>
    </div>
</body>
</html>