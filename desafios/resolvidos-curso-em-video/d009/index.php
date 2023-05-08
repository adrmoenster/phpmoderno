<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resolução desafio 9 - medias aritiméticas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $numero1 = $_GET['num1'] ?? 0;
        $numero2 = $_GET['num2'] ?? 0;
        $peso1 = $_GET['pes1'] ?? 1;
        $peso2 = $_GET['pes2'] ?? 1;

        $mediaSimp = ($numero1 + $numero2) / 2;
        $mediaPond = ($numero1*$peso1 + $numero2*$peso2)/($peso1 + $peso2);
    ?>
    <main>
        <h1>Médias Aritiméticas</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="num1">1 Valor</label>
            <input type="number" name="num1" id="num1" required value="<?=$numero1?>">
            <label for="pes1">1 Peso</label>
            <input type="number" name="pes1" id="pes1" min="1" required value="<?=$peso1?>">
            <label for="num2">2 Valor</label>
            <input type="number" name="num2" id="num2" required value="<?=$numero2?>">
            <label for="pes2">2 Peso</label>
            <input type="number" name="pes2" id="pes2" min="1" required value="<?=$peso2?>">
            <input type="submit" value="Calcula Médias">
        </form>
    </main>
    <section>
        <h2>Cálculo das Médias</h2>
        <?php 
            echo "Analisando os valores $numero1 e também $numero2";
            echo "<ul>
                    <li>A <strong>Média Aritimética Simples </strong> entre os valores é igual a ".number_format($mediaSimp, 2, ",", ".")."</li>
                    <li>A <strong>Média Aritmética Ponderada</strong> com pesos $peso1 e $peso2 é igual a ".number_format($mediaPond, 2, ",", ".")." </li>
                </ul>";
        ?>
    </section>
</body>
</html>