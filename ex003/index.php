<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <?php 
        /*$num = 0x1A;/*Aqui numero inteiro em exadecimal
        echo "O valor da variável é $num";*/

        $valor1 = 300;
        var_dump($valor1);// var_dump() mostra o valor da variável e o tipo primitivo

        $valor2 = 4.5;
        var_dump($valor2);

        $valor3 = "Adriano";
        var_dump($valor3);

        $valor4 = 3e2;//Aqui é igual a 3x10 elevado a 2 que é float de valor 300, por usar potencia ele concidera tipo float
        var_dump($valor4);

        //0x = hexadecimal 0b = binário 0 = octal
        $valor5 = 0x1A;
        var_dump($valor5);//Aqui 0x é um numero em exadecimal, bases numéricas.

        $valor6 = true;//Aqui boolean no caso true, pode ser true ou false, mas se usar echo ou print ele fica como vasio
        var_dump($valor6);

        $valor7 = (int)"950"; // aqui é uma forma de forçar a receber como sendo inteiro
        var_dump($valor7);

    ?>
</body>
</html>