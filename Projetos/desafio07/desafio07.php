<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 07</title>
    <link rel="stylesheet" href="desafio07.css">
</head>
<body>
    <main>
        <?php 
        $salario = $_GET["salario"] ?? 0;
        
        ?>
        <h1>Informe seu Salário</h1>
        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
            <label for="salario"> Salário (R$) </label>
            <input type="number" name="salario" id="salario" step="0.01" value="<?= $salario ?>">
            <p>Considerando o salário mínimo de <strong>R$ 1.380,60.</strong></p>
            <input type="submit" value="Calcular">
        </form>
        <section id="resultado">
            <h1>Resultado Final</h1>
            <?php 
            $salario_minimo = 1380.60;
            $qtd_salarios = intdiv($salario , $salario_minimo);
            $frac = $salario - ($qtd_salarios * $salario_minimo);
            

            echo "<p>Quem recebe um salário de R$" .number_format($salario, 2, ",",".") ." ganha <strong> $qtd_salarios salarios mínimos</strong> + R$" .number_format($frac,2, ",",".") .".</p>";
            ?>

        </section>
    </main>
    
</body>
</html>