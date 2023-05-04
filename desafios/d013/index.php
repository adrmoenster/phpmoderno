<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caixa Eletrônico</title>
    <link rel="stylesheet" href="style.css">
    <style>
        ul li img{
            width: 60px;
            height: 30px;
        }
    </style>
</head>
<body>

    <?php 
        $valor = $_GET['vlr'] ?? 0; 
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY ); 

        $cemR = $valor / 100;

        $cinqReais = $valor / 50 - (int) $cemR;
        $cinqR = $cinqReais - (int) $cemR;

        $dezReais = ((int) $cemR * 100) + ((int) $cinqR * 50);
        $dezR = ($valor - $dezReais) / 10;

        $cincReais = ((int) $cemR * 100) + ((int) $cinqR * 50) +( (int) $dezR * 10);
        $cincR = ($valor - $cincReais) / 5;

        $doisReais = ((int) $cemR * 100) + ((int) $cinqR * 50) +( (int) $dezR * 10) +( (int) $cincR * 5);
        $doisR = ($valor - $doisReais) / 2;

        
        
    ?>

    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?=$_SERVER['PHP_SELF'];?>" method="get">
            <label for="vlr">Qual valor deseja sacar?(R$)</label>
            <input type="number" name="vlr" id="vlr" min="2" step="2" value="<?= $valor?>">
            <input type="submit" value="Sacar">
            <p>*Notas disponiveis: R$100, R$50, R$10, R$5, R$2</p>
        </form>
    </main>
    <section>
        <h2>Saque de R$0,00 realizado</h2>
        
        <?php 

        echo "<p>Para valor solicitado ".numfmt_format_currency($padrao, $valor, "BRL") ." O caixa eletrônico vai te entregar as seguintes notas</p>
        <ul>
            <li>".(int) $cemR." X <img src=\"img/100r.jpg\" alt=\"\"</li>
            <li>".(int) $cinqR." X <img src=\"img/50r.jpg\" alt=\"\"> </li>
            <li>".(int) $dezR." X <img src=\"img/10r.jpg\" alt=\"\"></li>
            <li>".(int) $cincR." X <img src=\"img/5r.jpg\" alt=\"\"></li>
            <li>".(int) $doisR." X <img src=\"img/2r.jpg\" alt=\"\"></li>
        </ul>";

        ?>
    </section>
</body>
</html>