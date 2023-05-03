<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média Aritmética</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    
        $val1 = $_GET['vlr1'] ?? 0;
        $val2 = $_GET['vlr2'] ?? 0;
        $pe1 = $_GET['peso1'] ?? 0;
        $pe2 = $_GET['peso2'] ?? 0;
   
    
      

    $meSilples = ($val1 + $val2) /2;
    $mePonderada = ($val1*$pe1) + ($val2*$pe2) /($pe1+$pe2);
    
    
    ?>
    <main>
  
        <h1>Médias Aritméticas</h1>
        <form action="<?=$_SERVER['PHP_SELF'];?>" method="get">
            <label for="vlr1">1 Valor(0a10)</label>
            <input type="number" name="vlr1" id="vlr1" min="0" max="10" value="<?= $val1 ?>">
            <label for="peso1">1 peso(1a5)</label>
            <input type="number" name="peso1" id="peso1" min="1" max="5" value="<?= $pe1?>">
            <label for="vlr2">2 Valor(0a10)</label>
            <input type="number" name="vlr2" id="vlr2" min="0" max="10" value="<?=$val2?>">
            <label for="peso2">2 peso(1a5</label>
            <input type="number" name="peso2" id="peso2" min="1" max="5" value="<?=$pe2?>">
            <input type="submit" value="Calcular Médias">
        </form>

    </main>

    <section>
        <h2>Cálculo das Médias</h2>
        <?php 
        echo "<p>Analisando os valores $val1 e $val2</p>  <ul>
        <li>A <strong>média Aritmética Simples</strong> entre os valores é igual a $meSilples</li>
        <li>A <strong>média Aritmética Ponderada </strong> com pesos $pe1 e $pe2 é igual a $mePonderada</li>
    </ul>";
    

        ?>
       
    </section>
    
</body>
</html>