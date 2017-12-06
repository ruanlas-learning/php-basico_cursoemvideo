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
        $num = isset($_GET['num']) ? $_GET['num'] : 0;
        echo "<h3>Tabuada do $num</h3>";

        for ($mult = 0; $mult <= 10; $mult++){
            $res = $num * $mult;
            echo "$num X $mult = $res <br/>";
        }
    ?>
    <br/>
    <a href="02index.php" class="botao">Voltar</a>
</div>
</body>
</html>
 