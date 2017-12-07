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
        $vetor[0] = "Curso";
        $vetor[1] = "em";
        $vetor[2] = "Video";

        $texto = implode("#", $vetor);
        print($texto);

        echo "<br/>";
    
        $texto2 = join("#", $vetor);
        print($texto2);
    ?>
</div>
</body>
</html>
 