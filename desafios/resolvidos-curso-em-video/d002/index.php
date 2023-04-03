<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio2-resolução</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Trabalhando com números aleatórios</h1>
        <?php 

        $min = 0;
        $max = 100;

        ///rand() = 1951 - Linear Congretial Gerenator
        $num = rand($min, $max);

        //mt_rand() = 1997 - Mersenne twister 4 x mais rapido que o rand() e é mais confiável
        //A partir do PHP 7.1, a função rand() é um simples apontamento para a função mt_rand()
        $num2 = mt_rand($min, $max);

        //random_int() gera números aleatórios criptograficamente seguros mas como consequencia é o mais lento, só use se precisar que seja mais seguro
        $num3 = random_int($min, $max);

        echo "<p>Gerando um número aleatório com função rand() entre $min e $max ... </p>\n ";

        echo "<p>O numero Gerado por rand() foi $num </p>";
        
        echo "|||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||";

        echo "<p>Gerando um número aleatório com função mais indicada atualmente que é mt_rand() entre $min e $max</p>";

        echo "<p>O numero gerado por mt_rand() foi $num2 </p>";

        echo "|||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||";

        echo "<p>Gerando um número aleatório com funcão random_int() entre $min e $max</p>";

        echo "<p>O numero gerado por mt_rand() foi $num3</p>";

        
        ?>
        <button onclick="javascript:document.location.reload()">&#x1F504; Gerar Outro</button>

    </main>
</body>
</html>