<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="css/estilo.css"/>
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
    <div>
        <?php
            $atual = $_GET['aa']; #essa linha vai pegar o ano pela url
            echo "O ano atual é $atual e o ano anterior é " . --$atual;
        ?>
    </div>
</body>
</html>