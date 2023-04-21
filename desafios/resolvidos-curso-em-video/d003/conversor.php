<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Reais</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Conversor de Moeda!</h1>
        <?php 
            //Cotação copiada do google no dia 14/04/2023
            $cotacao = 4.92;

            //Quanto $ você tem?
            $vlr = $_POST['din'];

            //Equivalência em dólar
            $dolar = $vlr / $cotacao;
            
            //Mostrar o resultado forma tradicional
            //echo "<p>O valor R\$" . number_format($vlr, 2, ",", "."). " representa  \$" .number_format($dolar, 2, ".", ",")." Dolares </p>";


            
            //Formatação de moedas com internacionalização!
            //Biblioteca intl (Internallization PHP)

            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            echo "<p>O valor <strong>" . numfmt_format_currency($padrao, $vlr, "BRL"). " </strong>representa <strong>" . numfmt_format_currency($padrao, $dolar, "USD"). " </strong>Dolares </p>";

        ?>
        <!-- Botão "Voltar" funcionando através do Javascript -->
        <button onclick="javascript:history.go(-1);">Voltar</button>
    </main>
</body>
</html>