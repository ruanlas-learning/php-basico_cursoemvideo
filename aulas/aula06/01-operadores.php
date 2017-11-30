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
            $preco = $_GET['p'];
            $preco2 = $preco;
            echo "O preço do produto é R$ $preco";
//            $preco = $preco + ($preco*10/100);
            $preco += ($preco*10/100);

            echo "</br>E o novo preço com 10% de aumento será de R$ " . number_format($preco, 2);

//            $preco2 = $preco2 - ($preco2*10/100);
            $preco2 -= ($preco2*10/100);
            echo "</br>E o novo preço com 10% de desconto será de R$ " . number_format($preco2, 2);

        /*
         * Pré-incremento = ++$a
         * Pós-incremento = $a++
         *
         * Pré-decremento = --$a
         * Pós-decremento = $a--
         * */
        ?>
    </div>
</body>
</html>