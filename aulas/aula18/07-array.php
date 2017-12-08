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
            $matriz = array( array(2,3),
                             array(3,4),
                             array(9,5));


            print_r($matriz);
            $matriz[0][1] = 7;

            echo "<br/>";

            print_r($matriz);

            echo "<br/>";

            $matriz[1][1] = $matriz[0][1];
            print_r($matriz);
        ?>
    </pre>
</div>
</body>
</html>
 