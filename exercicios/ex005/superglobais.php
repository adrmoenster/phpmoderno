<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super Globais</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <pre>
            <?php 
                //Permite que crie um cookie novo
                setcookie("dia-da-semana", "SABADO", time() +3600);

                //Inicia uma nova seção
                session_start();
                $_SESSION["teste"] = "Funcionou!";

                echo "<h1>Superglobal GET</h1>";
                var_dump($_GET);

                //Recebe os dados vindo por POST
                echo "<h1>Superglobal POST</h1>";
                var_dump($_POST);

                //Unifica oque vem por GET e também por POST
                echo "<h1>Superglobal REQUEST</h1>";
                var_dump($_REQUEST);

                //Recebe os dados vindos do Cookie
                echo "<h1>Superglobal COOKIE</h1>";
                var_dump($_COOKIE);

                //Recebe dados de uma sessão quando iniciada anteriormente
                echo "<h1>Superglobal SESSION</h1>";
                var_dump($_SESSION);

                //Superglobal de variaveis de ambiente(Funciona online no servidor)
                echo "<h1>Superglobal ENV</h1>";
                var_dump($_ENV);

                echo "<h1>Superglobal SERVER</h1>";
                var_dump($_SERVER);

                //mostra em um array todos os conteudos de todas as superglobais
                echo "<h1>Superglobal GLOBALS</h1>";
                var_dump($GLOBALS);

            ?>
            
        </pre>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>