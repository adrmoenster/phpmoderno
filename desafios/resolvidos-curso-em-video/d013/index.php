<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simulador de caixa eletrônico</title>
    <link rel="stylesheet" href="style.css">
    <style>
        img.nota{
            height: 50px;
            margin: 5px;
        }
    </style>
</head>
<body>
    <?php 
        $valor = $_REQUEST['vlr'] ?? 0;

    ?>
    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="vlr">Qual valor você deseja Sacar? (R$)<sup>*</sup></label>
            <input type="number" name="vlr" id="vlr" min="5" step="5" value="<?=$valor?>" required>
            <p style="font-size: 0.6em"><sup>*</sup>Notas disponíveis R$100, R$50, R$10 e R$5</p>
            <input type="submit" value="Sacar">
        </form>
    </main>

    <?php 
        $resto = $valor;
    
        //Saque de R$100
        $tot100 = (int)($resto / 100);
        $resto = $resto % 100;

        //Saque de R$50(usando função floor que da mesmo que como feito anteriormesnto usando (int))
        $tot50 = floor($resto / 50);
        $resto = $resto % 50;

        //Saque de R$10(usando forma resumida no resto que é mesmo que $resto = $resto % 10)
        $tot10 = (int)($resto / 10);
        $resto %= 10;

        //Saque de R$5
        $tot5 = (int)($resto / 5);
        $resto %= 5;
    
    ?>
    <section>
        <h2>Saque de R$<?=number_format($valor, 2, ",", ".")?> realizado</h2>
        <p>O caixa eletrônico vai entregar as seguintes notas:</p>
        <ul>
            <li><img src="img/100-reais.jpg" alt="100 reais" class="nota"><?=$tot100?>X</li>
            <li><img src="img/50-reais.jpg" alt="50 reais" class="nota"><?=$tot50?>X</li>
            <li><img src="img/10-reais.jpg" alt="10 reais" class="nota"><?=$tot10?>X</li>
            <li><img src="img/5-reais.jpg" alt=" 5 reais" class="nota"><?=$tot5?>X</li>
        </ul>

    </section>
</body>
</html>