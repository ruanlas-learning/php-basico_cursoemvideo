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
            $vetorC = range(5, 20, 3);
        
            echo "<h4>Exemplo foreach</h4>";

            foreach ($vetorC as $valor){
                echo "$valor ";
            }
        ?>
    </pre>
</div>
</body>
</html>
 