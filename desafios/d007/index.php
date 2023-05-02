<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raiz quadrada e cubica</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $vlr = $_GET['num'] ?? 0;
        $raizQ = sqrt($vlr);
        $grauRaizC = 3;
        $raizC = $vlr ** (1/$grauRaizC);
    
    ?>
    <main>
        <h1>Informe um Número</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="num">Número</label>
            <input type="number" name="num" id="num" value="<?=$vlr?>">
            <input type="submit" value="Calcular Raízes">
        </form>
        
    </main>
    <section>
            <h2>Resultado final</h2>
            <?php 
            echo "Analizando o <strong>número $vlr</strong>, temos:
            
            <ul>
                <li>A sua raiz quadrada é <strong>$raizQ</strong></li>
                <li>A sua raiz cúbica é <strong>$raizC</strong></li>
            </ul>";
            
            ?>
            
    </section>
</body>
</html>