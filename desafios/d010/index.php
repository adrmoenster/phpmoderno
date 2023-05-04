<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcula idade</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $nasc = $_GET['annasc'] ?? 0;
        $anoSaber = $_GET['ansaber'] ?? 0;

        $idade = $anoSaber - $nasc;
    
    ?>
    <main>
        <h1>Calculando a sua idade</h1>
        <form action="<?= $_SERVER['PHP_SELF'];?>" method="get">
            <label for="annasc">Em que ano você nasceu</label>
            <input type="number" name="annasc" id="annasc" value="<?=$nasc;?>">
            <label for="ansaber">Quer saber sua idade em que ano?(atualmente estamos em <?=date('Y')?>)</label>
            <input type="number" name="ansaber" id="ansaber" value="<?=$anoSaber;?>">
            <input type="submit" value="Qual será a minha idade?">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <?php 
            echo "<p>Quem nasceu em 1978 terá <strong>$idade</strong> anos de idade em $anoSaber</p>"
        
        ?>
    </section>
    
</body>
</html>