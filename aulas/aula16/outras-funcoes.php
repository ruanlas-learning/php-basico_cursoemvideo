<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
        echo "<h4>Teste funções String</h4>";
        $texto = "Curso em Video";
        $tamanhoTexto = strlen($texto);
        echo "A String: [$texto] tem [$tamanhoTexto] caracteres<br/>";
        echo "<br/>";

        $nome = "     Jose da Silva      ";
        $nomeSemEspaco = trim($nome);
        $nomeSemEspacoI = ltrim($nome);
        $nomeSemEspacoF = rtrim($nome);

        echo "O  tamanho de $nome considerando os espaços adicionais possui "
            . strlen($nome) . " caracteres <br/>"
            . "O tamanho de $nomeSemEspaco desconsiderando os espaços adicionais " .
            strlen($nomeSemEspaco) . " caracteres <br/>"
            . "O tamanho de $nomeSemEspacoI desconsiderando os espaços adicionais do início " .
            strlen($nomeSemEspacoI) . " caracteres <br/>"
            . "O tamanho de $nomeSemEspacoF desconsiderando os espaços adicionais do final " .
            strlen($nomeSemEspacoF) . " caracteres <br/>";

        echo "<br/>";

        $frase = "Eu vou estudar PHP";
        $quantidadePalavras = str_word_count($frase, 0);


    ?>
</div>
</body>
</html>
 