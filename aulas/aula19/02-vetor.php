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
            $v = array("A", "J", "M", "X", "K");
            print_r($v);
            $v[] = "O";
            print_r($v);

            echo "<br/>";

            array_push($v, "P"); //insere um elemento na última posição do vetor
            array_push($v, "T"); //insere um elemento na última posição do vetor
            print_r($v);

            echo "<br/>";

            array_pop($v); //remove o último elemento do vetor (equivalente a 'unset')
            print_r($v);
        ?>
    </pre>
</div>
</body>
</html>
 