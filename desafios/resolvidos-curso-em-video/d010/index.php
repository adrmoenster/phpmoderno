<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcula Idade - resolução desafio 10</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $anoNascimento = $_GET['anoNasc'] ?? 0;
        $anoInformado = $_GET['anoInf'] ?? date("Y");

        $idade = $anoInformado - $anoNascimento;
    
    ?>
    <main>
        <h1>Calculando a sua idade</h1>
        <form action="<?=$_SERVER['PHP_SELF'];?>" method="get">
            <label for="anoNasc">Em que ano você nasceu?</label>
            <input type="number" name="anoNasc" id="anoNasc" min="1900" max="<?=date('Y')?>" value="<?=$anoNascimento?>">
            <label for="anoInf">Quer saber sua idade e que ano?(atualmente estamos em <?=date('Y')?>)</label>
            <input type="number" name="anoInf" id="anoInf" min="1900" value="<?=$anoInformado?>">
            <input type="submit" value="Qual será minha idade?">
    
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <p>Quem nasceu em <?=$anoNascimento?> vai ter <?=$idade?> anos em <?=$anoInformado?></p>
    </section>
    
</body>
</html>