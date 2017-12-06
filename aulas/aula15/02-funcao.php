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
        include "funcoes.php";
//        require "funcoes.php";  //=> este comando também inclui funções, entretanto
                                // se houver algum problema ao carregar o arquivo, o
                                //script para a execução neste ponto
//        include_once //=> se o arquivo não foi incluído, ele inclui apenas uma vez
//        require_once //=> se o arquivo não foi incluído, ele inclui apenas uma vez

        echo "<h1>Testando novas funções</h1>";
        ola();
        mostraValor(3);
        echo "<h2>Finalizando programa</h2>";
    ?>
</div>
</body>
</html>
 