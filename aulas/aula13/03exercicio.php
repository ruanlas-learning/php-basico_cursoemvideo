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

        echo "<h1>Analisando o numero $num.....</h1>";

        $qtdMultiplo = 0;
        $valoresMultiplos = array();
        for ($i = 1; $i <= $num; $i++){
            if ($num % $i == 0){
                $qtdMultiplo++;
                array_push($valoresMultiplos, $i);
            }
        }

        $valoresMultiplosString = '';
        for ($i = 0; $i < sizeof($valoresMultiplos); $i++){
            $valoresMultiplosString .= $valoresMultiplos[$i] . ' ';
        }

        echo "<p>Valores múltiplos: " . $valoresMultiplosString ."</p>";
        echo "<p>Total de múltiplos: $qtdMultiplo</p>";

        $resultado = ($qtdMultiplo == 2) ? "É PRIMO!" : "NÃO É PRIMO";

        echo "<p>Resultado: $num $resultado</p>";
    ?>
    <br/>
    <a href="03exercicio.html" class="botao">Voltar</a>
</div>
</body>
</html>
 