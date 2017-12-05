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
        $estado = isset($_GET['estado']) ? $_GET['estado'] : 0;

        switch ($estado){
            case 'am':
            case 'rr':
            case 'ap':
            case 'pa':
            case 'to':
            case 'ro':
            case 'ac':
                $regiao = "Região Norte";
                break;
            case 'ma':
            case 'pi':
            case 'ce':
            case 'rn':
            case 'pe':
            case 'pb':
            case 'se':
            case 'al':
            case 'ba':
                $regiao = "Região Nordeste";
                break;
            case 'mt':
            case 'ms':
            case 'go':
                $regiao = "Região Centro-Oeste";
                break;
            case 'sp':
            case 'rj':
            case 'es':
            case 'mg':
                $regiao = "Região Sudeste";
                break;
            case 'pr':
            case 'rs':
            case 'sc':
                $regiao = "Região Sul";
        }

        if (isset($regiao)){
            echo "Você mora na <span class='foco'>$regiao</span>";
        }else{
            echo "Você não selecionou nenhuma região";
        }
    ?>
    <br/>
<!--    <a href="javascript:history.go(-1)" class="botao">Voltar</a>-->
    <a href="exercicio03.html" class="botao">Voltar</a>
</div>
</body>
</html>
 