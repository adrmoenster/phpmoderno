<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora do Tempo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $seginf = $_GET['seg'] ?? '0';
        
    ?>
    <main>
       
        <h1>Calculadora do Tempo</h1>
        <form action="<?=$_SERVER['PHP_SELF'];?>" method="get">
            <label for="seg">Qual é o total de segundos?</label>
            <input type="number" name="seg" id="seg" min="0" step="1" required value="<?=$seginf?>">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <?php 
        $sobra = $seginf;

        //Total de semanas 
        $semana = (int)($sobra / 604800);
        $sobra = $sobra % 604800;

        //Total de Dias
        $dia = (int)($sobra / 86400);
        $sobra = $sobra % 86400;

        //Total de Horas
        $hora = (int)($sobra / 3600);
        $sobra = $sobra % 3600;

        //Total de Minutos
        $minuto = (int)($sobra / 60);
        $sobra = $sobra % 60;

        //Total de Segundos
        $segundo = $sobra;
    
    ?>
    <section>
        <h2>Totalizando Tudo</h2>
        <p>Analisando o valor que você digitou, <strong><?= number_format($seginf, 2, ",", ".") ?> segundos</strong> equivalem a um total de:</p>
        <ul>
            <li><?=$semana?> semanas</li>
            <li><?=$dia?> dias</li>
            <li><?=$hora?> horas</li>
            <li><?=$minuto?> minutos</li>
            <li><?=$segundo?> segundos</li>
        </ul>
    </section>
</body>
</html>