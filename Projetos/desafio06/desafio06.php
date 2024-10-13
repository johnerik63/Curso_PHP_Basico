<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 06</title>
    <link rel="stylesheet" href="desafio06.css">
</head>
<body>
    <?php
        //captura dos dados. 
        $dividendo = $_GET["dividendo"] ?? 0;
        $divisor = $_GET["divisor"] ?? 1;
    ?>
    <main>
        <header>
            <h1>Anatomia de uma Divisão.</h1>
        </header>
        <form action="<?php $_SERVER["PHP_SELF"] ?>" method="get">
            <label for="dividendo">Dividendo</label>
            <input type="number" name="dividendo" id="dividendo" value="<?php $dividendo ?>">
            <label for="divisor">Divisor</label>
            <input type="number" name="divisor" id="divisor" value="<?php $divisor ?>">
            <input type="submit" value="Analisar">
        </form>
    </main>
    <section id="resultado">
        <h1>
            Estrutura da Divisão
        </h1>
        <?php 
            $divisão = $dividendo / $divisor;
            $resto_divisão = $dividendo % $divisor;
            $inteiro_divisão = intdiv($dividendo, $divisor);
        
        ?>
        <table class="divisao">
            <tr>
                <td><?=$dividendo ?></td>
                <td><?=$divisor ?></td>
            </tr>
            <tr>
                <td><?=$resto_divisão ?></td>
                <td><?=$inteiro_divisão ?></td>
            </tr>
        </table>
    </section>
    
</body>
</html>