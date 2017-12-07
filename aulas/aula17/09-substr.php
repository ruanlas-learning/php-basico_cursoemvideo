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
        $site = "Curso em Video";
        $sub = substr($site, 0, 5);
        echo "$sub <br/>";
        $sub2 = substr($site, 7);
        echo "$sub2 <br/>";
        $sub3 = substr($site, -5);
        echo "$sub3 <br/>";
        $sub4 = substr($site, -5, 2);
        echo "$sub4 <br/>";
        $sub5 = substr($site, 5, -3);
        echo "$sub5 <br/>";
    ?>
</div>
</body>
</html>
 