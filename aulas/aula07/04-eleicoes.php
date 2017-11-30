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
        $ano = $_GET['an'];
        $idade = 2017 - $ano;

        echo "Quem nasceu em $ano tem idade de $idade anos</br>";

        $tipoVoto = ($idade >= 18 && $idade <= 65) ? "OBRIGATÓRIO" : "NAO OBRIGATÓRIO";

        echo "E dessa forma seu voto é $tipoVoto";

        # xor => ou exclusivo
    ?>
</div>
</body>
</html>
 