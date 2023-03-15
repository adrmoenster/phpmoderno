<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio001</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <section>
    <header>
        <h1>Resultado Final</h1><br>
        <?php 
        $rec = $_POST["num"];
        print("<p>O numero escolhido foi <strong>".$rec."</strong></p>");
        print("<p>O seu antecessor é ".$rec -1 ."</p>");
        print("<p>O seu sucessor é ".$rec +1 . "</p>"); 
        ?>
    </header>
    <div id="voltar"><a href="javascript:history.go(-1)">Voltar</a></div>
</section>
</body>
</html>