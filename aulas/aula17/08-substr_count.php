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
        $frase = "Estou aprendendo PHP no Curso em Video de PHP";
        $cont = substr_count($frase, "PHP");
        echo "PHP foi encontrado $cont vezes<br/>";
    ?>
</div>
</body>
</html>
 