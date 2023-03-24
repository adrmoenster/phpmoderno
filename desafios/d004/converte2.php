<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio04</title>
    <style>
        * {
            margin: 0px;
            padding: 0px;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            padding: 10px;
            background-image: linear-gradient(180deg, #372991, #15142b);
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
            background-attachment: fixed;
            text-align: center;
            display: flex;
            flex-direction: column;
            flex-wrap: nowrap;
            justify-content: center;
            align-items: center;

        }
        section{
            width: 50vw;
            height: 20vh;
            background-color: white;
            border-radius: 10px;
        }
        section, header {
            font-size: 1.2em;
        }

        section > header h1 {
            text-shadow: 2px 2px 6px rgba(0, 0, 0, 0.788);
            padding: 10px;
        }
        section, article p{
            padding-top: 10px;
            font-size: 1em;

        }
        
        article > div#voltar{
            margin: 20px;
            margin-top: 20px;
            padding: 10px;
            background-color: blue;
            border-radius: 10px;
        }

        article > div#voltar:hover{
            background-color: #45a049;
        }

        article > div#voltar a{
            padding: 5px;
            color: white;
            text-decoration: none;
            
        }
        
    </style>

</head>
<body>
    <section>
        <header>
            <h1>Conversor de Moedas v2.0</h1>
        </header>
        <article>
            <!--ABAIXO VER COMO USAR API E FAZER USO DELA NO CÓDIGO-->
            <?php 
                $vlrCotac = "https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial='03-20-2023'&@dataFinalCotacao='03-24-2023'&$top=100&$format=text/html&$select=cotacaoCompra,cotacaoVenda,dataHoraCotacao";

                echo $vlrCotac;


            ?>
        </article>
    </section>
</body>
</html>