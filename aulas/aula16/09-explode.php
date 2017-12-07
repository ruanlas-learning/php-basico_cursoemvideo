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
        $frase = "Curso em Video";
        $vetor = explode(" ", $frase);

        print_r($vetor);
        echo "<br/>";
    ?>
</div>
</body>
</html>
 