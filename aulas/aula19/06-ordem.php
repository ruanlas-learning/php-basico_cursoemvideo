
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <pre>
        <?php
            $v = array("Z", "A", "J", "M", "X", "K");
            print_r($v);

            echo "<br/>";

            asort($v); //ordena o vetor de forma crescente mantendo o índice (ordenação associativa)
            print_r($v);

        ?>
    </pre>
</div>
</body>
</html>
 