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
        $inicio = isset($_GET['inicio']) ? $_GET['inicio'] : 0;
        $final = isset($_GET['final']) ? $_GET['final'] : 0;
        $i = isset($_GET['incremento']) ? $_GET['incremento'] : 0;

        $contador = $inicio;

        if ($inicio < $final){
            while ($contador <= $final){
                echo "$contador ";
                $contador += $i;
            }
        }elseif($inicio > $final){
            while ($contador >= $final){
                echo "$contador ";
                $contador -= $i;
            }
        }else{
            echo "O início e o final são iguais";
        }


    ?>
    <br/>
    <a href="exercicio03.html" class="botao">Voltar</a>
</div>
</body>
</html>
 