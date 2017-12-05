<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <form action="02-parte2.php" method="get">
<!--        --><?php
//            $v = 1;
//            while ($v <= 5) {
//                ?>
<!---->
<!--            Valor x--><?//= $v ?><!--: <input type="number" name="xv--><?//= $v ?><!--" max="100" min="0" value="0"/><br/>-->
<!---->
<!--                --><?php
//                $v++;
//            }
//        ?>

<!--        OUUU    -->

        <?php
            $v = 1;
            while ($v <= 5) {
    //            echo "Valor $v : <input type=\"number\" name=\"v1\" max=\"100\" min=\"0\" value=\"0\"/><br/>";
                echo "Valor $v : <input type='number' name='v$v' max='100' min='0' value='0'/><br/>";
                $v++;
            }
        ?>
        <input type="submit" value="Enviar" class="botao"/>
    </form>
</div>
</body>
</html>
 