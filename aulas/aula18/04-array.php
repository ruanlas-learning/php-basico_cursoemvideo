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
            $vetor = array( 3=>5,
                            1=>9,
                            0=>8,
                            7=>7);
            print_r($vetor);
            $vetor[] = 2;
            $vetor[] = 6;
            print_r($vetor);

            unset($vetor[8]);
            print_r($vetor);
        ?>
    </pre>
</div>
</body>
</html>
 