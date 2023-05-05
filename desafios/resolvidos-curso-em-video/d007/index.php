<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resolução desafio 7 PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $minimo = 1_380.60;//Forma aceita bem pelo PHP para valores, repare que tem underline _ 
        $salario = $_GET['sal'] ?? $minimo;//se não informar o valor então vai considerar exatamanete o valor do salario minimo
    ?>
    <main>
        <h1>Informe seu salário</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="sal">Salário (R$)</label>
            <input type="number" name="sal" id="sal" step="0.01" value="<?=$salario?>">
            <p>Considerando o Salário mínimo de <strong>R$<?=number_format($minimo, 2, ",", ".")?></strong></p>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>
        <?php 
            $tot = intdiv($salario, $minimo);// Valor inteiro do salario informado
            $dif = $salario % $minimo;//Resto da divisão 
            echo "<p>Para o valor informado de <strong>R\$".number_format($salario, 2, ",", ".")." </strong> e considerando salario minimo de <strong>R\$".number_format($minimo, 2, ",", ".")."</strong> você recebe <strong> $tot </strong>Salarios minimos e mais <strong>R\$".number_format($dif, 2, ",", ".")."</strong></p>";
        ?>

    </section>
</body>
</html>