<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario retroalimentado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $valor1 = $_GET['v1'] ?? 0;
    $valor2 = $_GET['v2'] ?? 0;
    $res = $valor1 + $valor2;
    ?>

    <main>
        <h1>Somador de valores</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="v1">Valor 1</label>
        <input type="number" name="v1" id="v1" value="<?=$valor1?>">
        <label for="v2">Valor 2</label>
        <input type="number" name="v2" id="v2" value="<?=$valor2?>">
        <input type="submit" value="Somar">
    </form>
    </main>
    <section id="resultado">
        <h2>Resultado da Soma</h2>
        <?php 
        print "<p>O resultado da soma de $valor1 com $valor2 é <strong>$res</strong></p>";
        ?>
    </section>
</body>
</html>