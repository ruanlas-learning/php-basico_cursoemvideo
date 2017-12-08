
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
            $v = array( 3 => "Z", 0 => "A", 5 => "J", 2 => "M", 1 => "X", 4 => "K");
            print_r($v);

            echo "<br/>";

            krsort($v); //ordena o vetor pelo índice (chave) de forma reversa (decrescente)
            print_r($v);

        ?>
    </pre>
</div>
</body>
</html>
 