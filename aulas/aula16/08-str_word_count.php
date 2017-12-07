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
        $frase = "Eu vou estudar PHP";
        $quantidadePalavras = str_word_count($frase, 0);

        echo "A frase [$frase] possui [$quantidadePalavras] palavras<br/>";
        echo "<br/>";
        print_r(str_word_count($frase, 1));
        echo "<br/>";
        print_r(str_word_count($frase, 2));
        echo "<br/>";
    ?>
</div>
</body>
</html>
 