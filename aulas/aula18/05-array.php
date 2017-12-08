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
            print_r($vetorAssociativo);
            $vetorAssociativo["fuma"] = true;
            print_r($vetorAssociativo);
        ?>
    </pre>
</div>
</body>
</html>
 