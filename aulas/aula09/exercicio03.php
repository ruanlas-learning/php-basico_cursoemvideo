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
        $n1 = isset($_GET['n1']) ? $_GET['n1'] : 0;
        $n2 = isset($_GET['n2']) ? $_GET['n2'] : 0;
        $media = ($n1 + $n2)/2;


        if ($media < 5){
            $situacao = "REPROVADO";
        }elseif ($media >= 5 && $media < 7){
            $situacao = "RECUPERAÇÃO";
        }else{
            $situacao = "APROVADO";
        }
        echo "A media entre $n1 e $n2 é igual a $media<br>";
        echo "Portanto a situação do aluno é: $situacao";
    ?>
    <br>
    <a href="exercicio03.html">Voltar</a>
</div>
</body>
</html>
 