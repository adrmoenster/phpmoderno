<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>desafio004-Conversor moeda 2.0</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <main>
    <h1>Conversor moeda 2.0</h1>
        <?php 

        //Estas datas são usadas na url vinda do site do banco central para que sempre vá atualizando data atual e 7 dias antes, de forma automática
        $seteDiasAntes = date("m-d-Y", strtotime("-7 days"));
        $diaHoje = date("m-d-Y");



        // Url obtida vindo do link "https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/aplicacao#!/recursos/CotacaoDolarPeriodo#eyJmb3JtdWxhcmlvIjp7IiRmb3JtYXQiOiJqc29uIiwiJHRvcCI6MSwiZGF0YUZpbmFsQ290YWNhbyI6IjA0LTIxLTIwMjMiLCJkYXRhSW5pY2lhbCI6IjA0LTE0LTIwMjMiLCIkb3JkZXJieSI6IgQyBCBkZXNjIn0sInByb3ByaWVkYWRlcyI6WzAsMl19"
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$seteDiasAntes.'\'&@dataFinalCotacao=\''.$diaHoje.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

            //Capturando dados vindos da url por json e decodificando
            //Ao informar abaixo "true" vem um array, se informar "false" retorna um objeto 
            $dados = json_decode(file_get_contents($url), true);

            //Pegando os dados vindos da API vindas por url no array nos campos informados 
            $cotacao = $dados["value"][0]["cotacaoCompra"];

            //Valor informado no formulario pelo usuário
            $valor = $_POST['din'];

            //Convertendo o valor informado em reais para valor em dolar usando valor atual da cotação
            $result = $valor / $cotacao;

             //Formatação de moedas com internacionalização!
            //Biblioteca intl (Internallization PHP)
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            echo "<p>O valor informado de <strong>".numfmt_format_currency ($padrao, $valor, "BRL"). "</strong> equivale a <strong>".numfmt_format_currency ($padrao, $result, "USD")."</strong></p>";

            echo "<p>Valor usado para converter foi <strong>".numfmt_format_currency($padrao, $cotacao, "USD")."</strong> </p>";

        ?>

         <!-- Botão "Voltar" funcionando através do Javascript -->
        <button onclick="javascript:history.go(-1);">Voltar</button>
    </main>

</body>
</html>