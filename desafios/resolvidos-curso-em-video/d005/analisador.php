<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analisador</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Analisador de Número Real</h1>
        <?php 

            //Capturando valor vindo do formulário, e caso não venha considera zero
            $num = $_POST["numReal"] ?? 0;

            echo "<p>Analisando o número <strong>".number_format($num, 3, ",", ".") ."</strong> informado pelo usuário</p>";

            //Recebe parte inteira de um número
            $int = (int) $num;

            //Recebe parte fracionada de um número
            $fra = $num -$int;
            echo "<ul><li>A parte inteira do número é <strong>".number_format($int, 0, ",", ".")."</strong></li>
            <li>A parte fracionada do número é <strong>".number_format($fra, 3, ",", ".")."</strong></li></ul> ";
        
        ?>
        <button onclick="javascript:history.go(-1);">Voltar</button>
    </main>
</body>
</html>