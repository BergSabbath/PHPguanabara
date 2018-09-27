<html>
    <head>
        <title>AulaEx3</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="_css/estilo.css">
    </head>
    <body>
        <div>
            <?php
            $br = isset($_GET["es"])?$_GET["es"]:"não selecionado";
            switch($br){
                case 1:
                case 3:
                case 4:
                case 14:
                case 22:
                case 23:
                case 27:
                echo "Vc selecionou <span class='foco'>$br</span>, este Estado fica na <span class='foco'>Região Norte</span>";
                break;
                case 2:
                case 5:
                case 6:
                case 10:
                case 15:
                case 17:
                case 18:
                case 20:
                case 26:
                echo "Vc selecionou <span class='foco'>$br</span>, este Estado fica na <span class='foco'>Região Nordeste</span>";
                break;
                case 7:
                case 9:
                case 11:
                case 12:
                echo "Vc selecionou <span class='foco'>$br</span>, este Estado fica na <span class='foco'>Região Centro-Oeste</span>";
                break;
                case 8:
                case 13:
                case 19:
                case 25:
                echo "Vc selecionou <span class='foco'>$br</span>, este Estado fica na <span class='foco'>Região Sudeste</span>";
                break;
                case 16:
                case 21:
                case 24:
                echo "Vc selecionou <span class='foco'>$br</span>, este Estado fica na <span class='foco'>Região Sul</span>";
                break;
                default:
                echo "Você não selecionou o Estado";
            }
            ?><br><br>
            <a href="exercicio3.html"><span class="botao">Retornar</span></a>
        </div>

    </body>
</html>