<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>Exemplo de PHP</h1>
    <?php 
        date_default_timezone_set("America/Sao_Paulo");/*Mudando a Time zone para formato de horário de Brasilia GMT-3*/
        echo "Hoje é dia " .date("d/M/Y");
        echo " E a hora atual é " .date("G:i:s T");/* G é Hora, i é minuto, s é segundos e o T é mostrando a Timezone*/
    ?>
</body>
</html>