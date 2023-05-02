<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo de salario minimo recebido</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 

        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

        $salario = $_GET['sal'] ?? 0;
        $salMin =  1380.00 ?? 0;

        $salar = numfmt_format_currency($padrao, $salario, "BRL");
        
        $salMinimo = numfmt_format_currency($padrao, $salMin, "BRL");
        
       

        $qtdeSal = $salario / $salMin;
        $intSal = (int) $qtdeSal;
        $quebSal = $salario - ($intSal * $salMin);

        $difSalMin = numfmt_format_currency($padrao, $quebSal, "BRL");
    
    ?>
    <main>
        <h1>Informe seu salário</h1>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <label for="sal">Salário</label>
            <input type="number" name="sal" id="sal" step="0.01" value="<?=$salario?>">
            <input type="submit" value="Calcular">
    
        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>
        <?php 
        echo "Você informou <strong>$salar </strong>Considerando o salário mínimo de <strong>$salMinimo</strong> Você recebe <strong>$intSal</strong> Salarios minimos e mais <strong>$difSalMin</strong>";

        ?>
    </section>

    
</body>
</html>