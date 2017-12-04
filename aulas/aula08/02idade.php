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
//        $nome = $_GET['nome'];
//        $ano = $_GET['ano'];
//        $sexo = $_GET['sexo'];
        $nome = isset($_GET['nome']) ? $_GET['nome'] : "[nao informado]"; # isset() -> verifica se a variável foi definida
        $ano = isset($_GET['ano']) ? $_GET['ano'] : 0;
        $sexo = isset($_GET['sexo']) ? $_GET['sexo'] : "[nao informado]";
        $idade = date('Y') - $ano; # função date('Y') retorna o ano corrente

        echo "O ano atual é " . date('Y') . "</br>";

        echo "$nome é $sexo e tem $idade anos</br>";
    ?>
    <a href="02exercicio.html">Voltar</a>
</div>
</body>
</html>
 