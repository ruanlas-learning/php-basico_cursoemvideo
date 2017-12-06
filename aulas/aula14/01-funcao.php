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
        function soma($a, $b){
            $s = $a + $b;
            echo "<p>A soma vale $s</p>";
        }

        function soma2($a, $b){
//            $s = $a + $b;
//            return $s;
//            OUUU
            return ($a + $b);
        }

        function somaMultiParametros(){
            $parametros = func_get_args(); //obtem um array contendo todos os parametros passados
            $totalParametros = func_num_args(); //obtem o total de elementos que foram passados no parmâmetro
            $soma = 0;

            for ($i = 0; $i < $totalParametros; $i++){
                $soma += $parametros[$i];
            }

            return $soma;

        }

        echo "<h4>Execução de procedimento</h4>";
        soma(3,4);
        soma(8,2);
        $x = 9;
        $y = 15;
        soma($x, $y);

        echo "<h4>Execução de função</h4>";
        $d = 3;
        $f = 8;
        $r = soma2($d,$f);
        echo "A soma entre $d e $f é igual a $r";

        echo "<h4>Chamada de função contendo multi parâmetros</h4>";

        $r2 = somaMultiParametros(3,5,2,8,9,100);
        echo "A soma dos valores é $r2";
    ?>
</div>
</body>
</html>
 