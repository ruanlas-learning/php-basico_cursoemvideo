<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <form action="02-tabuada.php" method="get">
        Numero:
        <select name="num">
            <?php
                for ($i = 0; $i <= 10; $i++){
            ?>
            <option value="<?= $i ?>"><?= $i ?></option>
            <?php
                }
            ?>
        </select>
        <input type="submit" class="botao" value="Tabuada"/>
    </form>

</div>
</body>
</html>
 