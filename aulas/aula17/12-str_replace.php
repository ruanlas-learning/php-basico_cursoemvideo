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
        $frase = "Gosto de estudar Matemática!!!";
        $novaFrase = str_replace("Matemática", "PHP", $frase);

        $frase2 = "Gosto de estudar Matemática!!! Matemática é muito legal!!";
        $novaFrase2 = str_ireplace("matemática", "PHP", $frase2);
        echo "$novaFrase <br/>";
        echo "$novaFrase2 <br/>";
    ?>
</div>
</body>
</html>
 