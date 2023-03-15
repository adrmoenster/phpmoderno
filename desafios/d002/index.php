<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio002 - PHP</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(180deg, #372991, #15142b);
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
            background-attachment: fixed;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        section{
            background-color: white;
            padding: 10px;
            border-radius: 10px;
        }
        section > div#atualiza {
            text-align: center;
        }
        section > div#atualiza input{
            color: white;
            background-color: #15142b;
            
        }
    </style>
</head>
<body>
    <section>
        <h1>Trabalhando com números aleatórios</h1>
        <p>Gerando um número aleatório entre 0 e 100...</p>
        <?php 
            $ran = rand(1,100);
            print("<p>O valor gerado foi <strong>" . $ran ."</strong></p>");
        ?>
        
        <div id="atualiza"><input type="button" value="Gerar outro" onClick="window.location.reload()"></div>
    </section>
</body>
</html>