<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversão R$ para $</title>

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
            <h1>Conversor de Moedas v1.0</h1>
        </header>
        <article>
            <?php 
            $vlCotac = 5.24;
            $valor = $_POST["valor"];

            $result = $valor / $vlCotac;
            
            echo "<p>Seus R$ ".$valor. " equivalem a $ ".$result. "</p>";
            
            echo "<p><strong>* Cotação fixa de R$".$vlCotac."</strong> informada diretamente no código</p>"
            ?>
            <div id="voltar"><a href="javascript:history.go(-1)">Voltar</a></div>
        </article>
    </section>    
</body>
</html>