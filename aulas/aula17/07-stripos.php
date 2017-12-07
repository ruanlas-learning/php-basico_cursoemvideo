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
        $frase = "Estou aprendendo PHP";
        $pos = stripos($frase, "PHP");
        echo "A string foi encontrada na posição $pos<br/>";
        //ouuu
        $pos2 = stripos($frase, "php");
        echo "A string foi encontrada na posição $pos2";
    ?>
</div>
</body>
</html>
 