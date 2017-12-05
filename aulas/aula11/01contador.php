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
        echo "<h4>Incremento</h4>";

        $c = 1;
        while ($c <= 10){
            echo $c . "<br/>";
            $c++;
        }

        echo "<h4>Decremento</h4>";

        $c2 = 10;
        while ($c2 >= 1){
            echo $c2 . "<br/>";
            $c2--;
        }

        echo "<h4>Decremento de 2</h4>";

        $c3 = 20;
        while ($c3 >= 1){
            echo $c3 . "<br/>";
            $c3 -= 2; // $c3 = $c3 - 2;
        }
    ?>
</div>
</body>
</html>
 