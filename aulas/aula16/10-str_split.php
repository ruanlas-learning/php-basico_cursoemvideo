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
        $nome = "Chewbacalandia";
        $vetor = str_split($nome);

        print_r($vetor);
        echo "<br/>";
    ?>
</div>
</body>
</html>
 