<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reajustador de Preços</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <?php
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);    
        $precoProd = $_GET['prProd'] ?? 0;
        $porcReaj =$_GET['porcRea'] ?? 0;
        $vlrReaj = ($precoProd * $porcReaj) / 100;
        $novoPreco = $precoProd + $vlrReaj;
    

    ?>

    <main>
        <h1>Reajustador de Preços</h1>
        <form action="<?=$_SERVER['PHP_SELF'];?>" method="get">
            <label for="prProd">Preço do Produto (R$)</label>
            <input type="number" name="prProd" id="prProd" value="<?=$precoProd;?>">
            <label for="porcRea">Qual será o ercentual de reajuste? (<?=$porcReaj;?>%)</label>
            <input type="range" name="porcRea" id="porcRea" value="<?=$porcReaj;?>">
            <input type="submit" value="Reajustar">
    
        </form>
    </main>
    <section>
        <h2>Resultado do Reajuste</h2>
        <?php 
            echo "<p>O produto custava ".numfmt_format_currency($padrao, $precoProd, "BRL")." com <strong>$porcReaj% de aumento</strong> vai passar a custar <strong>".numfmt_format_currency($padrao, $novoPreco, "BRL")."</strong> a partir de agora </p>";
        ?>
    </section>
    </body>
    <script>

    </script>
</html>