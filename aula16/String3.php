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
        //funcao strlen() -  quantidade de caracteres dentro da string
        $t = "futebol";
        $r = "Jogar playsoccer";
        $s = strlen($r);
        $e = strlen($t);
        echo "A palavra \"$t\" tem $e caracteres<br>";
        echo "A palavra \"$r\" tem $s caracteres";
        //funcao trim() - tira os espaços antes e depois da string
        //funcao ltrim() - elimina os espaços apenas do inicio
        //funcao rtrin() - elimina os espaço apenas do fim
        echo "<br>";
        $nome = "   Avenida do brasil   ";
        $tam = strlen($nome);
        echo "<br>";
        echo "$nome tem $tam caracteres incluindo os espaços";
        echo "<br>";
        $novo = trim($nome);
        $pala = strlen($novo);
        echo "<br>";
        echo "sem espaços do inicio e fim, a frase $nome tem apenas $pala carateres)";

        //funcao str_word_count() - mostra a quantidade de palavras dentro de uma string
        echo "<br>";
        $cont = str_word_count($nome,1);
        print_r ($cont);
        //  0 - irá contar as palavras
        //  1 - criará um vetor de cada palavra"print_r($cont);"
        //  2 - criará um vetor porém com o posicionamento de cada palavra na String

        //funcao explode() - é uma versão mais nova da funçao str_word_count
        echo "<br>";
        $site = "Curso em video";
        $vetor = explode (" ", $site);
        // sempre que encontrar um " " espaço em branco, ele 'explode' e cria um vetor
        print_r($vetor);
        $hue = "php java javascript";
        $vetor2 = explode (" ", $hue);
        echo "<br>";
        print_r($vetor2);
        //funcao str_split()
        echo "<br><br><br>";
        $frase = "cabeca";
        $vetor3 = str_split($frase);
        print_r($vetor3);
        
        //funçao implode() -faz o contrário do explode...ela concatena os vetores
        //função join() - funciona da mesma forma
        $v[1] ="Linguagem";
        $v[2]= "de";
        $v[3]= "programacao";
        print implode("#",$v);
        
        //funcao chr() - mostra a letra ou simbolo relativo ao codigo
        echo "<br>";
        $letra = chr(99);
        echo chr(67);
        echo "<br>$letra";

        //funcao ord() - mostra o codigo relativo ao numero
        echo "<br>";
        echo ord("C");
        ?>
    </div>
</body>
</html>