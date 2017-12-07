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
        $t = "Aqui temos um texto gigante criado pelo PHP e vai mostrar o funcionamento da função wordwrap";
//        $r = wordwrap($t, 20); //exibir o código fonte da página para verificar o efeito
        $r = wordwrap($t, 20, "<br/>\n"); //exibir o código fonte da página para verificar o efeito
        echo $r;

        echo "<br/><br/>";

        echo wordwrap($t, 3, "<br/>\n", false);

        echo "<br/><br/>";

        echo wordwrap($t, 3, "<br/>\n", true);

        echo "<br/><br/>";

        echo wordwrap($t, 3, "CHEWBACA", true);
    ?>
</div>
</body>
</html>
 