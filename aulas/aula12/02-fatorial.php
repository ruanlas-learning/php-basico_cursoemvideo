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
        $v = isset($_GET['val']) ? $_GET['val'] : 1;

        echo "<h1>Calculando o fatorial de $v </h1>";

        $c = $v;
        $fat = 1;
        do{
            $fat *= $c;
            $c--;
        }while($c >= 1);
    
        echo "<h2>$v ! = $fat</h2>";
    ?>
    <a href="02index.html" class="botao">Voltar</a>
</div>
</body>
</html>
 