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
        echo "Contagem progressiva<br/>";

        $c = 1;
        do{
            echo "$c ";
            $c++;
        }while($c <= 10);

        echo "<br/>";

        $c2 = 0;
        do{
            echo "$c2 ";
            $c2 += 2;
        }while($c2 <= 20);

        echo "<br/> Contagem regressiva<br/>";

        $r = 10;
        do{
            echo "$r ";
            $r--;
        }while($r >= 1);

        echo "<br/>";

        $r2 = 10;
        do{
            echo "$r2 ";
            $r2 -= 2;
        }while($r2 >= 1);

    ?>
</div>
</body>
</html>
 