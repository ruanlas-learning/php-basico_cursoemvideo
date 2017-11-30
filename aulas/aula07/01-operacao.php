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
        # operador ternário
    // expressao ? verdadeiro : falso
        $n1 = $_GET['a'];
        $n2 = $_GET['b'];
        $tipo = $_GET['op'];

        echo "Os valores passados foram $n1 e $n2 </br>";
        $r = ($tipo == 's') ? $n1+$n2 : $n1*$n2;
        echo "O resultado será $r";

        // $maior = $a>$b ? $a : $b
        // $situacao = $media>=6 ? "Aprovado" : "Reprovado"
    ?>
</div>
</body>
</html>
 