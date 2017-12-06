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
        function testePassagemParametroPorValor($x){
            $x += 2;
            echo "O valor de X é $x <br/>";
        }

        function testePassagemParametroPorReferencia(&$x){
            $x += 2;
            echo "O valor de X é $x <br/>";
        }

        $a = 3;
        $b = 3;
        echo "<h4>Passagem por valor</h4>";
        testePassagemParametroPorValor($a);
        echo "O valor de A é $a<br/>";

        echo "<h4>Passagem por Referência</h4>";
        echo "O valor de B era $b<br/>";
        testePassagemParametroPorReferencia($b);
        echo "O valor de B é $b<br/>";
    ?>
</div>
</body>
</html>
 