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
        $nome = "Guanabara";
        $novo = str_pad($nome, 30,"#", STR_PAD_RIGHT);
        echo "Meu professor $novo é demais!!<br/>";
        echo "Meu professor ". str_pad($nome, 30,"#", STR_PAD_LEFT) ." é demais!!<br/>";
        echo "Meu professor ". str_pad($nome, 30,"#", STR_PAD_BOTH) ." é demais!!<br/>";
    ?>
</div>
</body>
</html>
 