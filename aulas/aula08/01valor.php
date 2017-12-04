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
        $valor = $_GET['v'];
        $rq = sqrt($valor); #raiz quadrada
        echo "O valor enviado foi $valor </br>";
        echo "A raiz de $valor é $rq </br>";
        echo "A raiz de $valor com duas casas decimais é " . number_format($rq, 2);

    ?>
    <a href="01exercicio.html">Voltar</a>
</div>
</body>
</html>
 