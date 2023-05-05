<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 6 PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $dividendo = $_GET['d1'] ?? 0;
        $divisor = $_GET['d2'] ?? 1;//observar que nem sempre é ?? 0, isso vai depender da nescessidade do calculo
    
    ?>
    <main>
        <h1>Anatomia de uma divisão</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="d1">Dividendo</label>
            <input type="number" name="d1" id="d1" min="0" value="<?=$dividendo?>">
            <label for="d2">Divisor</label>
            <input type="number" name="d2" id="d2" min="1" value="<?=$divisor?>">
            <input type="submit" value="Analisar">
        </form>
    </main>
    <section>
        <h2>Estrutura da Divisão</h2>
        <?php 
        //Cálculos

        //se apenas fazer divisao usando "/" faz divisão real, e neste caso deve ser divisão inteira
        //$quociente = (int) ($dividendo / $divisor); para divisão inteira pode se fazer assim ou usa a função a seguir
        $quociente = intdiv($dividendo, $divisor);//função intdiv() é para fazer divisão para retorno do valor inteiro
        $resto = $dividendo % $divisor;
        
        
       /* assim ja mostraria as informações solicitadas no exercicio 
       echo    "<ul>
                <li>Dividendo: $dividendo</li>
                <li>Divisor: $divisor</li>
                <li>Quociente: $quociente</li>
                <li>Resto: $resto</li>
            </ul>";*/
        ?>
       <!-- 
        PARA MOSTRAR EM TABELA BASTARIA FAZER ASSIM, mas foi usado uma classe css chamada divisão para dar aparencia desejada
       <table>
            <tr>
                <td>x</td>
                <td>y</td>
            </tr>
            <tr>
                <td>w</td>
                <td>z</td>
            </tr>
       </table> 
    -->
    <?php 
    echo "
        Feito com echo
    <table class=\"divisao\">
            <tr>
                <td>$dividendo</td>
                <td>$divisor</td>
            </tr>
            <tr>
                <td>$resto</td>
                <td>$quociente</td>
            </tr>
       </table>"; 
       ?>
        <!-- FEITO USANDO SHORT tags -->
        <p>Feito usando SHORT TAGS</p>
        <table class="divisao">
            <tr>
                <td><?=$dividendo?></td>
                <td><?=$divisor?></td>
            </tr>
            <tr>
                <td><?=$resto?></td>
                <td><?=$quociente?></td>
            </tr>
       </table>
    </section>
</body>
</html>