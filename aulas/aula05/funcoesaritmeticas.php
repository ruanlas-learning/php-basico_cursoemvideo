<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="css/estilo.css"/>
    <title>Funções Aritmeticas em PHP</title>
    <style>
        h2{
            font: 15pt arial;
            color: blue;
            font-weight: bold;
        }
    </style>
</head>
<body>
<div>
    <?php
        $v1 = $_GET['x']; //parâmetro que vem da url como x => ex: ../pagina.php?x=9
        $v2 = $_GET['y']; //parâmetro que vem da url como y => ex: ../pagina.php?x=9&y=3

        echo "<h2>Valores recebidos: $v1 e $v2</h2>";
        echo "O valor absoluto de $v2 é ". abs($v2); //obtém o valor absoluto da variável
        echo "</br>O valor de $v1<sup>$v2</sup> é ". pow($v1,$v2); //obtém a potencia de v1 elevado a v2
        echo "</br>A raiz de $v1 é ". sqrt($v1); //obtém a raiz de v1
        echo "</br>O valor de $v2 arredondado é ". round($v2); //obtém o valor arredondado de v2
        echo "</br>O valor de $v2 arredondado para cima é ". ceil($v2); //obtém o valor arredondado (para cima) de v2
        echo "</br>O valor de $v2 arredondado para baixo é ". floor($v2); //obtém o valor arredondado (para baixo) de v2
        echo "</br>A parte inteira de $v2 é ". intval($v2); //obtém o valor inteiro de v2
        echo "</br>O valor de $v1 em moeda é R$". number_format($v1, 2); //obtém o valor formatado de v1
        echo "</br>O valor de $v1 em moeda é R$". number_format($v1, 2, ",", "."); //obtém o valor formatado de v1
                                                    //(Os dois ultimos parametros são configurações do separador)
        
    ?>
</div>
</body>
</html>