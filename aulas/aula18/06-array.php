<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <pre>
        <?php
            $vetorAssociativo = array("nome" => "Ana",
                            "idade" => 23,
                            "peso" => 65.5);
            $vetorAssociativo["fuma"] = true;

            echo "<h4>Foreach em vetor associativo</h4>";

            foreach ($vetorAssociativo as $chave=>$valor){
                echo "O valor de $chave é $valor<br/>";
            }
        ?>
    </pre>
</div>
</body>
</html>
 