<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <form method="get" action="03tabuada.php">
        Número:
        <select name="numero">
            <?php
                for ($v = 0; $v <=10; $v++) {
            ?>
            <option value="<?= $v ?>"><?= $v ?></option>
             <?php
                }
             ?>
        </select>
        <input type="submit" class="botao" value="Tabuada"/>
    </form>

</div>
</body>
</html>
 