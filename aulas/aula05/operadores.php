<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="css/estilo.css"/>
    <title>Operadores</title>
</head>
    <body>
        <div>
            <?php
                $n1 = 3;
                $n2 = 2;

        //localhost/aula05/operadores.php?a=3&b=2  //=> permite passar valores personalizados
                                        // diretamente pela url
                $n1 = $_GET['a'];
                $n2 = $_GET['b'];

                $media = ($n1 + $n2) / 2;

                echo "n1 vale $n1 | n2 vale $n2 </br>";
                echo "a soma n1+n2 vale ". ($n1 + $n2);
                echo "</br>a subtração n1-n2 vale ". ($n1 - $n2);
                echo "</br>a multiplicação n1*n2 vale ". ($n1 * $n2);
                echo "</br>a divisão n1/n2 vale ". ($n1 / $n2);
                echo "</br>o modulo n1%n2 vale ". ($n1 % $n2);
                echo "</br> a media entre n1 e n2 é $media";

            ?>
        </div>
    </body>
</html>