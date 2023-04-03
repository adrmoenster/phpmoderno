<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio001 - PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Resultado Final</h1>
        <p>
            <?php 
            $numero = $_POST["num"];
            $ant = $numero - 1;
            $post = $numero + 1;

            echo "<p>O numero escolhido foi <strong>$numero</strong> </p>";
            echo "<p>O antecessor é <strong>$ant</strong></p>";
            echo "<p>O posterior é <strong>$post</strong></p>"

            ?>
        </p>
        <!--Duas Opções possível para botão voltar-->

        <!--Opção 1-->
        <button onclick="javascript:history.go(-1)">&#x2B05; Voltar</a></button>

        <!--Opção 2-->
        <button onclick="javascript:window.location.href='index.html'">&#x2B05; Voltar</button>
        
    </main>
    
</body>
</html>