<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php /*
            var_dump($_GET);//$_GET variável GLOBAL que informa os dados recebidos quando formulário envia por meio do metodo "get"
            var_dump($_POST);//$_POST variável GLOBAL que informa os dados recebidos quando formulário envia por meio do metodo "post"
            var_dump($_REQUEST);//$_REQUEST variável GLOBAL que informa os dados recebidos quando formulário envia por meio do metodo "get" ou pelo metodo "post"(ambos)
        */

            $nom = $_GET["nome"] ?? "Sem Nome";//Variável nom está recebendo através da variável global $_GET o conteudo vindo do formulário pelo input name "nome", OS "??" se chama operador null coalecent que é oque irá mostrar se entrar direto pelo link http://localhost:90/phpmoderno/ex004/cad.php sem passar informações

            $sobnom = $_GET["sobrenome"] ?? "Sem Sobrenome";//Variável sobnom está recebendo através da variável global $_GET o conteudo vindo do formulário pelo input name "sobrenome"

            echo "<p>Olá ".$nom ." ". $sobnom.", seja bem vindo!";//mostrando os valores recebidos por cada variável fazendo uma 

            ?>
            
    </main>
    <div id="voltar"><a href="javascript:history.go(-1)">Voltar</a></div>
</body>
</html>