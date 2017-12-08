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

            echo "<br/>";

            array_unshift($v, "Z"); //insere um elemento no início
            print_r($v);
            echo "<br/>";

            array_unshift($v, "Y");
            print_r($v);

            echo "<br/>";

            array_shift($v);//retira um elemento do início
            print_r($v);
        ?>
    </pre>
</div>
</body>
</html>
 