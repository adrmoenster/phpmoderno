<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analisador de Numero Real</title>
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
            text-align: left;
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
        section > article p{
            padding-top: 5px;
            padding-left: 20px;
            font-size: .7em;

        }

        article > div#voltar{
            margin: 20px;
            margin-top: 20px;
            padding: 10px;
            background-color: blue;
            border-radius: 10px;
            text-align: center;
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
            <h1>Analisador de Número Real</h1>
        </header>
        <article>
           <?php 
           $valor = $_POST["ireal"];
           $fraci = (int) substr(strpbrk($valor, '.,'), 1);
            echo "<p>Analizando o número informado pelo usuário <strong>$valor</strong></p>";
            echo "<p>. A parte inteira do número é <strong>" .intval($valor). "</strong></p>";
            echo "<p>. A parte fracionária do número é <strong> ". $fraci ." </strong></p>";
           
           ?>
           <div id="voltar"><a href="javascript:history.go(-1)">Voltar</a></div>
        </article>

        
    </section>
    
</body>
</html>