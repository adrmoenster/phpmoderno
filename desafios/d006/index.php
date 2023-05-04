<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anatomia de uma Divisão</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $dividendo = $_GET['divid'] ?? 0;
        $divisor = $_GET['divis'] ?? 0;
        $resto = $dividendo % $divisor;
        $coci = $dividendo / $divisor;
        $cociente = (int) $coci;
    ?>
    <main>
        <h1>Anatomia de uma Divisão</h1>
        <form action="<?=$_SERVER['PHP_SELF'];?>" method="get">
            <label for="divid">Dividendo</label>
            <input type="number" name="divid" id="divid" value="<?=$dividendo?>">
            <label for="divis">Divisor</label>
            <input type="number" name="divis" id="divis" value="<?=$divisor?>">
            <input type="submit" value="Analisar">
        </form>
    </main>
    <section>
        <h2>Estrutura da Divisão</h2>
        <?php 
            echo "<p>Dividendo é $dividendo</p>";
            echo "<p>Divisor é $divisor</p>";
            echo "<p>Resto da divisão é $resto </p>";
            echo "<p>Cociente é $cociente</p>"

        
        ?>
        
    </section>
    
</body>
</html>