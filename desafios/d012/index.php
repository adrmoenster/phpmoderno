<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Tempo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $totalInf = $_GET['totseg'] ?? 0; 
        
        $umaSem = $totalInf / 604800;

        $umDia = $totalInf - (int) $umaSem * 604800;
        $dia = $umDia / 86400;

        $umaHor = (int) $umDia - (int) $dia * 86400;
        $hora = $umaHor / 3600;

        $umMin = (int) $umaHor - (int) $hora * 3600;
        $minuto = $umMin / 60;

        $segund = (int) $umMin - (int) $minuto * 60;

        
        
        //60 = 1minuto
        //3600 = 1hora que são 60minutos
        //86400 = um dia
        //604800 = uma semana

        
    ?>
    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="<?=$_SERVER['PHP_SELF'];?>" method="get">
            <label for="totseg">Qual é o total de segundos?</label>
            <input type="number" name="totseg" id="totseg" value="<?= $totalInf?>">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Totalizando tudo</h2>
        <?php 
            echo "<p>Analizando o valor que você digitou,<strong> $totalInf segundos</strong> equivalem a um total de:</p>
            <ul>
                <li>".(int) $umaSem." semana(s)</li>
                <li>".(int) $dia." dia(s)</li>
                <li>".(int) $hora." hora(s) </li>
                <li>".(int) $minuto." minuto(s)</li>
                <li>".(int) $segund." segundo(s)</li>
                
                
            </ul>";
        
        ?>
        
    </section>
</body>
</html>