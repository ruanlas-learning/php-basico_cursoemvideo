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
        $numero = isset($_GET['numero']) ? $_GET['numero'] : 0;
        echo "<h3>Tabuada do $numero</h3>";

        $mult = 0;
        do{
            $res = $numero * $mult;
            echo "$numero X $mult = $res <br/>";
            $mult++;
        }while($mult <= 10);
    ?>
    <br/>
    <a href="03exercicio.php" class="botao">Voltar</a>
</div>
</body>
</html>
 