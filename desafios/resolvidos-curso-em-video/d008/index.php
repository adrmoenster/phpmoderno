<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>resolução desafio 8 - PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $numero = $_GET['num'] ?? 1;
    $rq = sqrt($numero);//Função php que retorna a raiz quadrada
    $rc = $numero ** (1/3);//Importante esse calculo pois não existe função como no caso da raiz quadrada
    
    
    ?>
    <main>
        <h1>Raiz Quadrada e Cubica</h1>
        <form action="" method="get">
            <label for="num">Número</label>
            <input type="number" name="num" id="num" value="<?=$numero?>">
            <input type="submit" value="Calcular Raizes">
        </form>
    </main>
    <section>
        <h2>Resultado final</h2>
            <p>Analisando o Numero <strong><?=$numero?></strong> temos:</p>
            <ul>
                <li>A raiz quadrada é <strong><?=number_format($rq, 3, ",", ".");?></strong></li>
                <li>A Raiz cubica é <strong><?=number_format($rc, 3, ",", ".");?></strong></li>
            </ul>

    </section>
</body>
</html>