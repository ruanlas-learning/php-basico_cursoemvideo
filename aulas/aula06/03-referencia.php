<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="css/estilo.css"/>
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
    <div>
        <?php
            echo "<h2>Referência de variáveis</h2>";

            echo "<h4>Atribuição normal de variável</h4>";
            echo '$a = 3;</br>
            $b = $a;</br>
            $b += 5;</br>';
            $a = 3;
            $b = $a;
            $b += 5;

            echo "A variável A vale $a";
            echo "</br>A variável B vale $b";

            echo "<h4>Atribuição de referência a variável</h4>";
            echo '$c = 3;</br>
                $d = &$c;</br>
                $d += 5;</br>';
            $c = 3;
            $d = &$c;
            $d += 5;

            echo "A variável C vale $c";
            echo "</br>A variável D vale $d";
        ?>
    </div>
</body>
</html>